@extends('website.layout.app')
@section('content')

    <div class="banner_slider">
        <div class="banner-slide active">
            <img src="{{asset('web/assets/images/home/banner-one.webp')}}">

            <div class="gl-w-100 gl-po-abs gl-d-flex abs-ban-cntent gl-pl-90 gl-pr-90 gl-xxl-pl-60 gl-xxl-pr-60 gl-xl-pl-40 gl-xl-pr-40 gl-xs-pl-20 gl-xs-pr-20 z-index-area">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-sm-fd-column  gl-justify-sb ">
                    <div class="gl-po-rel gl-d-flex gl-fd-column">
                        <div class="gl-po-rel gl-d-flex gl-fd-row gap-cstm gl-pb-30 gl-xs-pb-15">
                            <div class="fix-count">01</div>
                            <div class="count-line">-</div>
                            <div class="counter-change">03</div>
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-sm-pb-20">
                            <div class="banner-head">NEW ARRIVALS DROP</div>
                            <div class="banner-head">FOR MEN</div>
                        </div>
                    </div>


                    <a href="new-in.html" class="common-w-b-butn banner-btns gl-td-none ">
                        <div class="w-b-head">Shop Now</div>
                        <div class="arrow-box ">
                            <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>




                </div>
            </div>
        </div>

        <div class="banner-slide">
            <img src="{{asset('web/assets/images/home/banner-two.webp')}}">

            <div class="gl-w-100 gl-po-abs gl-d-flex abs-ban-cntent gl-pl-90 gl-pr-90 gl-xxl-pl-60 gl-xxl-pr-60 gl-xl-pl-40 gl-xl-pr-40 gl-xs-pl-20 gl-xs-pr-20 z-index-area">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-sm-fd-column gl-justify-sb ">
                    <div class="gl-po-rel gl-d-flex gl-fd-column">
                        <div class="gl-po-rel gl-d-flex gl-fd-row gap-cstm gl-pb-30 gl-xs-pb-15">
                            <div class="fix-count">02</div>
                            <div class="count-line">-</div>
                            <div class="counter-change">03</div>
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-sm-pb-20">
                            <div class="banner-head">LIMITED-TIME OFFERS</div>
                            <div class="banner-head">FOR LIMITLESS STYLE.</div>
                        </div>
                    </div>


                    <a href="new-in.html" class="common-w-b-butn banner-btns gl-td-none ">
                        <div class="w-b-head">Shop Now</div>
                        <div class="arrow-box ">
                            <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>




                </div>
            </div>
        </div>

        <div class="banner-slide">
            <img src="{{asset('web/assets/images/home/banner-three.webp')}}">

            <div class="gl-w-100 gl-po-abs gl-d-flex abs-ban-cntent gl-pl-90 gl-pr-90 gl-xxl-pl-60 gl-xxl-pr-60 gl-xl-pl-40 gl-xl-pr-40 gl-xs-pl-20 gl-xs-pr-20 z-index-area">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-sm-fd-column gl-justify-sb ">
                    <div class="gl-po-rel gl-d-flex gl-fd-column">
                        <div class="gl-po-rel gl-d-flex gl-fd-row gap-cstm gl-pb-30 gl-xs-pb-15">
                            <div class="fix-count">03</div>
                            <div class="count-line">-</div>
                            <div class="counter-change">03</div>
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-sm-pb-20">
                            <div class="banner-head">PREMIUM LOOKS, POCKET-</div>
                            <div class="banner-head">FRIENDLY PRICES.</div>
                        </div>
                    </div>


                    <a href="new-in.html" class="common-w-b-butn banner-btns gl-td-none ">
                        <div class="w-b-head">Shop Now</div>
                        <div class="arrow-box ">
                            <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>




                </div>
            </div>
        </div>

        <div class="banner-indicators">
            <div class="indicator"><span class="progress"></span></div>
            <div class="indicator"><span class="progress"></span></div>
            <div class="indicator"><span class="progress"></span></div>
        </div>
    </div>



    <!-- slider-section end------- -->


    <!-- best-seller-area----------------- -->

    <div class="common-container">
        <div class="common-btn-heading gl-mt-70 gl-xs-mt-40 gl-mb-40 gl-xs-mb-20">
            <div class="btn-heading">BEST SELLERS</div>
            <a href="new-in.html" class="black-btn gl-td-none">VIEW ALL</a>
        </div>
    </div>

    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-gap-20">
            <a href="product-detail.html" class="gl-w-50 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                <div class="best-seller-box">Best Seller</div>

                <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                    <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-one.webp')}}">
                </div>

                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                    <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                    <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap  gl-gap-10">
                        <div class="product-rate">₹999.00</div>
                        <div class="product-rate-without-ofr ">₹1,199</div>
                        <div class="offer-percentage">15% OFF</div>
                    </div>
                </div>
            </a>
            <div class="gl-w-50 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column">
                <div class="best-seller-grids col5_best_sellers">

                    <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                        <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                            <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-two.webp')}}">
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                            <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                            <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10 ">
                                <div class="product-rate">₹999.00</div>
                                <div class="product-rate-without-ofr ">₹1,199</div>
                                <div class="offer-percentage">15% OFF</div>
                            </div>
                        </div>
                    </a>
                    <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                        <div class="best-seller-box">Best Seller</div>
                        <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                            <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-three.webp')}}">
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                            <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                            <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                                <div class="product-rate">₹999.00</div>
                                <div class="product-rate-without-ofr ">₹1,199</div>
                                <div class="offer-percentage">15% OFF</div>
                            </div>
                        </div>
                    </a>
                    <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                        <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                            <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-four.webp')}}">
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                            <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                            <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                                <div class="product-rate">₹999.00</div>
                                <div class="product-rate-without-ofr ">₹1,199</div>
                                <div class="offer-percentage">15% OFF</div>
                            </div>
                        </div>
                    </a>
                    <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                        <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                            <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-five.webp')}}">
                        </div>

                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                            <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                            <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                                <div class="product-rate">₹999.00</div>
                                <div class="product-rate-without-ofr ">₹1,199</div>
                                <div class="offer-percentage">15% OFF</div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>





        </div>
    </div>


    <div class="common-container">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-50">
            <div class="best-seller-grid col5_best_seller">

                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                    <div class="best-seller-box">Best Seller</div>
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-six.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-seven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                    <div class="best-seller-box">Best Seller</div>
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eight.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-nine.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-ten.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eleven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-twelve.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="product-detail.html" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-thirteen.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>



    </div>

    <!-- best-seller-area-end----------------- -->

    <!-- our-story-area----------------------- -->

    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column our-story-bg gl-mt-70">

        <img class="dude-width gl-zindex-3 " src="{{asset('web/assets/images/home/our-story/dude.png')}}">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-fe gl-md-pb-40 ">
            <img class="gl-md-w-100" src="{{asset('web/assets/images/home/our-story/pattern.png')}}">
        </div>

        <div class="gl-w-100 gl-po-rel gl-d-flex anim-text">
            <div class="story-head gl-w-100 gl-po-rel gl-d-flex gl-pl-30 gl-xs-pl-20 ">our story, </div>
        </div>
        <div class="gl-w-100 gl-po-rel gl-d-flex anim-text ">
            <div class="story-head gl-w-100 gl-po-rel gl-d-flex gl-pl-30 gl-xs-pl-20 gl-justify-fe gl-md-justify-fs pad-top-text flash-bw ">your style </div>
        </div>
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-fe gl-md-justify-fs pad-top-200s">
            <div class="gl-w-30 gl-xl-w-35 gl-md-w-70 gl-xs-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pr-60 gl-md-pl-30 gl-xs-pl-20 gl-xs-pr-20 ">

                <div class="small-story  gl-pb-20">Zwag is a modern online destination for men who value style, comfort, and confidence. We bring together trend-driven designs and timeless classics to create a collection that fits every mood and moment.</div>
                <div class="small-story ">From casual streetwear to refined formals, every piece at Zwag is crafted with attention to detail, premium fabrics, and a touch of bold individuality.</div>

                <a href="about-us.html" class="common-w-b-butn gl-mt-30 gl-xl-mb-20 gl-td-none">
                    <div class="w-b-head">Our Story</div>
                    <div class="arrow-box ">
                        <img class="arow-size" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                    </div>
                </a>


            </div>
        </div>

        <img class="dude-width-res gl-zindex-3" src="{{asset('web/assets/images/home/our-story/dude.png')}}">


        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-fs gl-zindex-2 ">
            <img class="gl-md-w-100" src="{{asset('web/assets/images/home/our-story/pattern.png')}}">
        </div>


    </div>


    <!-- our-story-area-end----------------------- -->

    <div class="common-container">
        <div class="category-head-area gl-d-flex gl-fd-column gl-pt-120 gl-md-pt-60 gl-xs-pt-40">
            <div class="category-head gl-w-100 gl-po-rel gl-d-flex gl-justify-c gl-pb-10 scroll-up-anim">our category</div>

            <div class="category-head-content gl-w-50 gl-md-w-80 gl-xs-w-100 gl-m-auto gl-pb-60 gl-md-pb-30 scroll-up-anim">Discover everything you need to elevate your wardrobe — all in one place. From everyday essentials to statement pieces, our men’s clothing categories are designed to help you shop smarter and dress sharper.</div>


            <section class="video-section">
                <div class="left-video">
                    <div class="video-category">top wear</div>
                    <video src="{{asset('web/assets/images/home/video-section/vid-one.mp4')}}" autoplay muted loop></video>
                </div>

                <div class="right-videos">
                    <div class="top-video">
                        <div class="video-category">bottom wear</div>
                        <video src="{{asset('web/assets/images/home/video-section/vid-two.mp4')}}" autoplay muted loop></video>
                    </div>
                    <div class="bottom-video">
                        <div class="video-category">ACCESSORIES</div>
                        <video src="{{asset('web/assets/images/home/video-section/vid-three.mp4')}}" autoplay muted loop></video>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div class="common-container">
        <div class="common-btn-heading gl-mt-70 gl-xs-mt-40 gl-mb-40 gl-xs-mb-20">
            <div class="btn-heading">NEW ARRIVALS</div>
            <a href="new-in.html" class="black-btn gl-td-none">VIEW ALL</a>
        </div>
    </div>

    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column ">
            <div class="best-seller-grid col5_best_seller">

                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">


                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">

                        <div class="new-icon">
                            <div class="gl-po-rel gl-d-flex gl-fd-column">
                                <img class="gl-w-75p gl-md-w-40p" src="{{asset('web/assets/images/home/star.svg')}}">
                                <span class="icon-label gl-po-abs">New</span>
                            </div>
                        </div>

                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-six.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">


                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-seven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">


                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">

                        <div class="new-icon">
                            <div class="gl-po-rel gl-d-flex gl-fd-column">
                                <img class="gl-w-75p gl-md-w-40p" src="{{asset('web/assets/images/home/star.svg')}}">
                                <span class="icon-label gl-po-abs">New</span>
                            </div>
                        </div>

                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eight.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-nine.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-ten.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eleven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-twelve.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">

                        <div class="new-icon">
                            <div class="gl-po-rel gl-d-flex gl-fd-column">
                                <img class="gl-w-75p gl-md-w-40p" src="{{asset('web/assets/images/home/star.svg')}}">
                                <span class="icon-label gl-po-abs">New</span>
                            </div>
                        </div>

                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-thirteen.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-three.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-ten.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-three.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">

                        <div class="new-icon">
                            <div class="gl-po-rel gl-d-flex gl-fd-column">
                                <img class="gl-w-75p gl-md-w-40p" src="{{asset('web/assets/images/home/star.svg')}}">
                                <span class="icon-label gl-po-abs">New</span>
                            </div>
                        </div>

                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eight.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>

            </div>
        </div>



    </div>

    <div class="zwag-logo-slide gl-mt-70 gl-xs-mt-40">
        <div class="logo-track" id="logoTrack">
            <img src="{{asset('web/assets/images/home/logo-swag-slide.svg')}}" class="logo-item">
        </div>
    </div>



    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex  gl-fd-row gl-md-fd-column gl-gap-20 gl-pt-70 gl-xs-pt-40">
            <div class="gl-w-50 gl-md-w-100 gl-po-rel gl-d-flex">
                <img class="gl-w-100" src="{{asset('web/assets/images/home/collection-img.webp')}}">
            </div>

            <div class="gl-w-50 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column gl-justify-sb bg-collection">
                <img src="{{asset('web/assets/images/home/patetrn-collection.png')}}">

                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-md-py-40">
                    <div class="colction-sub scroll-up-anim">New In - Top Wears</div>
                    <div class="colction-big scroll-up-anim">Redefine Casual Comfort</div>
                    <div class="colction-contents scroll-up-anim">Step into effortless style with Zwag’s collection of modern men’s top wear. Designed for today’s lifestyle, our range blends sharp tailoring with everyday comfort.</div>
                    <a href="new-in.html" class="common-w-b-butn gl-m-auto gl-mt-25 gl-td-none">
                        <div class="w-b-head">Discover Collection</div>
                        <div class="arrow-box ">
                            <img class="arow-size" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>
                </div>

                <img src="{{asset('web/assets/images/home/patetrn-collection.png')}}">
            </div>

        </div>
    </div>




    <div class="common-container">
        <div class="common-btn-heading gl-mt-70 gl-md-mt-40 gl-mb-40">
            <div class="btn-heading">LATEST TRENDS</div>
            <a href="new-in.html" class="black-btn gl-td-none">VIEW ALL</a>
        </div>
    </div>

    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pb-70 ">
            <div class="best-seller-grid col5_best_seller">

                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">


                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-six.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-seven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">


                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eight.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-nine.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-ten.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eleven.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-twelve.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-thirteen.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt</div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>



            </div>
        </div>



    </div>


    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column testi-bg gl-pl-70 gl-sm-pl-30 gl-xs-pl-0 gl-pb-40 gl-xs-pb-80">
        <div class="testimonial-head gl-pt-60 gl-xs-pt-40">WHAT OUR CUSTOMERS SAY</div>
        <div class="testimonial-content-head gl-pt-10 gl-w-35 gl-md-w-70 gl-xs-w-90 gl-m-auto gl-md-pb-60 gl-xs-pb-0">Our customers inspire us every day. Hear their experiences and see why they choose us for quality, style, and service.</div>

        <div class="testimonial-slider-container">

            <!-- Top Right Navigation -->
            <div class="slider-nav">

                <button class="nav-btn swiper-button-next" aria-label="Next">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none" aria-hidden="true">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66634 0L-0.000325203 1.66667L4.99967 6.66667L-0.000325203 11.6667L1.66634 13.3333L8.33301 6.66667L1.66634 0Z" fill="black"/>
                </svg>
                </button>


                <button class="nav-btn swiper-button-prev" aria-label="Previous">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" viewBox="0 0 9 14" fill="none" aria-hidden="true">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66634 0L-0.000325203 1.66667L4.99967 6.66667L-0.000325203 11.6667L1.66634 13.3333L8.33301 6.66667L1.66634 0Z" fill="black"/>
                </svg>
                </button>
            </div>

            <div class="swiper testiSwiper">
                <div class="swiper-wrapper">


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="single-testi">
                            <img class="img-brick" src="{{asset('web/assets/images/home/testimonial/brick.png')}}">
                            <div class="client-img">
                                <img src="{{asset('web/assets/images/home/testimonial/client-one.png')}}">
                            </div>
                            <div class="testimonial-content">
                                I’ve shopped from many online fashion stores, but the quality here truly stands out. The fabric feels premium, the stitching is strong, and the colors look exactly as shown on the website. Every piece feels thoughtfully designed.
                            </div>
                            <div class="test-name">Rohit Mehta</div>
                        </div>
                    </div>




                </div>
            </div>
        </div>


    </div>


    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-80 gl-xs-pt-50">
        <div class="follow-area">Follow us on social media<br>@zwag for updates</div>

        <div class="infinite-slider">
            <div class="slider-track" id="sliderTrack">

                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-one.png')}}" /></a>


                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-two.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-three.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-four.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-one.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-two.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-three.png')}}" /></a>
                <a href="#"><img src="{{asset('web/assets/images/home/infinite-slider/infinite-slide-four.png')}}" /></a>
            </div>
        </div>
    </div>

@endsection
