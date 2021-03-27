<?php
include_once 'koneksi.php';

$id = $_POST['id'];
$nama_kos            = $_POST['nama_kos'];
$harga         		 = $_POST['harga'];
$alamat       		 = $_POST['alamat'];
$ukuran			 	 = $_POST['ukuran'];
$wifi        		 = $_POST['wifi'];
$ac        			 = $_POST['ac'];
$latitude       	 = $_POST['latitude'];
$longitude        	 = $_POST['longitude'];
$foto 				 = $_FILES['foto']['name'];
  echo $id;
  
  
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE `kos` SET `nama_kos` = '$nama_kos', `harga` = '$harga ', `ukuran` = '$ukuran', `alamat` = '$alamat', `wifi` = '$wifi', `ac` = '$ac', `latitude` = '$latitude', `longitude` = '$longitude',`foto` = '$nama_gambar_baru' WHERE `id` = $id";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='list-kos.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit-kos.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
     $query  = "UPDATE `kos` SET `nama_kos` = '$nama_kos', `harga` = '$harga ', `ukuran` = '$ukuran', `alamat` = '$alamat', `wifi` = '$wifi', `ac` = '$ac', `latitude` = '$latitude', `longitude` = '$longitude' WHERE `id` = $id";
      $result = mysqli_query($conn, $query);
 
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
       
          echo "<script>alert('Data berhasil diubah.');window.location='list-kos.php';</script>";
      }
    }