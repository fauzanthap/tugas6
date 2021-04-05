<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tamu";

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname); //membuat variabel yang menampung status hasil koneksi kepada database

    //Check conection
    if(!$conn){ //membuat kondisi jika konek error
        die("Connection failed: " . mysqli_connect_error()); //jika konek ke mysql error maka akan menampilkan teks 
    }
    //Create database
    //$sql = "CREATE DATABASE tamu"; //membuat variabel untuk membuat database baru 
    //if(mysqli_query($conn, $sql)){ //membuat kondisi 
      //      echo "Database created successfully"; //menampilkan teks database berhasil dibuat
      // } else {
        //   echo "Error creating database: " . mysqli_error($conn); //menampilkan database error dibuat
      //}
    //membuat tabel dalam database 
   $sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR (200) NOT NULL,
    EMAIl VARCHAR(500) NOT NULL,
    ISI TEXT)";
    if(mysqli_query($conn, $sql)){ //membuat kondisi 
           echo "table created successfully"; //menampilkan teks database berhasil dibuat
        } else {
          echo "Error creating database: " . mysqli_error($conn); //menampilkan database error dibuat
        }


        mysqli_close($conn); //menghentikan koneksi php ke server mysql dengan cara otomatis 
?>