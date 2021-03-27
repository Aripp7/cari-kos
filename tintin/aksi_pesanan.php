<?php 
include 'config.php';
$page=$_GET['page'];
$proses=$_GET['proses'];

if ($page=='pesanan' && $proses =='bayar') {
    
    mysqli_query($koneksi,"UPDATE transaksi set konfirm_pem = 1 where id=$_GET[id]");
    header('location:index.php?page=pesanan'); 
}elseif($page=='pesanan' && $proses == 'delete'){
   
    mysqli_query($koneksi,"delete from transaksi where id=$_GET[id]");
    header('location:index.php?page=pesanan'); 
}elseif ($page=='pesanan' && $proses =='datang') {
    
    mysqli_query($koneksi,"UPDATE transaksi set konfirm_datang = 1 where id=$_GET[id]");
    header('location:index.php?page=pesanan'); 
}
?>