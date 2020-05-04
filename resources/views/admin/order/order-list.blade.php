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
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
                        <i class="zmdi zmdi-caret-down"></i></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li role="presentation"><a href="{{route('admin.manage-order.show',$hire->id)}}"><i class="zmdi zmdi-print"></i>&nbsp Print</a></li>
                         @if($hire->process=='pending')
                          <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="">
                            <form action="{{route('admin.order_status.store',[$hire->id])}}" method="post" onsubmit="return confirm('Are you sure?');">
                             @csrf
                             <input type="hidden" name="process" value="confirm">
                             <button type="submit"  style="border: none; background-color: transparent;outline: none;cursor: pointer;"><i class="zmdi zmdi-info"></i>&nbsp Confirm</button>
                         </form>
                         </a>
                          </li>  
                          <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="">
                            <form action="{{route('admin.order_status.store',[$hire->id])}}" method="post" onsubmit="return confirm('Are you sure?');">
                             @csrf
                             <input type="hidden" name="process" value="cencel">
                             <button type="submit"  style="border: none; background-color: transparent;outline: none;cursor: pointer;"><i class="zmdi zmdi-close-circle"></i>&nbsp Cencel</button>
                         </form>
                         </a>
                          </li> 
                          @elseif($hire->process=='confirmed')
                          <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="">
                            <form action="{{route('admin.order_status.store',[$hire->id])}}" method="post" onsubmit="return confirm('Are you sure?');">
                             @csrf
                             <input type="hidden" name="process" value="complete">
                             <button type="submit"  style="border: none; background-color: transparent;outline: none;cursor: pointer;"><i class="zmdi zmdi-info"></i>&nbsp OK</button>
                         </form>
                         </a>
                          </li>
                          @elseif($hire->process=='complete')
                          <li role="presentation"><a href="#">completed</a></li>
                          @elseif($hire->process=='cencel')
                          <li role="presentation"><a href="#">Order Cenceled</a></li>
                          @else
                          <li role="presentation"><a href="#">Not confirmed yet</a></li>
                          @endif
                        </ul>
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
