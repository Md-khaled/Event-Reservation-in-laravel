@extends('admin.master')
@section('content')
<section id="content_outer_wrapper">
<div id="content_wrapper" class="card-overlay">
  <div id="header_wrapper" class="header-md ecom-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <header id="header">
            <h1>Food</h1>
            <ol class="breadcrumb">
              <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li><a href="{{route('admin.manage-food.index')}}">Manage Food</a></li>
              <li class="active">Food</li>
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
            <h2 class="card-title">Manage Food</h2>
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
                    <th class="col-xs-2">Venu Name</th>
                    <th class="col-xs-2">Breakfast_price</th>
                    <th class="col-xs-2">Lunch_normal_pric</th>
                    <th class="col-xs-2">Lunch_deluxe_pric</th>
                    <th class="col-xs-2">Lunch_royal_pric</th>
                    <th class="col-xs-2">Dinner_normal_pric</th>
                    <th class="col-xs-2">Dinner_deluxe_pric</th>
                    <th class="col-xs-2">Dinner_royal_pric</th>
                    <th class="col-xs-1">Created At</th>
                    <th data-orderable="false" class="col-xs-1">Action</th>
                    <th data-orderable="false" class="col-xs-1">
                      <button class="btn btn-primary btn-fab  animate-fab" data-toggle="modal" data-target="#product_add_modal"><i class="zmdi zmdi-plus"></i></button>
                    </th>

                  </tr>
                </thead>
                <tbody id="rowadd">
                  @forelse($foods as $food)
                  <tr>
                    @foreach($venus as $venu)
                    @if($food->venu_id==$venu->id)
                    <td>{{$venu->name}}</td>
                    @endif
                    @endforeach
                    <td>{{$food->breakfast}}</td>
                    <td>{{$food->lunch_normal}}</td>
                    <td>{{$food->lunch_deluxe}}</td>
                    <td>{{$food->lunch_royal}}</td>
                    <td>{{$food->dinner_normal}}</td>
                    <td>{{$food->dinner_deluxe}}</td>
                    <td>{{$food->dinner_royal}}</td>
                    <td>{{date('d-m-Y', strtotime($food->created_at))}}</td>
                    <td>
                        <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">
                        <i class="zmdi zmdi-caret-down"></i></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                          <li role="presentation">
                            <a style="padding-left: 2px !important" href="{{route('admin.manage-food.edit',$food->id)}}"><i class="zmdi zmdi-edit"></i></a>
                          </li>
                          <li role="presentation">
                           <form action="{{route('admin.manage-food.destroy',$food->id)}}" method="post" onsubmit="return confirm('Are you sure?');">
                             @csrf
                             @method('DELETE')
                             <button  style="border: none; background-color: transparent;outline: none;cursor: pointer;"><i class="zmdi zmdi-delete"></i></button>
                         </form>
                         </form>
                         </a>
                          </li>   
                        </ul>
                      </div>
                      <td></td>
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
<!--modal product add-->
<div class="modal fade" id="product_add_modal" tabindex="-1" role="dialog" aria-labelledby="tab_modal">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header p-b-15">
              
              <h4 class="modal-title">Food Setup</h4>
              <ul class="card-actions icons right-top">
                
                <a href="javascript:void(0)" data-dismiss="modal" class="text-white" aria-label="Close">
                  <i class="zmdi zmdi-close"></i>
                </a>
                
              </ul>
            </div>
            <div class="modal-body p-0">
              <div class="tabpanel">
                <ul class="nav nav-tabs p-0">
                  <li class="active" role="presentation"><a href="#product_add_general" data-toggle="tab" aria-expanded="true">General Info</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane fadeIn active" id="product_add_general">
                  <div class="card card p-20 p-t-10 m-b-0">
                    <div class="card-body">
                      <form class="form-horizontal" action="{{route('admin.manage-food.store')}}" method="post" enctype="multipart/form-data" id="createFormSubmit">
                        @csrf
                        <div class="form-group label-floating is-empty">
                            <select class="form-control" id="sel1" name="venuid" value="{{old('venuid')}}">
                              <option value=" ">Select Venu</option>
                              @forelse ($venus as $venu)
                                 <option value="{{$venu->id}}">{{$venu->name}}</option>
                              @empty
                                   <option value=""> No Data</option>
                              @endforelse
                             
                            </select>
                            @error('venuid')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <span class="text-danger" id="venuid"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Breakfast Price</label>
                          <input type="number" class="form-control" name="breakfast" value="{{old('breakfast')}}">
                          @error('breakfast')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="breakfast"></span>
                        </div>
                         
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Normal Price</label>
                          <input type="number" class="form-control" name="lunchnormal" value="{{old('lunchnormal')}}">
                          @error('lunchnormal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchnormal"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Deluxe Price</label>
                          <input type="number" class="form-control" name="lunchdeluxe" value="{{old('lunchdeluxe')}}">
                          @error('lunchdeluxe')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchdeluxe"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Royal Price</label>
                          <input type="number" class="form-control" name="lunchroyal" value="{{old('lunchroyal')}}">
                          @error('lunchroyal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchroyal"></span>
                        </div>

                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Normal Price</label>
                          <input type="number" class="form-control" name="dinnernormal" value="{{old('dinnernormal')}}">
                          @error('dinnernormal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="dinnernormal"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Deluxe Price</label>
                          <input type="number" class="form-control" name="dinnerdeluxe" value="{{old('dinnerdeluxe')}}">
                          @error('dinnerdeluxe')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="dinnerdeluxe"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Royal Price</label>
                          <input type="number" class="form-control" name="dinnerroyal" value="{{old('dinnerroyal')}}">
                          @error('dinnerroyal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="dinnerroyal"></span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Insert</button>
              </div>
              </form>
            </div>
            <!-- modal-content -->
          </div>
          <!-- modal-dialog -->
        </div>
@endsection