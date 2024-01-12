<?php
include 'koneksi.php';

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori=$id");
$data = mysqli_fetch_array($query);

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
                    <span class="ml-1">Kategori</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../home/index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="../kategori/index.php">Kategori</a></li>
                    <li class="breadcrumb-item active"><a href="../kategori/ubah.php">Ubah Kategori</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ubah Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="kategori/proses_ubah.php" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
                                    <input name="nama_kategori" type="text" class="form-control input-default" value="<?= $data['nama_kategori'] ?>">
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