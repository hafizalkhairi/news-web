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
                    <li class="breadcrumb-item active"><a href="../user/index.php">Kategori</a></li>
                    <li class="breadcrumb-item active"><a href="../user/tambah.php">Tambah User</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="user/proses_tambah.php" method="post">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="username" type="text" class="form-control input-default " placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input name="password" type="password" class="form-control input-default " placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input name="nama_lengkap" type="text" class="form-control input-default " placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group ">
                                    <label>Level</label>
                                    <select name="level" id="inputState" class="form-control">
                                        <option selected>Pilih Level</option>
                                        <option value="admin">Admin</option>
                                        <option value="author">Author</option>
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