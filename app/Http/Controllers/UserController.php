<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
    	return Users::all();
    }

    public function getUser()
    {
    	$user = Users::where('user_id',6)->first();
    	return $user;
    }

    public function store()
    {
    	for ($i=1; $i < 30; $i++) { 
    		Users::create([
	    		'user_id' => $i,
	    		'hive_id' => $this->genUserid(),
	    		'username' => rand(),
	    		'password' => Hash::make($i),
	    		'profile_pic' => 'shajib.png',

	    	]);
    	}
    	return 'User inserted.';
    }
    public function genUserid() {
		$charset = '023456789ABCDEFGHIJKLMNOPQRSTUWYZ';
		$userid = substr(str_shuffle(str_repeat($charset, 8)), 0, 8);
		return $userid;
		
	}

}
