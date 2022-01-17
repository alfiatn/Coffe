@extends('template2')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-14 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data nKopi</h4>
            <a href="{{ url('menuadmin/create') }}" class=" btn btn-sm btn-success">Tambah Data Kopi</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Gambar</th>
                          <th>Nama Kopi</th>
                          <th>Harga</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      @php $no = 1; @endphp
                        @foreach($data as $datas)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td><img src="{{ url('uploads/file/'.$datas->file) }}" class="menu-img img"></td>
                          <td>{{$datas->nama_kopi}}</td>
                          <td>{{$datas->harga}}</td>
                          <td>{{$datas->deskripsi}}</td>
                          <td>
                          <form action="{{ route('menuadmin.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('menuadmin.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">
                                Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection