<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Image;

class AdminCategoryController extends Controller
{
    public function showCategory(){
    	$categories = Category::all();
    	return view('backend.category_list',compact('categories'));
    }

    public function insertCategory(){
    	return view('backend.add_category');
    }

    public function storeCategory(Request $request){
    	$validateData = $request->validate([
    		'category_name' => 'required',
    	],
    	[
    		'category_name.required' => 'Category Name cannot be Empty!',
    	]);

    	Category::insert([
    		'category_name' => $request->category_name,
    	]);

    	$notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
    	return redirect()->route('admin.category.show')->with($notification);
    }

    public function deleteCategory($id){
    	Category::findOrFail($id)->delete();

    	$notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'error',
        );
        return redirect()->route('admin.category.show')->with($notification);
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        return view('backend.edit_category',compact('category'));
    }

    public function updateCategory(Request $request, $id){
    	$validateData = $request->validate([
    		'category_name' => 'required',
    	],
    	[
    		'category_name.required' => 'Category Name cannot be Empty!',
    	]);

    
    		Category::findOrFail($id)->update([
    		'category_name' => $request->category_name,
    	]);

    	$notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'info',
        );
    	return redirect()->route('admin.category.show')->with($notification);
    	
    }
}
