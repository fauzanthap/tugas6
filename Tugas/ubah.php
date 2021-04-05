<?php
global $conn; 
require "konek.php"; 
$id = $_GET["id"]; 
//query data berdasarkan idnya
$row =mysqli_query($conn,"SELECT * FROM data_pegawai WHERE ID = $id"); //melakukan query select data
$data = mysqli_fetch_assoc($row); //variabel untuk menampung array asosiatif
if(isset($_POST["submit"])){ 
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $tgl_msk = $_POST["tgl_msk"];
    $divisi = $_POST["divisi"];
    // melakukan update data 
    $query = "UPDATE data_pegawai SET 
                NIK = '$nik',
                NAMA = '$nama',
                JABATAN = '$jabatan',
                TGL_MSK = '$tgl_msk',
                DIVISI = '$divisi' WHERE ID = '$id'
                ";
    mysqli_query($conn,$query); //melakukan query
    //mengecek data berhasil diubah 
    if(mysqli_affected_rows($conn) >0){
        echo "<script>
        alert('data berhasil diubah');
        document.location.href='tugastiga.php';
        </script>";
    }else{
        echo "
		<script>
				alert('data gagal diubah');
				document.location.href='tugastiga.php';
		</script>
		";
    }
}
?>
<html>
    <head>
        <title>Edit Data Pegawai</title>
    </head>
    <body>
            <h2>Edit Data Pegawai</h2>

                <a href="tugastiga.php">Kembali</a>

                <form class="cont_form_tambah" action="" method="POST"  enctype="multipart/form-data">
                <ul>
                    <label class="label" for="nik">NIK</label>
                    <li><input type="text" name="nik" id="nik" required value="<?php echo $data['NIK'];?>"></li>
                    <label for="nama">Nama</label>
                    <li class="label"><input type="text" name="nama" id="nama" required value="<?php echo $data['NAMA'];?>"></li>
                    <label for="jabatan">Jabatan</label>
                    <li class="label"><input type="text" name="jabatan" id="jabatan" required value="<?php echo $data['JABATAN'];?>"></li>
                    <label for="tgl_msk">Tanggal Masuk</label>
                    <li class="label"><input type="date" name="tgl_msk" id="tgl_msk" required value="<?php echo $data['TGL_MSK'];?>"></li>
                    <label for="divisi">Divisi</label>
                    <li class="label"><input type="text" name="divisi" id="divisi" required value="<?php echo $data['DIVISI'];?>"></li>
                    <li><button type="submit" name="submit">Ubah</button></li>
                </ul>
            </form>
    </body>
</html>