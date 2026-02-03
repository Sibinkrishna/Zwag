@extends('website.layout.app')
@section('content')
<div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-pb-40 ">
        <div class="common-container">
            <div class="gl-w-100 gl-po-rel gl-d-flex gl-pb-15 ">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                    <a href="#" class="brd-crumb-account">Home</a>
                    <div class="brd-crumb-account">/</div>
                    <a href="#" class="brd-crumb-account">Profile</a>
                    <div class="brd-crumb-account">/</div>
                    <a href="#" class="brd-crumb-account">Account Settings</a>
                </div>
            </div>

            <div class="track-name">Hi Sudhi, </div>
            <div class="track-sub-head gl-pt-10 gl-pb-40 gl-xs-pb-20 gl-xs-pt-0">Here's The Last Update On Your Order</div>


            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xl-fd-column gl-justify-sb">
                <div class="tracking_card track-first-sec">
                    <div class="tracking_image">
                        <img class="track-product-img" src="{{asset('web/assets/images/track/track-image.png')}}" alt="Men's Graphic Regular Fit T-Shirt">
                    </div>

                    <div class="tracking_content ">
                        <div class="tracking_title">
                            Men's Graphic Regular Fit T-Shirt
                        </div>

                        <div class="tracking_info">
                            <div>Size : <span>S</span></div>
                            <div>Quantity : <span>3</span></div>
                            <div class="tracking_price gl-pt-30 gl-xs-pt-10">₹999</div>
                        </div>


                    </div>
                </div>





                <div class="track_orders track-desktop">
                    <div class="track_orders_step active">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Order</div>
                            <div>Initiated</div>
                        </div>
                        <div class="step_icon">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <div class="step_date_wrap step_date">
                            <div class="step_day">Fri,</div>
                            <div class="step_date_only">Oct 3,2025,</div>
                            <div class="step_time">03:03:21 PM</div>
                        </div>
                    </div>

                    <div class="track_orders_step active">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Pending</div>
                        </div>
                        <div class="step_icon">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <div class="step_date_wrap step_date">
                            <div class="step_day">Fri,</div>
                            <div class="step_date_only">Oct 3,2025,</div>
                            <div class="step_time">03:03:21 PM</div>
                        </div>
                    </div>

                    <div class="track_orders_step active">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Confirmed</div>
                        </div>
                        <div class="step_icon">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <div class="step_date_wrap step_date">
                            <div class="step_day">Fri,</div>
                            <div class="step_date_only">Oct 3,2025,</div>
                            <div class="step_time">03:03:21 PM</div>
                        </div>
                    </div>

                    <div class="track_orders_step active">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Placed</div>
                        </div>
                        <div class="step_icon">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <div class="step_date_wrap step_date">
                            <div class="step_day">Fri,</div>
                            <div class="step_date_only">Oct 3,2025,</div>
                            <div class="step_time">03:03:21 PM</div>
                        </div>
                    </div>

                    <div class="track_orders_step active">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Processed</div>
                        </div>
                        <div class="step_icon">
                            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        </div>
                        <div class="step_date_wrap step_date">
                            <div class="step_day">Fri,</div>
                            <div class="step_date_only">Oct 3,2025,</div>
                            <div class="step_time">03:03:21 PM</div>
                        </div>
                    </div>
                    <div class="track_orders_step inactive">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Dispatched</div>
                        </div>
                        <div class="step_icon">

                        </div>

                    </div>
                    <div class="track_orders_step inactive">
                        <div class="step_title gl-d-flex gl-fd-column">
                            <div>Payment </div>
                            <div>Delivered</div>
                        </div>
                        <div class="step_icon">

                        </div>

                    </div>



                    <div class="gl-po-abs gl-d-flex gl-fd-row gap-del abs-pos">
                        <img src="{{asset('web/assets/images/my-accounts/speed-delivery.svg')}}">

                        <div class=" gl-po-rel gl-d-flex gl-fd-row gap-del">
                            <div class="delivery_expect">Delivery Expected on :</div>
                            <div class="delivery_expect">Wed, </div>
                            <div class="delivery_expect">Oct 8, </div>
                            <div class="delivery_expect">2025</div>
                        </div>
                    </div>
                </div>



                <div class="responsive_track track-mobile gl-sm-pt-30 gl-xs-pt-20  gl-sm-pb-40 gl-xs-pb-20">

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-c ordr-histry-head gl-sm-pb-30 gl-xs-pb-20">Order History</div>

                    <div class="track_item completed">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Order </div>
                            <div class="order-res-text-cmn">Initiated</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right">
                            <div class="gl-d-flex gl-fd-column">
                                <div class="date-res-text-cmn">Fri, Oct 3,2025,</div>
                                <div class="date-res-text-cmn">03:03:21 PM</div>
                            </div>
                        </div>


                    </div>

                    <div class="track_item completed">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Pending</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right">
                            <div class="gl-d-flex gl-fd-column">
                                <div class="date-res-text-cmn">Fri, Oct 3,2025,</div>
                                <div class="date-res-text-cmn">03:03:21 PM</div>
                            </div>
                        </div>
                    </div>

                    <div class="track_item completed">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Confirmed</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right">
                            <div class="gl-d-flex gl-fd-column">
                                <div class="date-res-text-cmn">Fri, Oct 3,2025,</div>
                                <div class="date-res-text-cmn">03:03:21 PM</div>
                            </div>
                        </div>
                    </div>

                    <div class="track_item completed">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Placed</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right">
                            <div class="gl-d-flex gl-fd-column">
                                <div class="date-res-text-cmn">Fri, Oct 3,2025,</div>
                                <div class="date-res-text-cmn">03:03:21 PM</div>
                            </div>
                        </div>
                    </div>

                    <div class="track_item pending">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Processed</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right"></div>
                    </div>

                    <div class="track_item pending">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Dispatched</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                            <span class="track_line"></span>
                        </div>

                        <div class="track_right"></div>
                    </div>

                    <div class="track_item pending">
                        <div class="track_left gl-d-flex gl-fd-column">
                            <div class="order-res-text-cmn">Payment </div>
                            <div class="order-res-text-cmn">Delivered</div>
                        </div>

                        <div class="track_center">
                            <span class="track_dot"></span>
                        </div>

                        <div class="track_right"></div>
                    </div>


                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-c gl-pt-30 gl-gap-10 ">
                        <img src="{{asset('web/assets/images/my-accounts/speed-delivery.svg">
                        <div class="delivry-data-res">Delivery on :</div>
                        <div class="delivry-data-res">Wed, Oct 8, 2025</div>
                    </div>

                </div>











            </div>



            <div class="gl-w-100 gl-po-rel">


            </div>

        </div>

        <div class="common-container gl-pt-15">
            <div class="order_address_list">
                <div class="order_address_grid">

                    <!-- Order Details -->
                    <div class="order_address_card">
                        <div class="order_address_title">Order Details</div>

                        <div class="order_address_body">
                            <div class="order_row">
                                <div class="oreder_heads">Order Items :</div>
                                <div class="order_items">3</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads">Order ID :</div>
                                <div class="order_items">24793</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads">Order Date :</div>
                                <div class="order_items">Tue, Oct 28, 2025, 11:22:43 AM</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads">Actual Price :</div>
                                <div class="order_items">₹2,997</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads">Discount :</div>
                                <div class="order_items">₹600</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads">Payment Amount :</div>
                                <div class="order_items">₹2,397</div>
                            </div>

                            <div class="order_total">
                                <div class="oreder_heads-bold">Total :</div>
                                <div class="order_items-bold">₹2,397</div>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <div class="order_address_card">
                        <div class="order_address_title">Billing Address</div>

                        <div class="order_address_body address_block">
                            <div class="address_name">Sudhi Kapli</div>
                            <div class="address_name">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                            <div class="order_row">
                                <div class="oreder_heads_two">Email :</div>
                                <div class="order_items">Sudhi@Example.Com</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads_two">Phone :</div>
                                <div class="order_items">0000000000</div>
                            </div>

                        </div>
                    </div>

                    <!-- Delivery Address -->
                    <div class="order_address_card">
                        <div class="order_address_title">Delivery Address</div>

                        <div class="order_address_body address_block">
                            <div class="address_name">Sudhi Kapli</div>
                            <div class="address_name">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                            <div class="order_row">
                                <div class="oreder_heads_two">Email :</div>
                                <div class="order_items">Sudhi@Example.Com</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads_two">Phone :</div>
                                <div class="order_items">0000000000</div>
                            </div>
                            <div class="order_row">
                                <div class="oreder_heads_two">Delivery Type :</div>
                                <div class="order_items">Work</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
@endsection
