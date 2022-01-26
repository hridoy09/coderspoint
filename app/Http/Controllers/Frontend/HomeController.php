<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteBanner;
use App\Models\CustomerContact;
use App\Models\Client;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){
    	$banners = SiteBanner::where('status',1)->get();
    	$clients = Client::where('status',1)->get();

    	return view('frontend.index',compact('banners','clients'));
    }

    public function customerMessageStore(Request $request){
    	CustomerContact::insert([
      	'full_name' =>  $request->full_name,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'address' => $request->address,
        'message' => $request->message,
      	'created_at' => Carbon::now(),
  	 ]);
    	return redirect()->back()->with('success','Message sent Successfully.');
    }
}
