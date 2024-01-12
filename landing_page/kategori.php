<?php

include "koneksi.php";

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id'");
$kategori = mysqli_fetch_array($query);
?>


<div class="section search-result-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12 ">
				<div class="heading">Kategori: <?= $kategori['nama_kategori'] ?></div>
			</div>
		</div>
		<div class="row posts-entry ">
			<div class="col-lg-8 ">
				<?php
				include "koneksi.php";

				$sql = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_kategori=$_GET[kode] ORDER BY id_kategori DESC");
				while ($berita = mysqli_fetch_array($sql)) {

				?>
					<div class="blog-entry d-flex blog-entry-search-item">
						<a href="?page=detail&kode=<?= $berita['id_berita'] ?>" class="img-link me-4">
							<img src="../admin/berita/images/<?= $berita['gambar_berita'] ?>" alt="Image" class="img-fluid">
						</a>
						<div>
							<span class="date"><?= $berita['tanggal_berita'] ?></span>
							<h2><a href="?page=detail&kode=<?= $berita['id_berita'] ?>"><?= $berita['judul_berita'] ?></a></h2>
							<p><?= substr($berita['isi_berita'], 0, 100) ?>....</p>
							<p><a href="?page=detail&kode=<?= $berita['id_berita'] ?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
						</div>
					</div>
				<?php } ?>

				<div class="row text-start  pt-5 border-top">
					<div class="col-md-12">
						<div class="custom-pagination">
							<span>1</span>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<span>...</span>
							<a href="#">15</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-md-12 col-lg-4 sidebar">
				<h3 class="heading">kategori</h3>
				<div class="sidebar-box">
					<?php
					$query = mysqli_query($koneksi, "SELECT *, (SELECT count(*) FROM tb_berita 
         			 WHERE id_kategori=kategori.id_kategori) 
          			 as jumlah_kiriman FROM kategori");
					?>

					<ul class="categories">
						<?php
						while ($row = mysqli_fetch_array($query)) {
						?>
							<li><a href="?page=kategori&kode=<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?> <span>(<?= $row['jumlah_kiriman'] ?>)</span></a></li>
						<?php } ?>
					</ul>

				</div>
				<!-- END sidebar-box -->

			</div>
		</div>
	</div>
</div>