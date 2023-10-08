<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
class searchController extends Controller
{
   public function search(Request $request){
    // $data = $request->all();

    // $search_product = Services::where(function ($q) use($data){

    //     if(!empty($data['q'])&& $data['q'] !='' && $data['q']= 'undefined'){
    //         $q->where(function ($q) use($data){
    //             $q->where('content_title','like','%' .$data['q']. '%')
    //     });
    //     }

    // })->get();

 $service_all = $request->all();

 if(isset($service_all)){


         $services =  Services::where('content_title','like','%'.$service_all['query'].'%')->paginate(5);


                return view('frontend.search',compact('services'));
            }else{
             echo "not found";
            }










    //    $services = Services::all();
    // return view('Frontend.search',compact('services_se'));
   }//end
    // public function searchInput(Request $request){

    //     if(isset($_GET['query'])){

    //         $services_search =$_GET['query'];
    //       $services =  Services::where('content_title','like','%'.$services_search.'%');
    //         return view('Frontend.search',compact('services'));
    //     }else{
    //         echo "not found";
    //     }

    // }


    }
