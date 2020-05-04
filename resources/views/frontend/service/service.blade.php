@extends('frontend.master', ['body_class' => 'page body_filled scheme_original'])
@section('pageTitle', 'Services')
@section('slider')
<div class="top_panel_title title_present">
  <div class="top_panel_title_inner title_present bg-breadcrumbs">
      <div class="content_wrap">
          <h1 class="page_title">Our Services</h1>
          <div class="breadcrumbs">
              <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Our Services</span>
          </div>  
      </div>
  </div>
</div>
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
                                                        <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-341">
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
        </div>
        <!--end .post_content-->
    </article>
    <!-- end .post_item .post_item_single .page .type-page -->
</div>
<!--end .content-->
</div>
@endsection