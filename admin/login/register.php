<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Daftar Akun </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Daftarkan Akun Anda</h4>
                                    <form action="proses_tambah.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Nama Lengkap</strong></label>
                                            <input type="text" name="nama_lengkap" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group ">
                                            <label>Level</label>
                                            <select name="level" id="inputState" class="form-control">
                                                <option selected>Pilih Level</option>
                                                <option value="admin">Admin</option>
                                                <option value="author">Author</option>
                                            </select>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Sudah Punya Akun? <a class="text-primary" href="index.php">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="../assets/vendor/global/global.min.js"></script>
    <script src="../assets/js/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>