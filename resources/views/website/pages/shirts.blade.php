@extends('website.layout.app')
@section('content')
<div class="category-wrap-clr for-script">
        <div class="common-container">
            <div class="category-wrapper">
                <div class="category-menu">
                    <div class="cat-item active">All Products</div>
                    <div class="cat-item">T-Shirts</div>
                    <div class="cat-item">Sweatshirts</div>
                    <div class="cat-item">Airport Wear</div>
                    <div class="cat-item">Polos</div>
                    <div class="cat-item">Hoodies</div>
                    <div class="cat-item">Shirts</div>
                    <div class="cat-item">Cargos</div>
                    <div class="cat-item">Shorts</div>
                    <div class="cat-item">Jeans</div>
                    <div class="cat-item">Pants</div>
                    <div class="cat-item">Bag</div>
                    <div class="cat-item">Ring</div>
                    <div class="cat-item">Bracelet</div>
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
            <!-- <a href="" class="bnr-link">S</a>
            <div class="bnr-link">/</div> -->
            <a href="shirts.html" class="bnr-link">SHIRTS</a>
        </div>
    </div>
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

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-m-auto gl-pt-60 gl-pb-60">
            <a href="#" class="common-w-b-butn brdr-for-btn-commn banner-btns gl-td-none gl-m-auto  ">
                <div class="w-b-head">Load More</div>
                <div class="arrow-box ">
                    <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
                </div>
            </a>

        </div>

    </div>
@endsection
