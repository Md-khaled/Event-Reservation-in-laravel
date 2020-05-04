@extends('admin.master')
@section('content')
<section id="content_outer_wrapper">
<div id="content_wrapper" class="card-overlay">
  <div id="header_wrapper" class="header-md ecom-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <header id="header">
            <h1>Venu Update</h1>
            <ol class="breadcrumb">
              <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
              <li><a href="{{route('admin.manage-venu.index')}}">Venu</a></li>
              <li class="active">Venu Update</li>
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
            <h2 class="card-title">Update Venu </h2>
             @if(session()->has('msg'))
            <div class="alert alert-success alert-dismissible" data-auto-dismiss="2000" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong style="color: green;">Success!</strong>
                {{ session('msg') }}
            </div>
              @endif
            <a href="{{route('admin.manage-venu.index')}}" class="btn btn-primary  pull-right"><i class="zmdi zmdi-arrow-left"></i></a>

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
                   <form action="{{route('admin.manage-venu.update',$venu->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH ')
                        @csrf
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Venu Name</label><br/>
                          <input type="text" class="form-control" name="name" value="{{$venu->name}}">
                          @error('name')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="name"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Mobile</label><br/>
                          <input type="text" class="form-control" name="mobile" value="{{$venu->mobile}}">
                          @error('mobile')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="mobile"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Cost</label><br/>
                          <input type="text" class="form-control" name="cost" value="{{$venu->cost}}">
                          @error('cost')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="cost"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Capacity</label><br/>
                          <input type="text" class="form-control" name="capacity" value="{{$venu->capacity}}">
                          @error('capacity')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                          <span class="text-danger" id="capacity"></span>
                        </div>
                        <div class="form-group ">
                           <p><img src="{{asset($venu->image)}}" id="blah" alt="" width="150" class="rounded"></p>
                           <input type="file" id="avatar" name="image" class="custom-file-input" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            <label for="avatar" class="custom-file-label">Choose Pic file</label>
                             @error('image')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <br>
                            <span class="text-danger" id="image"></span>

                        </div>
                        <div class="form-group label-floating is-empty">
                          <label class="control-label">Address</label><br/>
                          <textarea class="form-control" name="address" rows="5">{{$venu->address}}</textarea>
                          @error('address')
                           <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <br>
                         <span class="text-danger" id="address"></span>
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