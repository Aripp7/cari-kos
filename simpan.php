<?php
include_once 'koneksi.php';

$nama_kos            = $_POST['nama_kos'];
$harga         		 = $_POST['harga'];
$alamat       		 = $_POST['alamat'];
$ukuran			 	 = $_POST['ukuran'];
$wifi        		 = $_POST['wifi'];
$ac        			 = $_POST['ac'];
$latitude       	 = $_POST['latitude'];
$longitude        	 = $_POST['longitude'];
$image 				 = $_FILES['foto']['name'];
$tmp 				 = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;


// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $conn->prepare("INSERT INTO kos(nama_kos, harga, ukuran, wifi, ac, latitude, longitude, image) VALUES(:nama_kos, :harga, :ukuran, :wifi, :ac, :latitude, :longitude, :foto)");
  $sql->bindParam(':nama_kos', $nama_kos);
  $sql->bindParam(':harga', $harga);
  $sql->bindParam(':ukuran', $ukuran);
  $sql->bindParam(':wifi', $wifi);
  $sql->bindParam(':ac', $ac);
  $sql->bindParam(':latitude', $latitude);
  $sql->bindParam(':longitude', $longitude);
  $sql->bindParam(':foto', $foto);
  $sql->execute(); // Eksekusi query insert

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: list.php"); // Redirect ke halaman list.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah-data.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah-data.php'>Kembali Ke Form</a>";
}



mysqli_close($conn);
?>