<?php

include 'koneksi.php';

$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$id = $_POST['id_berita'];

if ($_FILES['gambar_berita']['name'] == "") {
    $namafile = $_POST['gambar_lama'];
} else {
    $namafile = $_FILES['gambar_berita']['name'];
    $namasementara = $_FILES['gambar_berita']['tmp_name'];


    $terupload = move_uploaded_file($namasementara, 'images/' . $namafile);
}
$ubah = mysqli_query($koneksi, "UPDATE tb_berita SET 
judul_berita='$judul', 
tanggal_berita = '$tanggal', 
isi_berita ='$isi',
gambar_berita = '$namafile'

WHERE id_berita = $id");

if ($ubah) {

    echo "<script>
    alert('Data Berhasil Diubah')
    window.location.href = '../?page=berita/index'
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Diubah')
    window.location.href = '../?page=berita/index&kode=$idkode=$id'
    </script>";
}
