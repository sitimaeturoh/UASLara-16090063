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
Wisata
@endsection
@section('content')
<div class="row">
  <div class="container p-4">
    <h1 class="text-center">W I S A T A</h1>
      <a class="btn btn-md btn-success" href="wisata/create">Tambah Wisata</a>
      
      <div class="btn-group ml-auto" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laporan
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
          <li><a href="wisata/pdf">PDF</a></li>
          <li><a href="wisata/excel">Excel</a></li>
        </ul>
      </div>
      </div>

      <br><br>
    <table class="table">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Deskripsi</th>
        <th>Jam Buka</th>
        <th>Jam Tutup</th>
        <th>Opsi</th>
      </tr>
      @php
        $no =1
      @endphp
      @foreach($wisata as $e)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$e->nama}}</td>
        <td> <img src="../public/uploads/{{$e->foto}}" width="50px" height="50px" alt=""></td>
        <td>{{$e->deskripsi}}</td>
        <td>{{$e->buka}}</td>
        <td>{{$e->tutup}}</td>
        <td>
          <form action="wisata/{{$e->id}}" class="row" method="post">
            {{csrf_field()}}
            <a type="button" class="btn btn-sm btn-primary" name="button" href="wisata/{{$e->id}}/edit"><i class="fa fa-pencil"></i> Edit</a>
            <button type="submit" class="btn btn-sm btn-danger" name="button" onclick="confirm('Yakin ingin menghapus ?')"><i class="fa fa-trash"></i> Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection

