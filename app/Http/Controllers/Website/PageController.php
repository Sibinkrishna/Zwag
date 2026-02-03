<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }
    public function new_in_page(Request $request)
    {
        return view('website.pages.new-in');
    }
    public function about_us(Request $request)
    {
        return view('website.pages.about-us');
    }
    public function account_help(Request $request)
    {
        return view('website.pages.account-help');
    }
    public function account_settings(Request $request)
    {
        return view('website.pages.account-settings');
    }
    public function cart(Request $request)
    {
        return view('website.pages.cart');
    }
    public function checkout(Request $request)
    {
        return view('website.pages.checkout');
    }
    public function contact_us(Request $request)
    {
        return view('website.pages.contact-us');
    }
    public function login(Request $request)
    {
        return view('website.auth.login');
    }
    public function my_order(Request $request)
    {
        return view('website.pages.my-order');
    }
    public function privacy_policy(Request $request)
    {
        return view('website.pages.privacy-policy');
    }
    public function product_detail(Request $request)
    {
        return view('website.pages.product-detail');
    }
    public function return_refund_policy(Request $request)
    {
        return view('website.pages.return-refund-policy');
    }
    public function shirts(Request $request)
    {
        return view('website.pages.shirts');
    }
    public function terms_condition(Request $request)
    {
        return view('website.pages.terms-condition');
    }
    public function track_order(Request $request)
    {
        return view('website.pages.track-order');
    }
}
