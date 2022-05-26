<?php
$servername		="localhost";
$username		="root";
$password		="";
$conn 			= mysqli_connect($servername, $username, $password); 

if (!$conn) {
	die("Koneksi gagal: ".mysqli_connect_error()); 
}

$sql = "CREATE DATABASE db_Ferdy";
if (mysqli_query($conn, $sql)) {
	echo "Database berhasil dibuat"; 
} else {
	echo "Gagal membuat database: ".mysqli_error($conn); 
}

mysqli_close($conn); 
?>