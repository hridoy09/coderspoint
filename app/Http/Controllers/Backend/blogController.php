<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;
use App\Models\Blog;
use Share;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlog()
    {
        return view('backend.blog.postblog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Bloglist()
    {
        $blogs=Blog::all();

        return view('backend.blog.bloglist', compact('blogs'));
    }



    public function storeBlog(Request $request){
    	$validateData = $request->validate([
    		'future_img' => 'required|image|mimes:jpg,png,jpeg',
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',

    	],
        [
    		'future_img.mimes' => 'Post Image must be of jpg,png,jpeg format',
            'title.required' => 'Provide a good blog Title for SEO',
    	] );

    	$image = $request->file('future_img');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1017,400)->save('backend/upload/post_image/'.$name_gen);
    	$save_url = 'backend/upload/post_image/'.$name_gen;

    	Blog::insert([
      	'future_img' => $save_url,
        'title' => $request->title,
        'meta_tag' => $request->tags,
        'description' => $request->description,

      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'Blog Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('admin.blog.add')->with($notification);
    }


    public function changeStatus($id){
    	$status = Blog::findOrFail($id)->status;
    	if($status == 1){
    		Blog::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'Blog Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Blog::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'Blog Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }




    public function deleteBlog($id){
    	$blog = Blog::findOrFail($id);
		unlink($blog->future_img);
		Blog::findOrFail($id)->delete();


		$notification = array(
            'message' => 'Blog Logo Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }














    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs=Blog::find($id);
        return view('frontend.singleblog',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editBlog($id)
    {

        $blog=Blog::find($id);
        return view('backend.blog.editblog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request){
        $blogs = Blog::find($id);
          $image = $request->file('future_img');
          $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
          Image::make($image)->resize(1017,400)->save('backend/upload/post_image/'.$name_gen);
          $save_url = 'backend/upload/post_image/'.$name_gen;
          $blogs->title = $request->title;

          $blogs->future_img = $save_url;
          $blogs->meta_tag = $request->tags;
          $blogs->description = $request->description;
          $blogs->save();
            return redirect('admin/blog/all-blog');
      }






}
