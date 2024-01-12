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
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Data Kategori</h4>
                    </div>
                    <div class="card-body">
                        <a href="?page=kategori/tambah" type="button" class="btn btn-rounded btn-primary mb-3"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-info"></i>
                            </span>Tambah Data Kategori
                        </a>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="example" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <?php
                                include 'koneksi.php';

                                $no = 1;
                                $ambildata = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                while ($data = mysqli_fetch_array($ambildata)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama_kategori'] ?></td>
                                            <td>
                                                <a class='btn btn-success fa fa-edit' href='?page=kategori/ubah&kode=<?= $data['id_kategori'] ?>'></a>
                                                <a class='btn btn-danger fa fa-trash' href='?page=kategori/hapus&kode=<?= $data['id_kategori'] ?>' onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            </table>
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