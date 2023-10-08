<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\privacy;
use App\Models\Terms;
use Carbon\Carbon;

class PolicyController extends Controller
{
    public function PolicyAdd(){

		$privacys = privacy::latest()->get();
		return view('admin.privacy.add_policy',compact('privacys'));

	} //end

	public function PolicyStore(Request $request){


		Privacy::insert([

			'privacy_title' => $request->privacy_title,
			'description' => $request->description,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'Privacy Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('policy-manage')->with($notification);

	} ///end method

	public function PolicyManage(){

		$privacys = privacy::latest()->get();
		return view('admin.privacy.policy_view',compact('privacys'));
	} //end

	public function PolicyEdit($id){

		$privacys = privacy::findOrFail($id);
		return view('admin.privacy.policy_edit',compact('privacys'));

	} //end

    public function PolicyUpdate(Request $request){

		$privacys_id = $request->id;



		privacy::findOrFail($privacys_id)->update([

			'privacy_title' => $request->privacy_title,
			'description' => $request->description,
      		'created_at' => Carbon::now(),



		]);


		$notification = array(
			'message' => 'Policy Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('policy-manage')->with($notification);

	} ///end method

	public function PolicyDelete($id){
		$privacys = privacy::findOrFail($id);
		Privacy::findOrFail($id)->delete();



		$notification = array(
		   'message' => 'Blog Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method

	// Terms & condition //

	public function TermsAdd(){

		$terms = Terms::latest()->get();
		return view('admin.terms.add_terms',compact('terms'));

	} //end

	public function TermsStore(Request $request){


		Terms::insert([

			'terms_title' => $request->terms_title,
			't_description' => $request->t_description,
      		'created_at' => Carbon::now(),


		]);


		$notification = array(
			'message' => 'Terms Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('terms-manage')->with($notification);

	} ///end method

	public function TermsManage(){

		$terms = Terms::latest()->get();
		return view('admin.terms.terms_view',compact('terms'));
	} //end


	public function TermsEdit($id){

		$terms = Terms::findOrFail($id);
		return view('admin.terms.terms_edit',compact('terms'));

	} //end

    public function TermsUpdate(Request $request){

		$terms_id = $request->id;



		Terms::findOrFail($terms_id)->update([

			'terms_title' => $request->terms_title,
			't_description' => $request->t_description,
      		'created_at' => Carbon::now(),



		]);


		$notification = array(
			'message' => 'Terms Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('terms-manage')->with($notification);

	} ///end method
 public function termsDelete($id){
    $terms = Terms::findOrFail($id);
    Terms::findOrFail($id)->delete();



    $notification = array(
       'message' => 'Blog Deleted Successfully',
       'alert-type' => 'success'
   );

   return redirect()->back()->with($notification);



 }//end
 

}
