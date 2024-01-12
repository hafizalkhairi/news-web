<?php

include "koneksi.php";

$id = $_GET['slug'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE slug='$id'");
$berita = mysqli_fetch_array($query);
?>

<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('../admin/berita/images/<?= $berita['gambar_berita'] ?>');"">
  <div class=" container">
  <div class="row same-height justify-content-center">
    <div class="col-md-6">
      <div class="post-entry text-center">
        <h1 class="mb-4"><?= $berita['judul_berita'] ?></h1>
        <div class="post-meta align-items-center text-center">
          <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
          <span class="d-inline-block mt-1">By Carl Atkinson</span>
          <span>&nbsp;-&nbsp; <?= $berita['tanggal_berita'] ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section class="section">
  <div class="container">

    <div class="row blog-entries element-animate">

      <div class="col-md-12 col-lg-8 main-content">

        <div class="post-content-body">
          <p><?= $berita['isi_berita'] ?></p>
        </div>


        <?php

        include 'koneksi.php';

        $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita 
        JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori WHERE id_berita='$id' ");

        while ($kategori = mysqli_fetch_array($ambildata)) {

        ?>
          <div class="pt-3">
            <p>Categories: <?= $kategori['nama_kategori'] ?></p>
          </div>
        <?php } ?>


      </div>

      <!-- END main-content -->


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
</section>


<!-- Start posts-entry -->
<section class="section posts-entry posts-entry-sm bg-light">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-uppercase text-black">Berita Lainnya</div>
    </div>
    <div class="row">
      <?php
      include 'koneksi.php';

      $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita ORDER BY id_berita DESC LIMIT 4");
      while ($data = mysqli_fetch_array($ambildata)) {
      ?>
        <div class="col-md-6 col-lg-3">
          <div class="blog-entry ">
            <a href="?page=detail&slug=<?= $data['slug'] ?>" class="img-link">
              <img src="../admin/berita/images/<?= $data['gambar_berita'] ?>" alt="Image" class="img-fluid">
            </a>
            <span class="date"><?= $data['tanggal_berita'] ?></span>
            <h2><a href="?page=detail&slug=<?= $data['slug'] ?>"><?= $data['judul_berita'] ?></a></h2>
            <p><?= substr($data['isi_berita'], 0, 100) ?>....</p>
            <p><a href="?page=detail&slug=<?= $data['slug'] ?>" class="read-more">Lanjutkan Membaca</a></p>
          </div>
        </div>
      <?php } ?>


    </div>
  </div>
</section>
<!-- End posts-entry -->