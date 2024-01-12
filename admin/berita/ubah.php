<?php

include "koneksi.php";

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id'");
$ubah = mysqli_fetch_array($query);

?>



<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Berita</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="?page=data-berita">Berita</a></li>

                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Data Berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="berita/proses_tambah.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_berita" value="<?= $ubah['id_berita'] ?>">
                                <div class="form-group">
                                    <label for="">Pilih Kategori</label>
                                    <select name="id" id="" class="form-control form-group" required>
                                        <option value="">PILIH</option>
                                        <?php
                                        include 'koneksi.php';

                                        $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($kategori = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?= $kategori['id_kategori'] ?>" <?= $kategori['id_kategori'] == $ubah['id_kategori'] ? 'selected' : '' ?>>
                                                <?= $kategori['nama_kategori'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control input-default " value="<?php print $ubah['judul_berita'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Berita</label>
                                    <input type="date" name="tanggal" class="form-control input-default" style="width: 200px;" value="<?= $ubah['tanggal_berita'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Berita</label>
                                    <textarea class="form-control" name="isi" id="" cols="30" rows="10"><?= $ubah['judul_berita'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Gambar Berita</label><br>
                                    <img src="berita/images/<?= $ubah['gambar berita'] ?>" alt="" width="100px;"> <img src="berita/images/<?= $ubah['gambar_berita'] ?>" width="100px" alt="gmbr"><br>
                                    <input type="hidden" name="gambar_lama" value="<?= $ubah['gambar_berita'] ?>"><br>

                                    <input type="file" name="gambar_berita" value="<?= $ubah['gambar_berita'] ?>">

                                </div>
                        </div>
                        <button class="btn btn-primary fa fa-save" type="submit"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
</head>

<body>
    <form action="proses_ubah.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_berita" value="<?= $ubah['id_berita'] ?>">



        <label for="">Judul</label>
        <input type="text" name="judul" value="<?= $ubah['judul_berita'] ?>" required><br><br>

        <label for="">Tanggal</label>
        <input type="date" name="tanggal" value="<?= $ubah['tanggal_berita'] ?>" required><br><br>

        <label for="">isi</label>
        <input type="text" name="isi" value="<?= $ubah['isi_berita'] ?>" required> <br> <br>

        <label for="">Gambar Berita</label><br>
        <img src="images/<?= $ubah['gambar_berita'] ?>" width="100px" alt="">
        <input type="hidden" name="gambar_lama" value="<?= $ubah['gambar_berita'] ?>"><br>
        <input type="file" name="gambar_berita" value="<?= $ubah['gambar_berita'] ?>"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>