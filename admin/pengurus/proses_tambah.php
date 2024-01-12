<?php

include 'koneksi.php';

$nama_pengurus = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];

//ambil data file
$namafile = $_FILES['foto_pengurus']['name'];
$namasementara = $_FILES['foto_pengurus']['tmp_name'];

//pindahkan file
$terupload = move_uploaded_file($namasementara, 'images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_pengurus (nama_lengkap, jabatan, foto) VALUES ('$nama_pengurus', '$jabatan', '$namafile')");

if ($tambah) {
    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href='../?page=pengurus/index';
        </script>";
} else {
    echo "<script>  
        alert('Data Gagal disimpan');
        window.location.href='../?page=pengurus/index';
        </script>";
}
