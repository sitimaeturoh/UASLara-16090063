@extends('Layout.master')
@section('css')
<style>
        .header{
            background-image: url('https://matranews.id/wp-content/uploads/2018/08/Gili-Trawangan.jpg');
            height: 350px;
            width: 100%;
            background-repeat: no-repeat;
        }
        .subJudul{
            font-family: roboto;
            letter-spacing: 5px;
        }
        .Judul{
            font-family: roboto;
            padding-top: 6%;
        }
    </style>
@endsection

@section('header')
<div class="header text-center text-light">
    <h1 class="Judul">Pesona Wisata Tegal</h1>
    <p class="subJudul">" Warnai harimu dengan menikmati keindahan wisata "</p>
    <hr color="white" width="60%">
    <button class="btn btn-primary" onclick="location.href='wisata'">Lihat Selengkapnya</button>
</div><br>

@endsection

@section('content')
<div class="container text-center">
      <h2></h2>
      <p></p>
      <!-- <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>Wisata Populer</h2>
          <img width="27%" src="http://icons.iconarchive.com/icons/blackvariant/button-ui-system-folders-alt/512/Group-icon.png" alt=""><br>
          Daftar Wisata terpopuler.
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>Galeri</h2>
          <img width="27%" src="https://www.getvalify.com/hubfs/Lucro_Images/solutions-icon-regional.png" alt=""><br>
          Daftar Galeri wisata
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2>Tentang</h2>
          <img width="27%" src="http://maxim.co.za/wp-content/uploads/2015/04/Icon-About-250x250.png" alt=""><br>
          Pesona wisata memberikan informasi seputar wisata alam.
        </div>
      </div> -->
    </div><br>
    <div class="container  text-center">
      <h2>Daftar Wisata</h2>
      <p>Terbaru</p>
        <div class="row">
            @foreach($wisata as $wisatas)
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="card" >
                    <img class="card-img-top" width="100px" height="200px" src="./public/uploads/{{$wisatas->foto}}" alt="Card image cap">
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