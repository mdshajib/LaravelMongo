<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Giftsend extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'gift_send';
    protected $fillable = [
    	'gift_id','sender_id','receiver_id','gift_price','sent_count',
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\Users','sender_id','user_id')->select(['user_id','username','hive_id']);
    }
}
