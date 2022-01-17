@extends('template2')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-10 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Default form</h4>
                      @if($errors->any())
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $error)
                         <li><strong>{{ $error }}</strong>
                         @endforeach
                        </div>
                     @endif
                     @foreach($data as $datas)
                      <form action="{{ route('admin.update', $datas->id) }}" method="post" class="forms-sample">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name Admin</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{ $datas->name }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="email" id="email" value="{{ $datas->email }}">
                        </div>
                        <!-- <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name"password" id="password" value="{{ $datas->password }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Confirmation Password</label>
                          <input type="password" class="form-control" name"confirmation" id="confirmation" value="{{ $datas->confirmation }}">
                        </div> -->
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                      </form>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      @endsection