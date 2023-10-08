<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\Childcategory;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    public function SubCategoryView(){

    	$categories = Category::orderBy('category_name','ASC')->get();
    	$subcategory = subcategory::latest()->get();
    	return view('admin.category.subcategory_view',compact('subcategory','categories'));

    } //end

    public function SubCategoryStore(Request $request){

        $request->validate([
             'category_id' => 'required',
             'subcategory_name' => 'required',
         ],[
             'category_id.required' => 'Please select Any option',
             'subcategory_name.required' => 'Input SubCategory  Name',
         ]);
 
          
 
        subcategory::insert([
         'category_id' => $request->category_id,
         'subcategory_name' => $request->subcategory_name,
         'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
         'created_at' => Carbon::now(),
         
 
         ]);
 
         $notification = array(
             'message' => 'SubCategory Inserted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     } // end method 

     public function SubCategoryEdit($id){
    	$categories = Category::orderBy('category_name','ASC')->get();
    	$subcategory = subcategory::findOrFail($id);
    	return view('admin.category.subcategory_edit',compact('subcategory','categories'));

    }


    public function SubCategoryUpdate(Request $request){

    	$subcat_id = $request->id;

    	 SubCategory::findOrFail($subcat_id)->update([
		
		'subcategory_name' => $request->subcategory_name,
		'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        'created_at' => Carbon::now(),
		
		 

    	]);

	    $notification = array(
			'message' => 'SubCategory Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.subcategory')->with($notification);

    }  // end method



    public function SubCategoryDelete($id){

    	SubCategory::findOrFail($id)->delete();

    	$notification = array(
			'message' => 'SubCategory Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } //end

   

     //////  Child category ///////
     public function ChildCategoryView(){
        $categories = Category::orderBy('category_name','ASC')->get();
        $childcategory = ChildCategory::latest()->get();
        return view('admin.category.childcategory_view',compact('childcategory','categories'));
        
    } //end

    public function GetSubCategory($category_id){

        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
    }



    public function GetChildCategory($subcategory_id){

        $childcat = Childcategory::where('subcategory_id',$subcategory_id)->orderBy('childcategory_name','ASC')->get();
        return json_encode($childcat);
     }


    public function ChildCategoryStore(Request $request){

        $request->validate([
             'category_id' => 'required',
             'subcategory_id' => 'required',
             'childcategory_name' => 'required',
         ],[
             'category_id.required' => 'Please select Any option',
             'subcategory_id.required' => 'Please select Any option',
             'childcategory_name.required' => 'Input SubCategory  Name',
         ]);
 
          
 
        childcategory::insert([
         'category_id' => $request->category_id,
         'subcategory_id' => $request->subcategory_id,
         'childcategory_name' => $request->childcategory_name,
         'childcategory_slug' => strtolower(str_replace(' ', '-',$request->childcategory_name)),
         
 
         ]);
 
         $notification = array(
             'message' => 'ChildCategory Inserted Successfully',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     } // end method 

     public function ChildCategoryEdit($id){
    	$categories = Category::orderBy('category_name','ASC')->get();
    	$subcategories = SubCategory::orderBy('subcategory_name','ASC')->get();
    	$childcategories = ChildCategory::findOrFail($id);
    	return view('admin.category.childcategory_edit',compact('categories','subcategories','childcategories'));

    }



    public function CategoryChildUpdate(Request $request){

    	$childcat_id = $request->id;

    	ChildCategory::findOrFail($childcat_id)->update([
		'category_id' => $request->category_id,
		'subcategory_id' => $request->subcategory_id,
		'childcategory_name' => $request->childcategory_name,
		'childcategory_slug' => strtolower(str_replace(' ', '-',$request->childcategory_name)),
		


    	]);

	    $notification = array(
			'message' => 'Child Category Update Successfully',
			'alert-type' => 'info'
		);

        return redirect()->route('all.childcategory')->with($notification);

    } // end method 

    public function ChildCategoryDelete($id){

    	ChildCategory::findOrFail($id)->delete();
    	 $notification = array(
			'message' => ' Child Category Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    }

     
   
 
}
