<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;
use Image;

class ClientController extends Controller
{
	public function AddClient(){

		$clients = Client::latest()->get();
		return view('admin.client.add_client',compact('clients'));

	} //end

    public function StoreClient(Request $request){





		Client::insert([
			'client_title' => $request->client_title,

      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'Question Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-client')->with($notification);

	} ///end method
	public function ManageClient(){

		$clients = Client::latest()->get();
		return view('admin.client.add_client',compact('clients'));
	} //end

	public function EditClient($id){


		$clients = Client::findOrFail($id);
		return view('admin.client.client_edit',compact('clients'));

	} //end

	public function ClientUpdate(Request $request){

        //  return $request->orginal_title;

		$pro_id = $request->id;




		Client::findOrFail($pro_id)->update([

			'client_title' => $request->client_title,

			'created_at' => Carbon::now(),


		]);



		$notification = array(
			'message' => 'Question Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-client')->with($notification);

	} ///end method

	public function ClientDelete($id){
		$clients = Client::findOrFail($id);

		Client::findOrFail($id)->delete();



		$notification = array(
		   'message' => 'Question Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method

	public function ClientInactive($id){
		Client::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Client Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}
	public function ClientActive($id){
		Client::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Client Active',
			  'alert-type' => 'success'
		  );

		  return redirect()->back()->with($notification);

	   } //end

}
