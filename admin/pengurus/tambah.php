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
                    <li class="breadcrumb-item active"><a href="../kategori/tambah.php">Tambah Pengurus</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Data Pengurus</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="pengurus/proses_tambah.php" method="post" enctype="multipart/form-data">
                                <div class=" form-group">
                                    <label for="">Nama Pengurus</label>
                                    <input name="nama_lengkap" type="text" class="form-control input-default " placeholder="Nama Pengurus">
                                </div>
                                <div class=" form-group">
                                    <label for="">Jabatan</label>
                                    <input name="jabatan" type="text" class="form-control input-default " placeholder="Jabatan">
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="foto_pengurus" class="custom-file-input">
                                            <label class="custom-file-label" style="width: 250px;">Choose file</label>
                                        </div>
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