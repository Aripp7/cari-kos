<?php 
include 'config.php';
$page=$_GET['page'];
$proses=$_GET['proses'];

if ($page=='rute' && $proses =='input') {
    $idjadwal = $_POST['jadwal'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $jarak = $_POST['jarak'];
    $waktu = $_POST['waktu'];
    $harga = $_POST['harga'];
    mysqli_query($koneksi,"INSERT INTO rute values(NULL,'$idjadwal','$asal','$tujuan',$jarak,'$waktu','$harga')");
    header('location:index.php?page=rute&info=insert'); 
}elseif($page=='rute' && $proses == 'update'){
    $id = $_POST['id'];
    $idjadwal = $_POST['jadwal'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $jarak = $_POST['jarak'];
    $waktu = $_POST['waktu'];
    $harga = $_POST['harga'];
    mysqli_query($koneksi,"UPDATE rute SET id_jadwal = $idjadwal, `start` = '$asal',finish='$tujuan', jarak_tempuh = '$jarak', lama = '$waktu', harga = '$harga' WHERE id = $id");
    header('location:index.php?page='.$page.'&in=update'); 
}elseif($page=='rute' && $proses == 'delete'){
    $id = $_GET['id'];
    mysqli_query($koneksi,"delete from rute where id = $id");
    header('location:index.php?page='.$page.'&del=delete'); 

}
?>