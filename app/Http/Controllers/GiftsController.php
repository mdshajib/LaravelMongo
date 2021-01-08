<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gifts;

class GiftsController extends Controller
{
    public function index(){
    	$gifts = Gifts::all();
    	return $gifts;
    }
    public function getGift(Request $request)
    {
    	$gift = Gifts::where('gift_id',$request->input('gift_id'))->first();
    	return $gift;
    }
    public function storeGift(Request $request)
    {
    	for ($i=1; $i < 20; $i++) { 
    		Gifts::create([
    			'gift_id' => $i,
    			'gift_name' => 'gift name-'.$i,
    			'gift_image' => 'gift-'.$i.'.svga',
    			'gift_price' => $i.'000',
    			'gift_thumb' => 'gift_thumb-'.$i.'.png',
    			'status' => 1,
    			'type' => 2,
    		]);
    	}
    	
    	return 'gift added.';
    }
    public function updateGift(Request $request)
    {
    	$gifts = Gifts::where('id',2)->update(['gift_price' => 34000]);
    	if($gifts)
    	{
    		return 'gift updated.';
    	}
    	else{
    		return 'gift not updated.';
    	}
    }
    public function deleteGift(Request $request)
    {
    	$gifts = Gifts::where('id',3)->delete();
    	if($gifts){
    		return 'gift deleted.';
    	}else{
    	return 'not deleted.';
    	}
    }
}
