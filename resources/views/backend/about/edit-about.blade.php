@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-muted">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" class="text-dark" >Home</a></li>
              <li class="breadcrumb-item active text-dark">User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<div class="card">
    <div class="head bg-muted">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-12  d-flex justify-content-between align-items-center">
                    <h5 class="display-5">Edit Vedio</h5>
                    <a href="{{route('about.view')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Vedio List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
            <form action="{{route('about.update',$data->id)}} " method="POST" enctype="multipart/form-data" >
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif
               {{-- <div class="form-group">
                <label for="my-input">Title</label>
                <input type="text" class="form-control" name="title" id="" value="{{$data->title}}">
                <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
            </div> --}}
                {{-- <div class="form-group">
                    <label for="my-input">Description</label>
                    <textarea class="form-control" name="description" id=""  type="text"  rows="10">{{$data->description}}</textarea>
                    <font style="color:red">{{($errors->has('description'))?($errors->first('description')):''}} </font>
                </div> --}}
                <div class="form-group">
                  <label for="my-input">Vedio</label>
                  <img src="{{asset('public/images/about/'.$data->image)}}" id="image" style="width:540px;height:200px">
                  <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Updated</button>
                </div>

            </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
