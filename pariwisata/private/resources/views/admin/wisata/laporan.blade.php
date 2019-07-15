<table width="100%" border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Deskripsi</th>
    <th>Jam Buka</th>
    <th>Jam Tutup</th>
  </tr>
  <?php
    $no = 1;
    $wisata = \App\Wisata::get();
    foreach($wisata as $mywisata){
  ?>

  <tr>
    <td>{{$no++}}</td>
    <td>{{$mywisata->nama}}</td>
    <td>{{$mywisata->deskripsi}}</td>
    <td>{{$mywisata->buka}}</td>
    <td>{{$mywisata->tutup}}</td>
  </tr>
<?php } ?>
</table>