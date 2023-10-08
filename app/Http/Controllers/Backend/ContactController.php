<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function Contact(){
        return  view('frontend.contact.success_page');
    } //end

    public function ContactForm(Request  $request){
       
        $data = array();
        $data['full_name'] = $request->full_name;
        $data['email_address'] = $request->email_address;
        $data['mobile'] = $request->mobile;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        DB::table('contacts')->insert($data);

        return view('frontend.contact.success_page');
    } //end

    public function AdminAllMessage(){
        $message = DB::table('contacts')->get();
        return view('admin.contact.contact_view',compact('message'));
    }
}
