<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwag</title>
    <link rel="stylesheet" href="{{ asset('web/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/fw-style.css')}}">
    <link rel="stylesheet" href="{{ asset('web/assets/responsive.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="icon" href="" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@beta/bundled/locomotive-scroll.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Geist:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body>

    <div class="head-slide ">
        <div class="marquee" id="marquee">
            <span>FREE SHIPPING WORLDWIDE</span>
            <span>FREE SHIPPING WORLDWIDE</span>
            <span>FREE SHIPPING WORLDWIDE</span>
            <span>FREE SHIPPING WORLDWIDE</span>
            <span>FREE SHIPPING WORLDWIDE</span>
        </div>
    </div>
    <!-- header start -->
    <header class="header header-fixed">
        <div class="container-common">
            <div class=" header-area">
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!-- menu start here -->
                <div class="header-item ">
                    <div class="menu-overlay"></div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main mb-0-common">
                            <li>
                                <a href="{{ route('website.home') }}">HOME</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('website.new_in_page') }}">NEW IN </a>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">APPAREL <i class="fa fa-angle-down"></i></a>

                                <div class="sub-menu mega-menu mega-menu-column-4">
                                    @foreach($headerCategories as $cat)
                                    <div class="list-item">
                                        <div class="title caraousel-head">{{ $cat->category_name }}</div>
                                        <div class="list-drp gl-gap-50 gl-pt-25 gl-md-pt-0">
                                            @foreach($cat->subcategories->chunk(3) as $group)
                                            <div class="gl-po-rel gl-d-flex gl-fd-column">
                                                @foreach($group as $sub)
                                                <a href="#" class="listing"> {{ $sub->sub_category }}</a>
                                                @endforeach
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="about-us.html">OUR STORY </i></a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact-us.html">CONNECT</a>

                            </li>

                        </ul>
                    </nav>
                </div>


                <div class="header-item item-left  logo-section">
                    <a href="index.html" class="logo gl-td-none">

                        <img class="logo-width-cmn" src="{{asset('web/assets/images/home/zwag-logo.svg')}}">
                    </a>
                </div>
                <!-- menu end here -->
                <div class="header-item item-right">


                    <div class="click-area">
                        <div class="search-icon open-search-popup">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.1846 19.1855L14.6807 14.6816M14.6807 14.6816C15.4511 13.9112 16.0622 12.9966 16.4792 11.99C16.8961 10.9835 17.1107 9.90461 17.1107 8.81509C17.1107 7.72557 16.8961 6.64671 16.4792 5.64013C16.0622 4.63354 15.4511 3.71894 14.6807 2.94853C13.9103 2.17812 12.9957 1.567 11.9891 1.15006C10.9825 0.733121 9.90366 0.518524 8.81414 0.518524C7.72462 0.518524 6.64577 0.733121 5.63918 1.15006C4.6326 1.567 3.71799 2.17812 2.94758 2.94853C1.39168 4.50444 0.517578 6.6147 0.517578 8.81509C0.517578 11.0155 1.39168 13.1257 2.94758 14.6816C4.50349 16.2375 6.61375 17.1116 8.81414 17.1116C11.0145 17.1116 13.1248 16.2375 14.6807 14.6816Z" stroke="#1B1B1B" stroke-width="1.03704" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <a href="my-order.html" class="search-icon unwanted">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.583984 16.917C0.583984 15.6793 1.07565 14.4923 1.95082 13.6172C2.82599 12.742 4.01297 12.2503 5.25065 12.2503H14.584C15.8217 12.2503 17.0086 12.742 17.8838 13.6172C18.759 14.4923 19.2507 15.6793 19.2507 16.917C19.2507 17.5358 19.0048 18.1293 18.5672 18.5669C18.1296 19.0045 17.5362 19.2503 16.9173 19.2503H2.91732C2.29848 19.2503 1.70499 19.0045 1.2674 18.5669C0.829817 18.1293 0.583984 17.5358 0.583984 16.917Z" stroke="#1B1B1B" stroke-width="1.16667" stroke-linejoin="round"/>
                            <path d="M9.91797 7.58334C11.851 7.58334 13.418 6.01634 13.418 4.08334C13.418 2.15035 11.851 0.583344 9.91797 0.583344C7.98497 0.583344 6.41797 2.15035 6.41797 4.08334C6.41797 6.01634 7.98497 7.58334 9.91797 7.58334Z" stroke="#1B1B1B" stroke-width="1.16667"/>
                            </svg>

                        </a>
                        <a href="cart.html" class="search-icon gl-td-none unwanted">

                            <div class="round-ico">04</div>

                            <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5789 15C17.1652 15 17.7275 15.2107 18.142 15.5858C18.5566 15.9609 18.7895 16.4696 18.7895 17C18.7895 17.5304 18.5566 18.0391 18.142 18.4142C17.7275 18.7893 17.1652 19 16.5789 19C15.9927 19 15.4304 18.7893 15.0159 18.4142C14.6013 18.0391 14.3684 17.5304 14.3684 17C14.3684 16.4696 14.6013 15.9609 15.0159 15.5858C15.4304 15.2107 15.9927 15 16.5789 15ZM16.5789 16C16.2858 16 16.0047 16.1054 15.7974 16.2929C15.5901 16.4804 15.4737 16.7348 15.4737 17C15.4737 17.2652 15.5901 17.5196 15.7974 17.7071C16.0047 17.8946 16.2858 18 16.5789 18C16.8721 18 17.1532 17.8946 17.3605 17.7071C17.5678 17.5196 17.6842 17.2652 17.6842 17C17.6842 16.7348 17.5678 16.4804 17.3605 16.2929C17.1532 16.1054 16.8721 16 16.5789 16ZM6.63158 15C7.21785 15 7.7801 15.2107 8.19466 15.5858C8.60921 15.9609 8.8421 16.4696 8.8421 17C8.8421 17.5304 8.60921 18.0391 8.19466 18.4142C7.7801 18.7893 7.21785 19 6.63158 19C6.04531 19 5.48305 18.7893 5.0685 18.4142C4.65395 18.0391 4.42105 17.5304 4.42105 17C4.42105 16.4696 4.65395 15.9609 5.0685 15.5858C5.48305 15.2107 6.04531 15 6.63158 15ZM6.63158 16C6.33844 16 6.05732 16.1054 5.85004 16.2929C5.64276 16.4804 5.52632 16.7348 5.52632 17C5.52632 17.2652 5.64276 17.5196 5.85004 17.7071C6.05732 17.8946 6.33844 18 6.63158 18C6.92471 18 7.20584 17.8946 7.41312 17.7071C7.62039 17.5196 7.73684 17.2652 7.73684 17C7.73684 16.7348 7.62039 16.4804 7.41312 16.2929C7.20584 16.1054 6.92471 16 6.63158 16ZM18.7895 3H3.61421L6.43263 9H15.4737C15.8384 9 16.1589 8.84 16.3579 8.6L19.6737 4.6C19.8174 4.43 19.8947 4.22 19.8947 4C19.8947 3.73478 19.7783 3.48043 19.571 3.29289C19.3637 3.10536 19.0826 3 18.7895 3ZM15.4737 10H6.48789L5.63684 11.56L5.52632 12C5.52632 12.2652 5.64276 12.5196 5.85004 12.7071C6.05732 12.8946 6.33844 13 6.63158 13H18.2895C18.5656 13 18.7895 13.2239 18.7895 13.5C18.7895 13.7761 18.5656 14 18.2895 14H6.63158C6.04531 14 5.48305 13.7893 5.0685 13.4142C4.65395 13.0391 4.42105 12.5304 4.42105 12C4.42072 11.6607 4.51581 11.3269 4.69737 11.03L5.49316 9.56L1.48105 1H0.5C0.223858 1 0 0.776142 0 0.5C0 0.223858 0.223858 0 0.5 0H2.21053L3.15 2H18.7895C19.3757 2 19.938 2.21071 20.3526 2.58579C20.7671 2.96086 21 3.46957 21 4C21 4.5 20.8121 4.92 20.5026 5.26L17.2863 9.15C16.8884 9.66 16.2253 10 15.4737 10Z" fill="black"/>
                            </svg>

                        </a>
                    </div>




                    <div class="search-popup">
                        <div class="search-box">
                            <div class="search-input-wrapper">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.1846 19.1855L14.6807 14.6816M14.6807 14.6816C15.4511 13.9112 16.0622 12.9966 16.4792 11.99C16.8961 10.9835 17.1107 9.90461 17.1107 8.81509C17.1107 7.72557 16.8961 6.64671 16.4792 5.64013C16.0622 4.63354 15.4511 3.71894 14.6807 2.94853C13.9103 2.17812 12.9957 1.567 11.9891 1.15006C10.9825 0.733121 9.90366 0.518524 8.81414 0.518524C7.72462 0.518524 6.64577 0.733121 5.63918 1.15006C4.6326 1.567 3.71799 2.17812 2.94758 2.94853C1.39168 4.50444 0.517578 6.6147 0.517578 8.81509C0.517578 11.0155 1.39168 13.1257 2.94758 14.6816C4.50349 16.2375 6.61375 17.1116 8.81414 17.1116C11.0145 17.1116 13.1248 16.2375 14.6807 14.6816Z" stroke="#1B1B1B" stroke-width="1.03704" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                <input type="text" placeholder="search products">
                                <span class="close-search">×</span>
                            </div>
                        </div>
                    </div>
                    <!-- mobile menu trigger -->

                </div>


            </div>
        </div>
    </header>
    <!-- header end -->
    @yield('content')
    <div class="footer-section">
        <div class="footer-grid col5_footer">
            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-ftr-box ">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-align-center gl-gap-10">
                    <img class="gl-w-30p" src="{{asset('web/assets/images/home/van.svg')}}">
                    <div class="ftr-box-name">Free Shipping </div>
                </div>
            </div>
            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-ftr-box">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-align-center gl-gap-10">
                    <img class="gl-w-30p" src="{{asset('web/assets/images/home/return.svg')}}">
                    <div class="ftr-box-name">Easy Returns With 10 Days </div>
                </div>
            </div>
            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-ftr-box">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-align-center gl-gap-10">
                    <img class="gl-w-30p" src="{{asset('web/assets/images/home/secure.svg')}}">
                    <div class="ftr-box-name">Secure Payment Online </div>
                </div>
            </div>
            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column bg-ftr-box">
                <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-column gl-align-center gl-gap-10">
                    <img class="gl-w-30p" src="{{asset('web/assets/images/home/support.svg')}}">
                    <div class="ftr-box-name">24/7 Customer Support</div>
                </div>
            </div>
        </div>

        <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-pt-120 gl-xxl-pt-70 gl-lg-pt-40 gl-justify-sb">

            <div class="gl-w-100 gl-po-rel gl-d-flex gl-fd-row gl-lg-fd-column gl-md-fd-column-rev gl-justify-sb">

                <div class="gl-po-rel gl-d-flex gl-fd-column">
                    <div class="logo-area gl-w-100 gl-po-rel gl-d-flex gl-fd-column">
                        <div class=" logo-area-logo gl-d-flex gl-pb-80 gl-xxl-pb-40 gl-md-pt-40 gl-xs-justify-c">
                            <img class="ftr-logo-width" src="{{asset('web/assets/images/home/ftr-logo.svg')}}">
                        </div>

                        <div class="logo-area-text subs-cntent gl-w-100 gl-po-rel gl-d-flex">Subscribe to our newsletter for new arrivals <br>and special offers.</div>

                        <div class="logo-area-email email-box gl-pt-30">
                            <input type="email" placeholder="Your Email">
                            <button class="clr-change-hover" type="submit">Submit</button>
                        </div>

                    </div>

                </div>

                <div class="gl-po-rel gl-d-flex gl-fd-row  gl-lg-pt-50 gl-md-pt-0 gap-for-ftr responsive-wrap">

                    <div class="navigation-area gl-w-100 gl-xs-w-45 gl-po-rel gl-d-flex gl-fd-column">
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-25">Navigation</div>
                        <a href="index.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Home</a>
                        <a href="new-in.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">New In</a>
                        <a href="new-in.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Apparel</a>
                        <a href="about-us.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Our Story</a>
                        <a href="contact-us.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Connect</a>
                    </div>

                    <div class="navigation-area gl-w-100 gl-xs-w-45 gl-po-rel gl-d-flex gl-fd-column">
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-25">Legal</div>
                        <a href="privacy-policy.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Privacy Policy</a>
                        <a href="return-refund-policy.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Return Policy</a>
                        <a href="terms-condition.html" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Terms & Conditions</a>

                    </div>

                    <div class="navigation-area gl-w-100 gl-po-rel gl-d-flex gl-fd-column">
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-25">Social</div>
                        <a href="https://www.instagram.com/zwag_styles/" target="_blank" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Instagram</a> <a href="#" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Facebook</a>
                        <a href="#" class=" ftr-common-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none">Youtube</a>

                    </div>

                    <div class="navigation-area gl-w-100 gl-po-rel gl-d-flex gl-fd-column">
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Email ID </div>
                        <a href="mailto:sales@zwagstyles.com" target="_blank" class=" ftr-mail-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none gl-pb-45 gl-xxl-pb-25">sales@zwagstyles.com </a>
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Contact Number </div>
                        <a href="tel:+918089166808" target="_blank" class=" ftr-mail-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none gl-pb-45 gl-xxl-pb-25">+91 80891 66808 </a>
                        <div class=" ftr-common-head gl-w-100 gl-po-rel gl-d-flex gl-pb-5">Business Address </div>
                        <div class=" ftr-mail-link gl-w-100 gl-po-rel gl-d-flex gl-pb-15 gl-td-none gl-pb-45 gl-xxl-pb-25">No 53 Maratt 8A Cross Yajman Layout Begur Post Bangalore Karnataka 560068 </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="copy-right-section gl-pt-100 gl-xxl-pt-50 gl-lg-pt-0 gl-pb-30">@ 2025 <a class="gl-link" href="https://www.glinfotech.net/">GL Infotech.</a> All rights reserved. </div>



    </div>


    <a href="https://wa.me/+918089166808" class="whatsapp-fixed" target="_blank">
        <img src="{{asset('web/assets/images/home/wsp-icon.svg')}}" alt="WhatsApp" />
    </a>



    <div class="mobile-user-friendly gl-w-100 ">


        <div class="bottom_app">
            <a href="index.html" class="bottom_app_item bottom_app_active">
                <!-- Home Icon -->
                <svg class="bottom_app_icon" viewBox="0 0 24 24" fill="none">
            <path d="M3 10.5L12 3L21 10.5V21H14V14H10V21H3V10.5Z"/>
        </svg>
                <span class="bottom_app_label">Home</span>
            </a>

            <a class="bottom_app_item">
                <!-- Categories Icon -->
                <svg class="bottom_app_icon" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="3" width="7" height="7"/>
            <rect x="14" y="3" width="7" height="7"/>
            <rect x="3" y="14" width="7" height="7"/>
            <rect x="14" y="14" width="7" height="7"/>
        </svg>
                <span class="bottom_app_label">Categories</span>
            </a>

            <a href="my-order.html" class="bottom_app_item">
                <!-- Account Icon -->
                <svg class="bottom_app_icon" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 21C4 16.5 20 16.5 20 21"/>
        </svg>
                <span class="bottom_app_label">My Account</span>
            </a>
        </div>



    </div>



    <div class="category_panel" id="categoryPanel">
        <div class="category_grid">
            <a href="shirts.html" class="category_card">
                <img src="{{asset('web/assets/images/home/app-btn-first.png')}}" alt="Top Wear">
                <div class="category_label">TOP WEAR</div>
            </a>

            <a href="shirts.html" class="category_card">
                <img src="{{asset('web/assets/images/home/bottom-wear.png')}}" alt="Bottom Wear">
                <div class="category_label">BOTTOM WEAR</div>
            </a>

            <a href="shirts.html" class="category_card">
                <img src="{{asset('web/assets/images/home/accesories.png')}}" alt="Accessories">
                <div class="category_label">ACCESSORIES</div>
            </a>
        </div>
    </div>



    <button class="back-top-btn" id="backToTop" aria-label="Back to top">
    <svg class="back-top-icon" viewBox="0 0 24 24" fill="none">
        <path d="M12 5L5 12H9V19H15V12H19L12 5Z" fill="currentColor"/>
    </svg>
</button>




    <script>
        (function() {
            const locomotiveScroll = new LocomotiveScroll();
        })();
    </script>


    <script>
        const menu = document.querySelector(".menu");
        const menuMain = menu.querySelector(".menu-main");
        const goBack = menu.querySelector(".go-back");
        const menuTrigger = document.querySelector(".mobile-menu-trigger");
        const closeMenu = menu.querySelector(".mobile-menu-close");
        let subMenu;
        menuMain.addEventListener("click", (e) => {
            if (!menu.classList.contains("active")) {
                return;
            }
            if (e.target.closest(".menu-item-has-children")) {
                const hasChildren = e.target.closest(".menu-item-has-children");
                showSubMenu(hasChildren);
            }
        });
        goBack.addEventListener("click", () => {
            hideSubMenu();
        })
        menuTrigger.addEventListener("click", () => {
            toggleMenu();
        })
        closeMenu.addEventListener("click", () => {
            toggleMenu();
        })
        document.querySelector(".menu-overlay").addEventListener("click", () => {
            toggleMenu();
        })

        function toggleMenu() {
            menu.classList.toggle("active");
            document.querySelector(".menu-overlay").classList.toggle("active");
        }

        function showSubMenu(hasChildren) {
            subMenu = hasChildren.querySelector(".sub-menu");
            subMenu.classList.add("active");
            subMenu.style.animation = "slideLeft 0.5s ease forwards";
            const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
            menu.querySelector(".current-menu-title").innerHTML = menuTitle;
            menu.querySelector(".mobile-menu-head").classList.add("active");
        }

        function hideSubMenu() {
            subMenu.style.animation = "slideRight 0.5s ease forwards";
            setTimeout(() => {
                subMenu.classList.remove("active");
            }, 300);
            menu.querySelector(".current-menu-title").innerHTML = "";
            menu.querySelector(".mobile-menu-head").classList.remove("active");
        }

        window.onresize = function() {
            if (this.innerWidth > 991) {
                if (menu.classList.contains("active")) {
                    toggleMenu();
                }

            }
        }
    </script>


    <script>
        const marquee = document.getElementById("marquee");

        // Duplicate marquee content until width is enough
        let totalWidth = marquee.scrollWidth;

        while (totalWidth < window.innerWidth * 2) {
            marquee.innerHTML += marquee.innerHTML;
            totalWidth = marquee.scrollWidth;
        }

        // Animation
        let x = 0;

        function animate() {
            x -= 1; // speed
            marquee.style.transform = `translateX(${x}px)`;

            // Reset to 0 when half scrolled
            if (Math.abs(x) >= marquee.scrollWidth / 2) {
                x = 0;
            }

            requestAnimationFrame(animate);
        }
        animate();
    </script>


    <script>
        const track = document.getElementById('logoTrack');

        // Duplicate logos to fill screen
        for (let i = 0; i < 20; i++) {
            const clone = track.children[0].cloneNode(true);
            track.appendChild(clone);
        }

        let position = 0;

        function animateSlider() {
            position -= 1; // slide speed (change to 0.5 for slower)

            // Reset position when scrolled enough
            if (Math.abs(position) >= track.children[0].offsetWidth + 40) {
                position = 0;
            }

            track.style.transform = `translateX(${position}px)`;

            requestAnimationFrame(animateSlider);
        }

        animateSlider();
    </script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".testiSwiper", {
            slidesPerView: 4.5,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // 🔥 Responsive Breakpoints
            breakpoints: {
                1400: {
                    slidesPerView: 4.5,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2.3,
                    spaceBetween: 15,
                },
                575: {
                    slidesPerView: 1.5,
                    spaceBetween: 15,
                },
                0: {
                    slidesPerView: 1.2,
                    spaceBetween: 10,
                }
            }
        });
    </script>


    <script>
        const sliderTrack = document.getElementById("sliderTrack");
        const trackContent = sliderTrack.innerHTML;

        // duplicate images to create infinite loop
        sliderTrack.innerHTML += trackContent;
    </script>


    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll(".banner-slide");
        const indicators = document.querySelectorAll(".indicator .progress");
        const duration = 4000;

        function goToSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
            });

            indicators.forEach((bar, i) => {
                bar.style.transition = "none";
                bar.style.width = i < index ? "100%" : "0%";
            });

            setTimeout(() => {
                indicators[index].style.transition = `width ${duration}ms linear`;
                indicators[index].style.width = "100%";
            }, 50);
        }

        function startSlider() {
            goToSlide(currentIndex);

            setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                goToSlide(currentIndex);
            }, duration);
        }

        document.addEventListener("DOMContentLoaded", startSlider);
    </script>

    <script>
        const animText = document.querySelectorAll('.anim-text');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {

                if (entry.isIntersecting) {
                    // Add animation class when entering
                    entry.target.classList.add('show');
                } else {
                    // Remove it when leaving → allows replay
                    entry.target.classList.remove('show');
                }

            });
        }, {
            threshold: 0.4
        });

        animText.forEach(el => observer.observe(el));
    </script>


    <script>
        // Open popup
        document.querySelector(".open-search-popup").addEventListener("click", function() {
            document.querySelector(".search-popup").style.display = "flex";
        });

        // Close popup on X click
        document.querySelector(".close-search").addEventListener("click", function() {
            document.querySelector(".search-popup").style.display = "none";
        });

        // Close popup when clicking outside
        document.querySelector(".search-popup").addEventListener("click", function(e) {
            if (e.target.classList.contains("search-popup")) {
                document.querySelector(".search-popup").style.display = "none";
            }
        });
    </script>


    <script>
        const bottomAppItems = document.querySelectorAll(".bottom_app_item");
        const categoryPanel = document.getElementById("categoryPanel");

        bottomAppItems.forEach(item => {
            item.addEventListener("click", function(e) {
                const labelEl = this.querySelector(".bottom_app_label");
                const label = labelEl ? labelEl.innerText.trim() : "";

                // Categories → open/toggle panel only
                if (label === "Categories") {
                    e.preventDefault(); // prevent navigation

                    if (categoryPanel.style.display === "block") {
                        categoryPanel.style.display = "none";
                        categoryPanel.classList.remove("category_active");
                    } else {
                        categoryPanel.style.display = "block";
                        categoryPanel.offsetHeight; // force reflow
                        categoryPanel.classList.add("category_active");
                    }

                    return;
                }

                // All other links → normal navigation
            });
        });

        // Close panel when clicking outside
        document.addEventListener("click", function(e) {
            if (
                categoryPanel.style.display === "block" &&
                !categoryPanel.contains(e.target) &&
                !e.target.closest(".bottom_app_item")
            ) {
                categoryPanel.style.display = "none";
                categoryPanel.classList.remove("category_active");
            }
        });
    </script>







    <script>
        const header = document.querySelector('.header-fixed');
        const headerHeight = header.offsetHeight;

        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                header.classList.add('is-fixed');
                document.body.style.paddingTop = headerHeight + 'px';
            } else {
                header.classList.remove('is-fixed');
                document.body.style.paddingTop = '0px';
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const animatedItems = document.querySelectorAll(".scroll-up-anim");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("is-visible");
                        } else {
                            // REMOVE class so animation works every time
                            entry.target.classList.remove("is-visible");
                        }
                    });
                }, {
                    threshold: 0.3 // 30% visible triggers animation
                }
            );

            animatedItems.forEach(item => observer.observe(item));
        });
    </script>

    <script>
        const backToTop = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTop.classList.add("show");
            } else {
                backToTop.classList.remove("show");
            }
        });

        backToTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>

</body>
</html>
