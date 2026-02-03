@extends('website.layout.app')
@section('content')


    <div class="category-wrap-clr for-script">
        <div class="common-container">
            <div class="category-wrapper">
                <div class="category-menu">
                    <div class="cat-item active">All Products</div>
                     @foreach($headerCategories as $cat)
                     @foreach($cat->subcategories as $sub)
                    <div class="cat-item"> {{ $sub->sub_category }} </div>
                    @endforeach
                    @endforeach
                </div>

                <div class="scroll-line">
                    <span class="scroll-indicator"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column banner-common-bg gl-justify-fe">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 gl-pl-50 gl-pb-50 gl-sm-pl-20 gl-sm-pb-20">
            <a href="index.html" class="bnr-link">HOME </a>
            <div class="bnr-link">/</div>
            <a href="new-in.html" class="bnr-link">NEW IN</a>
            <div class="bnr-link">/</div>
            <a href="" class="bnr-link">ALL PRODUCTS</a>
        </div>
    </div>



    <!-- banner-section end------- -->


    <!-- filter-area------------------------------------------------------------ -->

    <div class="filter-mobile-btn">
        <div class="res-mob-filter gl-d-flex gl-gap-10 gl-justify-c">
            <div class="gl-po-rel gl-d-flex">FILTER</div>
            <img class="gl-md-w-20p" src="{{asset('web/assets/images/new-in/res-filter.svg')}}">
        </div>
        <div class="res-mob-filter"><span class="gl-pr-10">200</span>PRODUCTS</div>
    </div>
    <div class="common-container">
        <div class="filter-wrapper">

            <div class=""></div>


            <div class="filter-bar">

                <div class="filtr-first-area">
                    <div class="filter-item">FILTER :</div>
                    <div class="filter-item" data-drop="size">SIZE ▾</div>
                    <div class="filter-item" data-drop="sleeves">SLEEVES ▾</div>
                    <div class="filter-item" data-drop="material">MATERIAL ▾</div>
                    <div class="filter-item" data-drop="price">PRICE ▾</div>
                    <div class="filter-item" data-drop="availability">AVAILABILITY ▾</div>
                </div>

                <div class="filtr-second-area">
                    <div class="filter-right">
                        <div class="filter-item" data-drop="featured">FEATURED ▾</div>
                        <div class="product-count">200 PRODUCTS</div>
                    </div>
                </div>
            </div>

            <div class="dropdown-box" id="size">
                <div class="drop-head"><span>0 SELECTED</span> <span class="reset-btn">RESET</span></div>

                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <label><input type="checkbox"> S</label>
                    <label><input type="checkbox"> M</label>
                    <label><input type="checkbox"> L</label>
                    <label><input type="checkbox"> XL</label>
                    <label><input type="checkbox"> XXL</label>
                    <label><input type="checkbox"> XXXL</label>
                </div>
            </div>

            <div class="dropdown-box" id="sleeves">
                <div class="drop-head"><span>0 SELECTED</span> <span class="reset-btn">RESET</span></div>
                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <label><input type="checkbox"> HALF SLEEVES</label>
                    <label><input type="checkbox"> FULL SLEEVES</label>
                </div>
            </div>

            <div class="dropdown-box" id="material">
                <div class="drop-head"><span>0 SELECTED</span> <span class="reset-btn">RESET</span></div>
                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <label><input type="checkbox"> DENIM</label>
                    <label><input type="checkbox"> COTTON</label>
                    <label><input type="checkbox"> LINEN</label>
                </div>
            </div>

            <div class="dropdown-box" id="price">
                <div class="drop-head gl-justify-fe"><span class="reset-btn">RESET</span></div>

                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <p class="price-text">THE HIGHEST PRICE IS RS.1,500.00</p>
                    <div class="price-inputs">
                        <input type="text" placeholder="₹0.00">
                        <input type="text" placeholder="₹1500.00">
                    </div>

                    <div class="apply-btn gl-mt-20 gl-mb-20">APPLY</div>
                </div>
            </div>

            <div class="dropdown-box" id="availability">
                <div class="drop-head"><span>0 SELECTED</span> <span class="reset-btn">RESET</span></div>
                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <label><input type="checkbox"> IN STOCK [150]</label>
                    <label><input type="checkbox"> OUT OF STOCK [50]</label>
                </div>
            </div>

            <div class="dropdown-box" id="featured">
                <div class="drop-head"><span>0 SELECTED</span> <span class="reset-btn">RESET</span></div>
                <div class="gl-w-100 gl-po-rel gl-p-15">
                    <label> FEATURED</label>
                    <label> BEST SELLING</label>
                    <label> ALPHABETTICALY, A-Z</label>
                    <label> ALPHABETTICALY, Z-A</label>
                    <label> PRICE, LOW TO HIGH</label>
                    <label> PRICE, HIGH TO LOW</label>
                </div>
            </div>

        </div>


        <div class="filter-popup">
            <div class="filter-popup-inner">

                <div class="popup-close">✕</div>

                <div class="popup-section">
                    <div class="popup-title">SIZE ▾</div>
                    <label><input type="checkbox"> S</label>
                    <label><input type="checkbox"> M</label>
                    <label><input type="checkbox"> L</label>
                    <label><input type="checkbox"> XL</label>
                    <label><input type="checkbox"> XXL</label>
                    <label><input type="checkbox"> XXXL</label>
                </div>

                <div class="popup-section">
                    <div class="popup-title">SLEEVES ▾</div>
                    <label><input type="checkbox"> HALF SLEEVES</label>
                    <label><input type="checkbox"> FULL SLEEVES</label>
                </div>

                <div class="popup-section">
                    <div class="popup-title">MATERIAL ▾</div>
                    <label><input type="checkbox"> DENIM</label>
                    <label><input type="checkbox"> COTTON</label>
                    <label><input type="checkbox"> LINEN</label>
                </div>

                <div class="popup-section">
                    <div class="popup-title">PRICE</div>
                    <p class="price-text">THE HIGHEST PRICE IS RS.1,500.00</p>
                    <div class="price-inputs">
                        <input type="text" placeholder="₹0.00">
                        <input type="text" placeholder="₹1500.00">
                    </div>
                </div>

                <div class="popup-section">
                    <div class="popup-title">AVAILABILITY ▾</div>
                    <label><input type="checkbox"> IN STOCK [150]</label>
                    <label><input type="checkbox"> OUT OF STOCK [50]</label>
                </div>

                <div class="popup-section">
                    <div class="popup-title">FEATURED ▾</div>
                    <label><input type="checkbox"> BEST SELLING</label>
                    <label><input type="checkbox">  ALPHABETTICALY, A-Z</label>
                    <label><input type="checkbox"> ALPHABETTICALY, Z-A</label>
                    <label><input type="checkbox">  PRICE, LOW TO HIGH</label>
                    <label><input type="checkbox"> PRICE, HIGH TO LOW</label>

                </div>

                <div class="popup-bottom">
                    <div class="popup-count">0 SELECTED</div>
                    <div class="popup-reset">RESET</div>
                </div>

            </div>
        </div>
    </div>




    <!-- filter-area------------------------------------------------------------ -->



    <div class="common-container">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-30 gl-md-pt-10">
            <div class="best-seller-grid col5_best_seller">

                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                    <div class="best-seller-box">Best Seller</div>
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-six.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
                        <div class="product-details gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-wrap gl-gap-10">
                            <div class="product-rate">₹999.00</div>
                            <div class="product-rate-without-ofr ">₹1,199</div>
                            <div class="offer-percentage">15% OFF</div>
                        </div>
                    </div>
                </a>


                <a href="" class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-td-none">

                    <div class="best-seller-box">Best Seller</div>
                    <div class="gl-w-100 gl-po-rel gl-d-flex zoom-img-wrapper">
                        <img class="gl-w-100 zoom-img" src="{{asset('web/assets/images/home/best-seller/best-eight.webp')}}">
                    </div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-15">
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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

    <!-- center-banner-section---------------- -->

    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-pt-70 gl-pb-70 ">
            <img class="gl-w-100 extra-img-cls ban-normal-img" src="{{asset('web/assets/images/new-in/second-banner.mp4')}}">
            <img class="gl-w-100 ban-res-img " src="{{asset('web/assets/images/new-in/first-res.png')}}">
            <div class="gl-w-100 gl-po-abs gl-d-flex">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column com-pt-abs">
                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-c  gap-40s-ban gl-pb-40-cmn">
                        <img class="auto-img" src="{{asset('web/assets/images/new-in/banr-logo.png')}}">
                        <img src="{{asset('web/assets/images/new-in/line.png')}}">
                        <div class="center-banner-text">2025 NEW ARRIVAL</div>
                    </div>

                    <div class="banner-prdct gl-pb-20 gl-xxl-pb-10"> T-Shirts</div>
                    <div class="banner-prdct-price gl-pb-40-cmn"> ₹800.00</div>


                    <a href="#" class="common-w-b-butn banner-btns gl-td-none gl-m-auto ">
                        <div class="w-b-head">Discover</div>
                        <div class="arrow-box ">
                            <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>
                </div>
            </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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

    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-pt-70 gl-pb-70 ">
            <img class="gl-w-100 extra-img-cls ban-normal-img" src="{{asset('web/assets/images/new-in/third-banner.png')}}">
            <img class="gl-w-100 ban-res-img " src="{{asset('web/assets/images/new-in/sec-res.png')}}">
            <div class="gl-w-100 gl-po-abs gl-d-flex">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column com-pt-abs">
                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-justify-c gap-40s-ban gl-pb-40-cmn">
                        <img class="auto-img" src="{{asset('web/assets/images/new-in/banr-logo.png')}}">
                        <img src="{{asset('web/assets/images/new-in/line.png')}}">
                        <div class="center-banner-text">OFFER COMING SOON</div>
                    </div>

                    <div class="banner-prdct gl-pb-20 gl-xxl-pb-10"> Jeans</div>
                    <div class="banner-prdct-price gl-pb-40-cmn"> ₹900.00</div>


                    <a href="#" class="common-w-b-butn banner-btns gl-td-none gl-m-auto ">
                        <div class="w-b-head">Discover</div>
                        <div class="arrow-box ">
                            <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                        </div>
                    </a>
                </div>
            </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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
                        <div class="product-name-cmn gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Men's Graphic Regular Fit T-Shirt
                        </div>
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


    <div class="common-container">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-70 gl-pb-70">
            <div class="bag-banner">
                <div class="gl-w-40 gl-xxl-w-50 gl-lg-w-60 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column gl-justify-c bag-m-auto gl-md-justify-fs gl-md-pt-40">
                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row  gap-40s-ban gl-pb-40-cmn gl-md-justify-c">
                        <img class="auto-img-bag" src="{{asset('web/assets/images/new-in/banr-logo.png')}}">
                        <img src="{{asset('web/assets/images/new-in/line.png')}}">
                        <div class="center-banner-text gl-ta-l">50% OFF ON ACCEESSORIES<br> PRODUCTS</div>

                    </div>
                    <div class="banner-prdct gl-pb-20 gl-xxl-pb-10 gl-d-flex gl-md-justify-c"> Jeans</div>
                    <div class="banner-prdct-price gl-pb-40-cmn gl-d-flex gl-md-justify-c"> ₹900.00</div>
                    <div class="gl-w-100 gl-d-flex  gl-d-flex gl-md-justify-c">
                        <a href="about-us.html" class="common-w-b-butn banner-btns-bag gl-td-none  ">
                            <div class="w-b-head">Discover</div>
                            <div class="arrow-box ">
                                <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
