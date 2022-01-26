<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectdetail;
use App\Models\Blog;
use App\Models\VideoGellary;
use Carbon\Carbon;
use Share;

class ProjectController extends Controller
{
    public function projectDetailsShow(){
    	return view('frontend.request-for-quote');
    }

    public function projectDetailsStore(Request $request){
    	Projectdetail::insert([
    		'full_name' => $request->full_name,
    		'email' => $request->email,
    		'phone' => $request->phone,
    		'company_name' => $request->company_name,
    		'website' => $request->website,
    		'address' => $request->address,
    		'project_budget' => $request->project_budget,
    		'date_to_start' => $request->date_to_start,
    		'project_type' => $request->project_type,
    		'service_type' => $request->service_type,
    		'country' => $request->country,
    		'no_of_pages' => $request->no_of_pages,
    		'reference_site' => $request->reference_site,
    		'hosting' => $request->hosting,
    		'domain' => $request->domain,
    		'content' => $request->content,
    		'logo' => $request->logo,
    		'project_details' => $request->project_details,
    		'created_at' => Carbon::now(),
    	]);


    	return redirect()->back()->with('success','Your project details have been submitted to us successfully. We will get back to you soon.');
    }

    public function projectDomainHosting(){
		$blogs=Blog::where("status","1")->paginate(12);

        return view('frontend.blog',compact('blogs'));
    }
	public function portfolio(){
        return view('frontend.portfolio');
    }
    public function video(){
        $videos=VideoGellary::all();
        return view('frontend.videogellary.video',compact('videos'));
    }

}
