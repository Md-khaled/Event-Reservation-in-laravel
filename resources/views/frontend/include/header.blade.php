<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<!-- Mirrored from lovestory-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 18:33:06 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>EventReservation || @yield('pageTitle') </title>
    <link rel="icon" type="image/x-icon" href="{{asset('public/front')}}/images/favicons.png" />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/fontello/css/fontello.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/entypo/entypo.min.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/style.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/template.shortcodes.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/template.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/core.animation.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/magnific/magnific-popup.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/woocommerce/assets/css/woocommerce-smallscreen.css" type='text/css' media='only screen and (max-width: 768px)' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/woocommerce/assets/css/woocommerce-layout.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/woocommerce/assets/css/woocommerce.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/woocommerce/assets/css/plugin.woocommerce.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/essential-grid/public/assets/css/lightbox.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/essential-grid/public/assets/css/settings.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/revslider/public/assets/css/settings.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/swiper/swiper.css" type='text/css' media='all' /> 
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/mediaelement/mediaelementplayer.min.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/mediaelement/wp-mediaelement.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/coverslider/css/style.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/js/vendor/testimonialcarousel/slick/slick.css" type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' href="{{asset('public/front')}}/css/responsive.css" type='text/css' media='all' /> 
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css') }}/toastr.min.css">
</head>

<body class="{{$body_class ?? 'home page  body_filled  scheme_original'}}">
    <!--.body_wrap -->
    <div class="body_wrap">
       <!--.page_wrap -->
		<div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_2 scheme_original">
                <div class="top_panel_wrap_inner top_panel_inner_style_2 top_panel_position_above">
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="columns_wrap columns_fluid">
                                <div class="column-1_5 contact_field contact_phone">
                                     <span class="contact_icon icon-icon_phone"></span>
                                     <span class="contact_us">Call Us</span>
                                     <span class="contact_label contact_phone">800-123-4567</span>
                                </div>
                                <div class="column-3_5 contact_logo">
                                    <div class="logo">
                                        <a href="#"><script type="text/javascript" style="display:none">
//<![CDATA[
window.__mirage2 = {petok:"722fef924871d5b8b591671832cec5f9210cd29e-1585765984-1800"};
//]]>
</script>
<script type="text/javascript" src="{{asset('public/front')}}/js/mirage2.min.js"></script>
<img data-cfsrc="{{asset('public/front')}}/images/logo.png" class="logo_main" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/logo.png" class="logo_main" alt=""></noscript>
                                        <img data-cfsrc="{{asset('public/front')}}/images/logo.png" class="logo_fixed" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/logo.png" class="logo_fixed" alt=""></noscript></a>
                                    </div>
                                </div>
                                <div class="column-1_5 contact_field contact_cart">
                                    <a href="#" class="top_panel_cart_button"> 
                                        <span class="contact_icon icon-user-light"></span>
                                        <span class="contact_label contact_cart_label">{{Auth::user()->name??'Login'}}</span> 
                                        <span class="contact_cart_totals">
                                    </a>
                                       <ul class="widget_area sidebar_cart sidebar">
                                        <li>
                                            <div class="widget woocommerce widget_shopping_cart">
                                                <div class="hide_cart_widget_if_empty">
                                                    <div class="widget_shopping_cart_content">
                                                        <!-- product list -->
                                                        <ul class="cart_list product_list_widget ">
                                                            @if (Route::has('login'))
                                                            @auth
                                                             <li class="mini_cart_item" style="border-bottom: 1px solid #dfe0e0;"> 
                                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();"><span class="icon-logout"></span>{{ __('LogOut') }}</a> 
                                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                            </li>
                                                             <li class="mini_cart_item" style="border-bottom: 1px solid #dfe0e0;"> 
                                                                <a href="{{ url('admin/dashboard') }}"><span class="icon-home"></span>Dashboard</a> 
                                                            </li>
                                                             @else
                                                            <li class="mini_cart_item" style="border-bottom: 1px solid #dfe0e0;"> 
                                                                <a href="{{ route('admin.dashboard') }}"><span class="icon-login"></span>LogIn</a> 
                                                            </li>
                                                           @endauth
                                                           @endif
                                                            
                                                        </ul>
                                                        <!-- end product list -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>