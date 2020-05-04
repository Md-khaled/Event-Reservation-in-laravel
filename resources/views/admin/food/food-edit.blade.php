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
            <a href="{{route('admin.manage-food.index')}}" class="btn btn-primary  pull-right"><i class="zmdi zmdi-arrow-left"></i></a>

            <small class="dataTables_info"></small>
          </header>
          <div class="card-body p-0">
            
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
                   <form action="{{route('admin.manage-food.update',$food->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        @csrf
                        <div class="form-group label-floating is-empty">
                            <select class="form-control" id="sel1" name="venu_id">
                              <option value=" ">Select Venu</option>
                              @forelse ($venus as $venu)
                               @if($venu->id==$food->venu_id)
                                 <option value="{{$venu->id}}" selected="selected">{{$venu->name}}</option>
                               @else
                                 <option value="{{$venu->id}}">{{$venu->name}}</option>
                              @endif
                              @empty
                                   <option value=" "> No Data</option>
                              @endforelse
                             
                            </select>
                            @error('venu_id')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <span class="text-danger" id="categorid"></span>
                        </div>
                        
                         <div class="form-group label-floating is-empty">
                          <label class="control-label">Breakfast Price</label><br/>
                          <input type="number" class="form-control" name="breakfast" value="{{$food->breakfast}}">
                          @error('breakfast')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="breakfast"></span>
                        </div>
                         
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Normal Price</label><br/>
                          <input type="number" class="form-control" name="lunch_normal" value="{{$food->lunch_normal}}">
                          @error('lunch_normal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchnormal"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Deluxe Price</label><br/>
                          <input type="number" class="form-control" name="lunch_deluxe" value="{{$food->lunch_deluxe}}">
                          @error('lunch_deluxe')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchdeluxe"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Lunch Royal Price</label><br/>
                          <input type="number" class="form-control" name="lunch_royal" value="{{$food->lunch_royal}}">
                          @error('lunch_royal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="lunchroyal"></span>
                        </div>

                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Normal Price</label><br/>
                          <input type="number" class="form-control" name="dinner_normal" value="{{$food->dinner_normal}}">
                          @error('dinner_normal')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="dinnernormal"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Deluxe Price</label><br/>
                          <input type="number" class="form-control" name="dinner_deluxe" value="{{$food->dinner_deluxe}}">
                          @error('dinner_deluxe')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="dinnerdeluxe"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Dinner Royal Price</label><br/>
                          <input type="number" class="form-control" name="dinner_royal" value="{{$food->dinner_royal}}">
                          @error('dinner_royal')
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
                <button type="submit" class="btn btn-primary">Update</button>
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
    </div>
  </div>
</div>
</section>

</div>

@endsection