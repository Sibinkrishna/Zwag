@extends('website.layout.app')
@section('content')
<div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-pb-40 gl-xs-pt-20 gl-pb-40 ">
        <div class="common-container">
            <div class="gl-w-100 gl-po-rel gl-d-flex acc-head gl-pb-20">Account Settings</div>

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-lg-fd-column gl-justify-sb">
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

                            <a href="my-order.html" class="menu_acc_item gl-td-none ">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/my-order-white.svg')}}">
                                    </div>
                                    <div class="menu_acc_title">My Orders</div>
                                </div>
                                <div class="menu_acc_arrow">›</div>
                            </a>

                            <a href="account-settings.html" class="menu_acc_item active_acc gl-td-none">
                                <div class="menu_acc_left">
                                    <div class="menu_acc_icon">
                                        <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/account-black.svg')}}">
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

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column account-detail-sec  gl-p-20 gl-xs-p-10">

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-xs-pb-10 gl-xs-pt-10 ">
                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                <a href="#" class="brd-crumb-account">Home</a>
                                <div class="brd-crumb-account">/</div>
                                <a href="#" class="brd-crumb-account">Profile</a>
                                <div class="brd-crumb-account">/</div>
                                <a href="#" class="brd-crumb-account">Account Settings</a>
                            </div>
                        </div>

                        <!-- personal-information----------------------------------------------- -->

                        <div class="gl-w-100 gl-po-rel gl-d-flex">

                            <div class="personal_info">
                                <div class="personal_info_header">
                                    Personal Information
                                </div>

                                <div class="personal_info_body">
                                    <div class="personal_info_note">
                                        You are with us since november 12, 2021.
                                    </div>

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

                                        <div class="form_row form_row_last res-radio-btn gl-pt-20">
                                            <div class="gender_group">
                                                <label class="gender-size">Gender</label>
                                                <div class="gender_options">
                                                    <label class="gl-d-flex">
                                                        <input type="radio" name="gender" checked>
                                                        Male
                                                    </label>
                                                    <label class="gl-d-flex">
                                                        <input type="radio" name="gender">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>

                                            <a href="#" class="save-continue-btn gl-td-none">Save </a>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>


                        <!-- manage-address-information----------------------------------------------- -->

                        <div class="gl-w-100 gl-po-rel gl-d-flex">

                            <div class="personal_info">
                                <div class="personal_info_header">
                                    Manage Address
                                </div>

                                <div class="personal_info_body">
                                    <div class="personal_info_note">
                                        You are with us since november 12, 2021.
                                    </div>

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-gap-40 gl-gap-md-10">
                                        <div class="font-giest gl-fs-16 gl-fw-500 gl-d-flex gl-text-black cent-mar ">Sudhi Kapli</div>
                                        <div class="box-btn cent-mar">Home</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">9400805196</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                                    </div>



                                    <div class="manage_address_frm_toolbar gl-pt-30">

                                        <button class="manage_address_frm_edit_btn">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 add_address_manage_open_btn">
                                            <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/edit.svg')}}">
                                            <div class="edit-text ">Edit</div>
                                        </div>
                                        </button>

                                        <div class="manage_address_frm_dropdown_wrap">
                                            <button class="manage_address_frm_dropdown_btn manage-address-toggle">
                                                <img class="gl-w-20p" src="{{asset('web/assets/images/my-accounts/defualt.svg')}}">
                                                <span id="manageAddressLabel">Set As Default</span>
                                                <span class="manage_address_frm_arrow">▾</span>
                                            </button>

                                            <div class="manage_address_frm_dropdown_box manage-address-dropdown">

                                                <label class="manage_address_frm_item">
                                                    <input type="radio" name="manage_address_type" value="Billing">
                                                    <span>Billing Address</span>
                                                </label>

                                                <label class="manage_address_frm_item">
                                                    <input type="radio" name="manage_address_type" value="Shipping">
                                                    <span>Shipping Address</span>
                                                </label>

                                            </div>
                                        </div>

                                    </div>




                                </div>
                                <div class="personal_info_body">
                                    <div class="personal_info_note">
                                        You are with us since november 12, 2021.
                                    </div>

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-gap-40 gl-gap-md-10 ">
                                        <div class="font-giest gl-fs-16 gl-fw-500 gl-d-flex gl-text-black cent-mar ">Sudhi Kapli</div>
                                        <div class="box-btn cent-mar">Home</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">9400805196</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                                    </div>



                                    <div class="manage_address_frm_toolbar gl-pt-30 gl-justify-sb">

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-20">
                                            <button class="manage_address_frm_edit_btn">
                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 add_address_manage_open_btn">
                                            <img class="gl-w-18p" src="{{asset('web/assets/images/my-accounts/edit.svg')}}">
                                            <div class="edit-text ">Edit</div>
                                        </div>
                                        </button>


                                            <div class="manage_address_frm_dropdown_wrap">
                                                <button class="manage_address_frm_dropdown_btn manage-address-toggle">
                                                <img class="gl-w-20p" src="{{asset('web/assets/images/my-accounts/defualt.svg')}}">
                                                <span id="manageAddressLabel">Set As Default</span>
                                                <span class="manage_address_frm_arrow">▾</span>
                                            </button>

                                                <div class="manage_address_frm_dropdown_box manage-address-dropdown">

                                                    <label class="manage_address_frm_item">
                                                    <input type="radio" name="manage_address_type" value="Billing">
                                                    <span>Billing Address</span>
                                                </label>

                                                    <label class="manage_address_frm_item">
                                                    <input type="radio" name="manage_address_type" value="Shipping">
                                                    <span>Shipping Address</span>
                                                </label>

                                                </div>
                                            </div>

                                        </div>

                                        <a href="#" class="gl-po-rel gl-d-flex gl-td-none">
                                            <img src="{{asset('web/assets/images/my-accounts/delete-gray.svg')}}">
                                        </a>
                                    </div>




                                </div>



                            </div>




                        </div>




                        <div class="gl-w-100 gl-po-rel gl-d-flex">

                            <div class="add_address_manage gl-w-100">
                                <div class="add_address_manage_header">

                                    <div class="add_address_btn gl-gap-10" id="add-adress-reach">
                                        <div class="add-adrss-hd">Add Address</div>
                                        <div class="add-adrss-hd-plus">+</div>
                                    </div>

                                </div>

                                <div class="add_address_manage_body">
                                    <div class="add_address_manage_inner">


                                        <!-- Example Grid -->
                                        <div class="manage-form-grid">

                                            <div class="manage-input-box">
                                                <label>Title*</label>
                                                <select class="manage-select" id="manageTitle">
        <option value="">Select</option>
        <option>Mr</option>
        <option>Mrs</option>
        <option>Miss</option>
        <option>Dr</option>
        <option>Prof</option>
    </select>
                                            </div>

                                            <div class="manage-input-box">
                                                <label>First Name*</label>
                                                <input type="text" placeholder="First Name">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Last Name*</label>
                                                <input type="text" placeholder="Last Name">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Email">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Mobile*</label>
                                                <input type="text" placeholder="Mobile">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Country*</label>
                                                <select class="manage-select" id="manageCountry"></select>
                                            </div>

                                            <div class="manage-input-box">
                                                <label>City*</label>
                                                <select class="manage-select" id="manageCity">
        <option value="">Select City</option>
        <option>Thiruvananthapuram</option>
        <option>Kollam</option>
        <option>Pathanamthitta</option>
        <option>Alappuzha</option>
        <option>Kottayam</option>
        <option>Idukki</option>
        <option>Ernakulam</option>
        <option>Thrissur</option>
        <option>Palakkad</option>
        <option>Malappuram</option>
        <option>Kozhikode</option>
        <option>Wayanad</option>
        <option>Kannur</option>
        <option>Kasaragod</option>
    </select>
                                            </div>

                                            <div class="manage-input-box">
                                                <label>House Name/No*</label>
                                                <input type="text" placeholder="House Name/No">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Street*</label>
                                                <input type="text" placeholder="Street">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>City*</label>
                                                <input type="text" placeholder="City">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>District*</label>
                                                <input type="text" placeholder="District">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Post Office*</label>
                                                <input type="text" placeholder="Postoffice">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Postal Code*</label>
                                                <input type="text" placeholder="Postal Code">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Landmark (Optional)</label>
                                                <input type="text" placeholder="">
                                            </div>

                                            <div class="manage-input-box">
                                                <label>Alternative Mobile (Optional)</label>
                                                <input type="text" placeholder="">
                                            </div>

                                        </div>

                                        <!-- Address Type -->
                                        <div class="manage-type-section">
                                            <label class="gl-fs-14 gl-fw-600">Address type</label>

                                            <div class="manage-radio-row">
                                                <label class="manage-radio-type">
                        <input type="radio" name="addressType" checked>
                        Home (All Day Delivery)
                    </label>

                                                <label class="manage-radio-type">
                        <input type="radio" name="addressType">
                        Work (Delivery Between 10am - 5pm)
                    </label>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="manage-popup2-footer">
                                            <div class="manage-save-btn">Save</div>
                                            <div class="manage-cancel-btn add_address_manage_cancel">Cancel</div>
                                        </div>


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
