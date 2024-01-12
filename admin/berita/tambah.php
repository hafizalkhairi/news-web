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
                    <li class="breadcrumb-item"><a href="../home/index.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="../berita/index.php">Berita</a></li>
                    <li class="breadcrumb-item active"><a href="../berita/tambah.php">Tambah Berita</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Data Berita</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="berita/proses_tambah.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Pilih Kategori</label>
                                    <select name="id" id="" class="form-control form-group">
                                        <option value="" selected>Pilih kategori</option>
                                        <?php
                                        include 'koneksi.php';

                                        $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($kategori = mysqli_fetch_array($query)) {
                                            print "
                                            <option value='$kategori[id_kategori]'>$kategori[nama_kategori]</option>
                                            ";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Judul</label>
                                    <input type="text" name="judul" class="form-control input-default " placeholder="Judul Berita" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Berita</label>
                                    <input type="date" name="tanggal" class="form-control input-default" style="width: 200px;" placeholder="Judul Berita" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Isi Berita</label>
                                    <textarea class="form-control" name="isi" id="editor" cols="30" rows="10" placeholder="Isi Berita"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="gambar_berita" class="custom-file-input">
                                        <label class="custom-file-label" style="width: 250px;">Choose file</label>
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