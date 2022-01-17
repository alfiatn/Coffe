@extends('template2')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-14 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Pemesan</h4>
                  @if(Session::has('alert_success'))
                <div class="alert alert_success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert_success') }}</strong>
                </div>
                  @endif
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No. </th>
                          <th>Nama Pemesan</th>
                          <th>Hari</th>
                          <th>No HP</th>
                          <th>Jenis Kelamin</th>
                          <th>Kursi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                         @php $no = 1; @endphp
                        @foreach($data as $datas)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{$datas->nama}}</td>
                          <td>{{$datas->hari}}</td>
                          <td>{{$datas->no_hp}}</td>
                          <td>{{$datas->jenis_kelamin}}</td>
                          <td>{{$datas->kursi}}</td>
                          <td>
                          <form action="{{ route('pesan.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
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