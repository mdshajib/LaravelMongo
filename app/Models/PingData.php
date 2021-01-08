<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class PingData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'ping_data';
    protected $fillable = [
    	'host_last_updated_at','user_id'
    ];
    
}
