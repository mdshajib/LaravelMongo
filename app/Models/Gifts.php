<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Gifts extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'gifts';
    protected $fillable = [
    	'gift_id','gift_name','gift_image','gift_price','gift_thumb','status','type',
    ];
}
