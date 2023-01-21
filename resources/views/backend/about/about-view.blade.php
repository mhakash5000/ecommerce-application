@extends('backend.layouts.admin-master')
@section('content')

<!-- Content Wrapper. Contains page content start -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-light">
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
                    <h5 class="display-5">Vedio List</h5>
                    {{-- @if($countData<1) --}}
                  <a href="{{route('about.create')}}" class="btn btn-warning text-dark"><i class="fa fa-plus-circle"></i>Create Vedio</a>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
            <table id="example2" class="table table-bordered table-hover text-center">
                {{-- table start --}}
                <thead>
                    <tr>
                        <th width="20%">ID</th>
                        {{-- <th>Title</th> --}}
                        {{-- <th>Description</th> --}}
                        <th width='50%'>Vedio</th>
                        <th width="30%">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                    <tr class="{{$item->id}}">
                        <td>{{$item->id}}</td>
                        {{-- <td>{{$item->title}}</td> --}}
                        {{-- <td>
                          <textarea name="" id="" cols="70" rows="5" style="text-align: justify">
                          {{ $item->description }}
                        </textarea>
                        </td> --}}

                        <td>
                          <video width="200" height="100" controls>
                            <source src="{{asset('public/images/about/'.$item->image)}}" width="60px";height='60px'>
                          </video>
                          {{-- <img src="{{asset('public/images/about/'.$item->image)}}" width="60px";height='60px' alt=""> --}}
                        </td> 
                        


                        <td>
                            <a href="{{route('about.edit',$item->id)}}" class="btn btn-warning" title="Edit"><i class="fa fa-user-edit"></i></a>
                            <a href="{{route('about.destroy',$item->id)}} " id="delete" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- table end --}}



</div>
{{-- card end --}}

  </div>
 <!-- Content Wrapper. Contains page content end-->
@endsection
