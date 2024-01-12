<?php

include 'koneksi.php';

$id = $_GET['kode'];

$hapus = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user = '$id'");

if ($hapus) {
    echo "<script>
        alert('Data berhasil dihapus');
        window.location.href='?page=user/index';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus');
        window.location.href='?page=user/index';
        </script>";
}
