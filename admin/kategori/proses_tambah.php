<?php

include 'koneksi.php';

$kategori = $_POST['nama_kategori'];

$tambah = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES ('$kategori')");

if ($tambah) {
    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href='../?page=kategori/index';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal disimpan');
        window.location.href='../?page=kategori/index';
        </script>";
}
