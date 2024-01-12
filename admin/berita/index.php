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
                    <li class="breadcrumb-item active"><a href="?page=">Berita</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Data Berita</h4>
                    </div>
                    <div class="card-body ">
                        <a href="?page=berita/tambah" type="button" class="btn cbtn-rounded btn-primary mb-3"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-info"></i>
                            </span>Tambah Data Berita
                        </a>
                        <section class="container ">
                            <form action="" method="post" id="myForm">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Dari</label>
                                            <input type="date" name="dari" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sampai</label>
                                            <input type="date" name="sampai" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for=""></label><br>
                                            <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                                            <label for=""></label><br><br>
                                            <button onclick="cetak()" type="button" class="btn btn-primary"><i class="fa fa-print"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </section>
                        <script>
                            function cetak() {
                                $('#myForm').attr('action', 'berita/print.php');
                                $('#myForm').attr('target', '_blank');
                                $('#myForm').submit();
                            }
                        </script>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="example" style="min-width: 845px">
                                <thead>
                                    <thead>
                                        <th>No</th>
                                        <th>Nama kategori</th>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Isi Berita</th>
                                        <th>Gambar</th>
                                        <th style="width: 150px;">Aksi</th>
                                    </thead>
                                </thead>

                                <?php

                                include 'koneksi.php';
                                $no = 1;

                                if (isset($_POST['filter'])) {

                                    $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita 
                                JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori
                                WHERE tanggal_berita BETWEEN '$_POST[dari]' AND '$_POST[sampai]'
                                ORDER BY id_berita DESC");
                                } else {
                                    $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_berita 
                                JOIN kategori ON tb_berita.id_kategori=kategori.id_kategori
                                ORDER BY id_berita DESC");
                                }
                                while ($tampil = mysqli_fetch_array($ambildata)) {
                                    print "
                                <tr style = 'text-align: center'>
                                    <td>$no</td>
                                    <td>$tampil[nama_kategori]</td>
                                    <td>$tampil[judul_berita]</td>
                                    <td>$tampil[tanggal_berita]</td>
                                    <td >$tampil[isi_berita]</td>
                                    
                                    <td ><img style = 'width: 150px' alt='gmbr' src='/images/$tampil[gambar_berita]'></td>
                                    <td><a class='btn btn-success fa fa-edit' href='?page=berita/ubah&kode=$tampil[id_berita]'></a>
                                        <a class='btn btn-danger fa fa-trash' href='?page=berita/hapus&id_berita=$tampil[id_berita]'></a>
                                    </td>
                                </tr>";
                                    $no++;
                                }
                                ?>


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