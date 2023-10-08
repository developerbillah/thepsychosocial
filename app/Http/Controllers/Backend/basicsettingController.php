<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use Image;

class basicsettingController extends Controller
{
    function setting(){


        return view('admin.setting.addsetting');
    }
    //end
     function settingUpdate(Request $request){


        $oldImage = $request->old_logo;
 		unlink($oldImage);

        $image = $request->file('logo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/logo/'.$name_gen);
    	$save_url = 'upload/logo/'.$name_gen;

        setting::find(1)->update([
            'logo'=>$save_url,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
            'pinterest'=>$request->pinterest,
            'googleplus'=>$request->googleplus,
            'linkedin'=>$request->linkedin,
            'twitter'=>$request->twitter,
        ]);

        $notification = array(
			'message' => 'Gallery Update Successfully',
			'alert-type' => 'success'
		);

        return back();
}



}
