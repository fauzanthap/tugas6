<?php
global $conn; 
require "konek.php"; //memanggil elemen di konek.php
$id = $_GET["id"]; //variabel untuk menampung id 

//melakukan query delete
mysqli_query($conn, "DELETE FROM data_pegawai WHERE ID= $id");
//notif untuk data berhasil di hapus
if (mysqli_affected_rows($conn)>0) {

    echo "
    <script>
            alert('data berhasil dihapus');
            document.location.href='tugastiga.php';
        </script>";
}
else{
    echo 
    "<script>
            alert('data gagal dihapus');
            document.location.href='tugastiga.php';
        </script>";
    }
?>