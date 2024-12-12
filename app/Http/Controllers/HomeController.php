<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MyInfo;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\SubTitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $myinfo = MyInfo::firstOrFail();

        return view('home.index', compact('myinfo'));
    }

    public function about()
    {
        $myinfo = MyInfo::firstOrFail();
        $skills = Skill::all();
        $subTitles = SubTitle::all();

        return view('about.index', compact(['myinfo', 'skills', 'subTitles']));
    }

    public function services()
    {
        $myinfo = MyInfo::firstOrFail();
        $services = Service::all();

        return view('services.index', compact('myinfo', 'services'));
    }

    public function portfolio()
    {
        $myinfo = MyInfo::firstOrFail();
        $portfolios = Portfolio::all();

        return view('portfolio.index', compact('myinfo', 'portfolios'));
    }

    public function projectDetails(Portfolio $Portfolio)
    {
        $myinfo = MyInfo::firstOrFail();

        return view('portfolio.single', compact('myinfo', 'Portfolio'));
    }

    public function contactUs()
    {
        $myinfo = MyInfo::firstOrFail();

        return view('contacts.index', compact('myinfo'));
    }

    public function contactUsStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'cellphone' => ['required', 'regex:/^09[0|1|2|3][0-9]{8}$/'],
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => $request->name,
            'title' => $request->title,
            'cellphone' => $request->cellphone,
            'email' => $request->email,
            'body' => $request->message,
        ]);

        return redirect()->route('contact.index')->with('success', 'پیام شما با موفقیت ارسال شد');
    }
}
