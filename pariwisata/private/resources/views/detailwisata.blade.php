@extends('Layout.master')
@section('css')
    <style>
        .Judul{
            font-family: roboto;
            padding-top: 6%;
            opacity: 0.6;
            margin-top: 1%;
            width: 100%;
            padding-top: 3%;
            padding-bottom: 3%;
            background: grey;
        }
        .hEvent{
            background-image: url('https://matranews.id/wp-content/uploads/2018/08/Gili-Trawangan.jpg');
            height: 400px;
            width: 100%;
            background-repeat: no-repeat;
        }
    </style>
@endsection
@section('header')
    <!-- StartHeader -->

        <div class="hEvent text-center row">
          <div class="Judul col align-self-end">
              <h1 class="subJudul">{{$detail->nama}}</h1>
          </div>
        </div>

    <!-- EndHeader -->
    <br>
@endsection
@section('content')
  <div class="container">
    <!-- StartNavTabs -->
    <ul class="nav nav-tabs " id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Pendaftaran</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
      <br>
      <h2>Jam buka</h2>
      <p>{{date('d M Y', strtotime($detail->buka))}} <b>s/d</b> {{date('d M Y', strtotime($detail->tutup))}}</p><br>

      <h2>Keterangan</h2>
      <p>
        {{$detail->keterangan}}
      </p><br>

      <h2>Deskripsi</h2>
      <img width="100px" src="{{URL::asset('./public/uploads/'.$detail->foto)}}" alt=""><br><br>

       <br><br>
    </div>
    <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
      <br>
      <h2>PESERTA</h2>
      <p><b>Kuota : </b> {{$total = $detail->kuota}} <br>
      <b>Pendaftar : </b> {{$jml = count($peserta)}} <br>
      <b>Sisa Kuota : </b> {{$total - $jml}}</p>
      <h2>KEIKUTSERTAAN</h2>
      @if(count($ket)>0)
        <h2>{{$user->name}}, Sudah Terdaftar</h2>
      @else
      <form action="/users/{{$detail->id}}/daftar"method="post">
        @csrf
       <button type="submit" class="btn btn-lg btn-primary col-lg-3" name="button" onclick="confirm('Yakin ingin mengunjungi wisata ini ?')">Kunjungi Wisata</button>        
      </form>
      @endif
      <br><br>
    </div>
    </div>
    <!-- EndNavTabs -->
  </div>

@endsection
@section('js')

@endsection
