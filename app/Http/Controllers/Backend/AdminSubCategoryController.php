<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;

class AdminSubCategoryController extends Controller
{
  public function showSubCategory(){
  	$subcategories =  Subcategory::all();
   	return view('backend.subcategory_list',compact('subcategories'));
  }

  public function insertSubCategory(){
  	$categories = Category::all();
  	return view('backend.add_subcategory',compact('categories'));
  }

  public function storeSubCategory(Request $request){
  	$validateData = $request->validate([
    		'category_id' => 'required',
    		'subcategory_name' => 'required',
    	],
    	[
    		'category_id.required' => 'Please select a Category Name',
    		'subcategory_name.required' => 'Subcategory Name Cannot be Empty',
    	]);

  	Subcategory::insert([
    		'category_id' => $request->category_id,
    		'subcategory_name' => $request->subcategory_name,
    	]);

    	$notification = array(
            'message' => 'Sub-Category Inserted Successfully',
            'alert-type' => 'success'
        );
    	return redirect()->route('admin.category.subcategory.show')->with($notification);
  }

  public function deleteSubCategory($id){
  	Subcategory::findOrFail($id)->delete();
	  	$notification = array(
            'message' => 'Sub-Category Deleted Successfully',
            'alert-type' => 'error',
        );
        return redirect()->back()->with($notification);
  }

  public function editSubCategory($id){
    $categories = Category::all();
    $subcategory = Subcategory::findOrFail($id);
    return view('backend.edit_subcategory',compact('categories','subcategory'));
  }

  public function updateSubCategory(Request $request, $id){
    $validateData = $request->validate([
        'category_id' => 'required',
        'subcategory_name' => 'required',

      ],
      [
        'category_id.required' => 'Please select a Category Name',
        'subcategory_name.required' => 'Subcategory Name Cannot be Empty',
      ]);

        Subcategory::findOrFail($id)->update([
        'category_id' => $request->category_id,
        'subcategory_name' => $request->subcategory_name,
    
      ]);

      $notification = array(
            'message' => 'Sub-Category Updated Successfully',
            'alert-type' => 'info',
        );
      return redirect()->route('admin.category.subcategory.show')->with($notification);
      
  }

    public function GetSubCategory($category_id){
      $subcat = Subcategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
      return json_encode($subcat);
    }

    public function GetSubSubCategory($subcategory_id){
      $subsubcat = Subsubcategory::where('subcategory_id',$subcategory_id)->orderBy('subsubcategory_name','ASC')->get();
      return json_encode($subsubcat);
    }
}
