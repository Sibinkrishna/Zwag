<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchTextController extends Controller
{
    public function index(){
        $subtitle="Search Text";
        $metatitle="Search Text";
        return view('admin.searchText.index',compact('subtitle','metatitle'));
    }
}
