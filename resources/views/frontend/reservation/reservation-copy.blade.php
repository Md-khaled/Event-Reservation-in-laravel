@extends('frontend.master', ['body_class' => 'single single-post body_filled sidebar_show sidebar_right sidebar_outer_hide'])
@section('pageTitle', 'Booking')
@section('slider')
  <div class="top_panel_title title_present">
    <div class="top_panel_title_inner title_present bg-breadcrumbs">
        <div class="content_wrap">
            <h1 class="page_title">Sweet Moment of Joy</h1>
            <div class="breadcrumbs"><a class="breadcrumbs_item home" href="{{route('home')}}">Home</a><span class="breadcrumbs_delimiter"></span><a class="breadcrumbs_item all" href="blog-classic.html">Event</a><span class="breadcrumbs_delimiter"></span><a class="breadcrumbs_item cat_post" href="{{route('user.event-reservation.show',$eventid)}}">
           @foreach($eventtypes as $event)
            @if($event->id==$eventid)
            {{$event->type}}
            @endif
           @endforeach
        </a>
    </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<style type="text/css">
    .form-submit{
    text-align: right;
    margin-top: 30px;
    padding-left: 4px;
    }
</style>
<div class="page_content_wrap page_paddings_yes">
<!--.content_wrap-->
<div class="content_wrap">
    <!--.content -->
    <div class="content">
        <!-- .comments_wrap -->
        <section>
           <!-- .comments_form_wrap -->
            <div class="comments_form_wrap">
                <h2 class="section_title comments_form_title">Choose Your Reservation from here</h2>
                <div class="comments_form">
                    <!-- .comment-respond -->
                    <div class="comment-respond">
                        <form action="{{route('user.event-reservation.store')}}" method="post"  class="comment-form sc_input_hover_default">
                           @csrf
                           @if(Auth::check())
                           <input type="" name="user_id" value="{{Auth::user()->id}}">
                           @endif
                            <div class="comments_field comments_author">
                                <select name="eventtype">
                                    <option value=" ">Select Event Type*</option>
                                    @foreach($eventtypes as $event)
                                    @if($event->id==$eventid)
                                    <option value="{{$event->id}}" selected="selected">{{$event->type}}</option>
                                    @else
                                    <option value="{{$event->id}}">{{$event->type}}</option>
                                     @endif
                                     @endforeach
                                </select>
                            </div>
                            <div class="comments_field comments_author">
                                <select name="venutype" id="venutype">
                                    <option value=" ">Select Venu Type</option>
                                    @foreach($venus as $venu)
                                    <option value="{{$venu->venu->id}}">{{$venu->venu->name}}(TK-{{$venu->venu->cost}})</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="comments_field comments_author">
                                <select name="foodtype" id="foodtype">
                                    <option value=" ">Select food Type</option>
                                    <option value="breakfast">Breakfast</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                </select>
                            </div>

                            <div class="comments_field comments_author">
                                <input type='text' name="start_date"  id='datetimepicker1' placeholder="Enter date"/>
                            </div>
                            <div class="comments_field comments_email">
                                <input name="guest" type="number" placeholder="Num. of gest"/>
                            </div><br>
                            <div class="comments_field comments_site" id="container">
                                <input name="food[]" type="checkbox" value="breakfast"/>
                                <label for="vehicle1">Breakfast</label>
                                 <input name="food[]" type="checkbox" value="lunch"/>
                                <label for="vehicle2">lunch</label>

                            </div>
                            <div class="comments_field comments_message">
                                 <input type="text"  name="total" id="Total" placeholder="Price automically calculate and show here">
                            </div>
                             <p class="form-submit">
                             <input name="submit" type="submit" class="submit" value="Reservation Now" />
                            </p>
                        </form>
                    </div>
                    <!-- end .comment-respond -->
                </div>
            </div>
            <!-- end .comments_form_wrap -->
        </section>
        <!-- end .comments_wrap -->
    </div>
    <!-- end .content -->

    <!-- .sidebar -->
    <div class="sidebar widget_area scheme_original">
        <div class="sidebar_inner widget_area_inner">
            <aside class="widget widget_categories">
                <h5 class="widget_title">Categories</h5>
                <ul>
                     @foreach($eventtypes as $event)
                    <li class="cat-item"><a href="{{route('user.event-reservation.show',$event->id)}}">{{$event->type}}</a> </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
    <!-- end .sidebar -->

</div>
<!--end .content_wrap-->
</div>
@endsection
@section('script')
<script type="text/javascript">
$(document).ready(function() {
    var totalamount=0;
    $("#foodtype").hide();;

    $('#datetimepicker1').datetimepicker({
    format:'YYYY-MM-DD',
  });
  $('#venutype').bind("keyup change",function(e){
     $("#foodtype").show();
    $('#container').empty();
    let vunuid=$(this).val();
    var venus={!! json_encode($venus->toArray()) !!};
    $.each(venus, function( index, value ){
    if (value.id==vunuid) {
         $.each(value, function( index, value ){
             //console.log(index);
         });
   
    totalamount=value.venu.cost
    $("#Total").val(totalamount);
    }
    });
  /*var car='different';
    $('#container').append(
      $(document.createElement('input')).prop({
        id: 'myCheckBox',
        name: 'food[]',
        value: car,
        type: 'checkbox'
      })
    ).append(
      $(document.createElement('label')).prop({
        for: 'myCheckBox'
      }).html(car)
    ).append(document.createElement('br'));*/
  })
});
$('#foodtype').bind("keyup change",function(e){
     var obj = {
        'breakfast':['breakfast'],
        'lunch': ['lunch_normal','lunch_deluxe','lunch_royal'],
        'dinner': ['dinner_normal','dinner_deluxe','dinner_royal']
};
     let foodtype=$(this).val();
      $.each(obj, function( index, value ){
        if (foodtype==index && index!='breakfast') {
            // console.log(index);
             $.each(value, function( ind, val ){
                 let vunuid=$("#venutype").val();
                 let type=val;
                 //console.log(val);
    var venus={!! json_encode($venus->toArray()) !!};
    $.each(venus, function( index, value ){
    if (value.id==vunuid) {
         $.each(value, function( index, value ){
            if (type==index) {
                console.log('type '+index+' val '+value);
                var val=index;
                var car=index+'('+value+')';
    $('#container').append(
      $(document.createElement('input')).prop({
        id: 'myCheckBox',
        name: 'food[]',
        value: val,
        type: 'checkbox'
      })
    ).append(
      $(document.createElement('label')).prop({
        for: 'myCheckBox'
      }).html(car)
    ).append("&nbsp;&nbsp;&nbsp;");
            }
             
         });
    }
    });
    //console.log(val);

        });
        }
   
    
        });
});
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