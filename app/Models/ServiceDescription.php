<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDescription extends Model
{
    protected $table = 'service_descriptions';
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
