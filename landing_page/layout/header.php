<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="images/hfz.jfif">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/flatpickr.min.css">

    <style>
        .cek {
            border-style: solid;
            border-width: 1px;
        }
    </style>

    <title>Alkhairi News</title>
</head>

<body>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.php" class="logo m-0 float-start">Alkhairi<span class="text-primary">.</span></a>
                        </div>
                        <div class="col-8 text-center">
                            <form action="#" class="search-form d-inline-block d-lg-none">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bi-search"></span>
                            </form>

                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">

                                <li class="has-children">


                                    <a href="category.html">Kategori</a>
                                    <ul class="dropdown">
                                        <?php
                                        include 'koneksi.php';
                                        $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                        while ($data = mysqli_fetch_array($sql)) {

                                        ?>
                                            <li><a href="?page=kategori&kode=<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>

                                <?php
                                include('koneksi.php');
                                $sql = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori DESC");
                                while ($data = mysqli_fetch_array($sql)) {

                                ?>
                                    <li><a class="" href="?page=kategori&kode=<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>