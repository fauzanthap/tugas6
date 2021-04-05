  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";

 //create connection
 $conn = mysqli_connect($servername, $username, $password,"pegawai"); //membuat variabel untuk menampung

 //Check conection
 if(!$conn){ //membuat kondisi jika konek error
     die("Connection failed: " . mysqli_connect_error()); //jika tidak bisa konek akan muncul tulisan 
 }
//Create database
    // $sql = "CREATE DATABASE pegawai"; //membuat variabel untuk membuat database
     //if(mysqli_query($conn, $sql)){ 
             //echo "Database created successfully"; //menampilkan teks database berhasil dibuat
         //} else {
           //  echo "Error creating database: " . mysqli_error($conn); //menampilkan database error
         //}

         //mysqli_close($conn); 
        
//membuat relasi tabel
$query  = "CREATE TABLE data_pegawai(ID INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,NIK INT(50),NAMA VARCHAR(200), JABATAN VARCHAR(200), TGL_MSK DATE, DIVISI VARCHAR(50))";   
$hasil_query = mysqli_query($conn, $query); //membuat variabel 
if(!$conn){ //melakukan kondisi 
  die ("Query Error: ".mysqli_errno($conn). 
       " - ".mysqli_error($conn));
}
else {
echo "Tabel data_pegawai telah dibuat"; //jika berhasil dibuat maka menampilkan string sukses
}
mysqli_close($conn);
?>