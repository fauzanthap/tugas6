<?php
//koneksi ke database
$servername = "localhost"; 
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($servername, $username, $password,"pegawai"); //membuat variabel yang menampung status hasil koneksi kepada database

//Check koneksi
if(!$conn){ 
    die("Connection failed: " . mysqli_connect_error()); //membuat notif jika tidak berhasil konek ke database
}
?>