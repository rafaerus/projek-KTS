<?php
//isi nama host, username mysql, dan password mysql anda
$databaseHost = "localhost";
$databaseName = "ide_website";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

//Shost = mysqli_connect("localhost","root","");

if($mysqli){
echo "koneksi db berhasil.<br/>";
}else{
echo "koneksi gagal.<br/>";
}
?>