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
User
@endsection
@section('content')
<div class="container p-4">
  <h1 class="text-center">P E N G U N J U N G</h1>

  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Wisata</th>
      <th>Opsi</th>
    </tr>
    @php
     $no =1
    @endphp

    @foreach($pesertax as $peserta)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$peserta->name}}</td>
      <td>{{$peserta->email}}</td>
      <td>{{$peserta->nama}}</td>
      <td>
      <form action="/pariwisata/admin/peserta/{{$peserta->id}}" method="post">
        {{csrf_field()}}
        <button type="submit" class="btn btn-sm btn-danger" name="button" onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>  
      </form>
      </td>
    </tr>
  @endforeach
  </table>
</div>
@endsection
