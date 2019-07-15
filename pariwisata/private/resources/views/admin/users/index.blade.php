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
  <h1 class="text-center">U S E R</h1>
    <a class="btn btn-md btn-success" href="users/create" >Tambah User</a><br><br>
  <table class="table">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Opsi</th>
    </tr>
    @php
      $no=1;
    @endphp
    @foreach($user as $u)
    <tr>
      <td>{{$no++}}</td>
      <td>{{$u->name}}</td>
      <td>{{$u->email}}</td>
      <td>
      <form action="/pariwisata/admin/users/{{$u->id}}" method="post">
      {{csrf_field()}}
         <a type="button" class="btn btn-sm btn-primary" name="button" href="users/{{$u->id}}/edit"> <i class="fa fa-pencil"></i>   Edit</a>
         <button type="submit" class="btn btn-sm btn-danger" name="button" onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>          
      </form>
      </td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
