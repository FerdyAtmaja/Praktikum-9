<?php
$servername	="localhost";
$username	="root";
$password	="";
$database	="db_Ferdy";

include "koneksi.inc.php";

$querysql= "CREATE TABLE kontak(
id INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
jkel VARCHAR(10),
email VARCHAR(40),
alamat VARCHAR(50),
kota VARCHAR(20),
pesan text
)";

if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>