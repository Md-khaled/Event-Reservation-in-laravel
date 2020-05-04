@extends('frontend.master', ['body_class' => 'page sidebar_hide'])
@section('pageTitle', 'Contact Us')
@section('slider')
<div class="top_panel_title title_present">
  <div class="top_panel_title_inner title_present bg-breadcrumbs">
      <div class="content_wrap">
          <h1 class="page_title">Contacts</h1>
          <div class="breadcrumbs">
              <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Contacts</span>
          </div>  
      </div>
  </div>
</div>
@endsection
@section('content')
<style type="text/css">
    .text-danger{
        color: red;
    }
</style>
<div class="page_content_wrap page_paddings_no scheme_original">
<div class="content">
   <!-- .post_item_single .page .type-page  -->
    <article class="post_item_single page type-page">
       <!-- .post_content -->
        <div class="post_content">
             <section class="no-col-padding">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <div class="column_container column-1_1">
                            <div class="column-inner">
                                <div class="m_wrapper">
                                    <div class="sc_section contact_block sc_section_block sc-section-bg-contacts">
                                        <div class="sc_section_inner">
                                            <div class="sc_section_overlay">
                                                <div class="sc_section_content padding_on">
                                                    <div class="sc_section_content_wrap">
                                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                            <div class="column-1_3 sc_column_item odd first sc-contacts-column-custom"><span class="sc_icon icon-icon4 sc_icon_shape_round sc-contacts-transform"></span>
                                                                <h5 class="sc_title sc_title_regular sc_align_center sc-contacts-custom-h5">Address</h5>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p>123 New Lenox,
                                                                            <br /> Chicago, IL 60606</p>
                                                                    </div>
                                                                </div>
                                                                <div class="sc-contacts-emptyspace" ></div>
                                                            </div><div class="column-1_3 sc_column_item even sc-contacts-column-custom"><span class="sc_icon icon-icon5 sc_icon_shape_round sc-contacts-transform"></span>
                                                                <h5 class="sc_title sc_title_regular sc_align_center sc-contacts-custom-h5">Phone</h5>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p>(800)-456-7890</p>
                                                                    </div>
                                                                </div>
                                                                <div class="sc-contacts-emptyspace"></div>
                                                            </div><div class="column-1_3 sc_column_item odd sc-contacts-column-custom"><span class="sc_icon icon-icon6 sc_icon_shape_round sc-contacts-transform"></span>
                                                                <h5 class="sc_title sc_title_regular sc_align_center sc-contacts-custom-h5">Email address</h5>
                                                                <div class="m_text_column m_content_element ">
                                                                    <div class="m_wrapper">
                                                                        <p>info@yoursite.com</p>
                                                                    </div>
                                                                </div>
                                                                <div class="sc-contacts-emptyspace"></div>
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
                    </div>
                </div>  
            </section>
            <section class="no-col-padding">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <div class="column_container column-1_1">
                            <div class="column-inner">
                                <div class="m_wrapper">
                                    <div class="sc_form_wrap">
                                        <div class="sc_form sc_form_style_form_1 aligncenter sc-contacts-form">
                                            <h3 class="sc_form_title sc_item_title sc_item_title_without_descr">Give Us a Feedback</h3>
                                            <h6 class="sc_form_subtitle sc_item_subtitle">contact form</h6>
                                            <form class="sc_input_hover_default" data-formtype="form_1" method="post" action="{{route('user.contact.store')}}">
                                                 @csrf                          
                                                <div class="sc_form_info columns_wrap">
                                                    <div class="sc_form_item sc_form_field label_over column-1_2">
                                                        <input id="sc_form_username" type="text" name="name" placeholder="Name *" value="{{old('name')}}" required="true">
                                                         @error('name')
                                                        <div class="text-danger" id="sc_form_username">{{ $message }}</div>
                                                        @enderror
                                                    </div><div class="sc_form_item sc_form_field label_over column-1_2">
                                                        <input id="sc_form_email" type="email" name="email" value="{{old('email')}}" placeholder="E-mail *" required="true">
                                                        @error('email')
                                                        <div class="text-danger" id="sc_form_username">{{ $message }}</div><br>
                                                        @enderror
                                                    </div>
                                                    <div class="sc_form_item sc_form_field label_over column-1_2">
                                                        <input id="sc_form_username" type="tel" name="tel" value="{{old('tel')}}" placeholder="Phone" title="11 digits" required="required">
                                                         @error('tel')
                                                             <div class="text-danger">{{ $message }}</div><br>
                                                          @enderror
                                                    </div><div class="sc_form_item sc_form_field label_over column-1_2">
                                                        <input id="sc_form_email" type="text" name="query" value="{{old('query')}}" placeholder="Your Query Title" required="required">
                                                        @error('query')
                                                        <div class="text-danger" id="sc_form_username">{{ $message }}</div><br>
                                                        @enderror
                                                    </div>
                                                    <div class="sc_form_item sc_form_message column-1_1">
                                                        <textarea id="sc_form_message" name="message" placeholder="Type your message here..." required="true">{{old('message')}}</textarea>
                                                    @error('message')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="sc_form_item sc_form_button">
                                                    <button>Send Message</button>
                                                </div>
                                                <div class="result sc_infobox"></div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>    
            </section>                        
        </div>
        <!-- end .post_content -->
    </article>
    <!-- end .post_item_single .page .type-page  -->
</div>
<!-- end .content> -->
</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function() {
 @if (session()->has('msg'))
      //toastr.options.positionClass = 'toast-bottom-right';
      toastr.success("{{ session('msg') }}");
  @endif
   @if (session()->has('error'))
      //toastr.options.positionClass = 'toast-bottom-right';
      toastr.error("{{ session('error') }}");
  @endif
});
</script>
@endsection