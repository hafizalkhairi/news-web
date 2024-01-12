<?php
include 'koneksi.php';

$id = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];

$ubah = mysqli_query($koneksi, "UPDATE tb_user set 
        username = '$username',
        password = '$password',
        nama_lengkap = '$nama_lengkap',
        level = '$level'

        WHERE id_user = $id");

if ($ubah) {
    echo "<script>
        alert('Data Berhasil Diubah')
        window.location.href = '../?page=user/index'
        </script>";
} else {
    echo "<script>
        alert('Data Gagal Diubah')
        window.location.href = '../?page=user/index&kode=$id'
        </script>";
}
