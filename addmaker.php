<?php
include_once 'koneksi.php';
$key = $_GET['key'];
$stat = $conn->prepare
         ("SELECT  latitude, longitude FROM kos where id=$key;");
$stat->execute();
$stat->bind_result($lat, $long);
$location = array();
while ($stat->fetch()){
     $temporary = array();

     $temporary ['Latitude'] = $lat;
     $temporary ['Longitude'] = $long;
   
     array_push($location, $temporary);
 }
 echo json_encode($location);
 ?>