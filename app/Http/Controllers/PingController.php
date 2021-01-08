<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PingData;

class PingController extends Controller
{
	public function index(Request $request)
    {
    	$ping = PingData::all();
    	return $ping;
    }
    public function getPing(Request $request)
    {
    	$ping = PingData::where('user_id',6)->first();
    	return $ping;
    }

    public function postPing(Request $request)
    {
    	for ($i=8; $i < 20; $i++) { 
    		PingData::create([
	    		'user_id' => $i,
	    		'host_last_updated_at' => '2020-01-'.$i.' 10:'.$i.':33',
	    	]);
    	}
    	return 'success';
    }

    public function updatePing(Request $request)
    {
    	$ping = PingData::where('user_id',1)->update(['host_last_updated_at' => '2021-01-09 10:45:45']);
    	return $ping;
    }

    public function deletePing(Request $request)
    {
    	$ping = PingData::where('user_id',7)->delete();
    	if($ping){
    		return 'deleted data';
    	}else{

    	return 'data not deleted.';
    	}
    }
}
