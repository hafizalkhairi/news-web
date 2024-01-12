<?php
include "../koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //cek data form ke database
    $user = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");

    //cek jumlah data hasil query
    if (mysqli_num_rows($user) > 0) {
        //pecah data user
        $data = mysqli_fetch_assoc($user);

        //simpan datanya ke session
        session_start();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];

        echo "<script>
            alert('Login Berhasil');
            window.location.href='../index.php'
        </script>";
    } else {
        echo "<script>
            alert('Username atau Password Salah');
            window.location.href='index.php'
        </script>";
    }
}
