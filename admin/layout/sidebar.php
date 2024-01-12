<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <?php if ($_SESSION['level'] == 'admin') : ?>
                <li class="nav-label first">Main Menu</li>
                <li><a href="./" aria-expanded="false"><i class="fa fa-home"></i><span class="nav-text">Home</span></a></li>
                <li><a href="?page=kategori/index" aria-expanded="false"><i class="fa fa-list"></i><span class="nav-text">Kategori</span></a></li>
                <li><a href="?page=berita/index" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="nav-text">Berita</span></a></li>
                <li><a href="?page=pengurus/index" aria-expanded="false"><i class="fa fa-users"></i><span class="nav-text">Pengurus</span></a></li>
                <li><a href="?page=user/index" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-text">User</span></a></li>
            <?php else : ?>
                <script>
                    window.location.href = "../landing_page";
                </script>
            <?php endif; ?>
        </ul>
    </div>


</div>
<!--**********************************
            Sidebar end
        ***********************************-->