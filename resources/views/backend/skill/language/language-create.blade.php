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
                            <li class="breadcrumb-item"><a href="#" class="text-dark">Home</a></li>
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
                            <h5 class="display-5">Edit Language</h5>
                              @else
                              <h5 class="display-5">Create Language</h5>
                            @endif
                            <a href="{{ route('resumes.language.view') }}" class="btn btn-warning text-dark"> <i
                                    class="fa fa-list"></i> Language List</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-3 pt-3">
                    <form action="{{(@$editData)?route('resumes.language.update',$editData->id):route('resumes.language.store')}}  " method="POST" enctype="multipart/form-data">
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
                            <label for="my-input">Language</label>
                            <input id="my-input" class="form-control" type="text" name="language" value="{{@$editData->language}}" 
                                placeholder="Enter Your language" required>
                            <font style="color:red">{{ $errors->has('language') ? $errors->first('language') : '' }} </font>
                        </div>  
                        <div class="form-group">
                            <label for="my-input">Language Skill Percentage</label>
                            <input id="my-input" class="form-control" type="text" name="percentage" value="{{@$editData->percentage}}" 
                                placeholder="Enter Your Language Skill Percentage" required>
                            <font style="color:red">{{ $errors->has('percentage') ? $errors->first('percentage') : '' }} </font>
                        </div>        
                        <div class="form-group">
                            <button type="submit" id="button" class="btn btn-success">{{(@$editData)?"Update":"Submit"}}</button>
                        </div>

                    </form>
                </div>
            </div>




        </div>
        {{-- card end --}}

    </div>
    <!-- Content Wrapper. Contains page content end-->
@endsection
