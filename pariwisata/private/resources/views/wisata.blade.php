@extends('Layout.master')
@section('css')
<style>
    .card:hover{
        box-shadow: 5px 5px 3px grey;
    }
</style>
@endsection
@section('header')
@endsection
@section('content')
<div class="container  text-center">
  <br>
  <h2>Pesona Wisata</h2>
  <p>Daftar wisata kab tegal</p>
  <div class="row">
            @foreach($wisata as $wisatas)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card" >
                    <img class="card-img-top" width="100px" height="200px" src="{{URL::asset('./public/uploads/'.$wisatas->foto)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$wisatas->nama}}</h5>
                        <p class="card-text">{{$wisatas->keterangan}}</p>
                        <a href="users/{{$wisatas->id}}/detailwisata" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div><br>
@endsection
@section('js')
@endsection
