<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page_Controller;


// Pages Routes
Route::scopeBindings()->group(function () {


Route::get('/', [Page_Controller::class, 'index'])->name('index');
Route::get('/about-us', [Page_Controller::class, 'about_us'])->name('about');
Route::get('/clients', [Page_Controller::class, 'clients'])->name('clients');
Route::get('/cloud-hosting', [Page_Controller::class, 'cloud_hosting'])->name('cloud-hosting');
Route::get('/coming-soon', [Page_Controller::class, 'coming_soon'])->name('coming-soon');
Route::get('/contact', [Page_Controller::class, 'contact_us'])->name('contact');
Route::get('/faq', [Page_Controller::class, 'faq'])->name('faq');
Route::get('/features', [Page_Controller::class, 'features'])->name('features');
Route::get('/network', [Page_Controller::class, 'network'])->name('network');
Route::get('/Status', [Page_Controller::class, 'status'])->name('status');
Route::get('/team', [Page_Controller::class, 'team'])->name('team');
Route::get('/terms_and_conditions', [Page_Controller::class, 'term_condition'])->name('terms-conditions');
Route::get('/support', [Page_Controller::class, 'support'])->name('support');
Route::get('/vps-hosting', [Page_Controller::class, 'vps_hosting'])->name('vps-hosting');
Route::get('/vps-pricing', [Page_Controller::class, 'vps_pricing'])->name('vps-pricing');
Route::get('/dedicated-server-hosting', [Page_Controller::class, 'dedicated_server'])->name('dedicated-server');
Route::get('/email-hosting', [Page_Controller::class, 'email_hosting'])->name('email-hosting');
Route::get('/hosting', [Page_Controller::class, 'hosting'])->name('hosting');
Route::get('/help', [Page_Controller::class, 'help'])->name('help');
Route::get('/knowledge-base', [Page_Controller::class, 'knowledge_base'])->name('knowledge-base');
Route::get('/offer-single-page', [Page_Controller::class, 'offer_single'])->name('offer-single');
Route::get('/partners', [Page_Controller::class, 'partners'])->name('partners');
Route::get('/pricing-comparison', [Page_Controller::class, 'pricing_comparison'])->name('pricing-comparison');
Route::get('/pricing-default', [Page_Controller::class, 'pricing_default'])->name('pricing-default');
Route::get('/pricing-package', [Page_Controller::class, 'pricing_package'])->name('pricing-package');
Route::get('/pricing-new', [Page_Controller::class, 'pricing_new'])->name('pricing-new');
Route::get('/privacy-policy', [Page_Controller::class, 'privacy_policy'])->name('privacy-policy');
Route::get('/services', [Page_Controller::class, 'services'])->name('services');
Route::get('/wp-hosting', [Page_Controller::class, 'wp_hosting'])->name('wp-hosting');
Route::get('/shared-hosting', [Page_Controller::class, 'shared_hosting'])->name('shared-hosting');
Route::get('/shared-wp-hosting', [Page_Controller::class, 'shared_wp_hosting'])->name('shared-wp-hosting');
Route::get('/woocommerce-hosting', [Page_Controller::class, 'woocommerce_hosting'])->name('woocommerce-hosting');
Route::get('/login', [Page_Controller::class, 'login_page'])->name('login');
Route::get('/register', [Page_Controller::class, 'register_page'])->name('register');
Route::get('/recover-password', [Page_Controller::class, 'recover_password_page'])->name('recover-password');
Route::get('/Free-hosting', [Page_Controller::class, 'freehosting_page'])->name('freehosting');
Route::get('/community', [Page_Controller::class, 'Community_page'])->name('community');
Route::get('/accessibility', [Page_Controller::class, 'Accesibility_page'])->name('accessibility');
Route::get('/affiliate-program', [Page_Controller::class, 'Affiliate_Program_page'])->name('affiliate-program');
Route::get('/careers', [Page_Controller::class, 'Careers_page'])->name('careers');
Route::get('/data-centers', [Page_Controller::class, 'Data_Centers_page'])->name('data-centers');
Route::get('/acceptable-use-policy', [Page_Controller::class, 'Acceptable_Use_Policy_page'])->name('acceptable-use-policy');
Route::get('/blog', [Page_Controller::class, 'Blog_page'])->name('blog');
Route::get('/testimonials', [Page_Controller::class, 'Testimonials_page'])->name('testimonials');
});
// Pages Routes
