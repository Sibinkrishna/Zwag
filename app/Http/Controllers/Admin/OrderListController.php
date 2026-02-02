<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function index(){
        $subtitle="Orders List";
        $metatitle="Orders List";
        return view('admin.order.index',compact('subtitle','metatitle'));
    }

    public function show(){
        $subtitle="Order Details";
        $metatitle="Order Details";
        return view('admin.order.show',compact('subtitle','metatitle'));
    }

    public function orderDetails(){
        $subtitle="Order Details";
        $metatitle="Order Details";
        return view('admin.order.orderDetails',compact('subtitle','metatitle'));
    }
}
