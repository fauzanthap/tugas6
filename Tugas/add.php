<?php
global $conn; 
require "konek.php"; 
if(isset($_POST["submit"])){ //mengecek tombol submit 
    //ambil data tiap elemen dari form add
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $tgl_msk = $_POST["tgl_msk"];
    $divisi = $_POST["divisi"];

    $query = "INSERT INTO data_pegawai VALUES('','$nik','$nama','$jabatan','$tgl_msk','$divisi')"; //memasukkan data ke tabel data_pegawai
    mysqli_query($conn,$query); //query data

    if(mysqli_affected_rows($conn) >0){ 
        echo "<script>
        alert('data berhasil ditambah');
        document.location.href='tugastiga.php';
        </script>";
    }else{ 
        echo "
		<script>
				alert('data gagal ditambah');
				document.location.href='tugastiga.php';
		</script>
		";
    }
}
?>
<html>
    <head>
        <title>Tanbah Data Pegawai</title>
    </head>
    <body>
            <h2>Tambah Data Pegawai</h2>

                <a href="tugastiga.php">Kembali</a>

                <form class="cont_form_tambah" action="" method="POST">
                <ul>
                    <label class="label" for="nik">NIK</label>
                    <li><input type="number" name="nik" id="nik" required=""></li>
                    <label for="nama">Nama</label>
                    <li class="label"><input type="text" name="nama" id="nama" required=""></li>
                    <label for="jabatan">Jabatan</label>
                    <li class="label"><input type="text" name="jabatan" id="jabatan" required=""></li>
                    <label for="tgl_msk">Tanggal Masuk</label>
                    <li class="label"><input type="date" name="tgl_msk" id="tgl_msk" required=""></li>
                    <label for="divisi">Divisi</label>
                    <li class="label"><input type="text" name="divisi" id="divisi" required=""></li>
                    <li><button type="submit" name="submit">Submit</button></li>
                    </div>
                </ul>
            </form>
    </body>
</html>