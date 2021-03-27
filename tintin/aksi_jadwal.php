<?php 
include 'config.php';
$page=$_GET['page'];
$proses=$_GET['proses'];

if ($page=='jadwal' && $proses =='input') {
    $type = $_POST['tipe'];
    $nomorplat = $_POST['plat'];
    $jam = $_POST['jam'];
    $idsupir = $_POST['supir'];
    $kursi = $_POST['kursi'];
    mysqli_query($koneksi,"INSERT INTO jadwal values(NULL,'$nomorplat','$type','$jam',$kursi,'$idsupir')");
    header('location:index.php?page=jadwal&info=insert'); 
}elseif($page=='jadwal' && $proses == 'update'){
    $id = $_POST['id'];
    $type = $_POST['tipe'];
    $nomorplat = $_POST['plat'];
    $jam = $_POST['jam'];
    $idsupir = $_POST['supir'];
    $kursi = $_POST['kursi'];
    mysqli_query($koneksi,"UPDATE jadwal SET nomor_plat = '$nomorplat',jam_berangkat = '$jam', `type` = '$type', isi = '$kursi', id_supir = '$idsupir' WHERE id = $id");
    header('location:index.php?page='.$page.'&in=update'); 
}elseif($page=='jadwal' && $proses == 'delete'){
    $id = $_GET['id'];
    $cek =mysqli_num_rows(mysqli_query($koneksi,"select * from rute where id_jadwal = $id"));
    echo $cek;
    if($cek!=0){
    header('location:index.php?page='.$page.'&alert=ada'); 
       
    }else{
    mysqli_query($koneksi,"delete from jadwal where id = $id");
    header('location:index.php?page='.$page.'&del=delete'); 
    }
}
?>