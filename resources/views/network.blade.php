<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from HostMaji.themetags.com/network.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 05:13:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="HostMaji hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal hosting company and similar sites and many more.">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!--title-->
    <title>Network - Hosting Provider with WHMCS Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>

    <!--loader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--loader end-->
    <!--header section start-->
    <header id="header" class="header-main">
        <!--topbar start-->
        <div id="header-top-bar" class="gray-light-bg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-7">
                        <div class="topbar-text d-none d-md-block d-lg-block">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="tell:+91 9795405324"><span class="fas fa-phone mr-2"></span> 24x7 Technical Support +91 9795405324</a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span class="fas fa-comments mr-2"></span> Live
                                        Chat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="topbar-text">
                            <ul class="list-inline text-right">
                                <li class="list-inline-item"><a href="#"><span class="fas fa-user mr-2"></span> Login</a></li>
                                <li class="list-inline-item"><a href="#"><span class="fas fa-lock mr-2"></span> Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--topbar end-->

        <!--main header menu start-->
        <div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
            <div class="container">
                <nav class="js-mega-menu navbar navbar-expand-md header-nav">

                    <!--logo start-->
                    <a class="navbar-brand" href=""><img src="assets/img/logo-color.png" width="120" alt="logo" class="img-fluid" /></a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
                    </button>
                    <!--responsive toggle button end-->

                    <!--main menu start-->
                    <div id="navBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto main-navbar-nav">
                            <!--home start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                                <a id="homeMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="{{route('index')}}" >Home</a>

                                <!--home mega menu end-->
                            </li>
                            <!--home end-->

                            <!--pages start-->
                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                                <!-- Pages - Submenu -->
                                <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 260px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{route('about')}}">About Us</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{route('services')}}">Our Services</a>
                                    </li>
                                    
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{route('team')}}">Team </a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{route('offer-single')}}">Black Friday Single <span class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPricing">Pricing</a>

                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('pricing-default')}}">Pricing Default</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('pricing-package')}}">Pricing Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('pricing-comparison')}}">Pricing Comparison</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('vps-pricing')}}">VPS Pricing</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('pricing-new')}}">New Pricing <span class="badge badge-success ml-2">New</span></a></li>
                                        </ul>
                                    </li>
                                    

                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="login.html">Login</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="signup.html">Signup</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link" href="recover-account.html">Recover Account</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="login-simple.html">Login Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="signup-simple.html">Signup Simple</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="recover-account-simple.html">Recover Account Simple</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities" class="nav-link sub-menu-nav-link sub-link-toggle" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <ul id="navSubmenuPagesUtilities" class="hs-sub-menu main-sub-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('help')}}">Help</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('faq')}}">FAQ</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('status')}}">Status</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('knowledge-base')}}">Knowledge Base</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('terms-conditions')}}">Terms
                                                    &amp; Conditions</a></li>
                                            <li><a class="nav-link sub-menu-nav-link" href="{{route('privacy-policy')}}">Privacy &amp; Policy</a></li>
                                        </ul>
                                    </li>
                                   
                                    <!-- Specialty -->
                                </ul>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!--pages end-->


                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('shared-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Hosting</span>
                                                            <small class="u-header__promo-text">Innovate reliable quality
                                                                Starting at <strong>₹ 249</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('vps-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-box"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">VPS Hosting <span
                                                                    class="badge badge-success ml-1">Popular</span></span>
                                                            <small class="u-header__promo-text">Pefficiently maintain
                                                                Starting at <strong>₹ 999</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('dedicated-server')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Dedicated Hosting</span>
                                                            <small class="u-header__promo-text">Quickly build Starting at
                                                                <strong>13359/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('cloud-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Cloud Hosting <span
                                                                    class="badge badge-danger ml-1">Hot</span></span>
                                                            <small class="u-header__promo-text">Conveniently cloud Starting
                                                                at <strong>₹ 499/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('email-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-envelope"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Email Hosting</span>
                                                            <small class="u-header__promo-text">First Starting at <strong>₹ 9/mo
                                                                per mailbox</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('shared-wp-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-database"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>₹ 839/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="#">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fab fa-wordpress"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Wordpress Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting at
                                                                <strong>₹ 839/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{route('woocommerce-hosting')}}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">WooCommerce Hosting <span
                                                                    class="badge badge-primary ml-1">New</span></span>
                                                            <small class="u-header__promo-text">Globally Starting at
                                                                <strong>₹ 839/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                        </div>

                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!--hosting end-->

                            
                            <!--support start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px" data-position="right">
                                <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Support</a>
                                <!--support submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu" style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('support')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Submit a Request </span>
                                                    <small class="u-header__promo-text">Support team quickly response
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('support')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/support.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">24/7/365 Support</span>
                                                    <small class="u-header__promo-text">Support and statement</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('network')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/data-services.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Datacenter</span>
                                                    <small class="u-header__promo-text">24 Data center globally</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('status')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/time.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Uptime Commitment</span>
                                                    <small class="u-header__promo-text">Monitoring and secure</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer">
                                        <!-- List -->
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Check what's new</small>
                                                    <a class="small" href="#">
                                                        Changelog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 u-header__promo-footer-ver-divider">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Have a question?</small>
                                                    <a class="small" href="{{route('contact')}}">
                                                        Contact us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div>
                                <!--support submenu end-->
                            </li>
                            <!--support end-->

                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px" data-position="right">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle" href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">About</a>

                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu" style="min-width: 330px;">



 <!--menu title with subtitle and icon item start-->
 <div class="title-with-icon-item">
    <a class="title-with-icon-link" href="{{route('contact')}}">
        <div class="media align-items-center">
            <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG">
            <div class="media-body">
                <span class="u-header__promo-title">Contact Us</span>
                <small class="u-header__promo-text">Face any problem contact with us
                </small>
            </div>
        </div>
    </a>
</div>
 <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('clients')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Client</span>
                                                    <small class="u-header__promo-text">Face any problem contact with us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                   
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('about')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">About Us</span>
                                                    <small class="u-header__promo-text">We are leading hosting company
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('clients')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/user-behaver.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Client Testimonial</span>
                                                    <small class="u-header__promo-text">More than 100k lovly customer
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('partners')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">We have trusted partners globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{route('network')}}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Network</span>
                                                    <small class="u-header__promo-text">Keep your data save and secure
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                   

                                    <!--submenu footer start-->
                                    <div class="u-header__promo-footer pb-0">
                                        <!-- List -->
                                        <div class="row no-gutters align-bottom">
                                            <div class="col-9">
                                                <div class="u-header__promo-footer-item">
                                                    <span class="u-header__promo-title">CEO Video Message</span>
                                                    <p class="small d-inline-flex">Credibly synergize unique... <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon"><span
                                                            class="ti-control-play"></span> </a></p>

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex align-bottom">
                                                    <img src="assets/img/ceo.png" width="300" alt="ceo" class="img-fluid" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                    <!--submenu footer end-->
                                </div>
                                <!--about submenu end-->
                            </li>
                            <!--about end-->

                            <!--button start-->
                            <li class="nav-item header-nav-last-item d-flex align-items-center">
                                <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                                    Get Started
                                </a>
                            </li>
                            <!--button end-->
                        </ul>
                    </div>
                    <!--main menu end-->
                </nav>
            </div>
        </div>
        <!--main header menu end-->
    </header>
    <!--header section end-->

    <div class="main">

        <!--page header section start-->
        <section class="page-header-section ptb-100 gradient-overly-right" style="background: url('assets/img/hero-14.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6">
                        <div class="page-header-content text-white">
                            <h1 class="text-white mb-2">Network</h1>
                            <p class="lead">Intrinsicly supply extensible outsourcing before robust channels. Uniquely utilize market-driven technologies before vertical.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--breadcrumb bar start-->
        <div class="breadcrumb-bar py-3 border-bottom gray-light-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0 pl-0">
                                <li class="list-inline-item breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Network</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumb bar end-->

        <!--network map section start-->
        <section class="network-map-section ptb-100 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Data centers Location</h2>
                            <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy your
                                service infrastructure in close proximity to your customer base.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="network-map-wrap">
                            <ul class="custom-map-location">
                                <li style="top: 29%; left: 15.5%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                                </li>
                                <li style="top: 42%; left: 20%;">
                                    <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                                </li>
                                <li style="top: 70%; left: 32%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                                </li>
                                <li style="top: 57%; left: 48%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                                </li>
                                <li style="top: 18%; left: 53%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                                </li>
                                <li style="top: 34%; left: 55%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                                </li>
                                <li style="top: 45%; left: 68%;">
                                    <span data-toggle="tooltip" data-placement="top" title="India"></span>
                                </li>
                                <li style="top: 35%; left: 80%;">
                                    <span data-toggle="tooltip" data-placement="top" title="China"></span>
                                </li>
                                <li style="top: 77%; left: 85%;">
                                    <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                                </li>
                            </ul>
                            <img src="assets/img/map-dark.svg" alt="location map">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--network map section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overly-bottom" style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover fixed">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Already have a domain that you love?</h2>
                            <p>No problem! It's quick and painless to transfer your hosting, domain registrations, or both
                                to HostMaji maximize market positioning solutions and enterprise services.</p>
                            <div class="action-btns mt-3">
                                <a href="#" class="btn solid-white-btn mr-3">Existing Customers</a>
                                <a href="#" class="btn outline-white-btn">New Customers</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--call to action section end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>What Our Customers Say About Us?</h2>
                            <p class="lead">Authoritatively reinvent client-centric fully tested process improvements. Objectively restore strategic initiatives through fully researched.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-dot dot-bottom-center">
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>Awesome Support !</h5>
                                        <p>Objectively magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships imperatives through whereas process-centric.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Alex Khamer</h6>
                                        <small class="text-right">6 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>Pleasant support experience</h5>
                                        <p>Objectively envisioneer magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships methodologies.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Peter Anderson</h6>
                                        <small class="text-right">3 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>Contacted support after Midnight</h5>
                                        <p>Objectively envisioneer magnetic manufactured products and dynamic maximize 2.0 relationships whereas process-centric methodologies.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Jolio Darix</h6>
                                        <small class="text-right">8 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>Great experience with the technical</h5>
                                        <p>Objectively manufactured products and dynamic models maximize 2.0 relationships whereas process-centric methodologies.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Carolyn Dani</h6>
                                        <small class="text-right">6 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>Reliable web hosting company</h5>
                                        <p>Objectively magnetic manufactured products and dynamic models. Progressively maximize 2.0 relationships whereas.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Alex Dari</h6>
                                        <small class="text-right">4 days ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial white-bg shadow-sm rounded p-5">
                                    <ul class="list-inline ratting-list mb-2">
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                        <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                    </ul>
                                    <div class="ratting-content">
                                        <h5>People and services that care</h5>
                                        <p>Objectively envisioneer magnetic manufactured products and dynamic models maximize 2.0 relationships whereas process-centric methodologies.</p>
                                    </div>
                                    <div class="ratting-author mt-3">
                                        <h6>Sir Rainbo </h6>
                                        <small class="text-right">2 days ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial and review section end-->
    </div>

    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <div class="footer-top gradient-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row footer-top-wrap">
                            <div class="col-12">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SECURED BY</h4>
                                    <ul class="list-inline security-icon-list">
                                        <li class="list-inline-item"><img src="assets/img/mcafee-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/norton-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/accredited-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                        <li class="list-inline-item"><img src="assets/img/secured-logo.png" width="110" alt="security" class="img-fluid" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row footer-top-wrap">
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">PRODUCTS</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">WordPress Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shared Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Virtual Private Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Dedicated Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Domain Names</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Affiliates</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Careers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Community</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEGAL</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Legal Information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Report Abuse</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms of Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">WHOIS Lookup</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SUPPORT</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Knowledge Base</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Forums</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">System Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Support Team</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg py-3">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-5 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2021. All
                            rights reserved by
                            <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                        </p>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="payment-method text-right">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-amex.svg" alt="amex" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-visa.svg" alt="visa" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-mastercard.svg" alt="mastercard" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-paypal.svg" alt="paypal" width="50" />
                                </li>
                                <li class="list-inline-item">
                                    <img src="assets/img/payment-bitcoin.svg" alt="bitcoin" width="50" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->
    <!--bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="ti-rocket"></span>
    </button>
    <!--bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/hs.megamenu.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from HostMaji.themetags.com/network.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 05:13:00 GMT -->
</html>