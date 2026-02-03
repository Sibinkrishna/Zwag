@extends('website.layout.app')
@section('content')
<div class="bg-cart gl-w-100 gl-po-rel gl-pt-50 gl-xs-pt-30 gl-pb-40 gl-xs-pb-20 ">
        <div class="common-container">

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pb-40 gl-xs-pb-20">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10">
                    <img src="{{asset('web/assets/images/cart/arrow-left.svg')}}">
                    <a href="#" class="back-to-link gl-td-none">Continue Shopping</a>
                </div>
            </div>


            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-lg-fd-column gl-gap-40">
                <div class="gl-w-60 gl-lg-w-100 gl-po-rel gl-d-flex gl-fd-column brdr-box ">
                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row cart-head-bg gl-py-10 gl-px-15 gl-justify-sb">
                        <div class=" gl-po-rel gl-d-flex gl-fd-row gl-gap-20 mar-auto-head-cart">
                            <div class="cart-head-main">Your Cart</div>
                            <div class="cart-head-main">[3]</div>
                        </div>
                        <div class=" gl-po-rel gl-d-flex gl-fd-row ">
                            <a class="clear-cart-btn gl-gap-10" href="#">
                                <img src="{{asset('web/assets/images/cart/delete.svg')}}">
                                <div class="clr-cart-txt">Clear Cart</div>
                            </a>

                        </div>

                    </div>


                    <!-- desktop-design==============================-------------- -->

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column desk-view-cart">

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-px-15 gl-py-20 ">

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

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-px-15 gl-py-20 ">

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


                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-px-15 gl-py-20 ">

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

                    </div>
                    <!-- desktop-design-end==============================-------------- -->




                    <!-- mobile-design==============================-------------- -->


                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column mob-view-cart">


                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-px-15 gl-py-20 ">

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

                    </div>


                    <!-- mobile-design-end==============================-------------- -->





                </div>

                <div class="gl-w-40 gl-lg-w-100 gl-po-rel gl-d-flex bg-summary">
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

                        <a href="checkout.html" class="checkout-btn gl-td-none gl-mt-40">Continue To Checkout</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
