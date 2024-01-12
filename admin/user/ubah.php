<?php
include 'koneksi.php';

$id = $_GET['kode'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user=$id");
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
                            <form action="user/proses_ubah.php" method="post">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="username" type="text" class="form-control input-default " value="<?= $data['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="text" class="form-control input-default " value="<?= $data['password'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input name="nama_lengkap" type="text" class="form-control input-default " value="<?= $data['nama_lengkap'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Pilih Level</label>
                                    <select name="id" id="" class="form-control form-group" required>

                                        <option value=""><?= $data['level'] ?></option>
                                        <option value="">Admin</option>
                                        <option value="">Author</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary fa fa-save mt-3" type="submit"> Simpan</button>
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