<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">kesbang@cimahikota.go.id</a>
                <i class="icofont-phone"></i> (022) 6631859
                <i class="icofont-google-map"></i> Jl. Rd. Demang Hardjakusumah Blok Jati Cihanjuang Cimahi 40513 Jawa Barat
            </div>
            <!-- <div class="social-links">
                <img src="assets/img/apple-touch-icon.png" width="40px" height="40px">
            </div> -->
        </div>

    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo mr-auto">
                <!-- <img src="assets/img/cimahi-logo.png" width="50px" height="60px"> -->
                <a href="#"> KESBANGPOL</a>
            </h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block" id="navbar">
                <ul>
                    <li><a href="<?= site_url('home') ?>">Beranda</a></li>
                    <li class="drop-down"><a href="#navbar">Profil</a>
                        <ul>
                            <a href="<?= site_url('home') ?>#visimisi">Visi Misi</a>
                            <a href="<?= site_url('home/tugas_fungsi') ?>">Tugas dan Fungsi</a>
                            <a href="<?= site_url('home/struktur_org') ?>">Struktur Organisasi</a>
                            <a href="<?= site_url('home/profil_pegawai') ?>">Profil Pegawai</a>
                        </ul>
                    </li>
                    <li ><a href="<?= site_url('home/galeri') ?>">Galeri</a></li>
                    <li class="drop-down"><a href="#navbar">Informasi</a>
                        <ul>
                            <li><a href="<?= site_url('home/jadwal_pelayanan') ?>">Jadwal Pelayanan</a></li>
                            <li><a href="<?= site_url('home/sop') ?>">Standar Operasional Prosedur (SOP)</a></li>
                            <!-- <li><a href="<?= site_url('home') ?>#lokasi">Lokasi</a></li> -->
                        </ul>
                    </li>
                    <li class="<?= (current_url() == site_url('home/credits')) ? 'active' : '' ?>"><a href="<?= site_url('home/credits') ?>">Credits</a></li>


                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->