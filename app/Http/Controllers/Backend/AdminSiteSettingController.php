<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use Image;

class AdminSiteSettingController extends Controller
{
    public function index(){
    	$site = Sitesetting::findOrFail(1);
    	return view('backend.site.website_setting',compact('site'));
    }

    public function update(Request $request){
    	$validateData = $request->validate([
    		'logo' => 'image|mimes:jpg,png,jpeg',
    		'site_titile' => 'required',
    		'site_description' => 'required',
    		'email' => 'required',
    		'address' => 'required',
    		'city' => 'required',
    		'telephone' => 'required',
    	],
    	[
    		'site_titile.required' => 'Site Title cannot be Empty',
    		'site_description.required' => 'Site Description cannot be Empty',
    		'telephone.required' => 'Please provide a valid telephonr Number',
    		'logo.mimes' => 'Logo Image must be of jpg,png,jpeg format',
    		
    	]);
    	if($request->file('logo')){
	    	// unlink(Sitesetting::findOrFail(1)->logo);
	    	$image = $request->file('logo');
	    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
	    	Image::make($image)->resize(200,100)->save('backend/upload/logo/'.$name_gen);
	    	$save_url = 'backend/upload/logo/'.$name_gen;

    	Sitesetting::findOrFail(1)->update([
    		'logo' => $save_url,
    		'site_titile' => $request->site_titile,
      		'site_description' => $request->site_description,
      		'email' => $request->email,
      		'address' => $request->address,
      		'city' => $request->city,
      		'telephone' => $request->telephone,
      		'facebook_url' => $request->facebook_url,
      		'youtube_url' => $request->youtube_url,
      		'twitter_url' => $request->twitter_url,
          'linkedin_url' => $request->linkedin_url,
    	]);

    	$notification = array(
            'message' => 'Site Settings Updated Successfully',
            'alert-type' => 'info',
        );
      	return redirect()->back()->with($notification);
}else{
		Sitesetting::findOrFail(1)->update([
    		'site_titile' => $request->site_titile,
      		'site_description' => $request->site_description,
      		'email' => $request->email,
      		'address' => $request->address,
      		'city' => $request->city,
      		'telephone' => $request->telephone,
      		'facebook_url' => $request->facebook_url,
      		'youtube_url' => $request->youtube_url,
      		'twitter_url' => $request->twitter_url,
          'linkedin_url' => $request->linkedin_url,
    	]);
}
      $notification = array(
            'message' => 'Site Settings Updated Successfully',
            'alert-type' => 'info',
        );
      return redirect()->back()->with($notification);
    }
}
