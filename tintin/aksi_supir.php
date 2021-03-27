<?php 
include 'config.php';
$page=$_GET['page'];
$proses=$_GET['proses'];

if ($page=='supir' && $proses =='input') {
    $nama = $_POST['namasupir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['hp'];
    mysqli_query($koneksi,"INSERT INTO supir values(NULL,'$nama','$alamat','$nohp')");
    header('location:index.php?page='.$page.'&info=insert'); 
}elseif($page=='supir' && $proses == 'update'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['hp'];
    mysqli_query($koneksi,"UPDATE supir SET nama = '$nama', alamat = '$alamat', no_hp = '$nohp' WHERE id = $id");
    header('location:index.php?page='.$page.'&in=update'); 
}elseif($page=='supir' && $proses == 'delete'){
    $id = $_GET['id'];
    $cek =mysqli_num_rows(mysqli_query($koneksi,"select * from jadwal where id_supir = $id"));
    echo $cek;
    if($cek!=0){
    header('location:index.php?page='.$page.'&alert=ada'); 
       
    }else{
    mysqli_query($koneksi,"delete from supir where id = $id");
    header('location:index.php?page='.$page.'&del=delete'); 
    }
}
?>