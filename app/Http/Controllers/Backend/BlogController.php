<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Image;


class BlogController extends Controller
{
    
    public function BlogAdd(){
		$blogs = Blog::latest()->get();
		return view('admin.blog.add_blog',compact('blogs'));

	} //end

    
	public function BlogStore(Request $request){

		
		

		$image = $request->file('blog_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/blog/'.$name_gen);
    	$save_url = 'upload/blog/'.$name_gen;

		


		Blog::insert([
			
			'blog_title' => $request->blog_title,
			'blog_description' => $request->blog_description,
			'blog_photo' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Blog Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('blog-manage')->with($notification);

	} ///end method

	public function BlogManage(){

		$blogs = Blog::latest()->get();
		return view('admin.blog.blog_view',compact('blogs'));
	} //end

    public function BlogEdit($id){

		$blogs = Blog::findOrFail($id);
		return view('admin.blog.blog_edit',compact('blogs'));

	} //end

    public function BlogUpdate(Request $request){

		$blogs_id = $request->id;
		$oldImage = $request->old_img;
		unlink($oldImage);
		

		$image = $request->file('blog_photo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(917,1000)->save('upload/blog/'.$name_gen);
    	$save_url = 'upload/blog/'.$name_gen;

		


		Blog::findOrFail($blogs_id)->update([
			
			'blog_title' => $request->blog_title,
			'blog_description' => $request->blog_description,
			'blog_photo' => $save_url,
			'status' => 1,
      		'created_at' => Carbon::now(),   


		]);


		$notification = array(
			'message' => 'Blog Update Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('blog-manage')->with($notification);

	} ///end method

    public function BlogDelete($id){
		$blogs = Blog::findOrFail($id);
		unlink($blogs->blog_photo);
		Blog::findOrFail($id)->delete();

		

		$notification = array(
		   'message' => 'Blog Deleted Successfully',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);

	}// end method 

    public function BlogInactive($id){
		Blog::findOrFail($id)->update(['status' => 0]);
		$notification = array(
		   'message' => 'Blog Inactive',
		   'alert-type' => 'success'
	   );

	   return redirect()->back()->with($notification);
	}
	public function BlogActive($id){
		Blog::findOrFail($id)->update(['status' => 1]);
		   $notification = array(
			  'message' => 'Blog Active',
			  'alert-type' => 'success'
		  );
  
		  return redirect()->back()->with($notification);
		   
	   } //end

	

    


    
}
