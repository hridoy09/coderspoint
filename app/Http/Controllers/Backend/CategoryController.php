<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class CategoryController extends Controller
{
    public function Index(){
        $portfoliocategories = PortfolioCategory::all();
    	return view('backend.portfoliocategory.index', compact('portfoliocategories') );
    }


    public function storeCategory(Request $request){
        $validateData = $request->validate([
    		'portfolio_category' => 'required',

    	],
    	[
    		'portfolio_category.required' => 'Category Name cannot be Empty!',
    	]);

    	PortfolioCategory::insert([
    		'portfolio_category' => $request->portfolio_category,
    	]);

    	$notification = array(
            'message' => 'Portfolio Category Inserted Successfully',
            'alert-type' => 'success'
        );
    	return redirect()->route('admin.portfoliocategory.index')->with($notification);
    }




    public function deleteCategory($id){
    	 $portfoliocategories = PortfolioCategory::findOrFail($id);

		PortfolioCategory::findOrFail($id)->delete();


		$notification = array(
            'message' => 'portfolio categories Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }
}
