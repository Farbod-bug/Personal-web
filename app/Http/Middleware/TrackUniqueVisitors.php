<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Client;
use App\Models\GuestVisit;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackUniqueVisitors
{
    public function handle(Request $request, Closure $next): Response
    {
        $ip = $request->ip();
        $existingVisit = GuestVisit::where('ip', $ip)->first();

        if (!$existingVisit) {
            // دریافت اطلاعات ISP
            $isp = $this->getIspFromApi($ip);

            // ذخیره بازدید جدید
            GuestVisit::create([
                'ip' => $ip,
                'isp' => $isp,
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }

    private function getIspFromApi($ip)
    {
        $client = new Client();

        try {
            $response = $client->get('http://ip-api.com/json/' . $ip);
            $data = json_decode($response->getBody(), true);

            return $data['isp'] ?? 'Unknown';

        } catch (\Exception $e) {
            return 'Unknown';
        }
    }
}
