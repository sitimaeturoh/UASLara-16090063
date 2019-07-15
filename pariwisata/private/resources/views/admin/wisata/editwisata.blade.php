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
Edit Wisata
@endsection
@section('content')
<div class="container p-4">
  <h1 class="text-center">Edit Wisata</h1>
  <form class="" action="/pariwisata/admin/wisata/{{$wisata->id}}/update" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
  <div class="row">

    <div class="col-lg-6">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" class="form-control" value={{$wisata->nama}}><br>
        <label>Deskripsi</label>
        <textarea type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" >{{$wisata->deskripsi}}</textarea>
    </div>
    <div class="col-lg-6">
      <label>Alamat</label>
      <input type="text" name="alamat" placeholder="Alamat" class="form-control"  value={{$wisata->alamat}}><br>
            <div class="col-lg-6">
              <label>Jam Buka</label>
              <input type="time" name="buka" placeholder="Jam Buka" class="form-control" value={{$wisata->buka}}><br>
            </div>
            <div class="col-lg-6">
              <label>Jam Tutup</label>
              <input type="time" name="tutup" placeholder="Jam Tutup" class="form-control" value={{$wisata->tutup}}><br>
            </div>
            <label for="foto">Upload Photo</label><br>
            <input type="file" class="form-control" id="file" name="file" required>
    </div>

  </div><br>
    <input type="submit" value="Edit Wisata" class="btn btn-md btn-primary">
    <a href="/pariwisata/admin/wisata" class="btn btn-md btn-danger">Batalkan</a>
  </form><br><br>
</div>
@endsection
