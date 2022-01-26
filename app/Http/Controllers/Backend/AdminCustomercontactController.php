<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerContact;

class AdminCustomercontactController extends Controller
{
    public function showMessage(){
    	$messages = CustomerContact::where('status',1)->get();
    	$readmessages = CustomerContact::where('status',0)->get();
    	return view('backend.customer.contact_info',compact('messages','readmessages'));
    }

    public function readMessage($id){
    	CustomerContact::findOrFail($id)->update(['status' => 0]);
    	$msg = CustomerContact::findOrFail($id);
    	return view('backend.customer.read_msg',compact('msg'));
    }

    public function deleteMsg($id){
        CustomerContact::findOrFail($id)->delete();
         $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success',
        );
      return redirect()->back()->with($notification);
    }
}
