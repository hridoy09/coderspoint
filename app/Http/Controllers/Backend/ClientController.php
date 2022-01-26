<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
Use Carbon\Carbon;
use App\Models\Client;



class ClientController extends Controller
{
    public function addClient(){
    	return view('backend.client.addclient');
    }

    public function storeClient(Request $request){
    	$validateData = $request->validate([
    		'client_logo' => 'required|image|mimes:jpg,png,jpeg',
            'client_title' => 'required',
    	],
    	[
    		'client_logo.mimes' => 'client Image must be of jpg,png,jpeg format',
            'client_title.required' => 'Provide a good client Title for SEO',
    	]);

    	$image = $request->file('client_logo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1017,400)->save('backend/upload/client/'.$name_gen);
    	$save_url = 'backend/upload/client/'.$name_gen;

    	Client::insert([
      	'client_logo' => $save_url,
        'client_title' => $request->client_title,
      	'created_at' => Carbon::now(),
  	 ]);
    	$notification = array(
            'message' => 'Client Added Successfully',
            'alert-type' => 'success',
        );
      return redirect()->route('admin.client.list')->with($notification);
    }

    public function clientlist(){
    	$clients = Client::all();
    	return view('backend.client.client_list',compact('clients'));
    }

   public function changeStatus($id){
    	$status = Client::findOrFail($id)->status;
    	if($status == 1){
    		Client::findOrFail($id)->update(['status' => 0]);
    		$notification = array(
            'message' => 'Client logo Disabled Successfully',
            'alert-type' => 'warning',
        );
      		return redirect()->back()->with($notification);
    	}else{
    		Client::findOrFail($id)->update(['status' => 1]);
    		 $notification = array(
            'message' => 'client logo Enabled Successfully',
            'alert-type' => 'success',
        );
      		return redirect()->back()->with($notification);
    	}
    }

    public function deleteClient($id){
    	$client = Client::findOrFail($id);
		unlink($client->client_logo);
		Client::findOrFail($id)->delete();


		$notification = array(
            'message' => 'Client Logo Deleted Successfully',
            'alert-type' => 'error',
        );
		return redirect()->back()->with($notification);
    }
}
