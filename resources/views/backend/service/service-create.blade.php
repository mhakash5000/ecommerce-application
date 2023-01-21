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
                  @if(isset($editData))
                  <h5 class="display-5">Edit Service</h5>
                    @else
                    <h5 class="display-5">Create Service</h5>
                  @endif
                  <a href="{{route('services.view')}}" class="btn btn-warning text-dark"> <i class="fa fa-list"></i> services List</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 pt-3">
        <form action="{{(@$editData)?route('services.update',$editData->id):route('services.store')}} " method="POST" enctype="multipart/form-data">
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
                <div class="form-group">
                    <label for="my-input">Title</label>
                    <input id="my-input" class="form-control" type="text" name="title" placeholder="Enter Your title" value="{{@$editData->title}}" required>
                    <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}} </font>
                </div>
                <div class="form-group">
                    <label for="my-input">Long_Title</label>
                    <textarea type="text" id="" cols="54" rows="10" name="description">{{@$editData->description}}</textarea>
                   
                    <font style="color:red">{{($errors->has('description'))?($errors->first('description')):''}} </font>
                </div>
                {{-- <div class="form-group">
                    <label for="my-input">Image</label>
                  <img src="{{(!empty($editData->image))?url('public/images/services_images/'.$editData->image):url('public/images/not_found_img.png')}}" id="image" style="width:530px;height:200px">
                  <input id="my-input" class="form-control" type="file" name="image" id="file" onchange="showImage(this,'image')" value=''>
                </div> --}}
                <div class="form-group">
                <button type="submit" id="button" class="btn btn-success">{{(@$editData)?"Update":"Submit"}} </button>
                </div>
          </form>
        </div>
    </div>




</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
