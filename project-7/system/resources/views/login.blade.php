@extends('template.base')

@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Beranda</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-info">LOGIN</span></h5></div>
            <div class="card-body">
                    @include('template.utils.notif')
              <form action="{{url('login')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="" value="Login" class="btn btn-info btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection