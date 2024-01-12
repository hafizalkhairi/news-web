<?php
include 'koneksi.php';

$id = $_POST['id_kategori'];
$kategori = $_POST['nama_kategori'];

$ubah = mysqli_query($koneksi, "UPDATE kategori set 
        nama_kategori = '$kategori'

        WHERE id_kategori = $id");

if ($ubah) {
    echo "<script>
        alert('Data Berhasil Diubah')
        window.location.href = '../?page=kategori/index'
        </script>";
} else {
    echo "<script>
        alert('Data Gagal Diubah')
        window.location.href = '../?page=kategori/index&kode=$id'
        </script>";
}
