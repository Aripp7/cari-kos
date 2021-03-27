 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kos WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
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
  <body>
      <center>
        <h1>Edit KOS</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Kos</label>
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
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="foto" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
		
		
		
		
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>