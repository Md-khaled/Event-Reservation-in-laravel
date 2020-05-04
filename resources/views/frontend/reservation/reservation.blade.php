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
    .text-danger{color: red;}
    
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
                        <form action="{{route('user.event-reservation.store')}}" method="post"  class="comment-form sc_input_hover_default" id="createReservation">
                           @csrf
                           @if(Auth::check())
                           <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                           @endif
                            <div class="comments_field comments_author">
                                <select name="event_type_id">
                                    <option value=" ">Select Event Type*</option>
                                    @foreach($eventtypes as $event)
                                    @if($event->id==$eventid)
                                    <option value="{{$event->id}}" selected="selected">{{$event->type}}</option>
                                    @else
                                    <option value="{{$event->id}}">{{$event->type}}</option>
                                     @endif
                                     @endforeach
                                </select>
                                @error('event_type_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="comments_field comments_author">
                                <select name="food_id" id="venutype">
                                    <option value=" ">Select Venu Type</option>
                                    @foreach($venus as $venu)
                                    <option value="{{$venu->id}}">{{$venu->venu->name}}(TK-{{$venu->venu->cost}})</option>
                                     @endforeach
                                </select>
                                @error('food_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="comments_field comments_author">
                                <input type='text' name="start_date"  id='datetimepicker1' placeholder="Enter date"/>
                                @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="comments_field comments_email">
                                <input name="guest" type="number" placeholder="Num. of gest" id="guest" min="0"  oninput="validity.valid||(value='');"/>
                                @error('guest')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div><br>
                            <div class="comments_field comments_site" id="foodtype">
                                <input name="foodtype[]" type="checkbox" value="breakfast" class="chkid" />
                                <label for="vehicle1">Breakfast</label>
                                 <input name="foodtype[]" type="checkbox" value="lunch" class="chkid"/>
                                <label for="vehicle2">Lunch</label>
                                 <input name="foodtype[]" type="checkbox" value="dinner" class="chkid"/>
                                <label for="vehicle2">Dinner</label>
                            </div>
                            <div class="comments_field comments_author" id="container22">
                            </div>
                            <div class="comments_field comments_author" id="container">
                            </div>
                            <div class="comments_field comments_author" id="container3">
                            </div>
                            <!--<div class="comments_field comments_author">
                                <select name="equipment_id" id="equipment_id">
                                    <option value=" ">Select Equipment Type</option>
                                    @foreach($equipments as $equipment)
                                    <option value="{{$equipment->id}}" data-equipmentprice="{{$equipment->cost}}">{{$equipment->type}}(TK-{{$equipment->cost}})</option>
                                     @endforeach
                                </select>
                            </div>--><br>
                            <div class="comments_field comments_site" id="equipmenttype">
                                <label>Choose Equipment Type : </label>
                                @foreach($equipments as $equipment)
                                <input name="equipmenttype[]" type="checkbox" value="{{$equipment->type}}" class="eqipid" data-equipmentprice="{{$equipment->cost}}"/>
                                <label for="vehicle1">{{$equipment->type}}(TK-{{$equipment->cost}})</label>
                                @endforeach
                            </div>
                             <!--<div class="comments_field comments_author">
                                <select name="decoration_id" id="decoration_id">
                                    <option value=" ">Select Decoration Type</option>
                                    @foreach($decorations as $decoration)
                                    <option value="{{$decoration->id}}" data-decorationprice="{{$decoration->cost}}">{{$decoration->type}}(TK-{{$decoration->cost}})</option>
                                     @endforeach
                                </select>
                            </div>--><br>
                            <div class="comments_field comments_site" id="decorationtype">
                                <label>Choose Decoration Type : </label>
                                 @foreach($decorations as $decoration)
                                <input name="decorationtype[]" type="checkbox" value="{{$decoration->type}}" data-decorationprice="{{$decoration->cost}}" class="decid" />
                                <label for="vehicle1">{{$decoration->type}}(TK-{{$decoration->cost}})</label>
                                @endforeach
                            </div><br>
                            <div class="comments_field comments_author">
                                <select name="drink_id" id="drink_id">
                                    <option value=" ">Select Drinks Type</option>
                                    @foreach($drinks as $drink)
                                    <option value="{{$drink->id}}" data-drinkprice="{{$drink->cost}}">{{$drink->type}}(TK-{{$drink->cost}})</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="comments_field comments_message">
                                 <input type="text"  name="total" id="Total" placeholder="Price automically calculate and show here" title="Total amount">
                            @error('total')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            
                            
                             <p class="form-submit">
                             <input name="submit" type="submit" class="submit"/>
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
     @if (session()->has('msg'))
          //toastr.options.positionClass = 'toast-bottom-right';
          toastr.success("{{ session('msg') }}");
      @endif
       @if (session()->has('error'))
          //toastr.options.positionClass = 'toast-bottom-right';
          toastr.error("{{ session('error') }}");
      @endif
    var totalamount=0;
    var selectlunch=0;
    var selectdinner=0;
    var booking = {!! json_encode($reservations->toArray()) !!};
    var dateRange = []; 
        $.each(booking, function( index, value ){
var startDate = value.start_date, // some start date
    endDate  = value.end_date; // some end date
    
    for (var d = new Date(startDate); d <= new Date(endDate); d.setDate(d.getDate() + 1)) {
     dateRange.push( moment(d,'YYYY-MM-DD').toDate());
}
});
    console.log(dateRange);
var dd=["2020-03-20","2020-04-26"];
    $('#datetimepicker1').datetimepicker({
    format:'YYYY-MM-DD',
    disabledDates: dateRange
  });
     $("#foodtype").hide();
     $("#guest").hide();
    var currentvnuval=0;
    $('#venutype').bind("keyup change",function(e){
    if ($(this).val()!=' ') { $("#guest").show();}else{$("#guest").hide();}
          let vunuid=$(this).val();
    var venus={!! json_encode($venus->toArray()) !!};
    $.each(venus, function( index, value ){
    if (value.id==vunuid) {
         $.each(value, function( index, value ){
             //console.log(index);
         });
        totalamount=totalamount-currentvnuval;
        currentvnuval=parseInt(value.venu.cost);
        totalamount+=currentvnuval;
        selectdinner=currentvnuval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }
     });
    });
     $('.chkid').click(function(){
         var obj = {
        'breakfast':['breakfast'],
        'lunch': ['lunch_normal','lunch_deluxe','lunch_royal'],
        'dinner': ['dinner_normal','dinner_deluxe','dinner_royal']
        };
         
      
         let foodtype=$(this).val();
         if (foodtype=='lunch') {
            $('#container').empty();
         $('#container')
      .append(
        $(document.createElement('select')).prop({
          id: 'lunch',
          class:'mycls',
          name: 'lunch'
        })
      )
      $('#lunch').append($(document.createElement('option')).prop({
        value: " ",
        text: 'Please select your lunch type'
      }));
             $.each(obj, function( index, value ){
                if (foodtype==index && index!='breakfast') {
                    $.each(value, function( ind, val ){
                         let vunuid=$("#venutype").val();
                         let type=val;
                         var venus={!! json_encode($venus->toArray()) !!};
                         $.each(venus, function( index, value ){
                            if (value.id==vunuid && vunuid!=" ") {
                         
                                 $.each(value, function( index, value ){
                                    if (type==index) {
                                         var val=value;
                                         var car=index+'(TK '+value+')';
                                       // console.log(val);
                                        $('#lunch').append($(document.createElement('option')).prop({
                                        value: val,
                                        text: car.charAt(0).toUpperCase() + car.slice(1)
                                      }))
                                    }
                                 });
                            }

                         });

                    });
                }
             });
             $('#container').toggle(this.checked);
         }else if(foodtype=='dinner'){
            $('#container22').empty();
      $('#container22')
      .append(
        $(document.createElement('select')).prop({
          id: 'dinner',
          name: 'dinner'
        })
      )
      $('#dinner').append($(document.createElement('option')).prop({
        value: " ",
        text: 'Please select your dinner type'
      }));
            $.each(obj, function( index, value ){
                if (foodtype==index && index!='breakfast') {
                    $.each(value, function( ind, val ){
                         let vunuid=$("#venutype").val();
                         let type=val;
                         var venus={!! json_encode($venus->toArray()) !!};
                         $.each(venus, function( index, value ){
                            if (value.id==vunuid && vunuid!=" ") {
                         
                                 $.each(value, function( index, value ){
                                    if (type==index) {
                                         var val=value;
                                         var car=index+'(TK '+value+')';
                                        console.log(val);
                                        $('#dinner').append($(document.createElement('option')).prop({
                                        value: val,
                                        text: car.charAt(0).toUpperCase() + car.slice(1)
                                      }))
                                    }
                                 });
                            }

                         });

                    });
                }
             });
             $('#container22').toggle(this.checked);
         }else{
            var ck=$(this);
            var breakfastamt=0;
    var gst=$("#guest").val();

             $('#container3').empty();
             let vunuid=$("#venutype").val();
              var venus={!! json_encode($venus->toArray()) !!};
               $.each(venus, function( index, value ){
                if (value.id==vunuid && vunuid!=" ") {
                    
                    $('#container3').append(
                      $(document.createElement('input')).prop({
                        id: 'breakfast',
                        name: 'breakfast',
                        title:'Breakfast Amount-'+value.breakfast+' Tk',
                        value: value.breakfast,
                        type: 'text'
                      })
                    );
                    breakfastamt=parseInt(value.breakfast)*gst;
                }
               });
                if(ck.prop("checked")) {
                    totalamount+=breakfastamt;
                    console.log(totalamount);
                 }else{
                    totalamount-=breakfastamt;

                    
                 }
             $('#container3').toggle(this.checked);
         }
         $("#Total").val(totalamount);
         if($(this).is(":checked")) {
                    console.log('ck');
                 }else{
                    console.log('uck');
                    if ($(this).val()=='lunch') {
                     totalamount-=selectlunch;
                      selectlunch=0;
                 } else if($(this).val()=='dinner') {
                     totalamount-=selectdinner;
                     selectdinner=0;
                 }
                   
                   
                    console.log($(this).val());
                   
                    

                     $("#Total").val(totalamount);
                    
                 }
    });
  $('#guest').bind("keyup change",function() {
      // If value is not empty
  if ($(this).val().length == 0) {
    // Hide the element
    $("#foodtype").hide();
  } else {
    // Otherwise show it
    $("#foodtype").show(); 
  }
  });
    var currentval=0;
$(document).on('change', '#lunch', function(){
    var dynamicPrice =totalamount;
    var gst=$("#guest").val();
    //console.log(dynamicPrice);
    console.log(currentval);
    if (currentval!= parseInt($(this).val()) && $(this).val()!=' ') {
         if($("input[type=checkbox]").is( 
                      ":checked")){
        totalamount=totalamount-currentval;
    console.log(totalamount);

        currentval=parseInt($(this).val())*gst;
        totalamount+=currentval;
        selectlunch=currentval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }else{
        alert(newValue);
        $('#Total').val(totalamount);
    }

    }else{

    }
        
});
    var currentdnrval=0;
$(document).on('change', '#dinner', function(){
    var gst=$("#guest").val();
    var dynamicPrice =totalamount;
    //console.log(dynamicPrice);
   // console.log(currentval);
    if (currentdnrval!= parseInt($(this).val()) && $(this).val()!=' ') {
         if($("input[type=checkbox]").is( 
                      ":checked")){
        totalamount=totalamount-currentdnrval;
        currentdnrval=parseInt($(this).val())*gst;
        totalamount+=currentdnrval;
        selectdinner=currentdnrval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }else{
        //alert(newValue);
        $('#Total').val(totalamount);
    }

    }else{

    }
        
});
var currenteqpval=0;
/*$('#equipment_id').bind("keyup change",function(e){
    if ($(this).val()!=' ') {
         totalamount=totalamount-currenteqpval;
        currenteqpval=parseInt($(this).find(':selected').data("equipmentprice"));
        totalamount+=currenteqpval;
        selectdinner=currenteqpval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }
});*/
$('.eqipid').click(function(){
    if ($(this).is(':checked'))
    {
        totalamount-currenteqpval;
        currenteqpval=parseInt($(this).data("equipmentprice"));
        totalamount+=currenteqpval;
        selectdinner=currenteqpval;
        var newValue =totalamount;
        $('#Total').val(newValue);
    }else
    {
        currenteqpval=parseInt($(this).data("equipmentprice"));
        totalamount=totalamount-currenteqpval;
        var newValue =totalamount;
         $('#Total').val(newValue);
        console.log(currenteqpval);
    }
});
var currentdcoval=0;
/*$('#decoration_id').bind("keyup change",function(e){
    if ($(this).val()!=' ') {
         totalamount=totalamount-currentdcoval;
        currentdcoval=parseInt($(this).find(':selected').data("decorationprice"));
        totalamount+=currentdcoval;
        selectdinner=currentdcoval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }
});*/
$('.decid').click(function(){
    if ($(this).is(':checked'))
    {
        totalamount-currentdcoval;
        currentdcoval=parseInt($(this).data("decorationprice"));
        totalamount+=currentdcoval;
        selectdinner=currentdcoval;
        var newValue =totalamount;
        $('#Total').val(newValue);
    }else
    {
        currentdcoval=parseInt($(this).data("decorationprice"));
        totalamount=totalamount-currentdcoval;
        var newValue =totalamount;
         $('#Total').val(newValue);
        console.log(currenteqpval);
    }
});
var currentdnkval=0;
$('#drink_id').bind("change",function(e){
    var gst=$("#guest").val();
    console.log(gst);
    if ($(this).val()!=' ') {
         totalamount=totalamount-currentdnkval;
        currentdnkval=parseInt($(this).find(':selected').data("drinkprice"))*gst;
        totalamount+=currentdnkval;
        selectdinner=currentdnkval;
        var newValue =totalamount;
        $('#Total').val(newValue); 
    }
});

/*$('#dd').bind("keyup change",function(e){
     var dynamicPrice = totalamount;
 console.log('dynamicPrice');

   if(parseInt($(this).val()) != 0){
    
var newValue = dynamicPrice + parseInt($(this).val());
    
$('#totalprice').val(newValue);
   }else{
    
$('#totalprice').val(totalPrice);
   }
});*/
  /*$('#venutype').bind("keyup change",function(e){
    $('#container').empty();
    let vunuid=$(this).val();
    var venus={--!! json_encode($venus->toArray()) !!--};
    $.each(venus, function( index, value ){
    if (value.id==vunuid) {
    console.log(venus);
    totalamount=value.venu.cost
    $("#Total").val(totalamount);
    }
    });
  var car='different';
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
    ).append(document.createElement('br'));
  })*/
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