<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Data Kos</title>
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
        <h1>Tambah KOS</h1>
      <center>
      <form method="POST" action="save.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Kos</label>
          <input type="text" name="nama_kos" autofocus="" required="" />
        </div>
		  <div>
          <label>Harga</label>
          <input type="text" name="harga" autofocus="" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" />
        </div>
        <div>
          <label>Ukuran</label>
         <input type="text" name="ukuran" required="" />
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
         <input type="text" name="latitude" required="" />
        </div>
		  <div>
          <label>Longitude</label>
          <input type="text" name="longitude" autofocus="" required="" />
        </div>
 
        
         <form action="" method="post" enctype="multipart/form-data">
		Pilih File Foto : <input type="file" name="foto" accept="image/*">     
        
        
        
        
        
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
  </body>
</html>