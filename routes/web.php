<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page_Controller;

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
Route::get('/shared-hosting', [Page_Controller::class, 'shared_hosting'])->name('shared-hosting');
Route::get('/shared-wp-hosting', [Page_Controller::class, 'shared_wp_hosting'])->name('shared-wp-hosting');
Route::get('/woocommerce-hosting', [Page_Controller::class, 'woocommerce_hosting'])->name('woocommerce-hosting');



