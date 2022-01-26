<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectdetail;

class AdminProjectQueryController extends Controller
{
    public function showQuery(){
    	$projects = Projectdetail::all();
    	return view('backend.project.showQuery',compact('projects'));
    }

    public function viewQuery($id){
    	$projectdetail = Projectdetail::findOrFail($id);
    	return view('backend.project.viewQuery',compact('projectdetail'));
    }
}
