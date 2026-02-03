@extends('website.layout.app')
@section('content')
<div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-xs-pt-20 gl-pb-40 ">
        <div class="common-container">
            <div class="gl-w-100 gl-po-rel gl-d-flex acc-head gl-pb-20">My Account</div>

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-lg-fd-column gl-justify-sb ">
                <div class="gl-w-30 gl-po-rel gl-lg-w-100 gl-lg-mb-20 ">



                    <div class="profile_acc_container">

                        <!-- Profile -->
                        <div class="profile_acc_box">
                            <div class="profile_acc_img">
                                <img src="{{asset('web/assets/images/my-accounts/profile-pic.png')}}" alt="User">
                            </div>
                            <div class="profile_acc_text gl-d-flex gl-fd-row gl-xxl-fd-column ">
                                <div class="profile_acc_welcome">Welcome,</div>
                                <div class="profile_acc_name">sudhi</div>
                            </div>
                        </div>

                        <!-- Menu -->
                        <div class="menu_acc_list">

                            <a href="my-order.html" class="menu_acc_item active_acc gl-td-none">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/cart.svg')}}">
                                    </div>
                                    <div class="menu_acc_title">My Orders</div>
                                </div>
                                <div class="menu_acc_arrow">›</div>
                            </a>

                            <a href="account-settings.html" class="menu_acc_item gl-td-none">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/account.svg')}}">
                                    </div>
                                    <div class="menu_acc_title">Account Settings</div>
                                </div>
                                <div class="menu_acc_arrow">›</div>
                            </a>

                            <a href="account-help.html" class="menu_acc_item gl-td-none">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/help.svg')}}">
                                    </div>
                                    <div class="menu_acc_title">Help</div>
                                </div>
                                <div class="menu_acc_arrow">›</div>
                            </a>

                            <a href="#" class="menu_acc_item gl-td-none">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/logout.svg')}}">
                                    </div>
                                    <div class="menu_acc_title">Logout</div>
                                </div>
                                <div class="menu_acc_arrow">›</div>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="gl-w-65 gl-lg-w-100 gl-po-rel ">

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column account-detail-sec gl-p-20 gl-xs-p-10">

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-xs-pb-10 gl-xs-pt-15 ">
                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                <a href="#" class="brd-crumb-account">Home</a>
                                <div class="brd-crumb-account">/</div>
                                <a href="#" class="brd-crumb-account">Profile</a>
                                <div class="brd-crumb-account">/</div>
                                <a href="#" class="brd-crumb-account">My Orders</a>
                            </div>
                        </div>



                        <div class="gl-w-100 gl-po-rel gl-d-flex">

                            <div class="cust_accordion_wrap">

                                <div class="cust_accordion_item">
                                    <div class="cust_accordion_header" onclick="toggleAccordion(this)">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                            <div class="cust_accordion_title">JA7901</div>


                                            <div class="gl-po-rel gl-d-flex gl-fd-row gap-thirty    ">

                                                <a href="#" class="track-btns-common" onclick="goToTrack(event)">
                                                    <div class="location-img">
                                                        <img src="{{asset('web/assets/images/my-accounts/location.svg')}}">
                                                    </div>

                                                    <div class="location-track-head">TRACK</div>
                                                </a>


                                                <div class="cust_accordion_arrow">
                                                    <svg viewBox="0 0 24 24">
                                             <path d="M8 5l8 7-8 7" />
                                            </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cust_accordion_body">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-py-10 gl-xs-py-15">

                                            <div class="gl-po-rel gl-d-flex">
                                                <img class="ordered-img" src="{{asset('web/assets/images/my-accounts/accounts-img.png')}}">
                                            </div>


                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-px-40 gl-xxl-px-20 gl-xs-px-10 gl-py-20 gl-xxl-py-0 gl-justify-sb gl-xs-justify-sb">
                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xxl-fd-column gl-justify-sb">
                                                    <div class="my-order-head-acnt gl-xs-pb-20">Men's Graphic Regular Fit T-Shirt</div>
                                                    <div class="my-order-sub-head-acnt main-575">Delivery Expected on : Wed, Oct 8, 2025</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                    <div class="comn-size-head">Size : </div>
                                                    <div class="comn-size-value">L</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-gap-10">
                                                        <div class="comn-size-head">Quantity : </div>
                                                        <div class="comn-size-value">1</div>
                                                    </div>

                                                    <div class="order-prc-common">₹999.00</div>
                                                </div>

                                                <div class="my-order-sub-head-acnt  res-575 gl-xs-pt-10">Delivery on : <span class="gl-fw-500">Wed, Oct 8, 2025</span></div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-gray-comn gl-p-20 gl-xs-p-5 gl-gap-10">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-5">
                                            <div class="comn-size-head">Ordered On : </div>
                                            <div class="comn-size-value">Fri</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">Oct 3</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">2025</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">3:03:25</div>
                                            <div class="comn-size-value">PM</div>
                                        </div>


                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Status : </div>
                                            <div class="status-clr">Order Placed</div>
                                            <img src="{{asset('web/assets/images/my-accounts/placed-icon.svg')}}">
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Amount : </div>
                                            <div class="comn-size-value">₹999.00</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Discount : </div>
                                            <div class="comn-size-value">₹200</div>
                                        </div>
                                    </div>

                                </div>



                                <!-- second--------------------------------------------------------------------------------------- -->

                                <div class="cust_accordion_item">
                                    <div class="cust_accordion_header" onclick="toggleAccordion(this)">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                            <div class="cust_accordion_title">JA7901</div>


                                            <div class="gl-po-rel gl-d-flex gl-fd-row gap-thirty ">

                                                <div class="track-btns-common" onclick="goToTrack(event)">
                                                    <div class="location-img">
                                                        <img src="{{asset('web/assets/images/my-accounts/location.svg')}}">
                                                    </div>

                                                    <div class="location-track-head">TRACK</div>
                                                </div>


                                                <div class="cust_accordion_arrow">
                                                    <svg viewBox="0 0 24 24">
                                             <path d="M8 5l8 7-8 7" />
                                            </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cust_accordion_body">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-py-10 gl-xs-py-15">

                                            <div class="gl-po-rel gl-d-flex">
                                                <img class="ordered-img" src="{{asset('web/assets/images/my-accounts/accounts-img.png')}}">
                                            </div>


                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-px-40 gl-xxl-px-20 gl-xs-px-10 gl-py-20 gl-xxl-py-0 gl-justify-sb gl-xs-justify-sb">
                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xxl-fd-column gl-justify-sb">
                                                    <div class="my-order-head-acnt gl-xs-pb-20">Men's Graphic Regular Fit T-Shirt</div>
                                                    <div class="my-order-sub-head-acnt main-575">Delivery Expected on : Wed, Oct 8, 2025</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                    <div class="comn-size-head">Size : </div>
                                                    <div class="comn-size-value">L</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-gap-10">
                                                        <div class="comn-size-head">Quantity : </div>
                                                        <div class="comn-size-value">1</div>
                                                    </div>

                                                    <div class="order-prc-common">₹999.00</div>
                                                </div>
                                                <div class="my-order-sub-head-acnt  res-575 gl-xs-pt-10">Delivery on : <span class="gl-fw-500">Wed, Oct 8, 2025</span></div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-gray-comn gl-p-20 gl-xs-p-5 gl-gap-10">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-5">
                                            <div class="comn-size-head">Ordered On : </div>
                                            <div class="comn-size-value">Fri</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">Oct 3</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">2025</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">3:03:25</div>
                                            <div class="comn-size-value">PM</div>
                                        </div>


                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Status : </div>
                                            <div class="status-clr-cancel">Payment Cancelled</div>

                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Amount : </div>
                                            <div class="comn-size-value">₹999.00</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Discount : </div>
                                            <div class="comn-size-value">₹200</div>
                                        </div>
                                    </div>
                                </div>



                                <!-- third------------------------------------------ -->

                                <div class="cust_accordion_item">
                                    <div class="cust_accordion_header" onclick="toggleAccordion(this)">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                            <div class="cust_accordion_title">JA7901</div>


                                            <div class="gl-po-rel gl-d-flex gl-fd-row gap-thirty ">

                                                <div class="track-btns-common" onclick="goToTrack(event)">
                                                    <div class="location-img">
                                                        <img src="{{asset('web/assets/images/my-accounts/location.svg')}}">
                                                    </div>

                                                    <div class="location-track-head">TRACK</div>
                                                </div>


                                                <div class="cust_accordion_arrow">
                                                    <svg viewBox="0 0 24 24">
                                             <path d="M8 5l8 7-8 7" />
                                            </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cust_accordion_body">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-py-10 gl-xs-py-15">

                                            <div class="gl-po-rel gl-d-flex">
                                                <img class="ordered-img" src="{{asset('web/assets/images/my-accounts/accounts-img.png')}}">
                                            </div>


                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-px-40 gl-xxl-px-20 gl-xs-px-10 gl-py-20 gl-xxl-py-0 gl-justify-sb gl-xs-justify-sb">
                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xxl-fd-column gl-justify-sb">
                                                    <div class="my-order-head-acnt gl-xs-pb-20">Men's Graphic Regular Fit T-Shirt</div>
                                                    <div class="my-order-sub-head-acnt main-575">Delivery Expected on : Wed, Oct 8, 2025</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                    <div class="comn-size-head">Size : </div>
                                                    <div class="comn-size-value">L</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-gap-10">
                                                        <div class="comn-size-head">Quantity : </div>
                                                        <div class="comn-size-value">1</div>
                                                    </div>

                                                    <div class="order-prc-common">₹999.00</div>
                                                </div>
                                                <div class="my-order-sub-head-acnt  res-575 gl-xs-pt-10">Delivery on : <span class="gl-fw-500">Wed, Oct 8, 2025</span></div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-gray-comn gl-p-20 gl-xs-p-5 gl-gap-10">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-5">
                                            <div class="comn-size-head">Ordered On : </div>
                                            <div class="comn-size-value">Fri</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">Oct 3</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">2025</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">3:03:25</div>
                                            <div class="comn-size-value">PM</div>
                                        </div>


                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Status : </div>
                                            <div class="status-clr-cancel">Payment Cancelled</div>

                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Amount : </div>
                                            <div class="comn-size-value">₹999.00</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Discount : </div>
                                            <div class="comn-size-value">₹200</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- four------------------------------------------ -->

                                <div class="cust_accordion_item">
                                    <div class="cust_accordion_header" onclick="toggleAccordion(this)">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                            <div class="cust_accordion_title">JA7901</div>


                                            <div class="gl-po-rel gl-d-flex gl-fd-row  gap-thirty">

                                                <div class="track-btns-common" onclick="goToTrack(event)">
                                                    <div class="location-img">
                                                        <img src="{{asset('web/assets/images/my-accounts/location.svg')}}">
                                                    </div>

                                                    <div class="location-track-head">TRACK</div>
                                                </div>


                                                <div class="cust_accordion_arrow">
                                                    <svg viewBox="0 0 24 24">
                                             <path d="M8 5l8 7-8 7" />
                                            </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cust_accordion_body">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-py-10 gl-xs-py-15">

                                            <div class="gl-po-rel gl-d-flex">
                                                <img class="ordered-img" src="{{asset('web/assets/images/my-accounts/accounts-img.png')}}">
                                            </div>


                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-px-40 gl-xxl-px-20 gl-xs-px-10 gl-py-20 gl-xxl-py-0 gl-justify-sb gl-xs-justify-sb">
                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xxl-fd-column gl-justify-sb">
                                                    <div class="my-order-head-acnt gl-xs-pb-20">Men's Graphic Regular Fit T-Shirt</div>
                                                    <div class="my-order-sub-head-acnt main-575">Delivery Expected on : Wed, Oct 8, 2025</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                    <div class="comn-size-head">Size : </div>
                                                    <div class="comn-size-value">L</div>
                                                </div>

                                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-gap-10">
                                                        <div class="comn-size-head">Quantity : </div>
                                                        <div class="comn-size-value">1</div>
                                                    </div>

                                                    <div class="order-prc-common">₹999.00</div>
                                                </div>
                                                <div class="my-order-sub-head-acnt  res-575 gl-xs-pt-10">Delivery on : <span class="gl-fw-500">Wed, Oct 8, 2025</span></div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-gray-comn gl-p-20 gl-xs-p-5 gl-gap-10">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-5">
                                            <div class="comn-size-head">Ordered On : </div>
                                            <div class="comn-size-value">Fri</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">Oct 3</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">2025</div>
                                            <div class="comn-size-value">,</div>
                                            <div class="comn-size-value">3:03:25</div>
                                            <div class="comn-size-value">PM</div>
                                        </div>


                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Status : </div>
                                            <div class="status-clr-cancel">Payment Cancelled</div>

                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Amount : </div>
                                            <div class="comn-size-value">₹999.00</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                            <div class="comn-size-head">Discount : </div>
                                            <div class="comn-size-value">₹200</div>
                                        </div>
                                    </div>
                                </div>





                                <div class="paginator_sec gl-mt-20">

                                    <div class="paginator_left"></div>

                                    <div class="paginator_center">
                                        <div class="inner_page_wrap">
                                            <div class="inner_page_text">Inner Page :</div>

                                            <select class="inner_page_dropdown" id="rowsPerPage">
                                                <option value="5" selected>5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                            </select>
                                        </div>

                                        <div class="page_count_text" id="pageInfo">1 - 5 OF 29</div>
                                    </div>

                                    <div class="paginator_right">

                                        <!-- |<  First -->
                                        <button class="paginator_btn" id="firstBtn">
                                            <img src="{{asset('web/assets/images/my-accounts/backward.svg')}}" alt="First page" class="paginator_icon">
                                        </button>

                                        <!-- <  Previous -->
                                        <button class="paginator_btn" id="prevBtn">
                                            <img src="{{asset('web/assets/images/my-accounts/back.svg')}}" alt="Previous page" class="paginator_icon">
                                        </button>

                                        <!-- >  Next -->
                                        <button class="paginator_btn" id="nextBtn">
                                            <img src="{{asset('web/assets/images/my-accounts/front.svg')}}" alt="Next page" class="paginator_icon">
                                        </button>

                                        <!-- >|  Last -->
                                        <button class="paginator_btn" id="lastBtn">
                                            <img src="{{asset('web/assets/images/my-accounts/forward.svg')}}" alt="Last page" class="paginator_icon">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
