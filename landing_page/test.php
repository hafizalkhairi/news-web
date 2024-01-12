if (isset($_GET['nama_kategori'])) {
$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori WHERE nama_kategori='$_GET[nama_kategori]' ORDER BY id_berita DESC");
} else {
$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori ORDER BY id_berita DESC");
}
while ($data = mysqli_fetch_array($sql)) {
}