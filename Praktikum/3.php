<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liga";

//membuat database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// mengecheck koneksi
if (!$conn) {
    die("Connetion failed: ". mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4'), ('Spa' , 'Spanyol', '3'), ('Eng', 'English', '3')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>