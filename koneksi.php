<?php
define('DB_HOST','localhost');
define('DB_USER','carikosm_arip');
define('DB_PASS','Batubatako123');
define('DB_NAME','carikosm_kos');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    echo"Gagal Connect Ke Server mysql". mysqli_conect_errno();
    die();
}
?>