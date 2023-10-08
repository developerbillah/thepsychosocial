<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\slide;
use App\Models\Services;
use Carbon\Carbon;
class slideController extends Controller
{
    function AddSlide(){

        return view('admin.slide.addslide');
    }
    //end

    function StoreSlide(Request $request){

		$image = $request->file('slide_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1920,935)->save('upload/slide/'.$name_gen);
    	$save_url = 'upload/slide/'.$name_gen;




		slide::insert([

			'slide_title' => $request->slide_title,
			'slide_link' => $request->slide_link,
			'slide_description' => $request->slide_description,
			'slide_photo' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'slide Inserted Successfully',
			'alert-type' => 'success'
		);

		return back()->with($notification);
    }
    //end

    function ManageSlide(){

        $slide = slide::latest()->get();
        return view('admin.slide.slide_view',compact('slide'));
    }
    //end
    function Edit($id){
        $slide = slide::findOrfail($id);

        return view('admin.slide.edit',compact('slide'));
    }
    //end

    function SlideUpdate(Request $request){

        $slide_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);


		$image = $request->file('slide_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1920,935)->save('upload/slide/'.$name_gen);
    	$save_url = 'upload/slide/'.$name_gen;




		slide::findOrFail($slide_id)->update([

			'slide_title' => $request->slide_title,
			'slide_link' => $request->slide_link,
			'slide_description' => $request->slide_description,
			'slide_photo' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'slide Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('slide-manage')->with($notification);

    }
    //end
    function DeleteSlide($id){
        slide::findOrfail($id)->delete();

        $notification = array(
			'message' => 'slide Delete Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('slide-manage')->with($notification);
    }
    //end

     function InActiveSlide($id){
        slide::findOrFail($id)->update(['status' =>0]);
		   $notification = array(
			  'message' => 'slide InActive',
			  'alert-type' => 'success'
		  );

		  return redirect()->back()->with($notification);

     }
     //end
     function ActiveSlide($id){
        slide::findOrFail($id)->update(['status' =>1]);
		   $notification = array(
			  'message' => 'slide Active',
			  'alert-type' => 'success'
		  );

		  return redirect()->back()->with($notification);

     }
     //end


     public function slideDetails($id){


          $silde_details =slide::where('id',$id)->first();




         return view('frontend.slide.slide_details',compact('silde_details'));
     }
}
