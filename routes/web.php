<?php

use App\Http\Controllers\Admin\AdminListController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CartListController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DownloadReportController;
use App\Http\Controllers\Admin\EnquiryFormController;
use App\Http\Controllers\Admin\OrderListController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SearchTextController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UserTypeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/secured-zwag-admin-login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/secured-zwag-admin-login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard url
Route::middleware(['auth'])->group(function() {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('user-type', UserTypeController::class);
Route::resource('admin-list', AdminListController::class);
Route::resource('customer-list', CustomerController::class);
Route::get('customer-details', [CustomerController::class,'show'])->name('customer-list.details');
Route::resource('order-list', OrderListController::class);
Route::get('order-details', [OrderListController::class,'orderDetails'])->name('admin.order.details');
Route::resource('cart-list', CartListController::class);
Route::resource('category', CategoryController::class);
Route::resource('subcategory', SubCategoryController::class);
Route::resource('attribute', AttributeController::class);
Route::resource('product', ProductController::class);
Route::resource('brand', BrandController::class);
Route::get('/get-subcategories/{category_id}', [ProductController::class, 'getSubCategories']);
Route::get('/get-attributes/{category_id}', [ProductController::class, 'getAttributes']);
###############################

Route::get('/get-category-details/{category_id}', [ProductController::class, 'getCategoryDetails']);


###############################
Route::resource('search-text', SearchTextController::class);
Route::get('enquiry-contactus', [EnquiryFormController::class,'contactUs'])->name('enquiry-contactus');
Route::get('enquiry-feedback', [EnquiryFormController::class,'feedback'])->name('enquiry-feedback');
Route::get('enquiry-career', [EnquiryFormController::class,'career'])->name('enquiry-career');
Route::get('enquiry-subscription', [EnquiryFormController::class,'subscription'])->name('enquiry-subscription');
Route::get('report-customer', [DownloadReportController::class,'customerReport'])->name('report-customer');
Route::get('report-product', [DownloadReportController::class,'productReport'])->name('report-product');
Route::get('report-order-sales', [DownloadReportController::class,'orderSalesReport'])->name('report-order-sales');
Route::get('report-payment', [DownloadReportController::class,'paymentReport'])->name('report-payment');
Route::get('report-cart', [DownloadReportController::class,'cartReport'])->name('report-cart');
});


