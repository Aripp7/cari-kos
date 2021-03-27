<?php
include_once 'koneksi.php';
$stat = $conn->prepare
         ("SELECT nama_kos, harga,,ukuran, alamat, wifi,ac ,latitude, longitude FROM pegawai ;");
$stat->execute();
$stat->bind_result($nama_kos, $harga,$ukuran, $alamat, $wifi,$ac ,$latitude, $longitude);
$staffmenus = array();
while ($stat->fetch()){
     $temporary = array();
     $temporary ['nama_kos'] = $nama_kos;
     $temporary ['harga'] = $harga;
     $temporary ['ukuran'] = $ukuran;
     $temporary ['alamat'] = $alamat;
     $temporary ['wifi'] = $wifi;
     $temporary ['ac'] = $ac;
     $temporary ['latitude'] = $latitude;
     $temporary ['longitude'] = $longitude;
  
     array_push($kosmenus, $temporary);
 }
 echo json_encode($kosmenus);
 ?>