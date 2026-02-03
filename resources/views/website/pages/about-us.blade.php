@extends('website.layout.app')
@section('content')
    <!-- banner-section------- -->

    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column banner-common-about gl-justify-fe">
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-gap-10 gl-pl-50 gl-pb-50 gl-xs-pb-20 gl-xs-pl-20">
            <div class="about-banner-head"> OUR STORY</div>

        </div>
    </div>

    <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-clr-abt gl-pt-75 gl-pb-75 gl-xs-pt-40 gl-xs-pb-40  ">

        <div class="about_head gl-w-100 gl-po-rel gl-d-flex gl-justify-c scroll-up-anim">HOW ZWAG STARTED</div>
        <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-c">
            <img src="{{asset('web/assets/images/about/about-icon.svg')}}">
        </div>

        <div class="gl-w-50 gl-sm-w-90 gl-po-rel gl-d-flex gl-m-auto abt-para gl-pt-30 gl-pb-40 scroll-up-anim">
            At Zwag, we blend contemporary design, premium fabrics, and effortless comfort to create apparel that fits your lifestyle. Whether you’re heading to work, hanging out with friends, or stepping out for a special occasion, our collection keeps you looking
            sharp and feeling unstoppable.
        </div>


        <a href="new-in.html" class="common-w-b-butn banner-btns gl-td-none gl-m-auto ">
            <div class="w-b-head">Shop Now</div>
            <div class="arrow-box ">
                <img class="arow-size banner-arrow" src="{{asset('web/assets/images/home/our-story/right-arrow.svg')}}">
            </div>
        </a>
    </div>


    <div class="gl-w-100 style-bg-clr">
        <div class="common-container ">

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-pt-60 gl-xs-pt-40">

                <div class="style-head-abt-cmn gl-w-100 gl-po-rel gl-d-flex gl-sm-justify-c  gl-pb-20 scroll-up-anim">STYLE MADE SIMPLE. </div>

                <div class="gl-w-100 gl-po-rel gl-d-flex gl-justify-c ">
                    <div class="gl-po-rel gl-d-flex">
                        <img class="gl-w-100" src="{{asset('web/assets/images/about/abt-center-img.png')}}">
                        <img class="gl-po-abs rotate-img" src="{{asset('web/assets/images/about/round-anim.png')}}">
                    </div>
                </div>


                <div class="style-head-abt-cmn gl-w-100 gl-po-rel gl-d-flex gl-pt-10 gl-xs-pt-20  gl-justify-fe gl-sm-justify-c scroll-up-anim ">CONFIDENCE MADE BOLD. </div>



                <div class="gl-w-100 gl-po-rel gl-d-flex gl-pb-80 gl-sm-pb-30 pad-left-cmn-abt custm-mar-top-neg gl-xxl-pt-40">
                    <img src="{{asset('web/assets/images/about/philosophy.png')}}">
                </div>

                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row pad-left-cmn-abt gl-sm-fd-column">
                    <div class="gl-w-60 gl-lg-w-50 gl-sm-w-100 gl-po-rel gl-d-flex gl-fd-column">
                        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column">
                            <div class="gl-w-100 gl-po-rel gl-d-flex philo-head scroll-up-anim">THE ZWAG STYLE </div>
                            <div class="gl-w-100 gl-po-rel gl-d-flex philo-head scroll-up-anim">PHILOSOPHY</div>
                        </div>


                        <div class="gl-w-50 gl-sm-w-100 gl-xxl-w-80 gl-po-rel gl-d-flex philo-para gl-pt-30 gl-xs-pt-10 scroll-up-anim">
                            Our philosophy is simple — style should be effortless, not complicated. That’s why every piece we create balances modern trends with timeless appeal. From crisp shirts and smart trousers to laid-back casuals and bold streetwear, Zwag brings you the perfect
                            mix of sophistication and edge.
                        </div>
                    </div>

                    <div class="gl-w-40 gl-lg-w-50 gl-sm-w-100 gl-po-rel gl-d-flex mar-top-neg-second">
                        <img class="for-res gl-sm-pt-20" src="{{asset('web/assets/images/about/shape-img.png')}}">
                    </div>
                </div>






            </div>
        </div>


        <div class="gl-w-100 gl-po-rel gl-d-flex gl-pt-80 gl-pb-40 gl-xs-pt-40 gl-xs-pb-20">
            <img class="gl-w-100" src="{{asset('web/assets/images/about/style-big.png')}}">
        </div>
    </div>






    <!-- banner-section end------- -->









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
