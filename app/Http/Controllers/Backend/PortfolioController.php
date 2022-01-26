<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;
class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Add()
    {
        $categories=PortfolioCategory::all();
        $portfoliocategories=Portfolio::with('category')->get();
        return view('backend.portfolio.addportfolio',compact('portfoliocategories','categories'));
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


    public function storePortfolio(Request $request){
    	// $validateData = $request->validate([
    	// 	'portfolio_image' => 'required|image|mimes:jpg,png,jpeg',
        //     'title' => 'required',
        //     'category_id' => 'required',
        //     'web_link' => 'required',

    	// ],
        // [
    	// 	'portfolio_image.mimes' => 'Post Image must be of jpg,png,jpeg format',
        //     'title.required' => 'Provide a good Portfolio Title for SEO',
    	// ] );

    	$image = $request->file('portfolio_image');
        if($request->has('portfolio_image')){
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1017,400)->save('backend/upload/portfolio/'.$name_gen);
            $save_url = 'backend/upload/portfolio/'.$name_gen;
        } else{
            $save_url = "";
        }

    	Portfolio::insert([
      	'portfolio_image' => $save_url,
        'title' => $request->title,
        'category_id' => $request->category_id,
        'web_link' => $request->web_link,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'Portfolio Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('admin.portfolio.add')->with($notification);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function webshow($id)
    {
        return Portfolio::where('category_id',$id)->get();
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

    public function deletePortfolio($id){

		Portfolio::findOrFail($id)->delete();

		$notification = array(
            'message' => 'portfolio Logo Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
}
}
