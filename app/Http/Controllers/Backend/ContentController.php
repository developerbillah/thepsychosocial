<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\Services;
use Carbon\Carbon;
use Image;

class ContentController extends Controller
{
    public function AddContent(){
		$categories = Category::latest()->get();
		return view('admin.content.add_content',compact('categories'));

	}

	public function StoreContent(Request $request){




		$image = $request->file('breadcrumb');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/services/'.$name_gen);
    	$save_url = 'upload/services/'.$name_gen;

		if($request->hasFile("thamble")){
            $file=$request->file("thamble");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("upload/services/"),$imageName);
			$save = 'upload/services/'.$imageName;

		}


		Services::insert([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			//'childcategory_id' => $request->childcategory_id,
			'content_slide_title' => $request->content_slide_title,
			'content_title' => $request->content_title,
			'content_descrip' => $request->content_descrip,
			'long_descrip' => $request->long_descrip,
			'breadcrumb' => $save_url,
			'thamble' => $save,
			'status' => 1,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'Service Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-content')->with($notification);

	} ///end method

	public function ManageContent(){

		$services = Services::latest()->get();
		return view('admin.content.content_view',compact('services'));
	}


	public function EditContent($id){


		$categories = Category::latest()->get();
		$subcategory = subcategory::latest()->get();
		$services = Services::findOrFail($id);
		return view('admin.content.content_edit',compact('categories','subcategory','services'));

	} //end

	public function ContentDataUpdate(Request $request){

		$services_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);

	   $image = $request->file('breadcrumb');
		   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		   Image::make($image)->resize(917,1000)->save('upload/services/'.$name_gen);
		   $save_url = 'upload/services/'.$name_gen;

		Services::findOrFail($services_id)->update([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			// 'childcategory_id' => $request->childcategory_id,
			'content_slide_title' => $request->content_slide_title,
			'content_title' => $request->content_title,
			'content_descrip' => $request->content_descrip,
			'long_descrip' => $request->long_descrip,
			'long_descrip' => $request->long_descrip,
			'breadcrumb' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'Service Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-content')->with($notification);

	} ///end method

	/// Service  Breadcrumb Update ///
	public function ThambleImageUpdate(Request $request){
		$pro_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);

	   $image = $request->file('thamble');
		   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		   Image::make($image)->resize(917,1000)->save('upload/services/'.$name_gen);
		   $save_url = 'upload/services/'.$name_gen;

		   Services::findOrFail($pro_id)->update([
			   'thamble' => $save_url,
			   'updated_at' => Carbon::now(),

		   ]);

		   $notification = array(
			'message' => 'Services Image Thumble Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

     } // end method

	 public function ServicesInactive($id){
		Services::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Services Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}
	public function ServicesActive($id){
		Services::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Services Active',
			  'alert-type' => 'success'
		  );

		  return redirect()->back()->with($notification);

	   } //end

	   public function ServicesDelete($id){
		$services = Services::findOrFail($id);
		 unlink($services->breadcrumb);
		Services::findOrFail($id)->delete();



		$notification = array(
		   'message' => 'Service Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method



}
