<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DATA CARIKOS!</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data KOS</h1><center>
    <center><a href="add-kos.php">+ &nbsp; Tambah KOS</a><center>
    <br/>
    <table>
      <thead>
        <tr>
       <th>Nama Kos</th>
                <th>Harga</th>
                <th>Ukuran</th>
                <th>Alamat</th>
				<th>Wifi</th>
				<th>AC</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
                  <?php
               include 'koneksi.php';
               $tampil=mysqli_query($conn, "SELECT * from kos");
			   $id=1;
                  while ($data=mysqli_fetch_array($tampil))  { 
              ?>
                <tr>
                    
                     <td><?php echo $data[ 'nama_kos'] ?></td> 
                     <td><?php echo $data[ 'harga'] ?></td>
                     <td><?php echo $data['ukuran'] ?></td>
                      
					  <td><?php echo $data[ 'alamat'] ?></td>
                        <td><?php echo $data[ 'wifi'] ?></td>
					  <td><?php echo $data[ 'ac'] ?></td>
					
					  <td><?php echo $data[ 'longitude'] ?></td>
                      <td><?php echo $data[ 'latitude'] ?></td>
					  <td align="center">
                      
							<a href="edit-kos.php?id=<?php echo $data['id'] ?>">edit</a> |
							<a href="hapuskos.php?id=<?php echo $data['id'] ?>"
							onclick="return confirm('yakin akan menghapus data?')">hapus</a>							
					   </tr>
                       
            <?php 
			
        }
        ?>
    </tbody>
    </table>
  </body>
</html>