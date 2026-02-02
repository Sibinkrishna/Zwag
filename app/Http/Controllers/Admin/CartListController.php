<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartListController extends Controller
{
    public function index(){
        $subtitle="Cart Details";
        $metatitle="Cart Details";
        return view('admin.cartList.index',compact('subtitle','metatitle'));
    }


}
