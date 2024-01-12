<?php

include 'koneksi.php';

$id = $_GET['id_berita'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita = '$id'");

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location.href='?page=berita/index';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus');
        window.location.href='?page=berita/index';
        </script>";
}
