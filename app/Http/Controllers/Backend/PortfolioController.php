<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Portfolio;
use Carbon\Carbon;
use Image;


class PortfolioController extends Controller
{
	public function AddPortfolio(){
		
		$portfolios = Portfolio::latest()->get();
		return view('admin.portfolio.add_portfolio',compact('portfolios'));

	} //end

    public function StorePortfolio(Request $request){

		
		$image = $request->file('port_image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/portfolio/'.$name_gen);
    	$save_url = 'upload/portfolio/'.$name_gen;
		

		Portfolio::insert([
			'port_title' => $request->port_title,
			'port_subtitle' => $request->port_subtitle,
			'port_image' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Portfolio Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-portfolio')->with($notification);

	} ///end method
	public function ManagePortfolio(){

		$portfolios = Portfolio::latest()->get();
		return view('admin.portfolio.add_portfolio',compact('portfolios'));
	} //end

	public function EditPortfolio($id){

		
		$portfolios = Portfolio::findOrFail($id);
		return view('admin.portfolio.portfolio_edit',compact('portfolios'));

	} //end

	public function PortfolioUpdate(Request $request){

		$pro_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);
   
	   $image = $request->file('port_image');
		   $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		   Image::make($image)->resize(917,1000)->save('upload/portfolio/'.$name_gen);
		   $save_url = 'upload/portfolio/'.$name_gen;

		Portfolio::findOrFail($pro_id)->update([
			
			'port_title' => $request->port_title,
			'port_subtitle' => $request->port_subtitle,
			'port_image' => $save_url,
			'status' => 1,
			'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Portfolio Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('manage-portfolio')->with($notification);

	} ///end method

	public function PortfolioDelete($id){
		$portfolios = Portfolio::findOrFail($id);
		unlink($portfolios->port_image);
		Portfolio::findOrFail($id)->delete();

		

		$notification = array(
		   'message' => 'Portfolio Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method 

	public function PortfolioInactive($id){
		Portfolio::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Portfolio Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}
	public function PortfolioActive($id){
		Portfolio::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Portfolio Active',
			  'alert-type' => 'success'
		  );
  
		  return redirect()->back()->with($notification);
		   
	   } //end


	
	
}
