@extends('website.layout.app')
@section('content')

<div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-pb-40 gl-xs-pt-20 gl-pb-40 ">
    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex acc-head gl-pb-20">Account Settings</div>

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-justify-sb">
            <div class="gl-w-30 gl-po-rel gl-md-w-100 gl-md-mb-10 ">



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

                        <a href="my-order.html" class="menu_acc_item gl-td-none ">
                            <div class="menu_acc_left">
                                <div class="menu_acc_icon">
                                    <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/my-order-white.svg')}}">
                                </div>
                                <div class="menu_acc_title">My Orders</div>
                            </div>
                            <div class="menu_acc_arrow">›</div>
                        </a>

                        <a href="account-settings.html" class="menu_acc_item gl-td-none ">
                            <div class="menu_acc_left">
                                <div class="menu_acc_icon">
                                    <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/account.svg')}}">
                                </div>
                                <div class="menu_acc_title">Account Settings</div>
                            </div>
                            <div class="menu_acc_arrow">›</div>
                        </a>

                        <a href="account-help.html" class="menu_acc_item active_acc gl-td-none">
                            <div class="menu_acc_left">
                                <div class="menu_acc_icon">
                                    <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/help-black.svg')}}">
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
            <div class="gl-w-65 gl-md-w-100 gl-po-rel ">

                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column account-detail-sec  gl-p-20 gl-xs-p-10">

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-pb-15 ">
                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                            <a href="#" class="brd-crumb-account">Home</a>
                            <div class="brd-crumb-account">/</div>
                            <a href="#" class="brd-crumb-account">Profile</a>
                            <div class="brd-crumb-account">/</div>
                            <a href="#" class="brd-crumb-account">Help</a>
                        </div>
                    </div>

                    <!-- personal-information----------------------------------------------- -->

                    <div class="gl-w-100 gl-po-rel gl-d-flex">

                        <div class="personal_info">
                            <div class="personal_info_header">
                                Call Us Now
                            </div>

                            <div class="personal_info_body">


                                <div class="personal_info_form">
                                    <div class="form_row">
                                        <div class="form_group">
                                            <label>First Name*</label>
                                            <input type="text" value="">
                                        </div>

                                        <div class="form_group">
                                            <label>Last Name*</label>
                                            <input type="text" value="">
                                        </div>
                                    </div>

                                    <div class="form_row">
                                        <div class="form_group">
                                            <label>Email Id*</label>
                                            <input type="email" value="">
                                        </div>

                                        <div class="form_group">
                                            <label>Phone Number*</label>
                                            <input type="text" value="">
                                        </div>
                                    </div>

                                    <div class="custom_message_wrap">
                                        <label for="customMessage" class="custom_message_label">
                                            Message<span>*</span>
                                        </label>

                                        <textarea id="customMessage" class="custom_message" placeholder=""
                                            rows="6"></textarea>
                                    </div>

                                    <a href="#" class="help_btn gl-w-100 gl-po-rel gl-d-flex gl-justify-c gl-py-15">Send
                                        to us</a>

                                    <div class="contact_grid_wrap gl-pt-20">
                                        <div class="contact_card">
                                            <div class="contact_content">
                                                <img class="gl-w-30p gl-pb-15"
                                                    src="{{asset('web/assets/images/my-accounts/blck-mail.svg')}}">
                                                <span class="contact_title">Email ID</span>
                                                <a href="mailto:"
                                                    class="contact_text gl-td-none">sales@zwagstyles.com</a>
                                            </div>
                                        </div>
                                        <div class="contact_card">
                                            <div class="contact_content">
                                                <img class="gl-w-30p gl-pb-15"
                                                    src="{{asset('web/assets/images/my-accounts/black-call.svg')}}">
                                                <span class="contact_title">Contact Number</span>
                                                <a href="tel:" class="contact_text gl-td-none">sales@zwagstyles.com</a>
                                            </div>
                                        </div>
                                        <div class="contact_card">
                                            <div class="contact_content">
                                                <img class="gl-w-30p gl-pb-15"
                                                    src="{{asset('web/assets/images/my-accounts/black-location.svg')}}">
                                                <span class="contact_title">Business Address</span>
                                                <span class="contact_text gl-td-none">No 53 Maratt 8A Cross Yajman
                                                    Layout Begur Post Bangalore Karnataka 560068</span>
                                            </div>
                                        </div>

                                    </div>
                                    <a href="#"
                                        class="gl-w-100 gl-td-none gl-po-rel gl-d-flex gl-justify-c gl-fd-row gl-gap-10 gl-pt-0 ">

                                        <div class="google-map-link brdr-btms">See On Google Map</div>
                                        <img class="arrow-auto" src="{{asset('web/assets/images/my-accounts/arrow.svg')}}">
                                    </a>
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
