<?php

include 'koneksi.php';

$id_kategori = $_POST['id'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];
$slug = str_replace('+', '-', urlencode($judul));

//ambil data file
$namafile = $_FILES['gambar_berita']['name'];
$namasementara = $_FILES['gambar_berita']['tmp_name'];

//pindahkan file
$terupload = move_uploaded_file($namasementara, 'images/' . $namafile);

$tambah = mysqli_query($koneksi, "INSERT INTO tb_berita (id_kategori, judul_berita, slug, tanggal_berita, isi_berita, gambar_berita)  VALUES ('$id_kategori', '$judul', '$slug', '$tanggal', '$isi', '$namafile')");


if ($tambah) {
    echo "<script>
    alert('Data berhasil disimpan');
    window.location.href='../?page=berita/index';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal disimpan');
    window.location.href='../?page=berita/index';
    </script>";
}
