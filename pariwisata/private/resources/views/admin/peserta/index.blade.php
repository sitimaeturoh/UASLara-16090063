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
Peserta
@endsection
@section('content')
<div class="container p-4">
  <h1 class="text-center">P E N G U N J U N G</h1>
  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama Wisata</th>
      <th>Opsi</th>
    </tr>
    @php
      $no =1
    @endphp

    @foreach($wisata as $wisatas)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$wisatas->nama}}</td>
      <td>
        <a class="btn btn-sm btn-danger" href="/pariwisata/admin/peserta/{{$wisatas->id}}/view"> <i class="fa fa-eye"></i> Lihat</button>
      </a>
    </tr>
    @endforeach
  </table>
</div>
@endsection
