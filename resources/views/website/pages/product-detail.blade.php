@extends('website.layout.app')
@section('content')
 <div class="common-container bg-detail">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-md-fd-column gl-pt-30 gl-justify-sb   ">

            <div class="gl-w-45 gl-md-w-100 gl-po-rel gl-d-flex mar-slider-detail gl-md-pb-40">
                <div class="product-gallery">

                    <!-- Thumbnail Slider -->
                    <div class="thumbnail-box">

                        <!-- Slider Container -->
                        <div class="swiper thumbSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="thumb active" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/big-two.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                                <div class="swiper-slide">
                                    <img class="thumb" src="{{asset('web/assets/images/product-details/small-img.png')}}" onclick="changeImage(this)">
                                </div>
                            </div>
                        </div>

                        <!-- Prev / Next buttons INSIDE thumbnail-box -->
                        <div class="thumb-btn prev-thumb"></div>
                        <div class="thumb-btn next-thumb"></div>

                    </div>

                    <!-- Main Image -->
                    <div class="main-image-box">
                        <img id="mainImage" src="{{asset('web/assets/images/product-details/big-img.png')}}">
                    </div>

                </div>
            </div>


            <div class="gl-w-50 gl-md-w-100 gl-po-rel gl-d-flex gl-fd-column">
                <div class="product-container">

                    <div class="breadcrumb gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-small">

                        <a href="#" class="brd-crump-link">Home</a>
                        <a href="#" class="brd-crump-link">/</a>
                        <a href="#" class="brd-crump-link">New In</a>
                        <a href="#" class="brd-crump-link">/</a>
                        <a href="#" class="brd-crump-link">T-Shirts</a>
                    </div>

                    <h2 class="product-title">Men's Graphic Regular Fit T-Shirt</h2>

                    <div class="price-section">
                        <span class="new-price">₹999.00</span>
                        <span class="old-price">₹1,199</span>
                        <span class="discount">15% OFF</span>
                    </div>
                    <hr>
                    <!-- SIZE -->
                    <div class="section-title">Size</div>

                    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-xs-fd-column gap-details">
                        <div class="size-boxes">
                            <div class="size ">S</div>
                            <div class="size active">M</div>
                            <div class="size">L</div>
                            <div class="size">XL</div>
                            <div class="size">XXL</div>
                            <div class="size">XXXL</div>
                        </div>

                        <!-- Quantity -->
                        <div class="qty-wrapper">
                            <button class="qty-btn" data-type="minus">−</button>
                            <div class="qty-number">1</div>
                            <button class="qty-btn" data-type="plus">+</button>
                        </div>
                    </div>

                    <!-- Sleeves -->
                    <div class="section-title">Sleeves</div>
                    <div class="sleeve-box gl-pb-20">
                        <div class="sleeve">Full sleeve</div>
                        <div class="sleeve active">Half sleeve</div>
                    </div>

                    <hr>

                    <!-- Delivery -->
                    <div class="section-title extra-title">Delivery Details</div>

                    <div class="delivery-flex">
                        <input type="text" placeholder="Enter Your Pincode">
                        <button class="check-btn">Check</button>
                    </div>

                    <div class="gift-card gl-pt-20">
                        <input type="checkbox"> Have A Gift Card
                    </div>

                    <!-- Buttons -->
                    <div class="btn-row gl-pb-30">
                        <a href="cart.html" class="add-cart gl-td-none">Add To Cart</a>
                        <a href="checkout.html" class="buy-now gl-td-none">Buy Now</a>
                    </div>





                </div>
                <div class="tab-container">
                    <div class="tab-header">
                        <div class="tab-btn active" data-tab="desc">Description</div>
                        <div class="tab-btn" data-tab="size">Size & Fit</div>
                        <div class="tab-btn" data-tab="ship">Shipping Policy</div>
                    </div>

                    <div class="tab-content active" id="desc">
                        Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </div>

                    <div class="tab-content" id="size">
                        <div class="size_fit_table_wrap">
                            <table class="size_fit_table">
                                <thead>
                                    <tr>
                                        <th>If Your Chest Measures (A)</th>
                                        <th>Then Pick Size</th>
                                        <th>Length (C)</th>
                                        <th>Waist (B)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>36–37</td>
                                        <td>XS</td>
                                        <td>27</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>38–39</td>
                                        <td>S</td>
                                        <td>28</td>
                                        <td>37</td>
                                    </tr>
                                    <tr>
                                        <td>40–41</td>
                                        <td>M</td>
                                        <td>28</td>
                                        <td>39</td>
                                    </tr>
                                    <tr>
                                        <td>42–43</td>
                                        <td>L</td>
                                        <td>30</td>
                                        <td>41</td>
                                    </tr>
                                    <tr>
                                        <td>44–45</td>
                                        <td>XL</td>
                                        <td>31</td>
                                        <td>43</td>
                                    </tr>
                                    <tr>
                                        <td>46–47</td>
                                        <td>XXL</td>
                                        <td>32</td>
                                        <td>45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-content" id="ship">

                        <ul class="gl-p-10">
                            <li class="list-styles gl-pb-20"> Shipping costs and delivery times may vary depending on your location and the shipping method chosen.</li>
                            <li class="list-styles"> We are not responsible for delays or damages that occur during the shipping process.</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="common-container">
        <div class="common-btn-heading gl-mt-70 gl-xs-mt-40 gl-mb-40 gl-xs-mb-20">
            <div class="btn-heading">RELATABLE PRODUCTS</div>
            <div class="black-btn">VIEW ALL</div>
        </div>
    </div>
    <div class="common-container gl">

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-50 gl-sm-pt-30 gl-xs-pt-0">
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

    <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-c gl-pt-70 gl-pb-40">
        <a href="#" class="common-w-b-butn banner-btns gl-td-none brder-for-btn ">
            <div class="w-b-head">Load More</div>
            <div class="arrow-box ">
                <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
            </div>
        </a>
    </div>
@endsection
