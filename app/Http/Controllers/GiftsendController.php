<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Giftsend;

class GiftsendController extends Controller
{
    public function giftSend()
    {
    	$l = 20;
    	for ($i=1; $i < $l; $i++) { 
    		Giftsend::create([
    			'gift_id' => 2,
    			'sender_id' => $i,
    			'receiver_id' => $l-1,
    			'gift_price' => 2000,
    			'sent_count' => 2,
    		]);
    	}
    	return 'Gift send success!!!';
    }

    public function giftSendDetails()
    {
    	$send = Giftsend::with('user')->select('sender_id','receiver_id','gift_price','sent_count')->get();
    	return $send;
    }
}
