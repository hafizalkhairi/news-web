<?php
include 'koneksi.php';

$id = $_POST['id_pengurus'];
$nama_lengkap = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];

if ($_FILES['foto']['name'] == "") {
    $namafile = $_POST['foto_lama'];
} else {
    $namafile = $_FILES['foto']['name'];
    $namasementara = $_FILES['foto']['tmp_name'];


    $terupload = move_uploaded_file($namasementara, 'images/' . $namafile);
}



$ubah = mysqli_query($koneksi, "UPDATE tb_pengurus set 
        nama_lengkap = '$nama_lengkap',
        jabatan = '$jabatan',
        foto = '$namafile'
        

        WHERE id_pengurus = $id");

if ($ubah) {
    echo "<script>
        alert('Data Berhasil Diubah')
        window.location.href = '../?page=pengurus/index'
        </script>";
}
