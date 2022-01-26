<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
use App\Models\Product;
use App\Models\ProductMultiImage;
use Image;
Use Carbon\Carbon;

class AdminProductController extends Controller
{
    public function showProduct(){
    	$products = Product::latest()->get();
    	return view('backend.product.product_show',compact('products'));
    }

    public function insertProduct(){
    	$categories = Category::latest()->get();
		return view('backend.product.product_add',compact('categories'));
    }
    public function storeProduct(Request $request){
    	$validateData = $request->validate([
    		'category_id' => 'required',
    		'subcategory_id' => 'required',
    		'subsubcategory_id' => 'required',
    		'product_name' => 'required',
    		'buying_price' => 'required',
    		'selling_price' => 'required',
    		'short_description' => 'required',
    		'long_description' => 'required',
    		'product_thumbnail' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
    		'multi_img.*' => 'required|mimes:jpg,png,jpeg,gif,svg',

    	],
    	[
    		'category_id.required' => 'Please select a Category Name',
    		'subcategory_id.required' => 'Please select a subcategory Name',
    		'subsubcategory_id.required' => 'Please select a subsubcategory name',
    		'buying_price.required' => 'Buying Price Cannot be Empty',
    		'selling_price.required' => 'Selling Price cannot be Empty',
    		'product_name.required' => 'Product name cannot be Empty',
    		'short_description.required' => 'Please give a short description about your Product',
    		'long_description.required' => 'Please give a long description about your Product',
    		'product_thumbnail.required' => 'Product Thumnail Image is required',
    		'product_thumbnail.mimes' => 'Product Thumnail Image must be of jpg,png,jpeg,gif,svg format',
    		'multi_img.required' => 'Product Multi Images are required',
    	]);

    	$image = $request->file('product_thumbnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('backend/upload/product/product_thumbnail/'.$name_gen);
    	$save_url = 'backend/upload/product/product_thumbnail/'.$name_gen;

        $product_id = Product::insertGetId([
      	'category_id' => $request->category_id,
      	'subcategory_id' => $request->subcategory_id,
      	'subsubcategory_id' => $request->subsubcategory_id,
      	'product_name' => $request->product_name,
      	'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),
      	'buying_price' => $request->buying_price,
      	'selling_price' => $request->selling_price,
      	'discount_price' => $request->discount_price,
      	'short_description' => $request->short_description,
      	'long_description' => $request->long_description,

      	'product_thumbnail' => $save_url,
      	'created_at' => Carbon::now(),
   ]);

    ////////// Multiple Image Upload ///////////

      $images = $request->file('multi_img');
      foreach ($images as $img) {
      	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(917,1000)->save('backend/upload/product/product_multiimage/'.$make_name);
    	$uploadPath = 'backend/upload/product/product_multiimage/'.$make_name;

    	ProductMultiImage::insert([
    		'product_id' => $product_id,
    		'photo_name' => $uploadPath,
    		'created_at' => Carbon::now(), 

    	]);
    }
      $notification = array(
            'message' => 'Product Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('admin.product.show')->with($notification);
    }

    public function changeStatus($id){
    	$status = Product::findOrFail($id)->status;
    	if($status == 1){
    		Product::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'Category Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Product::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'Product Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function viewProduct($id){
    	$product = Product::findOrFail($id);
    	$images = ProductMultiImage::where('product_id',$id)->get();
    	return view('backend.product.view_product',compact('product','images'));
    }

    public function deleteProduct($id){
    	$products = Product::findOrFail($id);
		unlink($products->product_thumbnail);
		Product::findOrFail($id)->delete();

		$images = ProductMultiImage::where('product_id',$id)->get();
		foreach($images as $img){
			unlink($img->photo_name);
			ProductMultiImage::where('product_id',$id)->delete();
		}

		
		$notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    } 

    public function editProduct($id){
    	$multiImgs = ProductMultiImage::where('product_id',$id)->get();
    	$products = Product::findOrFail($id);
		$categories = Category::latest()->get();
		$product_category_id = Product::findOrFail($id)->category_id;
		$product_subcategory_id = Product::findOrFail($id)->subcategory_id;
		$subcategory = Subcategory::where('category_id',$product_category_id)->get();
		$subsubcategory = Subsubcategory::where('subcategory_id',$product_subcategory_id)->get();
		return view('backend.product.product_edit',compact('multiImgs','categories','subcategory','subsubcategory','products'));
    }

    public function updateProduct(Request $request, $id){
    	$validateData = $request->validate([
    		'category_id' => 'required',
    		'subcategory_id' => 'required',
    		'subsubcategory_id' => 'required',
    		'product_name' => 'required',
    		'buying_price' => 'required',
    		'selling_price' => 'required',
    		'short_description' => 'required',
    		'long_description' => 'required',
    	],
    	[
    		'category_id.required' => 'Please select a Category Name',
    		'subcategory_id.required' => 'Please select a subcategory Name',
    		'subsubcategory_id.required' => 'Please select a subsubcategory name',
    		'buying_price.required' => 'Buying Price Cannot be Empty',
    		'selling_price.required' => 'Selling Price cannot be Empty',
    		'product_name.required' => 'Product name cannot be Empty',
    		'short_description.required' => 'Please give a short description about your Product',
    		'long_description.required' => 'Please give a long description about your Product',
    	]);

    	 Product::findOrFail($id)->update([
      	'category_id' => $request->category_id,
      	'subcategory_id' => $request->subcategory_id,
      	'subsubcategory_id' => $request->subsubcategory_id,
      	'product_name' => $request->product_name,
      	'product_slug' =>  strtolower(str_replace(' ', '-', $request->product_name)),

      	'buying_price' => $request->buying_price,
      	'selling_price' => $request->selling_price,
      	'discount_price' => $request->discount_price,
      	'short_description' => $request->short_description,
      	'long_description' => $request->long_description,
      	]); 	 

		$notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'info',
        );
		return redirect()->route('admin.product.show')->with($notification);
    }

    public function updateProductThumbnail(Request $request, $id){
    	if($request->file('product_thumbnail')){
    		$thumbnail = Product::findOrFail($id)->product_thumbnail;
    		unlink($thumbnail);
    		$image = $request->file('product_thumbnail');
	    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
	    	Image::make($image)->resize(917,1000)->save('backend/upload/product/product_thumbnail/'.$name_gen);
	    	$save_url = 'backend/upload/product/product_thumbnail/'.$name_gen;

	    	Product::findOrFail($id)->update([
    		'product_thumbnail' => $save_url,
    		'updated_at' => Carbon::now(),

    	]);
	    $notification = array(
            'message' => 'Product Thumbnail Updated Successfully',
            'alert-type' => 'info',
        );
		return redirect()->route('admin.product.show')->with($notification);
  	}else{
      Product::findOrFail($id)->update([
        'updated_at' => Carbon::now(),
      ]);
    	$notification = array(
            'message' => 'Previous Product Thumbnail is Setted Successfully',
            'alert-type' => 'info',
        );
		return redirect()->route('admin.product.show')->with($notification);
    	}
  	}

  	public function deleteProductMultiImageById($id){
  		$image = ProductMultiImage::findOrFail($id)->photo_name;
  		unlink($image);
  		ProductMultiImage::findOrFail($id)->delete();
  		$notification = array(
            'message' => 'Product Image Deleted Successfully',
            'alert-type' => 'error',
        );
		  return redirect()->route('admin.product.show')->with($notification);
  	}

  	public function MultiimageUpdate(Request $request){
    if($request->file('multi_img')){
      $imgs = $request->file('multi_img');

    foreach ($imgs as $id => $img) {
      $imgDel = ProductMultiImage::findOrFail($id);
      unlink($imgDel->photo_name);

      $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      Image::make($img)->resize(917,1000)->save('backend/upload/product/product_multiimage/'.$make_name);
      $uploadPath = 'backend/upload/product/product_multiimage/'.$make_name;

      ProductMultiImage::where('id',$id)->update([
        'photo_name' => $uploadPath,
        'updated_at' => Carbon::now(),

      ]);
    }

    $notification = array(
            'message' => 'Product Image Updated Successfully',
            'alert-type' => 'info',
        );
    return redirect()->back()->with($notification);
  }else{

    $notification = array(
            'message' => 'Product Image Updated Successfully',
            'alert-type' => 'info',
        );
    return redirect()->back()->with($notification);
      }
	 } // end foreach

   
}
