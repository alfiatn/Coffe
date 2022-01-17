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
                     <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="form-group">
                         <label for="nama">Nama Kopi:</label>
                         <input type="text" class="form-control" id="nama_kopi" name="nama_kopi">
                     </div>
                     <div class="form-group">
                         <label for="email">File:</label>
                         <input type="file" class="form-control" id="file" name="file">
                     </div>
                     <div class="form-group">
                         <label for="nama">Harga :</label>
                         <input type="text" class="form-control" id="harga" name="harga">
                     </div>
                     <div class="form-group">
                         <label for="nama">Deskripsi :</label>
                         <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-md btn-primary">Submit</button>
                         <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                     </div>
                 </form>
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