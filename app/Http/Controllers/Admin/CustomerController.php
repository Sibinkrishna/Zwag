<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $subtitle="Customer List";
        $metatitle="Customer List";
        return view('admin.customer.index',compact('subtitle','metatitle'));
    }

    public function show(){
        $subtitle="Customer Details";
        $metatitle="Customer Details";
        return view('admin.customer.customerDetails',compact('subtitle','metatitle'));
    }

    

}
