@extends('template2')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Akun Anda</h4>
                  @if(Session::has('alert_message'))
                    <div class="alert alert-success">
                    <strong>{{ Session::get('alert_message') }}</strong>
                    </div>
                  @endif
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                      @php $no = 1; @endphp
                      @foreach($data as $datas)
                  <h4 class="card-title">Selamat datang, {{ $datas->name }}</h4>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama Admin</label>
                          <p>{{ $datas->name }}</p>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Email</label>
                          <p>{{ $datas->email }}</p>
                        </div>
                      </form>
                      <form action="{{ route('admin.destroy', $datas->id) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <a href="{{ route('admin.edit',$datas->id) }}" class="btn btn-sm btn-primary">Sunting Akun</a>

                          <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
                          Hapus Akun</button>
                          </form>
                      @endforeach
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