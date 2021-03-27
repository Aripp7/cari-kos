<?php
include_once 'koneksi.php';
$stat = $conn->prepare
         ("SELECT id, nama_kos, harga, ukuran, alamat ,wifi, ac,latitude,longitude,foto FROM kos;");
$stat->execute();
$stat->bind_result($id, $nama_kos, $harga, $ukuran, $alamat, $wifi, $ac, $latitude,$longitude,$foto);
$foodmenus = array();
$response['kode'] = 1;
$response['respon'] = "Data Ada";
$response['data'] = array();
while ($stat->fetch()){
     $temporary = array();
     $temporary ['id'] = $id;
     $temporary ['nama_kos'] = $nama_kos;
     $temporary ['harga'] = $harga;
     $temporary ['ukuran'] = $ukuran;
     $temporary ['alamat'] = $alamat;
     $temporary ['wifi'] = $wifi;
      $temporary ['ac'] = $ac;
     $temporary ['foto'] = $foto;
     $temporary ['latitude'] = $latitude;
     $temporary ['longitude'] = $longitude;
     array_push($response['data'], $temporary);
 }
 echo json_encode($response);
 ?>