<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;

class AdminSubsubCategoryController extends Controller
{
    public function showSubsubCategory(){
  	$subsubcategories =  Subsubcategory::all();
   	return view('backend.subsubcategory_list',compact('subsubcategories'));
  }

  public function insertSubsubCategory(){
  	$categories = Category::all();
  	return view('backend.add_subsubcategory',compact('categories'));
  }

  public function storeSubsubCategory(Request $request){
  	$validateData = $request->validate([
    		'category_id' => 'required',
    		'subcategory_id' => 'required',
    		'subsubcategory_name' => 'required',
    	],
    	[
    		'subsubcategory_name.required' => 'Sub-sub category name Cannot be Empty!',
    	]);

 
    	Subsubcategory::insert([
    		'category_id' => $request->category_id,
    		'subcategory_id' => $request->subcategory_id,
    		'subsubcategory_name' => $request->subsubcategory_name,
    	]);

    	$notification = array(
            'message' => 'Sub Sub-Category Inserted Successfully',
            'alert-type' => 'success'
        );
    	return redirect()->route('admin.category.subsubcategory.show')->with($notification);
  }

  public function deleteSubsubCategory($id){
  	Subsubcategory::findOrFail($id)->delete();

    	$notification = array(
            'message' => 'Sub Sub-Category Deleted Successfully',
            'alert-type' => 'error',
        );
    	return redirect()->back()->with($notification);
    }
  public function editSubsubCategory($id){
  		$cats = Category::all();
    	$subsubcats = Subsubcategory::findOrFail($id);
    	$cat_id =  Subsubcategory::findOrFail($id)->category_id;
    	$subcats = Subcategory::where('category_id',$cat_id)->get();
    	return view('backend.subsubcategory_edit',compact('cats','subcats','subsubcats'));
  }

  public function updateSubsubCategory(Request $request,$id){
  	$validateData = $request->validate([
    		'category_id' => 'required',
    		'subsubcategory_name' => 'required',
    	],
    	[
    		'subsubcategory_name.required' => 'Sub-sub category name Cannot be Empty!',
    	]);

	    	Subsubcategory::findOrFail($id)->update([
	    	'category_id' => $request->category_id,
    		'subcategory_id' => $request->subcategory_id,
    		'subsubcategory_name' => $request->subsubcategory_name,
    	]);

	    	$notification=array(
	         'message'=>'Sub sub-Category Successfully Updated',
	         'alert-type'=>'success'
	          );

	    $notification = array(
            'message' => 'Sub Sub-Category Updated Successfully',
            'alert-type' => 'info',
        );
    	return redirect()->route('admin.category.subsubcategory.show')->with($notification);
    	
    }
}
