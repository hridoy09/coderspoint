<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siteseo;

class AdminSiteSeoController extends Controller
{
    public function setting(){
    	$seo = Siteseo::findOrFail('1');
    	return view('backend.seo.website_seo',compact('seo'));
    }

    public function updatesetting(Request $request){
    		Siteseo::findOrFail(1)->update([
    		'meta_title' => $request->meta_title,
      		'meta_author' => $request->meta_author,
      		'meta_keyword' => $request->meta_keyword,
      		'meta_description' => $request->meta_description,
    	]);

    	$notification = array(
            'message' => 'Site Settings Updated Successfully',
            'alert-type' => 'info',
        );
      return redirect()->route('admin.dashboard')->with($notification);
    }
}
