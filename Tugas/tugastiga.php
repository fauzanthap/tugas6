<?php
require 'konek.php'; //memanggil elemen di konek.php
global $conn; 
//mencari data pegawai
if(isset($_POST['search'])){
    $cari = $_POST['cari']; 
    //melakukan pengambilan data
    $query = "SELECT * FROM data_pegawai WHERE NIK LIKE '%$cari%' OR NAMA LIKE '%$cari%' OR JABATAN LIKE '%$cari%' OR TGL_MSK LIKE '%$cari%' OR DIVISI LIKE '%$cari%'";
    $data = mysqli_query($conn,$query); 
}else{
    $data = mysqli_query($conn, "SELECT * from data_pegawai"); //menampung data dari tabel data_pegawai jika tombol cari tidak ditekan
}
?>
<html>
<head>
<title>Daftar Pegawai</title>
</head>
<body>  
    <br>
    <h2>Halaman Daftar Pegawai</h2>
    <br>
    <a href="add.php">Tambah</a></div>
    <br>
    <form action="" method="POST">
        <input type="text" name="cari" size="40" placeholder="Cari data pegawai" autocomplete="off">
        <button type="submit" name="search">Cari</button> 
    </form>
    <br>
    <table class="table"> 
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tanggal Masuk</th>
            <th>Divisi</th>
            <th>Aksi</th>
        </tr>
        <?php $no=1; ?>
        <?php foreach($data as $row) : //menampilakn data di tabel dengan melakukan foreach?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['NIK'];?></td>
            <td><?php echo $row['NAMA'];?></td>
            <td><?php echo $row['JABATAN'];?></td>
            <td><?php echo $row['TGL_MSK'];?></td>
            <td><?php echo $row['DIVISI'];?></td>
            <td class="aksi">    
            <div class="edit"><a href="ubah.php?id=<?php echo $row['ID'];?>"`>Edit</a></div> | 
            <div class="hapus"><a href= "delete.php?id=<?php echo $row['ID'];?>">Hapus</a></div>
            </td>
        </tr>
        <?php $no++ ;?>
        <?php endforeach?>
    </table>
</body>
</html>