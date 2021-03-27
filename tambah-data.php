<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Kos</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>Nama KOS</td><td><input type="text" name="nama_kos"></td></tr>
				<tr><td>Harga</td><td><input type="text" name="harga"></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
				<tr><td>Ukuran</td><td><input type="text" name="ukuran"></td></tr>
               
                <tr><td>WIFI</td><td>
                        <select name="wifi">
                       
                            <option value="ada">ada</option>
                            <option value="tidak ada">tidak ada</option>
                        </select>
                    </td></tr>
					
					<tr><td>AC</td><td>
                        <select name="ac">
                       
                            <option value="ada">ada</option>
                            <option value="tidak ada">tidak ada</option>
                        </select>
                    </td></tr>
					<tr><td>Latitude</td><td><input type="text" name="latitude"></td></tr>
					<tr><td>Longitude</td><td><input type="text" name="longitude"></td></tr>

            </table>
        </form>        
        <form action="" method="post" enctype="multipart/form-data">
		Pilih File Foto : <input type="file" name="foto">       
	</form>
    
             <tr><td colspan="2"><button type="submit" 
             value="simpan">SIMPAN</button></td></tr>
               <a href="list.php"><input type="button" value="Batal"></a>
    </body>
</html>
