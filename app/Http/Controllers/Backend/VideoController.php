<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\VideoGellary;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=VideoGellary::all();
        return view('backend.videogellary.addvideo',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function videoadd(Request $request)
    {
        $validateData = $request->validate([
    		'vedio_link' => 'required',

    	],
    	[
    		'vedio_link.required' => 'video link cannot be Empty!',
    	]);

    	VideoGellary::insert([
    		'vedio_link' => $request->vedio_link,
    	]);

    	$notification = array(
            'message' => 'Video Inserted Successfully',
            'alert-type' => 'success'
        );
    	return redirect()->route('admin.video.index')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletevideo($id){

		VideoGellary::findOrFail($id)->delete();

		$notification = array(
            'message' => 'portfolio Logo Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
}
}
