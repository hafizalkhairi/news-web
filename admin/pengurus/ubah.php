<?php

include "koneksi.php";

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengurus WHERE id_pengurus='$id'");
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
                    <span class="ml-1">Pengurus</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../home/index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="../kategori/index.php">Pengurus</a></li>
                    <li class="breadcrumb-item active"><a href="../kategori/tambah.php">Ubah Pengurus</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Data Pengurus</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="pengurus/proses_ubah.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_pengurus" value="<?= $ubah['id_pengurus'] ?>">
                                <div class=" form-group">
                                    <label for="">Nama Pengurus</label>
                                    <input name="nama_lengkap" type="text" class="form-control input-default" value="<?= $ubah['nama_lengkap'] ?>">
                                </div>
                                <div class=" form-group">
                                    <label for="">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control input-default " value="<?= $ubah['jabatan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label><br>
                                    <img src="pengurus/images/<?= $ubah['foto'] ?>" alt="" width="100px;">
                                    <input type="hidden" name="foto_lama" value="<?= $ubah['foto'] ?>">
                                    <input type="file" name="foto" id="" value="<?= $ubah['foto'] ?>">
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