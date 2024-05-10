<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    function index()
    {
        return view('index');
    }
    function about_us()
    {
        return view('about-us');
    }
    function clients()
    {
        return view('clients');
    }
    function cloud_hosting ()
    {
        return view('cloud-hosting');
    }
    function coming_soon()
    {
        return view('coming-soon');
    }
    function call_to_action()
    {
        return view('call-to-action');
    }
    function contact_us()
    {
        return view('contact-us');
    }
   function dedicated_server()
    {
        return view('dedicated-server-hosting');
    }
    function email_hosting()
    {
        return view('email-hosting');
    }

    function faq()
    {
        return view('faq');
    }
    function features()
    {
        return view('features');
    }
    function hosting()
    {
        return view('hosting');
    }
    function help ()
    {
        return view('help');
    }
    function knowledge_base()
    {
        return view('knowledge-base');
    }
    function offer_single()
    {
        return view('offer-single-page');
    }
    function partners()
    {
        return view('partners');
    }
    function pricing_comparison()
    {
        return view('pricing-comparision');
    }
    function pricing_default()
    {
        return view('pricing-default');
    }
    function pricing_package()
    {
        return view('pricing-package');
    }
    function pricing_new()
    {
        return view('pricing-new');
    }
    function privacy_policy()
    {
        return view('privacy-policy');
    }
    function services()
    {
        return view('services');
    }
    function shared_hosting()
    {
        return view('shared-hosting');
    }
    function support()
    {
        return view('support');
    }
    function team()
    {
        return view('team');
    }
    function term_condition()
    {
        return view('terms-condition');

    }
    function status()
    {
        return view('status');
    }
    function vps_hosting()
    {
        return view('vps-hosting');
    }
    function vps_pricing()
    {
        return view('vps-pricing');
    }
    function network()
    {
        return view('network');
    }
    function woocommerce_hosting()
    {
        return view('woocommerce-hosting');
    }
    function wp_hosting()
    {
        return view('wp-hosting');
    }
    function shared_wp_hosting()
    {
        return view('shared-wp-hosting');
    }
    function login_page()
    {

        return view('login');
    }
    function register_page()
    {
return view('signup');
    }
    function recover_password_page()
    {

    }
function freehosting_page()
{

}
function Affiliate_Program_page()
{

}
function Community_page()
{

}
function Accesibility_page()
{

}
function Careers_page()
{

}
function Data_Centers_page()
{

}
function Acceptable_Use_Policy_page()
{

}
function Blog_page()
{
return view('blog');
}
function Testimonials_page()
{
return view('testimonials');
}
}
