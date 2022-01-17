@extends('template2')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>nKopi</h1>
            <hr>
            <form action="{{ route('menuadmin.update', $data->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nama">Nama Kopi</label>
                    <input type="text" class="form-control" id="nama_kopi" name="nama_kopi" value="{{ $data->nama_kopi }}">
                </div>
                <div class="form-group">
                    <label for="gambar">Foto Lama:</label>
                    <img src="{{ url('uploads/file/'.$data->file) }}" class="menu-img img">
                </div>
                <div class="form-group">
                    <label for="file">File:</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga"  value="{{ $data->harga }}">
                </div>
                <div class="form-group">
                    <label for="harga">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"  value="{{ $data->deskripsi }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection