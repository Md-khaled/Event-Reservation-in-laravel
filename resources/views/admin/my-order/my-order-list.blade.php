@extends('admin.master')
@section('content')
<section id="content_outer_wrapper">
<div id="content_wrapper" class="card-overlay">
  <div id="header_wrapper" class="header-md ecom-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <header id="header">
            <h1>Order</h1>
            <ol class="breadcrumb">
              <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li><a href="{{route('admin.manage-order.index')}}">Order</a></li>
              <li class="active">Order</li>
            </ol>
          </header>
        </div>
      </div>
    </div>
  </div>
  <div id="content" class="container-fluid">
    <div class="content-body">
    <div class="row">
      <div class="col-xs-12">
        <div class="card card-data-tables product-table-wrapper">
          <header class="card-heading">
            <h2 class="card-title">Manage Order</h2>
              @if(session()->has('msg'))
            <div class="alert alert-success alert-dismissible" data-auto-dismiss="2000" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong style="color: green;">Success!</strong>
                {{ session('msg') }}
            </div>
              @endif
            <small class="dataTables_info"></small>
            <div class="card-search">
              <div id="productsTable_wrapper" class="form-group label-floating is-empty">
                <i class="zmdi zmdi-search search-icon-left"></i>
                <input type="text" class="form-control filter-input" placeholder="Filter Products..." autocomplete="off">
                <a href="javascript:void(0)" class="close-search" data-card-search="close" data-toggle="tooltip" data-placement="top" title="Close"><i class="zmdi zmdi-close"></i></a>
              </div>
            </div>
            <ul class="card-actions icons right-top">
              <li id="deleteItems" style="display: none;">
                <span class="label label-info pull-left m-t-5 m-r-10 text-white"></span>
                <a href="javascript:void(0)" id="confirmDelete" data-toggle="tooltip" data-placement="top" data-original-title="Delete Product(s)">
                  <i class="zmdi zmdi-delete"></i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" data-card-search="open" data-toggle="tooltip" data-placement="top" data-original-title="Filter Products">
                  <i class="zmdi zmdi-filter-list"></i>
                </a>
              </li>
              <li class="dropdown" data-toggle="tooltip" data-placement="top" data-original-title="Show Entries">
                <a href="javascript:void(0)" data-toggle="dropdown">
                  <i class="zmdi zmdi-more-vert"></i>
                </a>
                <div id="dataTablesLength">
                </div>
              </li>
              <li>
                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-original-title="Export All">
                  <i class="zmdi zmdi-inbox"></i>
                </a>
              </li>
            </ul>
          </header>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table id="productsTable" class="mdl-data-table product-table m-t-30" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th data-orderable="false" class="col-xs-2">User Info</th>
                    <th class="col-xs-2">FunctionName</th>
                    <th class="col-xs-2">No.of guset</th>
                    <th class="col-xs-2">Items</th>
                    <th class="col-xs-2">Transaction Id</th>
                    <th class="col-xs-2">Payment</th>
                    <th class="col-xs-2">Total</th>
                    <th class="col-xs-2">Date</th>
                    <th class="col-xs-1">Status</th>
                    <th data-orderable="false" class="col-xs-1">Action</th>
                  </tr>
                </thead>
                <tbody id="rowadd">
                  @forelse($hires as $hire)
                  <tr>
                    
                    <td><img src="{{asset($hire->user->image)}}" alt="" class="img-thumbnail" /><p>Name: {{$hire->user->name}}</p><p>Email: {{$hire->user->email}}</p><p>Mobile: {{$hire->user->mobile}}</p></td>
                    <td>{{$hire->food->venu->name}}({{$hire->food->venu->cost}})</td>
                    <td>{{$hire->guest}}</td>
                    <td>
                      @forelse($hire->foodtype as $ftype)
                      {{$ftype}}@if(!$loop->last),@endif
                      @empty
                      @endforelse<br>
                      @forelse($hire->equipmenttype as $etype)
                      {{$etype}}@if(!$loop->last),@endif
                      @empty
                      @endforelse <br>
                       @forelse($hire->decorationtype as $dtype)
                      {{$dtype}}@if(!$loop->last),@endif
                      @empty
                      @endforelse <br>
                      {{$hire->drink?$hire->drink->name:''}}
                      {{$hire->drink?($hire->drink->cost):''}}
                    </td>
                    <td>{{$hire->transaction_id ?? 'N/A'}}</td>
                    <td>{{$hire->payment ?? 'N/A'}}</td>
                    <td>{{$hire->total}}</td>
                    <td><p>Start: {{$hire->start_date}}</p><p>End: {{$hire->end_date}}</p></td>
                    <td>{{$hire->process}}</td>
                    <td>
                      
                         @if($hire->process=='pending')
                         <form method="post" action="{{route('admin.complete-transaction.store')}}">
                             @csrf
                             <div class="form-group-row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                 <select class="form-control" name="payment" required  id="payments">
                                  <option value="">Select a payment method please</option>
                                  @foreach ($payments as $payment)
                                    <option value="{{ $payment->name }}">{{ $payment->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                              </div>

                                <div class="form-group-row">
                                   <input type="hidden" name="id" value="{{$hire->id}}">
                            <input type="hidden" name="process" value="confirmed">
                              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                 <input type="text" name="transaction_id" id="transaction_id" class="form-control hidden" placeholder="Enter transaction code" >
                                  @error('transaction_id')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                  </div>
                                  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mb-20">
                                 <input type="submit" value="Confirm " class="btn btn-primary hidden" id="transaction_btn">
                                  </div>
                              </div>
                    </form>
                        @foreach ($payments as $payment)
                          @if ($payment->name == "Cash_in")
                           <div class="clearfix"></div>
                            <div id="payment_{{$payment->name }}" class="alert alert-success mt-2 text-center hidden">
                              <h3>
                                For Cash in there is nothing necessary. Just click Finish Order.
                                <br>
                                <small>
                                  You will get your product in two or three business days.
                                </small>
                              </h3>
                            </div>
                          @else
                           <div class="clearfix"></div>
                          
                            <div id="payment_{{ $payment->name }}" class="alert alert-success mt-2 text-center hidden"
                              <h3>{{ $payment->name }} Payment</h3>
                              <p>
                                <strong>{{ $payment->name }} No :  {{ $payment->no }}</strong>
                                <br>
                                <strong>Account Type: {{ $payment->type }}</strong>
                              </p>
                              <div class="alert alert-success">
                                Please send the above money to this Bkash No and write your transaction code below there..
                              </div>

                            </div>
                            
                          @endif
                        @endforeach
                            
                          @else
                          <li role="presentation"><a href="#">Not confirmed yet</a></li>
                          @endif
                        
                      </div>
                      </td>
                   <!-- <td><a href="javascript:void(0)" id="product-edit" class="icon edit-product"><i class="zmdi zmdi-edit"></i></a></td>-->
                  </tr>
                  @empty
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <aside class="drawer-right-lg mw-lightGray drawer-fixed ecom-edit-panel">
    <div class="drawer-content">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                 General Info
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <div class="card">
                <div class="card-body">
                   <form class="form-horizontal"  method="POST" enctype="multipart/form-data" id="editFormSubmit">
                        @csrf
                    
                    <div class="form-group label-floating">
                      <label class="control-label">Title</label><br>
                      <input type="text" class="form-control" name="title" id="editTitle">
                    </div>
                    <div class="form-group">
                      <div id="edit_product_desc">Say hello to a triangular cluster of neatly organized chaos, wrapped in a tasty cyan-to-magenta rainbow roll and deep-fried to imperfection.</div>
                    </div>
                    <div class="chips chips-placeholder"></div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
</div>
@include('admin.include.footer')
</section>

</div>

@endsection
@section('script')
  <script type="text/javascript">
      @if (session()->has('msg'))
                                      //toastr.options.positionClass = 'toast-bottom-right';
        toastr.success("{{ session('msg') }}");
        @endif
        @if (session()->has('error'))
        //toastr.options.positionClass = 'toast-bottom-right';
        toastr.error("{{ session('error') }}");
@endif
  $("#payments").change(function(){
    $payment_method = $("#payments").val();
    //alert($payment_method );
    if ($payment_method == "Cash_in") {
      $("#payment_Cash_in").removeClass('hidden');
      $("#payment_Bkash").addClass('hidden');
      $("#payment_Rocket").addClass('hidden');
      $("#transaction_id").addClass('hidden');
      $("#transaction_btn").removeClass('hidden');

    }else if ($payment_method == "Bkash") {
      $("#payment_Bkash").removeClass('hidden');
      $("#payment_Cash_in").addClass('hidden');
      $("#payment_Rocket").addClass('hidden');
      $("#transaction_id").removeClass('hidden');
      $("#transaction_btn").removeClass('hidden');
    }else if ($payment_method == "Rocket") {
      $("#payment_Rocket").removeClass('hidden');
      $("#payment_Bkash").addClass('hidden');
      $("#payment_Cash_in").addClass('hidden');
      $("#transaction_id").removeClass('hidden');
      $("#transaction_btn").removeClass('hidden');
    }
  })
  </script>
@endsection
