<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from HostMaji.themetags.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 05:05:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description"
        content="HostMaji hosting template designed for all web hosting, business, multi purpose, domain sale websites, online business, personal hosting company and similar sites and many more.">
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
    <link rel="icon" href="/assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&amp;family=Poppins:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!--title-->
    <title>HostMaji - Hosting Provider with WHMCS Template</title>

    <!--build:css-->
    <link rel="stylesheet" href="/assets/css/main.css">
    <!-- endbuild -->
    <link rel="stylesheet" href="/assets/css/custom.css">
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
                                    <a href="tell:+91 9795405324"><span class="fas fa-phone mr-2"></span> 24x7 Technical
                                        Support +91 9795405324</a>
                                </li>
                                <li class="list-inline-item"><a href="#"><span
                                            class="fas fa-comments mr-2"></span> Live
                                        Chat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="topbar-text">
                            <ul class="list-inline text-right">
                                <li class="list-inline-item"><a href="{{ route('login') }}"><span
                                            class="fas fa-user mr-2"></span> Login</a></li>
                                <li class="list-inline-item"><a href="{{ route('register') }}"><span
                                            class="fas fa-lock mr-2"></span> Register</a>
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
                    <a class="navbar-brand" href=""><img src="assets/img/logo-color.png" width="120"
                            alt="logo" class="img-fluid" /></a>
                    <!--logo end-->

                    <!--responsive toggle button start-->
                    <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
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
                                <a id="homeMegaMenu" class="nav-link custom-nav-link " href="#">Home</a>

                                <!--home mega menu end-->
                            </li>
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-position="left">
                                <a id="homeMegaMenu" class="nav-link custom-nav-link "
                                    href="{{ route('freehosting') }}">Free Hosting</a>

                                <!--home mega menu end-->
                            </li>
                            <!--home end-->

                            <!--pages start-->

                            <!--hosting start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px"
                                data-position="right">
                                <a id="hostingMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                    href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Hosting</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu w-100 main-sub-menu" aria-labelledby="hostingMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{ route('shared-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Hosting</span>
                                                            <small class="u-header__promo-text">Innovate reliable
                                                                quality
                                                                Starting at <strong>₹ 249</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{ route('vps-hosting') }}">
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
                                                <a class="title-with-icon-link"
                                                    href="{{ route('dedicated-server') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i
                                                                class="fas fa-tachometer-alt"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Dedicated
                                                                Hosting</span>
                                                            <small class="u-header__promo-text">Quickly build Starting
                                                                at
                                                                <strong>13359/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{ route('cloud-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-cloud"></i></div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Cloud Hosting <span
                                                                    class="badge badge-danger ml-1">Hot</span></span>
                                                            <small class="u-header__promo-text">Conveniently cloud
                                                                Starting
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
                                                <a class="title-with-icon-link" href="{{ route('email-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Email Hosting</span>
                                                            <small class="u-header__promo-text">First Starting at
                                                                <strong>₹ 9/mo
                                                                    per mailbox</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link"
                                                    href="{{ route('shared-wp-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-database"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Shared Wordpress
                                                                Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting
                                                                at
                                                                <strong>₹ 839/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link" href="{{ route('wp-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fab fa-wordpress"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Wordpress
                                                                Hosting</span>
                                                            <small class="u-header__promo-text">Conveniently Starting
                                                                at
                                                                <strong>₹ 839/mo</strong></small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!--menu title with subtitle and icon item end-->
                                            <!--menu title with subtitle and icon item start-->
                                            <div class="title-with-icon-item">
                                                <a class="title-with-icon-link"
                                                    href="{{ route('woocommerce-hosting') }}">
                                                    <div class="media">
                                                        <div class="menu-item-icon"><i class="fas fa-server"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">WooCommerce Hosting
                                                                <span
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
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="360px"
                                data-position="right">
                                <a id="supportMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                    href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">Support</a>
                                <!--support submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="supportMegaMenu"
                                    style="min-width: 330px;">

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{ route('support') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat.svg"
                                                    alt="SVG">
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
                                        <a class="title-with-icon-link" href="{{ route('support') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/support.svg"
                                                    alt="SVG">
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
                                        <a class="title-with-icon-link" href="{{ route('network') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/data-services.svg"
                                                    alt="SVG">
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
                                        <a class="title-with-icon-link" href="{{ route('status') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/time.svg"
                                                    alt="SVG">
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
                                                    <a class="small" href="{{ route('contact') }}">
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

                            <li class="nav-item hs-has-sub-menu custom-nav-item">
                                <a id="pagesMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                    href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Pages</a>

                                <!-- Pages - Submenu -->
                                <ul id="pagesSubMenu" class="hs-sub-menu main-sub-menu"
                                    aria-labelledby="pagesMegaMenu" style="min-width: 260px;">
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{ route('about') }}">About
                                            Us</a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{ route('services') }}">Our
                                            Services</a>
                                    </li>

                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link" href="{{ route('team') }}">Team </a>
                                    </li>
                                    <li class="nav-item submenu-item">
                                        <a class="nav-link sub-menu-nav-link"
                                            href="{{ route('offer-single') }}">Black Friday Single <span
                                                class="badge badge-warning ml-auto">New</span></a>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPricing" class="nav-link sub-menu-nav-link sub-link-toggle"
                                            href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesPricing">Pricing</a>

                                        <ul id="navSubmenuPagesPricing" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesPricing" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('pricing-default') }}">Pricing Default</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('pricing-package') }}">Pricing Packages</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('pricing-comparison') }}">Pricing Comparison</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('vps-pricing') }}">VPS Pricing</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('pricing-new') }}">New Pricing <span
                                                        class="badge badge-success ml-2">New</span></a></li>
                                        </ul>
                                    </li>


                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin" class="nav-link sub-menu-nav-link sub-link-toggle"
                                            href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('login') }}">Login</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('register') }}">Signup</a>
                                            </li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('recover-password') }}">Recover Account</a></li>

                                        </ul>
                                    </li>
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities"
                                            class="nav-link sub-menu-nav-link sub-link-toggle"
                                            href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <ul id="navSubmenuPagesUtilities" class="hs-sub-menu main-sub-menu"
                                            aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('help') }}">Help</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('faq') }}">FAQ</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('status') }}">Status</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('knowledge-base') }}">Knowledge Base</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('terms-conditions') }}">Terms
                                                    &amp; Conditions</a></li>
                                            <li><a class="nav-link sub-menu-nav-link"
                                                    href="{{ route('privacy-policy') }}">Privacy &amp; Policy</a></li>
                                        </ul>
                                    </li>

                                    <!-- Specialty -->
                                </ul>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!--pages end-->


                            <!--about start-->
                            <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="250px"
                                data-position="right">
                                <a id="aboutMegaMenu" class="nav-link custom-nav-link main-link-toggle"
                                    href="JavaScript:Void(0);" aria-haspopup="true" aria-expanded="false">About</a>

                                <!--about submenu start-->
                                <div class="hs-mega-menu main-sub-menu" aria-labelledby="aboutMegaMenu"
                                    style="min-width: 330px;">



                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{ route('contact') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Contact Us</span>
                                                    <small class="u-header__promo-text">Face any problem contact with
                                                        us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->
                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{ route('clients') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/chat-mobile.svg"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Client</span>
                                                    <small class="u-header__promo-text">Face any problem contact with
                                                        us
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->

                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{ route('about') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/community.svg"
                                                    alt="SVG">
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
                                        <a class="title-with-icon-link" href="{{ route('clients') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/user-behaver.svg"
                                                    alt="SVG">
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
                                        <a class="title-with-icon-link" href="{{ route('partners') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/partner.svg"
                                                    alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Our Partner</span>
                                                    <small class="u-header__promo-text">We have trusted partners
                                                        globally
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!--menu title with subtitle and icon item end-->

                                    <!--menu title with subtitle and icon item start-->
                                    <div class="title-with-icon-item">
                                        <a class="title-with-icon-link" href="{{ route('network') }}">
                                            <div class="media align-items-center">
                                                <img class="menu-titile-icon" src="assets/img/network.svg"
                                                    alt="SVG">
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
                                                    <p class="small d-inline-flex">Credibly synergize unique... <a
                                                            href="https://www.youtube.com/watch?v=9No-FiEInLA"
                                                            class="popup-youtube video-play-icon"><span
                                                                class="ti-control-play"></span> </a></p>

                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex align-bottom">
                                                    <img src="assets/img/ceo.png" width="300" alt="ceo"
                                                        class="img-fluid" />
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
        <!--hero section start-->
        <section class="hero-equal-height ptb-100 gradient-overlay gradient-bg"
            style="background: url('assets/img/hero-bg-2.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6 col-18">
                        <div class="hero-content-wrap text-white">
                            <h1 class="text-white">HostMaji Best Hosting Provider in World</h1>
                            <p class="lead">If your WordPress website is your personal business, we
                                want you to succeed. We made our HostMaji hosting & domain service provider platform.
                            </p>

                            <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                                Get Started
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="animation-image-wrap">
                            <img src="assets/img/servers.svg" alt="wp hosting" class="img-fluid" />
                            <img src="assets/img/animated-icon-1.png" alt="wp hosting"
                                class="animation-icon-img animation-icon-1" />
                            <img src="assets/img/animated-icon-2.png" alt="wp hosting"
                                class="animation-icon-img animation-icon-2" />
                            <img src="assets/img/animated-icon-3.png" alt="wp hosting"
                                class="animation-icon-img animation-icon-3" />
                            <img src="assets/img/animated-icon-4.png" alt="wp hosting"
                                class="animation-icon-img animation-icon-4" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--hero section end-->

        <!--promo-section section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-md-0 mb-lg-5">
                            <h2>HostMaji Helps You Succeed</h2>
                            <p class="lead">Grow your website faster by using HostMaji as your foundation.
                                Dynamically
                                streamline principle-centered technologies.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-bezier-curve text-white"></span>
                                </div>
                                <h5>Super Easy to Use</h5>
                                <p>Increase sales by showing true dynamics of your website.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-sync-alt text-white"></span>
                                </div>
                                <h5>Fast & Reliable</h5>
                                <p>Build your online store’s trust using Social Proof &amp; Urgency.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <a href="#">
                            <div
                                class="single-promo-2 single-promo-hover rounded-custom text-center white-bg p-5 h-100">
                                <div class="circle-icon">
                                    <span class="fas fa-headset text-white"></span>
                                </div>
                                <h5>24/7 Expert Support</h5>
                                <p>Realize importance of social proof in customer’s purchase decision.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--promo-section section end-->

        <!--services section start-->
        <section class="our-services ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5 mb-sm-5 mb-md-3 mb-lg-3">
                            <h2>We Have a Hosting Solution For You</h2>
                            <p class="lead">Synergistically architect plug-and-play without next-generation
                                manufactured products. Assertively develop synergistic networks.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-shared-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Shared Hosting</h3>
                                <p>Our most popular product! Shared Web Hosting gives you a fast SSD
                                    storage hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 219/mo</strong></p>
                                <a href=" {{ route('shared-hosting') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-wordpress-hosting.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WordPress Hosting</h3>
                                <p>Get up and running fast with Optimized performance easy
                                    maintenance hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 219/mo</strong></p>
                                <a href=" {{ route('wp-hosting') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-vps-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">VPS Hosting</h3>
                                <p>Virtual Private Servers with ultra-fast SSDs and flexibility, Ubuntu, IPv6,
                                    Nginx and more.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 999/mo</strong></p>
                                <a href=" {{ route('vps-hosting') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-website-builder.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">WP Website Builder</h3>
                                <p>No code required! Build your site confidently with design tools that WordPress
                                    website build.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 219/mo</strong></p>
                                <a href=" {{ route('wp-hosting') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-dadicate-hosting.svg" alt="shared hosting"
                                class="img-fluid mb-4" width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Dedicated Hosting</h3>
                                <p>Fast web servers to run your applications with root and a 100% Guarantee
                                    our hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 12159/mo</strong></p>
                                <a href=" {{ route('dedicated-server') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-service-plane text-center rounded white-bg shadow-sm p-5 mt-md-4 mt-lg-4">
                            <img src="assets/img/icon-cloud-hosting.svg" alt="shared hosting" class="img-fluid mb-4"
                                width="45" />
                            <div class="service-plane-content">
                                <h3 class="h5">Cloud Hosting</h3>
                                <p>Lightning-fast servers with root access, SSD storage and blazing-fast networking
                                    hosting.</p>
                            </div>
                            <div class="action-wrap mt-3">
                                <p>Starting at: <strong>₹ 9/mo</strong></p>
                                <a href=" {{ route('cloud-hosting') }}" class="btn-link">View Details <span
                                        class="fas fa-long-arrow-alt-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <!--services section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay"
            style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="call-to-action-content text-white text-center">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p class="lead mb-0">Whether you’re stuck or just want some tips on where to start, hit up
                                our
                                experts anytime.</p>
                            <p>Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                <strong>
                                    5:30AM–9:30PM PT</strong></p>
                            <div class="action-btns">
                                <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                                <a href="#" class="btn outline-white-btn">Send us an Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--call to action section end-->

        <!--pricing with switch section start-->
        <section class="pricing-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Managed Our Hosting Price</h2>
                            <p class="lead">
                                Professional hosting at an affordable price. Distinctively recaptiualize
                                principle-centered
                                core competencies through
                                core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-8 col-md-7">
                        <div class="text-center mb-5 radio-box-wrap billingCycle">
                            <div class="single-radio-box">
                                <input name="billingPlan" id="monthly-plan" value="monthly" class="radio"
                                    type="radio" checked>
                                <label for="monthly-plan"><span class="custom-check"></span> Monthly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="yearly-plan" value="yearly" class="radio"
                                    type="radio">
                                <label for="yearly-plan"><span class="custom-check"></span> Yearly</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="biannual-plan" value="biannual" class="radio"
                                    type="radio">
                                <label for="biannual-plan"><span class="custom-check"></span> Biannual</label>
                            </div>
                            <div class="single-radio-box">
                                <input name="billingPlan" id="triennial-plan" value="triennial" class="radio"
                                    type="radio">
                                <label for="triennial-plan"><span class="custom-check"></span> Triennial</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Starter</h5>
                                <p class="mb-0">Medium traffic personal sites</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price"> ₹
                                    {{ $pric1 = 596 }}<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price"> ₹
                                    {{ $pric1 * 12 }}<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price"> ₹
                                    {{ $pric1 * 24 }}<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price"> ₹
                                    {{ $pric1 * 36 }}<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>10</span> Hosted Domains</li>
                                    <li><span>25 GB</span> RAID 10 Storage</li>
                                    <li><span>200 GB</span> Bandwidth</li>
                                    <li><span>1 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card popular-price text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Business <span
                                        class="badge color-1 color-1-bg">Popular</span></h5>
                                <p class="mb-0">High traffic corporate sites</p>
                            </div>

                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">₹
                                    {{ $pric2 = 1196 }}<span>/month</span></div>
                                <div class="price text-center mb-0 yearly-price">₹
                                    {{ $pric2 * 12 }}<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">₹
                                    {{ $pric2 * 24 }}<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price"> ₹
                                    {{ $pric2 * 36 }}<span>/triennial</span></div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>30</span> Hosted Domains</li>
                                    <li><span>75 GB</span> RAID 10 Storage</li>
                                    <li><span>700 GB</span> Bandwidth</li>
                                    <li><span>3 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn primary-solid-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card text-center single-pricing-pack">
                            <div class="pt-5">
                                <h5 class="mb-0">Cloud Enterprise</h5>
                                <p class="mb-0">Enterprise content management</p>
                            </div>
                            <div class="card-header pb-4 border-0 pricing-header">
                                <div class="price text-center mb-0 monthly-price">₹ {{ $pric3 = 2796 ;}}
                                    <span>/month</span>
                                </div>
                                <div class="price text-center mb-0 yearly-price">₹ {{ $pric3 * 12; }}<span>/yearly</span></div>
                                <div class="price text-center mb-0 biannual-price">₹ {{ $pric3 * 24; }}<span>/biannual</span></div>
                                <div class="price text-center mb-0 triennial-price">₹ {{ $pric3 * 36; }}<span>/triennial</span></
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                    <li><span>60</span> Hosted Domains</li>
                                    <li><span>175 GB</span> RAID 10 Storage</li>
                                    <li><span>1500 GB</span> Bandwidth</li>
                                    <li><span>6 Free</span> Domain included</li>
                                    <li><span>Super Fast</span> SSD Storage</li>
                                    <li><span>Free</span> SSL Certificate</li>
                                    <li>99.95% Uptime</li>
                                    <li>24/7 Phone Support</li>
                                </ul>
                                <a href="#" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="support-cta mt-5">
                            <h5 class="mb-1 d-flex align-items-center justify-content-center"><span
                                    class="ti-loop color-primary mr-3 icon-sm"></span>Choose Your <a
                                    href="{{ route('pricing-comparison') }}" class="ml-2">Compare Hosting Plans</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--pricing with switch section end-->

        <!--feature section start-->
        <section class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Hosting Features For Your Big Ideas</h2>
                            <p class="lead">These features come standard in all of our hosting plans. Dynamically
                                extend
                                imperatives through open-source quickly niche markets.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-panel icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Custom Control Panel</h5>
                                <p>Our intuitive control panel gives you admin access to all of your DreamHost products.
                                    Easily update domain information, add users, adjust email settings gain access.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-thumb-up icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Real-Life Human Beings</h5>
                                <p>Tech veterans, geeks, and nerds are all standing by to optimize your experience.
                                    Whether
                                    you get in touch with our support, read our knowledge base, or start a thread.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-mouse-alt icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>1-Click Installer</h5>
                                <p>No need to dig into a bunch of documentation. Simply install web apps like WordPress,
                                    Joomla! and more. Monotonectally administrate economically sound opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-timer icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>100% Uptime Guarantee</h5>
                                <p>With multiple datacenter locations, redundant cooling, emergency generators, and
                                    constant
                                    monitoring, we are able to offer our 100% Uptime Guarantee.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-harddrives icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Solid State Drives (SSD)</h5>
                                <p>With SSDs, your website, caching, and database queries are faster by our
                                    calculations.
                                    Quickly orchestrate worldwide niche markets vis-a-vis end-to-end infomediaries. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="features-box p-4">
                            <div class="features-box-icon">
                                <span class="ti-cup icon-md color-primary"></span>
                            </div>
                            <div class="features-box-content">
                                <h5>Award-Winning Support</h5>
                                <p>No question is too simple, or too complex for our team of experts. Synergistically
                                    synergize Our in-house support staff and service team are here for you 24/7, 365.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--feature section end-->

        <!--call to action section start-->
        <section class="call-to-action ptb-100 gradient-overlay"
            style="background: url('assets/img/hero-bg-4.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-8">
                        <div class="call-to-action-content text-white">
                            <h2 class="text-white">Need Some Help?</h2>
                            <p>Whether you’re stuck or just want some tips on where to start, hit up our experts
                                anytime.
                                <br> Sales Chat: <strong> MON-FRI 8AM-4PM PT</strong> | Customer Support Chat: Every Day
                                <strong> 5:30AM–9:30PM PT</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="action-btns mt-md-4 text-md-right text-lg-right text-sm-left">
                            <a href="#" class="btn solid-white-btn mr-3">Chat With Us</a>
                            <a href="#" class="btn outline-white-btn">Send us an Email</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--call to action section end-->

        <!--faq section start-->
        <div id="faq" class="ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5">
                            <h2>Frequently Asked Queries</h2>
                            <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize
                                frictionless expertise whereas tactical relationships. Still have questions? <a
                                    href="#contact" class="page-scroll">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div id="accordion-one" class="accordion accordion-faq">
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                    <h6 class="mb-0 d-inline-block">What is Web Hosting?
                                    </h6>
                                </a>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p class="text text-primary">Web hosting is a service that allows individuals
                                            and organizations to
                                            make their websites accessible via the World Wide Web. In
                                            simpler terms, it's like renting space on a computer server to store
                                            and serve your website files to users when they access your domain name
                                            through their web browsers.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseTwo">
                                    <h6 class="mb-0 d-inline-block">What Are the
                                        Different Types of Web Hosting Products DreamHost Offers?</h6>
                                </a>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p><b class="text text-primary">Shared Hosting:</b> This is the most affordable
                                            option where multiple websites share resources on a single server. It's
                                            suitable for small businesses, personal websites, and blogs.
                                            <br>
                                            <b class="text text-primary">Virtual Private Servers (VPS):</b> VPS hosting
                                            provides more control and resources than shared hosting. Each website
                                            resides in its own virtual environment on a shared server, offering better
                                            performance and security.
                                            <br>
                                            <b class="text text-primary">Dedicated Servers:</b> With dedicated hosting,
                                            you get an entire physical server dedicated to your website. This option
                                            offers the highest level of performance, control, and security, making it
                                            ideal for large businesses and high-traffic websites.
                                            Managed WordPress Hosting: DreamHost offers optimized hosting specifically
                                            for WordPress websites. This includes features like automatic updates,
                                            enhanced security, and specialized support tailored for WordPress users.
                                            <br>

                                            <b class="text text-primary"> WooCommerce Hosting:</b> Designed for online
                                            stores built on the WooCommerce platform, this hosting option provides
                                            specialized support for e-commerce websites, including features like
                                            one-click setup and automatic updates.
                                            <br>
                                            <b class="text text-primary"> Cloud Hosting:</b> DreamHost's cloud hosting
                                            solutions offer scalability and flexibility by distributing resources across
                                            multiple servers. This ensures high availability and reliability, making it
                                            suitable for websites with fluctuating traffic levels.
                                            <br>
                                            <b class="text text-primary"> Website Builder Hosting:</b> DreamHost offers
                                            a website builder tool along with hosting services, allowing users to create
                                            and publish websites without needing coding knowledge. This option is
                                            perfect for individuals and small businesses looking to quickly establish an
                                            online presence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseThree">
                                    <h6 class="mb-0 d-inline-block">How Do I Buy a Domain
                                        Name?
                                    </h6>
                                </a>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p><b class="text text-primary">Choose a Domain Registrar:</b> Start by
                                            selecting a domain registrar. Popular options include GoDaddy, Namecheap,
                                            Google Domains, and Bluehost.
                                            <br>
                                            <b class="text text-primary">Search for Available Domains: </b>Use the
                                            registrar's search tool to check if your desired domain name is available.
                                            If it's not, you may need to try different variations or consider
                                            alternative extensions (.com, .net, .org, etc.).
                                            <br>
                                            <b class="text text-primary">Select Your Domain: </b>Once you find an
                                            available domain name that suits your needs, add it to your cart.
                                            <br>
                                            <b class="text text-primary">Review Your Cart:</b> Review the items in your
                                            cart, including the domain name(s) and any additional services the registrar
                                            may offer, such as privacy protection or website hosting.
                                            <br>
                                            <b class="text text-primary">Complete the Purchase:</b> Proceed to checkout
                                            and follow the prompts to enter your payment information and complete the
                                            purchase.
                                            <br>
                                            <b class="text text-primary">Set Up Your Account:</b> After purchasing the
                                            domain, you'll typically need to create an account with the registrar if you
                                            haven't already done so. This account will allow you to manage your domain
                                            settings, renewals, and other features.
                                            <br>
                                            <b class="text text-primary">Configure DNS Settings:</b> Once you have
                                            access to your domain management dashboard, you can configure your domain's
                                            DNS settings. This involves pointing your domain to your web hosting
                                            provider's servers if you're setting up a website.
                                            <br>
                                            <b class="text text-primary">Optional:</b> Enable Privacy Protection: Many
                                            registrars offer privacy protection services to keep your personal
                                            information, such as your name and contact details, private in the WHOIS
                                            database. Consider enabling this feature if you want to maintain your
                                            privacy.
                                            <br>
                                            <b class="text text-primary">Renew Your Domain:</b> Domain names are
                                            typically registered for a set period (usually one year), after which they
                                            need to be renewed to maintain ownership. Set up auto-renewal if you want to
                                            ensure that your domain doesn't expire accidentally.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-0">
                                <a class="card-header collapsed" data-toggle="collapse" href="#collapseFour">
                                    <h6 class="mb-0 d-inline-block">Can You Help Me
                                        Understand More About WordPress?
                                    </h6>
                                </a>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-one">
                                    <div class="card-body">
                                        <p><b class="text text-primary"> Source Platform:</b> WordPress is an
                                            open-source platform, which means its source code is freely available for
                                            anyone to use, modify, and distribute. This has contributed to its
                                            widespread adoption and vibrant developer community.
                                            <br>

                                            <b class="text text-primary"> Versatility:</b> WordPress is incredibly
                                            versatile and can be used to create almost any type of website, from simple
                                            blogs to complex e-commerce sites, portfolios, forums, and more. Its
                                            flexibility comes from its extensive library of themes and plugins, which
                                            allow you to customize and extend its functionality to suit your needs.
                                            <br>
                                            <b class="text text-primary"> Themes: </b> Themes control the design and
                                            layout of your WordPress site. There are thousands of free and premium
                                            themes available, allowing you to choose a design that matches your brand or
                                            personal style. You can also customize themes or create your own from
                                            scratch if you have the technical expertise.
                                            <br>
                                            <b class="text text-primary"> Plugins:</b> Plugins are like apps for your
                                            WordPress site. They add specific features and functionality, such as
                                            contact forms, SEO optimization, e-commerce capabilities, social media
                                            integration, and more. With thousands of plugins available, you can easily
                                            enhance your site's functionality without needing to code everything
                                            yourself.
                                            <br>
                                            <b class="text text-primary"> User-friendly Interface:</b> WordPress has a
                                            user-friendly interface that makes it easy for beginners to create and
                                            manage content. You can add new pages or blog posts, upload media files, and
                                            customize your site's appearance without needing to write any code.
                                            <br>
                                            <b class="text text-primary"> Community Support:</b> WordPress has a large
                                            and active community of users, developers, designers, and contributors who
                                            provide support, share knowledge, and create resources such as tutorials,
                                            forums, and documentation. This makes it easy to find help and resources if
                                            you run into any issues or have questions about using WordPress.
                                            <br>
                                            <b class="text text-primary"> SEO-Friendly:</b> WordPress is designed with
                                            search engine optimization (SEO) in mind, making it easy to optimize your
                                            site for better visibility in search engine results. There are also several
                                            SEO plugins available that can help you further optimize your content and
                                            improve your site's ranking.
                                            <br>
                                            <b class="text text-primary"> Overall, WordPress is a powerful and flexible
                                                platform that can help you create professional-looking websites and
                                                blogs with ease. Whether you're a beginner or an experienced web
                                                developer, WordPress offers the tools and resources you need to bring
                                                your ideas to life online.</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--faq section end-->

        <!--testimonial and review section start-->
        <section class="client-review-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>What Our Customers Say About Us?</h2>
                            <p class="lead">Authoritatively reinvent client-centric e-markets via fully tested
                                process. Objectively restore strategic initiatives through fully researched.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome support from technical</h5>
                                <p>"Exceptional technical support! The team went above and beyond to resolve my issue
                                    swiftly, efficiently, and with utmost professionalism. Highly recommend their
                                    stellar service!"</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Abdul Rahman</h6>
                                <small class="text-right">6 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-testimonial white-bg shadow-sm rounded p-5">
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                                <li class="list-inline-item"><span class="fas fa-star"></span></li>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Design Quality with Support</h5>
                                <p>It's fantastic to hear that you're pleased with both the design quality and the
                                    support you've received! If there's anything else you need assistance with, just let
                                    us know.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Aman Gupta</h6>
                                <small class="text-right">3 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
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
                                <p>Contacting support after midnight? That's dedication! We're here around the clock to
                                    assist you whenever you need it. Let us know if there's anything we can help with.
                                </p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Priya Rawat</h6>
                                <small class="text-right">8 days ago</small>
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
                                    <h4 class="text-white">About us</h4>
                                    <p>
                                        Welcome to HostMaji, your reliable partner in web hosting solutions. We are a
                                        proud initiative of SoftMaji InfoTech Private Limited, committed to providing
                                        exceptional hosting services at no cost.
                                    </p>
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
                                            <a class="nav-link" href="{{ route('freehosting') }}">Free Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('wp-hosting') }}">WordPress
                                                Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('shared-hosting') }}">Shared
                                                Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('vps-hosting') }}">Virtual Private
                                                Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('dedicated-server') }}">Dedicated
                                                Servers</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('clients') }}">Our Clients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('partners') }}">Our Partners</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEGAL</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('terms-conditions') }}">Terms of
                                                Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('privacy-policy') }}">Privacy
                                                Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('acceptable-use-policy') }}">Acceptable Use Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('testimonials') }}">Testimonials </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SUPPORT</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('support') }}">Support</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('knowledge-base') }}">Knowledge
                                                Base</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('affiliate-program') }}">Affiliate
                                                Program</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('careers') }}">Careers</a>
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
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2024. All
                            rights reserved by
                            <a href="https://softmaji.in" target="_blank">SoftMaji</a>
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
    <script src="/assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="/assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/owl.carousel.min.js"></script>
    <script src="/assets/js/vendors/validator.min.js"></script>
    <script src="/assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="/assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="/assets/js/vendors/magnific-popup.min.js"></script>
    <script src="/assets/js/vendors/hs.megamenu.js"></script>
    <script src="/assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from HostMaji.themetags.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 05:06:26 GMT -->

</html>
                            </ul>
                            <div class="ratting-content">
                                <h5>Awesome Design Quality with Support</h5>
                                <p>It's fantastic to hear that you're pleased with both the design quality and the
                                    support you've received! If there's anything else you need assistance with, just let
                                    us know.</p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Aman Gupta</h6>
                                <small class="text-right">3 days ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
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
                                <p>Contacting support after midnight? That's dedication! We're here around the clock to
                                    assist you whenever you need it. Let us know if there's anything we can help with.
                                </p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>Priya Rawat</h6>
                                <small class="text-right">8 days ago</small>
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
                                    <h4 class="text-white">About us</h4>
                                    <p>
                                        Welcome to HostMaji, your reliable partner in web hosting solutions. We are a
                                        proud initiative of SoftMaji InfoTech Private Limited, committed to providing
                                        exceptional hosting services at no cost.
                                    </p>
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
                                            <a class="nav-link" href="{{ route('freehosting') }}">Free Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('wp-hosting') }}">WordPress
                                                Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('shared-hosting') }}">Shared
                                                Hosting</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('vps-hosting') }}">Virtual Private
                                                Servers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('dedicated-server') }}">Dedicated
                                                Servers</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">COMPANY</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('team') }}">Our Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('clients') }}">Our Clients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('partners') }}">Our Partners</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">LEGAL</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('terms-conditions') }}">Terms of
                                                Service</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('privacy-policy') }}">Privacy
                                                Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('acceptable-use-policy') }}">Acceptable Use Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('testimonials') }}">Testimonials </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="footer-nav-wrap text-white">
                                    <h4 class="text-white">SUPPORT</h4>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('support') }}">Support</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('knowledge-base') }}">Knowledge
                                                Base</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('affiliate-program') }}">Affiliate
                                                Program</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('careers') }}">Careers</a>
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
                        <p class="copyright-text pb-0 mb-0">Copyrights © 2024. All
                            rights reserved by
                            <a href="https://softmaji.in" target="_blank">SoftMaji</a>
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
    <script src="/assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendors/bootstrap-slider.min.js"></script>
    <script src="/assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/jquery.easing.min.js"></script>
    <script src="/assets/js/vendors/owl.carousel.min.js"></script>
    <script src="/assets/js/vendors/validator.min.js"></script>
    <script src="/assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="/assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="/assets/js/vendors/magnific-popup.min.js"></script>
    <script src="/assets/js/vendors/hs.megamenu.js"></script>
    <script src="/assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from HostMaji.themetags.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2024 05:06:26 GMT -->

</html>
