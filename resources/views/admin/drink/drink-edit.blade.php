@extends('admin.master')
@section('content')
<section id="content_outer_wrapper">
<div id="content_wrapper" class="card-overlay">
  <div id="header_wrapper" class="header-md ecom-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <header id="header">
            <h1>Drinks </h1>
            <ol class="breadcrumb">
              <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li><a href="{{route('admin.manage-drinks.index')}}">Drinks</a></li>
              <li class="active">Drinks </li>
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
            <h2 class="card-title">Update Decoration</h2>
             @if(session()->has('msg'))
            <div class="alert alert-success alert-dismissible" data-auto-dismiss="2000" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong style="color: green;">Success!</strong>
                {{ session('msg') }}
            </div>
              @endif
            <a href="{{route('admin.manage-drinks.index')}}" class="btn btn-primary  pull-right"><i class="zmdi zmdi-arrow-left"></i></a>

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
                   <form action="{{route('admin.manage-drinks.update',$drink->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        @csrf
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Type</label><br>
                          <input type="text" class="form-control" name="type" value="{{$drink->type}}">
                          @error('type')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="type"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Litter</label><br>
                          <input type="number" step=".5" class="form-control" name="litter" value="{{$drink->litter}}">
                          @error('litter')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="litter"></span>
                        </div>
                       <div class="form-group label-floating is-empty">
                          <label class="control-label">Drink Cost</label><br>
                          <input type="number" class="form-control" name="cost" value="{{$drink->cost}}">
                          @error('cost')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="cost"></span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update Drink</button>
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