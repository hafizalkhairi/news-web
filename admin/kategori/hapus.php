<?php

include 'koneksi.php';

$id = $_GET['kode'];

$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori = '$id'");

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location.href='?page=kategori/index';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus');
        window.location.href='?page=data-kategori';
        </script>";
}
