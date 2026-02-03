@extends('website.layout.app')
@section('content')
    <div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-pb-40 ">
        <div class="common-container">

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pb-40">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-20 ">
                    <img src="{{asset('web/assets/images/cart/arrow-left.svg')}}">
                    <a href="#" class="back-to-link gl-td-none">Continue Shopping</a>
                </div>
            </div>


            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-gap-40">
                <div class="gl-w-60 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column">

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                               <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row ">
                                <div class="check-head num-width">
                                    <div class="num-round">1</div>
                                </div>
                                <div class="check-head checkout-text">Login</div>

                                <div class="gl-po-rel gl-d-flex mar-img-tik ">
                                    <img src="{{asset('web/assets/images/checkout/green-tik.png')}}">
                                </div>
                               </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-fd-column gap-adjust-chk">
                                        <div class="font-giest gl-fs-16 gl-fw-500 gl-text-black cent-mar">Sudhi Kapli</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">9400805196</div>
                                        <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">sudheesh@godlandit.com</div>
                                    </div>
                                </div>
                            </div>

                            <!-- BOX when closed -->

                            <div class="gl-w-100 gl-po-rel custm-pad-none gap-adjust-chk fd-row-col  closed-box">
                                <div class="font-giest gl-fs-16 gl-fw-500 gl-d-flex gl-text-black cent-mar ">Sudhi Kapli</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">9400805196</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">sudheesh@godlandit.com</div>
                            </div>
                        </div>


                        <!-- -------------------------------------- -->



                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                 <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-justify-sb">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row ">
                                <div class="check-head num-width">
                                      <div class="num-round">2</div>
                                </div>
                                <div class="check-head checkout-text">Billing Address</div>
                                </div>

                                  <div class="gl-po-rel gl-d-flex mar-img-tik ">
                                    <img src="{{asset('web/assets/images/checkout/green-tik.png')}}">
                                </div>

                                <div class="gl-po-rel gl-d-flex">
                                <a href="#" class="change-btn gl-td-none gl-zindex-10">Change</a>
                                </div>
                               </div>
                                </button>
                            </h2>

                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-gap-30">
                                        <div class="gl-w-100 gl-po-rel display-costome gap-adjust-chk">
                                            <div class="font-giest gl-fs-16 gl-fw-500 gl-text-black cent-mar">Sudhi Kapli</div>
                                            <div class="box-btn cent-mar">Home</div>
                                            <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">9400805196</div>
                                            <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-fd-column res-gap-adrs gl-justify-sb">
                                            <div class="save-continue-btn">Save & Continue</div>


                                            <div class="change-adrs-btn " onclick="manageOpenPopup()">
                                                <img class="gl-xs-w-15p" src="{{asset('web/assets/images/checkout/change.svg')}}">
                                                <div class="chng-adrs-btn">Change Address</div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- BOX when closed -->
                            <div class="gl-w-100 gl-po-rel custm-pad-none gap-adjust-chk fd-row-col  closed-box">
                                <div class="font-giest gl-fs-16 gl-fw-500 gl-d-flex gl-text-black cent-mar ">Sudhi Kapli</div>
                                <div class="box-btn cent-mar">Home</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">9400805196</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                            </div>
                        </div>


                        <!-- -------------------------------------- -->




                        <div class="accordion-item">
                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                 <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-justify-sb">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row ">
                                <div class="check-head num-width">
                                      <div class="num-round">3</div>
                                </div>
                                <div class="check-head checkout-text">Delivery Address</div>
                                </div>

                                  <div class="gl-po-rel gl-d-flex mar-img-tik ">
                                    <img src="{{asset('web/assets/images/checkout/green-tik.png')}}">
                                </div>

                                <div class="gl-po-rel gl-d-flex">
                                <a href="#" class="change-btn gl-td-none gl-zindex-10">Change</a>
                                </div>
                               </div>
                                </button>
                            </h2>



                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-gap-30">
                                        <div class="gl-w-100 gl-po-rel display-costome gap-adjust-chk">
                                            <div class="font-giest gl-fs-16 gl-fw-500 gl-text-black cent-mar">Sudhi Kapli</div>
                                            <div class="box-btn cent-mar">Home</div>
                                            <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">9400805196</div>
                                            <div class="font-giest gl-fs-14 gl-fw-400 gl-text-black cent-mar">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                                        </div>

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-fd-column res-gap-adrs gl-justify-sb">
                                            <div class="save-continue-btn">Save & Continue</div>


                                            <div class="change-adrs-btn " onclick="manageOpenPopup()">
                                                <img class="gl-xs-w-15p" src="{{asset('web/assets/images/checkout/change.svg')}}">
                                                <div class="chng-adrs-btn">Change Address</div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                            </div>







                            <!-- BOX when closed -->
                            <div class="gl-w-100 gl-po-rel custm-pad-none gap-adjust-chk fd-row-col  closed-box">
                                <div class="font-giest gl-fs-16 gl-fw-500 gl-d-flex gl-text-black cent-mar ">Sudhi Kapli</div>
                                <div class="box-btn cent-mar">Home</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">9400805196</div>
                                <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India</div>
                            </div>
                        </div>

                        <!-- -------------------------------------- -->

                        <div class="accordion-item">
                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                 <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-justify-sb">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row ">
                                <div class="check-head num-width">
                                      <div class="num-round">4</div>
                                </div>
                                <div class="check-head checkout-text">Order Summary</div>
                                </div>

                                  <div class="gl-po-rel gl-d-flex mar-img-tik ">
                                    <img src="{{asset('web/assets/images/checkout/green-tik.png')}}">
                                </div>

                                <div class="gl-po-rel gl-d-flex">
                                <a href="#" class="change-btn gl-td-none gl-zindex-10">Change</a>
                                </div>
                               </div>
                                </button>
                            </h2>



                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <!-- desktop-design==============================-------------- -->

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column desk-view-cart">

                                        <div class="gl-w-100 gl-po-rel gl-d-flex  gl-py-20 ">

                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                <div class="gl-d-flex gl-po-rel">
                                                    <img class="gl-w-100 cart-img-obj" src="{{asset('web/assets/images/cart/cart-img-one.png')}}">
                                                </div>

                                                <div class="gl-po-rel gl-d-flex gl-fd-column gl-w-100 gl-pl-20">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb gl-pb-10">
                                                        <div class="cart-list-head">Men's Graphic Regular Fit T-Shirt</div>
                                                        <div class="gl-cursor-p">
                                                            <img src="{{asset('web/assets/images/cart/delete-cart.svg')}}">
                                                        </div>
                                                    </div>

                                                    <div class="discount gl-mb-10">15% OFF</div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-cart gl-pb-10">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Size </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">S </div>
                                                        </div>
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Stock </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-left"> Only View Left </div>
                                                        </div>
                                                    </div>
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Sleeves </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">Half Sleeve </div>
                                                        </div>
                                                    </div>


                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-fe">
                                                        <div class="cart-price">₹999.00</div>
                                                    </div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                                        <div class="qty-wrapper mar-auto-extra-gap">
                                                            <button class="qty-btn" data-type="minus">−</button>
                                                            <div class="qty-number">1</div>
                                                            <button class="qty-btn" data-type="plus">+</button>
                                                        </div>

                                                        <div class="old-rate-cart m-auto-old">₹1,199</div>



                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                        <hr class="lines-gap">

                                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-py-20 ">

                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                <div class="gl-d-flex gl-po-rel">
                                                    <img class="gl-w-100 cart-img-obj" src="{{asset('web/assets/images/cart/cart-img-one.png')}}">
                                                </div>

                                                <div class="gl-po-rel gl-d-flex gl-fd-column gl-w-100 gl-pl-20">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb gl-pb-10">
                                                        <div class="cart-list-head">Men's Graphic Regular Fit T-Shirt</div>
                                                        <div class="gl-cursor-p">
                                                            <img src="{{asset('web/assets/images/cart/delete-cart.svg')}}">
                                                        </div>
                                                    </div>

                                                    <div class="discount gl-mb-10">15% OFF</div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-cart gl-pb-10">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Size </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">S </div>
                                                        </div>
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Stock </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-left"> Only View Left </div>
                                                        </div>
                                                    </div>
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Sleeves </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">Half Sleeve </div>
                                                        </div>
                                                    </div>


                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-fe">
                                                        <div class="cart-price">₹999.00</div>
                                                    </div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                                        <div class="qty-wrapper mar-auto-extra-gap">
                                                            <button class="qty-btn" data-type="minus">−</button>
                                                            <div class="qty-number">1</div>
                                                            <button class="qty-btn" data-type="plus">+</button>
                                                        </div>

                                                        <div class="old-rate-cart m-auto-old">₹1,199</div>



                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                        <hr class="lines-gap">


                                        <div class="gl-w-100 gl-po-rel gl-d-flex  gl-py-20 ">

                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                <div class="gl-d-flex gl-po-rel">
                                                    <img class="gl-w-100 cart-img-obj" src="{{asset('web/assets/images/cart/cart-img-one.png')}}">
                                                </div>

                                                <div class="gl-po-rel gl-d-flex gl-fd-column gl-w-100 gl-pl-20">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb gl-pb-10">
                                                        <div class="cart-list-head">Men's Graphic Regular Fit T-Shirt</div>
                                                        <div class="gl-cursor-p">
                                                            <img src="{{asset('web/assets/images/cart/delete-cart.svg')}}">
                                                        </div>
                                                    </div>

                                                    <div class="discount gl-mb-10">15% OFF</div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gap-custm-cart gl-pb-10">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Size </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">S </div>
                                                        </div>
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Stock </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-left"> Only View Left </div>
                                                        </div>
                                                    </div>
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Sleeves </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">Half Sleeve </div>
                                                        </div>
                                                    </div>


                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-fe">
                                                        <div class="cart-price">₹999.00</div>
                                                    </div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">
                                                        <div class="qty-wrapper mar-auto-extra-gap">
                                                            <button class="qty-btn" data-type="minus">−</button>
                                                            <div class="qty-number">1</div>
                                                            <button class="qty-btn" data-type="plus">+</button>
                                                        </div>

                                                        <div class="old-rate-cart m-auto-old">₹1,199</div>



                                                    </div>

                                                </div>
                                            </div>


                                        </div>



                                        <div class="special-note-wrapper gl-pt-20">
                                            <!-- Header -->
                                            <div class="special-note-header">
                                                <div class="spcl-note-head">Add Special Note</div>

                                            </div>

                                            <!-- Textarea -->
                                            <div class="special-note-box">
                                                <label for="specialNote">Special Note</label>
                                                <textarea id="specialNote"></textarea>
                                            </div>

                                            <!-- Button -->
                                            <div class="gl-po-rel gl-d-flex">
                                                <a href="#" class="change-btn gl-td-none gl-zindex-10">Save & Continue</a>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- desktop-design-end==============================-------------- -->




                                    <!-- mobile-design==============================-------------- -->


                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column mob-view-cart">


                                        <div class="gl-w-100 gl-po-rel gl-d-flex  gl-py-20 ">

                                            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row">
                                                <div class="gl-d-flex gl-po-rel gl-gap-10 gl-fd-column">
                                                    <img class="gl-w-100 cart-img-obj" src="{{asset('web/assets/images/cart/cart-img-one.png')}}">

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb">



                                                        <div class="qty-wrapper mar-auto-extra-gap">
                                                            <button class="qty-btn" data-type="minus">−</button>
                                                            <div class="qty-number">1</div>
                                                            <button class="qty-btn" data-type="plus">+</button>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="gl-po-rel gl-d-flex gl-fd-column gl-w-100 gl-pl-20 gl-xs-pl-10 ">
                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-sb gl-pb-10 gl-gap-10">
                                                        <div class="cart-list-head">Men's Graphic Regular Fit T-Shirt</div>
                                                        <div class="gl-cursor-p">
                                                            <img src="{{asset('web/assets/images/cart/delete-cart.svg')}}">
                                                        </div>
                                                    </div>

                                                    <div class="discount gl-mb-10">15% OFF</div>

                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-fe gl-xs-justify-fs ">
                                                        <div class="cart-price">₹999.00</div>
                                                    </div>

                                                    <div class="old-rate-cart gl-xs-pb-5 ">₹1,199</div>


                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row res-gap-cart gl-xs-pb-5 ">
                                                        <div class="cart-drs-size">Size </div>
                                                        <div class="cart-drs-dif-size">: </div>
                                                        <div class="cart-drs-dif-size">S </div>
                                                    </div>





                                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-pb-5">
                                                        <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                                            <div class="cart-drs-size">Sleeves </div>
                                                            <div class="cart-drs-dif-size">: </div>
                                                            <div class="cart-drs-dif-size">Half Sleeve </div>
                                                        </div>
                                                    </div>

                                                    <div class="gl-po-rel gl-d-flex gl-fd-row gl-gap-10 gl-xs-pb-5">
                                                        <div class="cart-drs-size">Stock </div>
                                                        <div class="cart-drs-dif-size">: </div>
                                                        <div class="cart-drs-left"> Only View Left </div>
                                                    </div>





                                                </div>
                                            </div>


                                        </div>

                                        <div class="special-note-wrapper gl-pt-20">
                                            <!-- Header -->
                                            <div class="special-note-header">
                                                <div class="spcl-note-head">Add Special Note</div>

                                            </div>

                                            <!-- Textarea -->
                                            <div class="special-note-box">
                                                <label for="specialNote">Special Note</label>
                                                <textarea id="specialNote"></textarea>
                                            </div>

                                            <!-- Button -->
                                            <div class="gl-po-rel gl-d-flex">
                                                <a href="#" class="change-btn gl-td-none gl-zindex-10">Save & Continue</a>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- mobile-design-end==============================-------------- -->


                                </div>
                            </div>







                            <!-- BOX when closed -->
                            <div class="gl-w-100 gl-po-rel custm-pad-none gap-adjust-chk fd-row-col  closed-box">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 ">
                                    <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">3</div>
                                    <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Items</div>
                                </div>


                            </div>
                        </div>



                        <!-- -------------------------------------- -->




                        <div class="accordion-item">
                            <h2 class="accordion-header">

                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                 <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gl-justify-sb">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row ">
                                <div class="check-head num-width">
                                      <div class="num-round">5</div>
                                </div>
                                <div class="check-head checkout-text">Payment Options</div>

                                  <div class="gl-po-rel gl-d-flex mar-img-tik ">
                                    <img src="{{asset('web/assets/images/checkout/green-tik.png')}}">
                                </div>
                                </div>


                               </div>
                                </button>
                            </h2>



                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-gap-30">

                                        <div class="pay-wrapper">
                                            <div class="pay-title gl-pb-40 gl-sm-pb-20">Please Select Your Payment Method</div>

                                            <div class="pay-methods gl-pb-40 gl-sm-pb-20">

                                                <!-- Razorpay -->
                                                <label class="pay-option">
                                                <input type="radio" name="paymethod" class="pay-radio">
                                                <span class="radio-custom"></span>
                                                <img class="pay-img" src="{{asset('web/assets/images/checkout/razor-pay.png')}}" class="pay-logo">
                                                </label>



                                            </div>

                                            <!-- Captcha Section -->
                                            <div class="captcha-wrap gl-pb-30 gl-sm-pb-10">

                                                <div class="captcha-box">
                                                    <span id="captchaText">W43UTWQ</span>
                                                    <button class="captcha-refresh" onclick="generateCaptcha()">⟳</button>
                                                </div>

                                                <input type="text" class="captcha-input" placeholder="Enter the characters">
                                                <button class="confirm-btn">Confirm Order</button>

                                            </div>

                                            <div class="safety-text">
                                                safety tip: avoid cash or card at delivery. Use any other above method to pay now.
                                            </div>

                                            <div class="note-text">
                                                Please note: If a fraud alert, dispute, or chargeback indicating suspicious activity is received before an order is dispatched or delivered, we will deduct the applicable payment gateway service charges from the refund. No refunds will be issued once
                                                the product has been delivered.
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>







                            <!-- BOX when closed -->
                            <div class="gl-w-100 gl-po-rel custm-pad-none gap-adjust-chk fd-row-col  closed-box">
                                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                                    <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">3</div>
                                    <div class="font-giest gl-fs-14 gl-fw-400 gl-d-flex gl-text-black cent-mar ">Items</div>
                                </div>


                            </div>
                        </div>

                    </div>









                </div>

                <div class="gl-w-40 gl-md-w-100 gl-po-rel gl-d-flex bg-summary">
                    <div class="order-summary-box">
                        <div class="order-title">Order Summary</div>

                        <div class="divider"></div>

                        <div class="same-row">
                            <div class="left-row">Price ( 3 Items)</div>
                            <div class="right-row main-price">₹2,997</div>
                        </div>

                        <div class="same-row">
                            <div class="left-row">Discount</div>
                            <div class="right-row discount-price">₹600</div>
                        </div>

                        <div class="same-row">
                            <div class="left-row">Delivery Charges</div>
                            <div class="right-row discount-price">Free</div>
                        </div>

                        <div class="divider"></div>

                        <div class="total-row">
                            <div class="total-left">Estimated Total</div>
                            <div class="total-right">
                                <div class="total-amount main-price">₹2,397</div>
                                <div class="tax-text">(Inclusive Of All Taxes)</div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- popup-section--------------------------------------------------------------------------------------------------------------------------- -->

    <!-- Popup Overlay -->
    <div class="manage-popup-overlay" id="managePopup">
        <div class="manage-popup-box">

            <!-- Header -->
            <div class="manage-popup-header">
                <div>Manage Address</div>
                <button class="manage-add-btn">Add Address +</button>
            </div>

            <!-- Address Card 1 -->
            <div class="manage-card">
                <div class="manage-left">
                    <div class="gl-po-rel gl-d-flex gl-fd-row gl-xl-fd-column gl-justify-sb gap-for-custom gl-align-center gl-xl-align-fs gl-pb-20">
                        <div class="manage-name">Sudhi Kapli</div>
                        <div class="box-btn cent-mar edit-box-pad">Home</div>
                        <div class="manage-phone">9400805196</div>
                        <div class="manage-full-address">
                            Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India
                        </div>
                    </div>

                    <button class="manage-edit-btn">
                    <img class="gl-w-15p" src="{{asset('web/assets/images/checkout/change.svg')}}"> Edit
                </button>
                </div>
                <div class="manage-right">
                    <div class="manage-radio" tabindex="0" role="button" aria-pressed="false"></div>
                </div>
            </div>

            <!-- Address Card 2 -->
            <div class="manage-card">
                <div class="manage-left">
                    <div class="gl-po-rel gl-d-flex gl-fd-row gl-xl-fd-column gl-justify-sb gap-for-custom gl-align-center gl-xl-align-fs gl-pb-20">
                        <div class="manage-name">Sudhi Kapli</div>
                        <div class="box-btn cent-mar edit-box-pad">Home</div>
                        <div class="manage-phone">9400805196</div>
                        <div class="manage-full-address">
                            Villadom, Kaplinghat, Thrissur, Thrissur, 680631, Kerala, India
                        </div>
                    </div>

                    <button class="manage-edit-btn">
                    <img class="gl-w-15p" src="{{asset('web/assets/images/checkout/change.svg')}}"> Edit
                </button>
                </div>
                <div class="manage-right">
                    <div class="manage-radio manage-selected" tabindex="0" role="button" aria-pressed="true"></div>
                </div>
            </div>

            <div class="manage-footer">
                <button class="manage-back-btn" onclick="manageClosePopup()">Back</button>
            </div>

        </div>
    </div>


    <!-- popup-section--------------------------------------------------------------------------------------------------------------------------- -->
    <!-- popup-section-two--------------------------------------------------------------------------------------------------------------------------- -->

    <!-- SECOND POPUP : ADD / EDIT ADDRESS -->
    <div class="manage-popup2-overlay" id="managePopup2">
        <div class="manage-popup2-box">

            <div class="manage-popup2-header">
                <div class="manage-popup2-title">Personal Information</div>
            </div>
            <div class="manage-popup2-title gl-w-100 gl-po-rel gl-d-flex gl-justify-c gl-fw-600 gl-fs-14">Edit Address</div>
            <div class="manage-popup2-content">

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
                    <div class="manage-cancel-btn" onclick="closeManagePopup2()">Cancel</div>
                </div>

            </div>

        </div>
    </div>
@endsection
