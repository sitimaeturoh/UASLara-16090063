@extends('Layout.lte')
@section('css')
  <style>

    .container{
      background: white;
      border-radius: 4px;
    }
  </style>
@endsection
@section('header')
@section('content')
<div class="container p-4">
  <h1 class="text-center">Tambah Wisata</h1>
  <form action="/pariwisata/admin/wisata" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="row">

    @if(count($errors) > 0)
        <div class="alert alert-danger">
          Upload File Error <br><br>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif

      <div class="col-lg-6">
          <label>Nama</label>
          <input type="text" name="nama" placeholder="Nama" class="form-control"><br>
          <label>Deskripsi</label>
          <textarea type="text" name="deskripsi" placeholder="Deskripsi" class="form-control"></textarea>
      </div>
      <div class="col-lg-6">
        <label>Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat" class="form-control"><br>
              <div class="col-lg-6">
                <label>Jam Buka</label>
                <input type="time" name="buka" placeholder="Jam Buka" class="form-control"><br>
              </div>
              <div class="col-lg-6">
                <label>Jam Tutup</label>
                <input type="time" name="tutup" placeholder="Jam Tutup" class="form-control"><br>
              </div>
              <label for="foto">Upload Photo</label>
              <input type="file" class="form-control" id="file" name="file" required>
      </div>

  </div><br>
    <input type="submit" value="Tambah Wisata" class="btn btn-md btn-primary">
    <a href="/pariwisata/admin/wisata" class="btn btn-md btn-danger">Batalkan</a>
  </form><br><br>
</div>
@endsection
