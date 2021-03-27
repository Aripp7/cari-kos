<?php
include 'koneksi.php';
$hapus=mysqli_query($conn,"Delete From kos where id='$_GET[id]'");
if ($hapus){
	header('location:list-kos.php');
}
?>