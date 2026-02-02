<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnquiryFormController extends Controller
{
    public function contactUs(){
        $subtitle="Contact Us";
        $metatitle="Contact Us";
        return view('admin.enquiry.contactus',compact('subtitle','metatitle'));
    }
    public function feedback(){
        $subtitle="Feedback";
        $metatitle="Feedback";
        return view('admin.enquiry.feedback',compact('subtitle','metatitle'));
    }
    public function career(){
        $subtitle="Career";
        $metatitle="Career";
        return view('admin.enquiry.career',compact('subtitle','metatitle'));
    }
    public function subscription(){
        $subtitle="Subscription";
        $metatitle="Subscription";
        return view('admin.enquiry.subscription',compact('subtitle','metatitle'));
    }
}
