<html>
	<head><title>Edit Data</title></head>
      <body>
	<?php 
	include 'koneksi.php';
	$ambil=mysqli_query($conn,"select * from kos where id='$_GET[id]'");
	$data=mysqli_fetch_array($ambil);
	?>
       <h2>tabel Dosen</h2>
         <form action="" method="post">
	       <table>
		
		
			   <tr>
                <td>Nama Kos :</td>
	            <td><input type ="text" name ="nama_kos" value="<?=$data['nama_kos']?>" 
	          </tr>
              <tr>
                <td>Harga :</td>
	            <td><input type ="text" name ="harga" value="<?=$data['harga']?>" 
              </tr>
              
                <tr>
                <td>Ukuran :</td>
	            <td><input type ="text" name ="ukuran" value="<?=$data['ukuran']?>" 
	          </tr>
           
              <tr>
			<td>Alamat :</td >
			<td><textarea name="alamat" rows="5" cols="45" required=""><?=$data['alamat']?></textarea></td>
			</tr>
            
            
              <tr>
                <td>wifi :</td>
	            <td><input type ="text" name ="wifi" value="<?=$data['wifi']?>" 
	          </tr>
              
                <tr>
                <td>AC :</td>
	            <td><input type ="text" name ="ac" value="<?=$data['ac']?>" placeholder= 
	            "inputkan nama"required></td>
	          </tr>
              
                <tr>
                <td>Latitude :</td>
	            <td><input type ="text" name ="latitude" value="<?=$data['latitude']?>"
	          </tr>
              
                <tr>
                <td>Longitude :</td>
	            <td><input type ="text" name ="longitude" value="<?=$data['longitude']?>"
	          </tr>
	 <tr>
	           <td></td>
	          <td><input type ="submit" name ="proses" 
              value ="Submit" >
              <input type ="reset" name ="reset" 
			  value ="Reset" ></td>
              </tr>
	       </table>
         </form>
		 
<?php
 include 'koneksi.php';
if (isset($_POST['proses'])) {
	
	$nama_kos=$_POST['nama_kos'];
    $harga=$_POST['harga'];
	$ukuran=$_POST['ukuran'];
	$alamat=$_POST['alamat'];
	$wifi=$_POST['wifi'];
    $ac=$_POST['ac'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	$update=mysqli_query($conn,"Update kos set id='$id',
	nama_kos='$nama_kos',harga='$harga',ukuran='$ukuran',alamat='$alamat',wifi='$wifi',ac='$ac',latitude='$latitude',longitude='$longitude' where id='$_GET[id]'");
	if ($update){
		//echo "<script>alert('Data berhasil disimpan')</script>";
		header('location:list.php');
	}
}
?>
	
</body>
</html>