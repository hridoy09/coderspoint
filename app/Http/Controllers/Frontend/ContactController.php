<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;

class ContactController extends Controller
{
    public function contact(){
    	$sitesetting = Sitesetting::find(1);
    	return view('frontend.contact-us',compact('sitesetting'));
    }
}  
