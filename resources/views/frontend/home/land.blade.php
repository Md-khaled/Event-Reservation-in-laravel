@extends('frontend.master')
@section('pageTitle', 'Home')
@section('slider')
 <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_Homeslider mainslider_1">
        <div class="cq-coverslider  navigation-overlay-right tinyshadow grapefruit " data-imagemaxheight="300" data-buttonbackground="" data-buttonhoverbackground="#222F46" data-contentbackground="" data-contentcolor="" data-arrowcolor="" data-arrowhovercolor="" data-delaytime="2">
                <div class="cq-coverslider-area btn-large square">
                    <div class="cq-coverslider-cover">
                        <div class="cq-coverslider-itemcontainer">
                            <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/slide1.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img1.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                            <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/slide2.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img2-1.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                            <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/slide3.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img3.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                        </div>
                    </div>
                    <div class="cq-coverslider-content">
                        <div class="cq-coverslider-contentitem"></div>
                        <div class="cq-coverslider-contentitem"></div>
                        <div class="cq-coverslider-contentitem"></div>
                    </div>
                </div>
               
            </div>              
                
                <!-- END REVOLUTION SLIDER -->
            </section>
@endsection
@section('content')
 <div class="page_content_wrap page_paddings_no">
<div class="content">
    <article class="post_item post_item_single page type-page">
        <div class="post_content">
            <section class="no-col-padding">
                <div class="content_container">
                    <div class="columns_wrap">
                        <div class="column_container column-1_1">
                            <div class="column-inner">
                                 <div class="m_wrapper">
                                   <!--.sc_services_wrap -->
                                    <div class="sc_services_wrap">
                                       <!--.sc_services -->
                                        <div class="sc_services sc_services_style_services-1 sc_services_type_images margin_bottom_medium sc_home-param-type-a">
                                            <h3 class="sc_services_title sc_item_title sc_item_title_without_descr">Let's Plan Your Perfect Event Reservation</h3>
                                            <h6 class="sc_services_subtitle sc_item_subtitle">welcome</h6>
                                            <div class="sc_columns columns_wrap">
                                                @forelse($eventtypes as $eventtype)
                                                <div class="column-1_3 column_padding_bottom">
                                                    <div class="sc_services_item odd first">
                                                        <div class="sc_services_item_featured post_featured">
                                                            <div class="post_thumb" data-image="" data-title="Bouquets &amp; Style">
                                                                <a class="hover_icon hover_icon_link" href="{{route('user.event-reservation.show',$eventtype->id)}}"><img class="post-image" style="height: 10px !important" alt="img1.jpg" src="{{asset($eventtype->image)}}" style="display:none;visibility:hidden;"><noscript><img class="post-image"  style="height: 100px !important" alt="img1.jpg" src="{{asset($eventtype->image)}}"></noscript></a>
                                                            </div>
                                                        </div>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="{{route('user.event-reservation.show',$eventtype->id)}}">{{$eventtype->type}}</a></h4>
                                                            <div class="sc_services_item_description"> <a href="{{route('user.event-reservation.show',$eventtype->id)}}" class="sc_button sc_button_square sc_button_style_hovered sc_button_size_small">Booking Now</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                @endforelse
                                            </div>
                                        </div>
                                        <!-- end .sc_services -->
                                    </div>
                                    <!-- end .sc_services_wrap -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
            <section class="no-col-padding">
                <div class="container-fluid sc_home-bg-type-b">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                         <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_9 sc_home-margin-type-a">
                                            <div class="column-5_9 sc_column_item  odd first span_5">
                                                <h6 class="sc_title sc_title_regular margin_top_null sc_home-margin-type-b">about us</h6>
                                                <h2 class="sc_title sc_title_iconed margin_top_tiny margin_bottom_null sc_home-margin-type-c fsz_cust">We Plan &amp; Design Event Reservation<br />
                                                That Capture the Imagination<span class="sc_title_icon sc_title_icon_bottom  sc_title_icon_small"><img data-cfsrc="{{asset('public/front')}}/images/vector-smart-object-copy-12.png" alt="" style="display:none;visibility:hidden;" /><noscript><img src="{{asset('public/front')}}/images/vector-smart-object-copy-12.png" alt="" /></noscript></span></h2>
                                                <div class="m_text_column m_content_element ">
                                                    <div class="m_wrapper">
                                                        <p style="text-decoration: justify;">One service is weddings are significant events in people&#8217;s lives and as such, couples are often willing to spend considerable amount of money to ensure that their weddings are well-organized. Wedding planners are often used by couples who work long hours and have little spare time available for sourcing and managing wedding venues.</p>
                                                    </div>
                                                </div> <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_medium sc_home-margin-type-d">more about us</a></div><div class="column-4_9 sc_column_item even span_4">
                                                <div class="cq-coverslider  navigation-overlay-right tinyshadow grapefruit " data-imagemaxheight="300" data-buttonbackground="" data-buttonhoverbackground="#222F46" data-contentbackground="" data-contentcolor="" data-arrowcolor="" data-arrowhovercolor="" data-delaytime="2">
                                                    <div class="cq-coverslider-area btn-large square">
                                                        <div class="cq-coverslider-cover">
                                                            <div class="cq-coverslider-itemcontainer">
                                                                <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/welcome_gallery_img1.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img1.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                                                                <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/welcome_gallery_img2-1.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img2-1.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                                                                <div class="cq-coverslider-imageitem"><img data-cfsrc="{{asset('public/front')}}/images/welcome_gallery_img3.jpg" class="cq-coverslider-image" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/welcome_gallery_img3.jpg" class="cq-coverslider-image" alt=""></noscript></div>
                                                            </div>
                                                        </div>
                                                        <div class="cq-coverslider-content">
                                                            <div class="cq-coverslider-contentitem"></div>
                                                            <div class="cq-coverslider-contentitem"></div>
                                                            <div class="cq-coverslider-contentitem"></div>
                                                        </div>
                                                    </div>
                                                    <div class="cq-coverslider-navigation btn-large">
                                                        <div class="coverslider-navigation-prev"><i class="cq-coverslider-icon entypo-icon entypo-icon-left-open-big"></i></div><div class="coverslider-navigation-next"><i class="cq-coverslider-icon entypo-icon entypo-icon-right-open-big"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding">
                <div class="container-fluid">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <!--.sc_services_wrap -->  
                                        <div class="sc_services_wrap">
                                            <!--.sc_services -->
                                            <div class="sc_services sc_services_style_services-2 sc_services_type_icons margin_bottom_medium sc_home-param-type-b" data-animation="animated fadeInDown normal">
                                                <div class="sc_columns columns_wrap">
                                                    <div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item odd first"> <a href="services-single.html"><span class="sc_icon icon-icon1"></span></a>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Free Delivery</a></h4>
                                                                <div class="sc_services_item_description">
                                                                    <p>on every order, during the same day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item even"> <a href="services-single.html"><span class="sc_icon icon-icon2"></span></a>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Hand &#8211; Tied</a></h4>
                                                                <div class="sc_services_item_description">
                                                                    <p>bouquets and beautiful plants</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="column-1_3 column_padding_bottom">
                                                        <div class="sc_services_item odd"> <a href="services-single.html"><span class="sc_icon icon-icon3"></span></a>
                                                            <div class="sc_services_item_content">
                                                                <h4 class="sc_services_item_title"><a href="services-single.html">Exclusive Design</a></h4>
                                                                <div class="sc_services_item_description">
                                                                    <p>by the best florist from NYC</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .sc_services -->
                                        </div>
                                        <!-- end .sc_services_wrap -->  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding overflow-hidden">
                <div class="container-fluid sc_home-bg-type-c">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_7 sc_home-margin-type-e" data-equal-height=".sc_column_item">
                                            <div class="column-4_7 sc_column_item odd first span_4"></div><div class="column-3_7 sc_column_item odd" data-animation="animated fadeInRightBig normal">
                                                <h6 class="sc_title sc_title_regular sc_home-margin-type-f">inspiration</h6>
                                                <h5 class="sc_title sc_title_regular margin_top_tiny margin_bottom_tiny sc_home-font-type-a">Exclusive Design by Best EventReservation</h5>
                                                <div class="m_text_column m_content_element ">
                                                    <div class="m_wrapper">
                                                        <p>The EventReservation business has a significant market in the corporate and social event world, as flowers play a large part in the decor of special events and meetings</p>
                                                    </div>
                                                </div> <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large sc_home-margin-type-g" >visit gallery</a>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding">
                <div class="container-fluid">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <div class="sc_testimonials sc_testimonials_style_testimonials-1 margin_bottom_medium sc_home-param-type-c">
                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_side" data-interval="5160" data-slides-min-width="250">
                                                <div class="slides swiper-wrapper">
                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Alison &#038; Mark Priston" data-cfsrc="{{asset('public/front')}}/images/testimonials-1-102x102.jpg" style="display:none;visibility:hidden;"><noscript><img class="post-image" alt="Alison &#038; Mark Priston" src="{{asset('public/front')}}/images/testimonials-1-102x102.jpg"></noscript></div>
                                                            <div class="sc_testimonial_content">
                                                                <p>The wedding was truly fantastic. Thank you for making our dream come true!</p>
                                                            </div>
                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Alison &amp; Mark Priston, </span><span class="sc_testimonial_author_position">NYC</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Kelly &#038; Brandon Walsh" data-cfsrc="{{asset('public/front')}}/images/testimonials-2-102x102.jpg" style="display:none;visibility:hidden;"><noscript><img class="post-image" alt="Kelly &#038; Brandon Walsh" src="{{asset('public/front')}}/images/testimonials-2-102x102.jpg"></noscript></div>
                                                            <div class="sc_testimonial_content">
                                                                <p>We were extremely excited, but everything was even more that we hoped for!</p>
                                                            </div>
                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Kelly &amp; Brandon Walsh, </span><span class="sc_testimonial_author_position">CA</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide w100" data-style="width:100%;">
                                                        <div class="sc_testimonial_item">
                                                            <div class="sc_testimonial_avatar"><img class="post-image" alt="Melissa &#038; Ryan Smith" data-cfsrc="{{asset('public/front')}}/images/testimonials-3-102x102.jpg" style="display:none;visibility:hidden;"><noscript><img class="post-image" alt="Melissa &#038; Ryan Smith" src="{{asset('public/front')}}/images/testimonials-3-102x102.jpg"></noscript></div>
                                                            <div class="sc_testimonial_content">
                                                                <p>The ceremony was amazing! We are grateful for the creative caring approach.</p>
                                                            </div>
                                                            <div class="sc_testimonial_author"><span class="sc_testimonial_author_name">Melissa &amp; Ryan Smith, </span><span class="sc_testimonial_author_position">TX</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_slider_controls_wrap">
                                                    <a class="sc_slider_prev" href="#"></a>
                                                    <a class="sc_slider_next" href="#"></a>
                                                </div>
                                                <div class="sc_slider_pagination_wrap"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding">
                <div class="container-fluid sc_home-bg-type-d">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <div class="sc_section sc_section_block sc_home-margin-type-i">
                                            <div class="sc_section_inner">
                                                <div class="sc_section_content_wrap">
                                                    <h3 class="sc_title sc_title_underline sc_align_center sc_home-param-type-d">Let Us Make Your EventReservation Flawless</h3><a href="contacts.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_large aligncenter sc_home-param-type-e">send request</a>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding">
                <div class="container-fluid sc_home-bg-type-a">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 margin_top_large margin_bottom_large" data-equal-height=".sc_column_item">
                                            <div class="column-1_2 sc_column_item odd first">
                                                <h3 class="sc_title sc_title_regular margin_bottom_null sc_home-param-type-f">Stay Tuned with Updates!</h3>
                                            </div><div class="column-1_2 sc_column_item even">
                                                <div class="m_text_column m_content_element ">
                                                    <div class="m_wrapper">
                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-341" method="post" data-id="341" data-name="">
                                                            <div class="mc4wp-form-fields">
                                                                <input type="email" name="EMAIL" placeholder="Enter Your Email" class="emailer_input" required />
                                                                <input type="submit" class="emailer_submit" value="submit" />
                                                                <div class="hide">
                                                                    <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
                                                                </div>
                                                           </div>
                                                            <div class="mc4wp-response"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <section class="no-col-padding">
                <div class="container-fluid">    
                    <div class="column_container column-1_1">
                        <div class="column-inner">
                            <div class="m_wrapper">
                                <article class="myportfolio-container minimal-light" id="esg-grid-5-1-wrap">
                                    <!-- THE GRID ITSELF WITH FILTERS, PAGINATION, SORTING ETC... -->
                                    <div id="esg-grid-5-1" class="esg-grid sc_gal-grid-param-type-a">
                                        <!-- ############################ -->
                                        <!-- THE GRID ITSELF WITH ENTRIES -->
                                        <!-- ############################ -->
                                        <ul>
                                            <!-- PORTFOLIO ITEM 8 -->
                                            <li class="filterall eg-vanburen-wrapper">
                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                <div class="esg-media-cover-wrapper">
                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                    <div class="esg-entry-media"><img data-cfsrc="{{asset('public/front')}}/images/gallery-12.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/gallery-12.jpg" alt=""></noscript></div>
                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <!-- THE COLORED OVERLAY -->
                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                            <a class="eg-vanburen-element-5 esgbox" href="{{asset('public/front')}}/images/gallery-9.jpg">
                                                                <i class="eg-icon-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                <i class="eg-icon-link"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Classic Ceremony</div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                    </div>
                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                </div>
                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                            </li>
                                            <!-- END OF PORTFOLIO ITEM -->
                                            <!-- PORTFOLIO ITEM 8 -->
                                            <li class="filterall eg-vanburen-wrapper">
                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                <div class="esg-media-cover-wrapper">
                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                    <div class="esg-entry-media"><img data-cfsrc="{{asset('public/front')}}/images/gallery-11.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/gallery-11.jpg" alt=""></noscript></div>
                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <!-- THE COLORED OVERLAY -->
                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                            <a class="eg-vanburen-element-5 esgbox" href="{{asset('public/front')}}/images/gallery-9.jpg">
                                                                <i class="eg-icon-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                <i class="eg-icon-link"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Country Style Mix</div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                    </div>
                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                </div>
                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                            </li>
                                            <!-- END OF PORTFOLIO ITEM -->
                                            <!-- PORTFOLIO ITEM 8 -->
                                            <li class="filterall eg-vanburen-wrapper">
                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                <div class="esg-media-cover-wrapper">
                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                    <div class="esg-entry-media"><img data-cfsrc="{{asset('public/front')}}/images/gallery-10.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/gallery-10.jpg" alt=""></noscript></div>
                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <!-- THE COLORED OVERLAY -->
                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                            <a class="eg-vanburen-element-5 esgbox" href="{{asset('public/front')}}/images/gallery-9.jpg">
                                                                <i class="eg-icon-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                <i class="eg-icon-link"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">Rose Garden</div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                    </div>
                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                </div>
                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                            </li>
                                            <!-- END OF PORTFOLIO ITEM -->
                                            <!-- PORTFOLIO ITEM 8 -->
                                            <li class="filterall eg-vanburen-wrapper">
                                                <!-- THE CONTAINER FOR THE MEDIA AND THE COVER EFFECTS -->
                                                <div class="esg-media-cover-wrapper">
                                                    <!-- THE MEDIA OF THE ENTRY -->
                                                    <div class="esg-entry-media"><img data-cfsrc="{{asset('public/front')}}/images/gallery_img4.jpg" alt="" style="display:none;visibility:hidden;"><noscript><img src="{{asset('public/front')}}/images/gallery_img4.jpg" alt=""></noscript></div>
                                                    <!-- THE CONTENT OF THE ENTRY -->
                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                        <!-- THE COLORED OVERLAY -->
                                                        <div class="esg-overlay esg-flipup eg-vanburen-container" data-delay="0"></div>
                                                        <div class="esg-center eg-vanburen-element-5-a esg-falldown" data-delay="0.2">
                                                            <a class="eg-vanburen-element-5 esgbox" href="{{asset('public/front')}}/images/gallery-9.jpg">
                                                                <i class="eg-icon-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-6-a esg-falldown" data-delay="0.3">
                                                            <a class="eg-vanburen-element-6" href="#" target="_self">
                                                                <i class="eg-icon-link"></i>
                                                            </a>
                                                        </div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                        <div class="esg-center eg-vanburen-element-0 esg-flyleft" data-delay="0.05">She Said Yes!</div>
                                                        <div class="esg-center eg-vanburen-element-3 esg-none esg-clear"></div>
                                                    </div>
                                                    <!-- END OF THE CONTENT IN THE ENTRY -->
                                                </div>
                                                <!-- END OF THE CONTAINER FOR THE MEDIA AND COVER/HOVER EFFECTS -->
                                            </li>
                                            <!-- END OF PORTFOLIO ITEM -->
                                        </ul>
                                        <!-- ############################ -->
                                        <!--      END OF THE GRID         -->
                                        <!-- ############################ -->
                                    </div>
                                    <!-- END OF THE GRID -->
                                </article>
                                <!-- END OF THE GRID WRAPPER -->
                                <div class="clear"></div>   
                            </div>
                        </div>
                    </div>
                </div>
            </section>                         
            <section class="no-col-padding">
                <div class="container-fluid sc_home-bg-type-b">    
                    <div class="content_container">
                        <div class="columns_wrap">
                            <div class="column_container column-1_1">
                                <div class="column-inner">
                                    <div class="m_wrapper">
                                        <div class="sc_form_wrap">
                                            <div class="sc_form sc_form_style_form_1 aligncenter sc_home-param-type-g">
                                                <h3 class="sc_form_title sc_item_title sc_item_title_without_descr">Give Us a Feedback</h3>
                                                <h6 class="sc_form_subtitle sc_item_subtitle">contact form</h6>
                                                <form   method="post" action="{{route('user.contact.store')}}">
                                                     @csrf
                                                    <div class="sc_form_info columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_username" type="text" name="username" placeholder="Name *" aria-required="true">
                                                        </div><div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_email" type="text" name="email" placeholder="E-mail *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_message column-1_1">
                                                            <textarea id="sc_form_message" name="message" placeholder="Message" aria-required="true"></textarea>
                                                        </div>
                                                    </div>
                                                    <div >
                                                      <input type="submit" name="" value="send">
                                                    </div>
                                                </form> 
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>  
        </div>
        <!--end .post_content-->
    </article>
    <!-- end .post_item .post_item_single .page .type-page -->
</div>
<!--end .content-->
</div>
<!--end .page_content_wrap-->
@endsection
@section('script')
<script type="text/javascript">
    console.log('access success');
 /* var users={--!! json_encode($users->toArray()) !!--};
  console.log(users[0].id);
  var $portfoliogrid = $('.portfolio-grid .isotope');
    $portfoliogrid.isotope({
        itemSelector: '.item',
        transitionDuration: '0.7s',
        filter: '.category'+users[0].id
    });*/
</script>
@endsection