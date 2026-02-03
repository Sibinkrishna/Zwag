<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title> {{$metatitle}}| Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
</head>

<body>

    <!-- START Wrapper -->
    <div class="wrapper">
        <header class="topbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <button type="button" class="button-toggle-menu me-2">
                                <iconify-icon icon="solar:hamburger-menu-broken"
                                    class="fs-24 align-middle"></iconify-icon>
                            </button>
                        </div>

                        <!-- Menu Toggle Button -->
                        <div class="topbar-item">
                            <h4 class="fw-bold topbar-button pe-none text-capitalize mb-0">{{$subtitle}}</h4>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-1">

                        <!-- Theme Color (Light/Dark) -->
                        <!-- <div class="topbar-item">
                         <button type="button" class="topbar-button" id="light-dark-mode">
                              <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                         </button>
                    </div> -->

                        <!-- Notification -->
                        <div class="dropdown topbar-item">
                            <button type="button" class="topbar-button position-relative notification"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <iconify-icon icon="solar:bell-bing-bold-duotone"
                                    class="fs-24 align-middle"></iconify-icon>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill ">3<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 280px;">
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0"><span class="fw-medium">Josephine Thompson
                                                    </span>commented on admin panel <span>" Wow 😍! this admin looks
                                                        good and awesome design"</span></p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                        D
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                                <p class="mb-0 text-wrap">
                                                    Hi, How are you? What about our next meeting
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Jacob Gines</p>
                                                <p class="mb-0 text-wrap">Answered to your comment on the cash flow
                                                    forecast's graph 🔔.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-sm me-2">
                                                    <span
                                                        class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                        <iconify-icon
                                                            icon="iconamoon:comment-dots-duotone"></iconify-icon>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold text-wrap">You have received <b>20</b> new
                                                    messages in the
                                                    conversation</p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Item -->
                                    <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="{{asset('admin/assets/images/users/avatar-5.jpg')}}"
                                                    class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                                <p class="mb-0 text-wrap">
                                                    Commented on Admin
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="text-center py-3">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm blk-btn">View All
                                        Notification <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- User -->
                        <div class="dropdown topbar-item">
                            <a type="button" class="topbar-button" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle" width="32"
                                        src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt="avatar-3">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Gaston!</h6>
                                <a class="dropdown-item" href="pages-profile.php">
                                    <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Profile</span>
                                </a>
                                <a class="dropdown-item" href="apps-chat.php">
                                    <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Messages</span>
                                </a>

                                <a class="dropdown-item" href="pages-pricing.php">
                                    <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Pricing</span>
                                </a>
                                <a class="dropdown-item" href="pages-faqs.php">
                                    <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Help</span>
                                </a>
                                <a class="dropdown-item" href="auth-lock-screen.php">
                                    <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span
                                        class="align-middle">Lock screen</span>
                                </a>

                                <div class="dropdown-divider my-1"></div>

                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item text-danger" type="submit">
                                        <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                                            class="align-middle">Logout</span>
                                    </button>
                                </form>

                            </div>
                        </div>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block ms-2">
                            <div class="position-relative">
                                <input type="search" class="form-control" placeholder="Search..."
                                    autocomplete="off" value="">
                                <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="index.php" class="logo-dark">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('admin/assets/images/logo-dark.png') }}" class="logo-lg" alt="logo dark">
                </a>

                <a href="index.php" class="logo-light">
                    <img src="{{ asset('admin/assets/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('admin/assets/images/logo-light.png') }}" class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone"
                    class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                <ul class="navbar-nav" id="navbar-nav">

                    <!-- <li class="menu-title">General</li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Dashboard </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarRoles">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Manage Admin </span>
                        </a>
                        <div class="collapse" id="sidebarRoles">
                            <ul class="nav sub-navbar-nav">
                                <ul class="nav sub-navbar-nav">
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="{{route('user-type.index')}}">User Type</a>
                                        <a class="sub-nav-link sub-child-link d-none" href="{{route('user-type.create')}}">Create User
                                            Type</a>
                                    </li>
                                    <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="{{route('admin-list.index')}}">Admin Registration</a>
                                        <a class="sub-nav-link sub-child-link d-none" href="{{route('admin-list.create')}}">Create
                                            Admin</a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('customer-list.index')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Customers </span>
                        </a>
                        <a class="nav-link sub-child-link d-none" href="{{route('customer-list.details')}}">Customer Details</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('order-list.index')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Orders </span>
                        </a>
                        <a class="nav-link sub-child-link d-none" href="{{route('order-list.index')}}">Order Details</a>
                        <a class="nav-link sub-child-link d-none" href="order-detail-view.php">Order Detail View</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cart-list.index')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:cart-large-2-line-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Cart Details </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Manage Products </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('brand.index')}}">Brand</a>
                                    <a class="sub-nav-link sub-child-link d-none" href="{{route('brand.create')}}">Create
                                        Brand</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('category.index')}}">Category</a>
                                    <a class="sub-nav-link sub-child-link d-none" href="{{route('category.create')}}">Create
                                        Category</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('subcategory.index')}}">Sub Category</a>
                                    <a class="sub-nav-link sub-child-link d-none" href="{{route('subcategory.create')}}">Create
                                        Sub Category</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('attribute.index')}}">Attributes</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('product.index')}}">Products</a>
                                    <a class="sub-nav-link sub-child-link d-none" href="{{route('product.create')}}">Create
                                        Product</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('search-text.index')}}">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:card-search-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Search Text </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarEnquiry" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarEnquiry">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Enquiry Forms </span>
                        </a>
                        <div class="collapse" id="sidebarEnquiry">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('enquiry-contactus')}}">Contact Us</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('enquiry-feedback')}}">Feedback</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('enquiry-career')}}">Career</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('enquiry-subscription')}}">Subscription</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarReports" data-bs-toggle="collapse"
                            role="button" aria-expanded="false" aria-controls="sidebarReports">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:file-download-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Download Reports </span>
                        </a>
                        <div class="collapse" id="sidebarReports">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('report-customer')}}">Customers</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('report-product')}}">Products</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('report-order-sales')}}">Order Sales</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('report-payment')}}">Payment</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('report-cart')}}">Cart</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
        <!-- ==================================================== -->
        <!-- Start right Content here -->
        <!-- ==================================================== -->
        <div class="page-content">

            @yield('content')

            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> &copy; Zwag. Crafted by <a href=""
                                class="fw-bold footer-company-text" target="_blank">GL Infotech</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ========== Footer End ========== -->
        </div>
        <!-- ==================================================== -->
        <!-- End Page Content -->
        <!-- ==================================================== -->
    </div>
    <!-- END Wrapper -->
    <!-- Vendor Javascript (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/vendor.js') }}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
     <!-- Vector Map Js -->

                <script src="{{asset('admin/assets/vendor/jsvectormap/jsvectormap.min.js')}}"></script>
     <script src="{{asset('admin/assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
     <script src="{{asset('admin/assets/vendor/jsvectormap/maps/world.js')}}"></script>

     <!-- Dashboard Js -->
     <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

     <!-- Page Js -->
     <script src="{{asset('admin/assets/js/pages/ecommerce-product-details.js')}}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

     <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
        };

    </script>

</body>

</html>
