@extends('Layout.master')
@section('css')
  <style media="screen">
    .bCard{
      border: 1px solid white;;
      border-radius: 3px;
      background: white;
    }
  </style>
@endsection
@section('header')

@endsection
@section('content')
<br>
  <div class="container bg-light p-5">
    <h2 class="text-center">Wisata Yang Dikunjungi</h2><br>
    <div class="row">
    @foreach($wisata as $wisatas)
      <div class="col-lg-12 bCard p-3">
        <div class="row">
          <div class="col-lg-2">
            <img src="./public/uploads/{{$wisatas->foto}}" width="100%" alt="">
          </div>
          <div class="col-lg-7 text-justify">
              <h4>{{$wisatas->nama}}</h4>
              <p>
                {{$wisatas->keterangan}}
              </p>
          </div>
          <div class="col-lg-3 text-right">
            <form action="/users/{{$wisatas->idpesertas}}" method="post">
            @csrf
            <a href="/users/{{$wisatas->id}}/detailwisata" class="btn btn-primary btn-sm" name="button">Detail</a>
            <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('Yakin ingin membatalkan ?')" name="button">Batalkan</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
      
    </div>
  </div>
<br>
@endsection
@section('js')

@endsection
