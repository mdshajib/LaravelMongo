<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Users extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'users';
    protected $fillable = [
    	'user_id','hive_id','username','password','profile_pic',
    ];
}
