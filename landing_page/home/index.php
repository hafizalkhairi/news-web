<!-- Start retroy layout blog posts -->
<section class="section bg-light">
	<div class="container">
		<div class="row align-items-stretch retro-layout">
			<h2 class="posts-entry-title mb-4">Berita Terbaru</h2>
			<?php
			include 'koneksi.php';

			$ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 6");
			while ($data = mysqli_fetch_array($ambildata)) {
			?>
				<div class="col-md-4">
					<a href="?page=detail&slug	=<?= $data['slug'] ?>" class="h-entry mb-30 v-height gradient">
						<div class="featured-img" style="background-image: url('../admin/berita/images/<?= $data['gambar_berita'] ?>');"></div>
						<div class="text">
							<span class="date"><?= $data['tanggal_berita'] ?></span>
							<h2><?= $data['judul_berita'] ?></h2>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- End retroy layout blog posts -->

<!-- Start posts-entry -->

<?php
include('koneksi.php');
$sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
while ($data = mysqli_fetch_array($sql)) {


?>
	<section class=" section posts-entry ">
		<div class="container">
			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title"><?= $data['nama_kategori'] ?></h2>

				</div>
				<div class="col-sm-6 text-sm-end"><a href="?page=kategori&kode=<?= $data['id_kategori'] ?>" class="read-more">View All</a></div>
			</div>

			<div class="row g-3">
				<div class="col-md-12 ">
					<div class="row g-3">
						<?php

						$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_kategori='$data[id_kategori]' ORDER BY id_berita DESC LIMIT 3");

						foreach ($query as $data) {
						?>
							<div class="col-md-4 ">
								<div class="blog-entry">
									<a href="?page=detail&slug=<?= $data['slug'] ?>" class="img-link">
										<img src="../admin/berita/images/<?= $data['gambar_berita'] ?>" alt="Image" width="450px;" class="img-fluid">
									</a><br>
									<span class="date"><?= $data['tanggal_berita'] ?></span>
									<h2><a href="?page=detail&slug=<?= $data['slug'] ?>"><?= $data['judul_berita'] ?></a></h2>
									<p><?= substr($data['isi_berita'], 0, 100) ?>...</p>
									<p><a href="?page=detail&slug=<?= $data['slug'] ?>" class="btn btn-sm btn-outline-primary">Read More</a></p>
								</div>
							</div>

						<?php } ?>


					</div>
				</div>

			</div>
		</div>
	</section>
<?php } ?>
<!-- End posts-entry -->