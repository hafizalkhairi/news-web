<?php

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$level = $_POST['level'];


$tambah = mysqli_query($koneksi, "INSERT INTO tb_user (username, password, nama_lengkap, level) VALUES ('$username', '$password', '$nama_lengkap', '$level')");

if ($tambah) {
    echo "<script>
        alert('Data berhasil disimpan');
        window.location.href='index.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal disimpan');
        window.location.href='login/logout.php';
        </script>";
}
