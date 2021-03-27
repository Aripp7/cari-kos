
<!DOCTYPE html>
<html>
  <head>
    <title>Edit Data Kos</title>
	
	
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  
  	<?php 
	include 'koneksi.php';
	$ambil=mysqli_query($conn,"select * from kos where id='$_GET[id]'");
	$data=mysqli_fetch_array($ambil);
	?>
  <body>
      <center>
        <h1>Edit KOS</h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Kos</label>
          <input type="hidden" name="id" value="<?=$_GET[id]?>" autofocus="" required="" />
          <input type="text" name="nama_kos" value="<?php echo $data['nama_kos']; ?>" autofocus="" required="" />
        </div>
		
		
		
		
		
		
		
		
		  <div>
          <label>Harga</label>
          <input type="text" name="harga" value="<?php echo $data['harga']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Ukuran</label>
         <input type="text" name="ukuran" value="<?php echo $data['ukuran']; ?>" autofocus="" required="" />
        </div>
		
		 <div>
          <label>Wifi</label>
            <select name="wifi">
                       
                            <option value="ada">ada</option>
                            <option value="tidak ada">tidak ada</option>
                        </select> 
        </div>
		
		 <div>
          <label>AC</label>
           <select name="ac">
                       
                            <option value="ada">ada</option>
                            <option value="tidak ada">tidak ada</option>
                        </select> 
        </div>
		
		
        <div>
          <label>Latitude</label>
         <input type="text" name="latitude" value="<?php echo $data['latitude']; ?>" autofocus="" required="" />
        </div>
		  <div>
          <label>Longitude</label>
          <input type="text" name="longitude" value="<?php echo $data['longitude']; ?>" autofocus="" required="" />
        </div>
		
		
  
		
		
		 <div>
          <label>Foto</label>
          <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" accept="image/*" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah foto</i>
        </div>
		
		
		
		
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form
	  


	  
	  
	  
	  
  </body>
</html>