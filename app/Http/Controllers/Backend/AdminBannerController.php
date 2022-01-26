<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;
use App\Models\SiteBanner;

class AdminBannerController extends Controller
{
    public function addBanner(){
    	return view('backend.banner.add_banner');
    }

    public function storeBanner(Request $request){
    	$validateData = $request->validate([
    		'banner_image' => 'required|image|mimes:jpg,png,jpeg',
            'banner_title' => 'required',
    	],
    	[
    		'banner_image.mimes' => 'Banner Image must be of jpg,png,jpeg format',
            'banner_title.required' => 'Provide a good Banner Title for SEO',
    	]);

    	$image = $request->file('banner_image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1017,400)->save('backend/upload/banner/'.$name_gen);
    	$save_url = 'backend/upload/banner/'.$name_gen;

    	SiteBanner::insert([
      	'banner_image' => $save_url,
        'banner_title' => $request->banner_title,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'Banner Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('admin.banner.list')->with($notification);
    }

    public function Bannerlist(){
    	$banners = SiteBanner::all();
    	return view('backend.banner.banner_list',compact('banners'));
    }

   public function changeStatus($id){
    	$status = SiteBanner::findOrFail($id)->status;
    	if($status == 1){
    		SiteBanner::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'Banner Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		SiteBanner::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'Banner Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deleteBanner($id){
    	$banner = SiteBanner::findOrFail($id);
		unlink($banner->banner_image);
		SiteBanner::findOrFail($id)->delete();

		
		$notification = array(
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }
}
