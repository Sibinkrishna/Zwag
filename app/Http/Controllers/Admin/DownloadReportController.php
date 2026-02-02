<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadReportController extends Controller
{
    public function customerReport(){
        $subtitle="Customers Report";
        $metatitle="Customers Report";
        return view('admin.downloadReport.customer',compact('subtitle','metatitle'));
    }
    public function productReport(){
        $subtitle="Products Report";
        $metatitle="Products Report";
        return view('admin.downloadReport.product',compact('subtitle','metatitle'));
    }
    public function orderSalesReport(){
        $subtitle="Order Sales Report";
        $metatitle="Order Sales Report";
        return view('admin.downloadReport.orderSales',compact('subtitle','metatitle'));
    }
    public function paymentReport(){
        $subtitle="Payment Report";
        $metatitle="Payment Report";
        return view('admin.downloadReport.payment',compact('subtitle','metatitle'));
    }

    public function cartReport(){
        $subtitle="Cart Report";
        $metatitle="Cart Report";
        return view('admin.downloadReport.cart',compact('subtitle','metatitle'));
    }
}
