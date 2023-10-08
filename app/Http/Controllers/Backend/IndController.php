<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Industries;
use Carbon\Carbon;
use Image;

class IndController extends Controller
{
    public function AddInd(){
		
		$ind = Industries::latest()->get();
		return view('admin.industries.add_industries',compact('ind'));

	} //end

    public function StoreInd(Request $request){

		
		$image = $request->file('ind_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/industries/'.$name_gen);
    	$save_url = 'upload/industries/'.$name_gen;
		

		Industries::insert([
			'ind_title' => $request->ind_title,
            'ind_description' => $request->ind_description,
			'ind_photo' => $save_url,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Industries Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-ind')->with($notification);

	} ///end method
	public function ManageInd(){

		$ind = Industries::latest()->get();
		return view('admin.industries.add_industries',compact('ind'));
	} //end

    public function EditInd($id){

		
		$ind = Industries::findOrFail($id);
		return view('admin.industries.edit_industries',compact('ind'));

	} //end
    public function IndUpdate(Request $request){

		$pro_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);
   
        $image = $request->file('ind_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/industries/'.$name_gen);
    	$save_url = 'upload/industries/'.$name_gen;

		Industries::findOrFail($pro_id)->update([
			
			'ind_title' => $request->ind_title,
            'ind_description' => $request->ind_description,
			'ind_photo' => $save_url,
      		'created_at' => Carbon::now(),     


		]);



		$notification = array(
			'message' => 'Industries Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-ind')->with($notification);

	} ///end method

    public function DeleteInd($id){
		$ind = Industries::findOrFail($id);
		unlink($ind->ind_photo);
		Industries::findOrFail($id)->delete();

		

		$notification = array(
		   'message' => 'Industries Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method 
}
