<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CartListController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\UserTypeController;
use App\Http\Controllers\Admin\AdminListController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderListController;
use App\Http\Controllers\Admin\SearchTextController;
use App\Http\Controllers\Admin\EnquiryFormController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\DownloadReportController;
use App\Http\Controllers\Website\AuthController as WebAuthController;

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

Route::post('attributes/{attribute}/values', [AttributeController::class, 'storeValue'])->name('attribute.values.store');
Route::put('attribute-values/{id}',[AttributeController::class, 'updateValue'])->name('attribute.values.update');
Route::delete('attribute-values/{id}',[AttributeController::class, 'destroyValue'])->name('attribute.values.destroy');

Route::resource('product', ProductController::class);
Route::post('product/image-delete/{id}', [ProductController::class,'productImageDelete'])->name('product.image.delete');
Route::post('product/status-update/{id}', [ProductController::class, 'statusUpdate'])->name('product.status.update');
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



Route::get('/register',[WebAuthController::class, 'register'])->name('website.register');
Route::post('/register-store',[WebAuthController::class, 'registerStore'])->name('website.register.store');

Route::get('/', [PageController::class, 'index'])->name('website.home');
Route::get('/new-in', [PageController::class, 'new_in_page'])->name('website.new_in_page');
Route::get('/about-us', [PageController::class, 'about_us'])->name('website.about_us');
Route::get('/account-help', [PageController::class, 'account_help'])->name('website.account_help');
Route::get('/account-settings', [PageController::class, 'account_settings'])->name('website.account_settings');
Route::get('/cart', [PageController::class, 'cart'])->name('website.cart');
Route::get('/checkout', [PageController::class, 'checkout'])->name('website.checkout');
Route::get('/contact-us', [PageController::class, 'contact_us'])->name('website.contact_us');
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('website.privacy_policy');
Route::get('/product-detail', [PageController::class, 'product_detail'])->name('website.product_detail');
Route::get('/return-refund-policy', [PageController::class, 'return_refund_policy'])->name('website.return_refund_policy');
Route::get('/shirts', [PageController::class,'shirts'])->name('website.shirts');
Route::get('/terms-conditions', [PageController::class,'terms_condition'])->name('website.terms_condition');
Route::get('/track-order', [PageController::class,'track_order'])->name('website.track_order');

Route::get('login', [PageController::class, 'login'])->name('login');
Route::get('my-order', [PageController::class, 'my_order'])->name('my_order');
