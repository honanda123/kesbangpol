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
                <a href="home"> KESBANGPOL</a>
            </h1>

            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="nav-menu d-none d-lg-block" id="navbar">
                <ul>
                    <li class="active"><a href="<?= site_url('home') ?>">Beranda</a></li>
                    <li class="drop-down"><a href="#navbar">Profil</a>
                        <ul>
                            <a href="#visimisi">Visi Misi</a>
                            <a href="<?= site_url('home/tugas_fungsi') ?>">Tugas dan Fungsi</a>
                            <a href="<?php echo base_url(); ?>home/struktur_org">Struktur Organisasi</a>
                            <a href="<?= site_url('home/profil_pegawai') ?>">Profil Pegawai</a>
                        </ul>
                    </li>
                    <li><a href="<?= site_url('home/galeri') ?>">Galeri</a></li>

                    <li class="drop-down"><a href="#navbar">Informasi</a>
                        <ul>
                            <li><a href="<?= site_url('home/jadwal_pelayanan') ?>">Jadwal Pelayanan</a></li>
                            <li><a href="<?= site_url('home/sop') ?>">Standar Operasional Prosedur (SOP)</a></li>
                            <!-- <li><a href="#lokasi">Lokasi</a></li> -->
                        </ul>
                    </li>
                    <li><a href="<?= site_url('Home/credits') ?>">Credits</a></li>


                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <!-- <h1>Badan Kesatuan Bangsa </h1> -->
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="content">
                            <div class="col text-center">
                                <img src="assets/img/cimahi-logo.png" width="200px" height="200px">
                                <h5>Badan Kesatuan Bangsa dan Politik <br>Kota Cimahi</h5>
                            </div>
                            <div class="col">
                                <br>
                                <p>
                                    Kantor Kesatuan Bangsa Kota Cimahi, merupakan salah satu lembaga teknis yang mempunyai tugas pokok membantu Walikota dalam merumuskan,
                                    menyelenggarakan, membina, mengevaluasi, dan menyusun pelaksanaan kebijakan daerah dalam bidang kesatuan bangsa, pengkajian strategis daerah dan hubungan antar lembaga.
                                </p>
                            </div>
                            <!-- <div class="text-center">
                            <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div> -->
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" id="visimisi">
                        <h3>Visi Misi</h3>
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-glasses"></i></div>
                            <h4 class="title"><a href="">Visi</a></h4>
                            <p class="description">Mewujudkan Cimahi Baru yang Maju, Agamis dan Berbudaya</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-pencil"></i></div>
                            <h4 class="title"><a href="">Misi</a></h4>
                            <p class="description">Meningkatkan penyelenggaraan pemerintahan yang amanah, profesional, efektif, efisien dan ekonomis yang berbasis pada sistem penganggaran yang pro public.</p>
                            <p class="description">Peningkatan kapasitas pemerintahan dan pemberdayaan masyarakat secara berkesinambungan dan berkelanjutan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->



        <section class="pt-5 pb-5">
            <div class="container">
                <div class="section-title">
                    <h2>Pegawai</h2>
                    <p>Data Pegawai Kantor Kesatuan Bangsa dan Politik Kota Cimahi</p>
                </div>

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                    <div class="col-6" style="float: center;">
                        <a class="btn btn-primary mb-3 mr-1" href="#multi-item-example" role="button" data-slide="prev">
                            < </a>
                                <a class="btn btn-primary mb-3 " href="#multi-item-example" role="button" data-slide="next">
                                    >
                                </a>
                    </div>

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>

                    </ol>
                    <!--/.Indicators-->


                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="item active">
                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="assets/img/pegawai/pa_mardi.png" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 class="card-title">Mardi Santoso, S.Sos.</h4>
                                                <p class="card-text">Kepala Kantor Kesatuan Bangsa</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top" src="assets/img/pegawai/bu-putri.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h4 class="card-title">Putri Cahyaningati, S.H.</h4>
                                                <p class="card-text">Kepala Sub Bagian Tata Usaha</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="assets/img/pegawai/pa-yuyus.png" alt="Card image cap">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <h4 class="card-title">Yuyus Supriatna, S.AP., M.M.</h4>
                                                    <p class="card-text">Kepala Seksi Hubungan Antar Lembaga</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="assets/img/pegawai/bu-yanti.png" alt="Card image cap">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <h4 class="card-title">R. Ramayanti, S.IP.</h4>
                                                    <p class="card-text">Kepala Seksi Kesatuan Bangsa</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="assets/img/pegawai/pa-lukman.png" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="card-title">Agus Lukman Hadiansyah, S.AP.</h4>
                                            <p class="card-text">Kepala Seksi Pengkajian Strategis Daerah</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/pegawai/lilik.png" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="card-title">Lilik Cristiani, S.AB.</h4>
                                            <p class="card-text">Analis Rencana Program dan Kegiatan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/pegawai/pa-gunawan.png" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="card-title">Gunawan, S.Pd.</h4>
                                            <p class="card-text">Analis Sumber Daya Manusia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3" style="float:left">
                                <div class="card mb-2">
                                <img class="card-img-top" src="assets/img/pegawai/bu-niken.png" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <h4 class="card-title">Niken Arwita, A.Md.</h4>
                                            <p class="card-text">Bendahara</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Second slide-->



                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
                <div class="text-center">
                    <br>
                    <a href="<?= site_url('home/profil_pegawai') ?>" class="button btn btn-primary float-center">Lihat Semua</a>
                    <!-- <button type="button" class="btn btn-primary float-center" onclick=" ">Lihat Semua</button> -->
                </div>
            </div>
        </section>


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/penyerahan-kegiatan1.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/penyerahan-kegiatan1.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/visi-misi.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/visi-misi.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_02_19.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_02_19.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_02_25.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_02_25.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_01.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_01.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_02_(1).jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_02_(1).jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_05_(1).jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_05_(1).jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item">
                            <a href="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_07.jpeg" class="venobox" data-gall="gallery-item">
                                <img src="assets/img/kegiatan/WhatsApp_Image_2019-10-29_at_10_03_07.jpeg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <br>
                    <br>
                    <a href="<?= site_url('home/galeri') ?>" class="button btn btn-primary float-center">Lihat Semua</a>
                    <!-- <button type="button" class="btn btn-primary float-center" a href="<?= site_url('home/sop') ?>">Lihat Semua</button> -->
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" id="lokasi">
                    <h2>Lokasi</h2>
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15844.66052409886!2d107.53685462701091!3d-6.870807920557882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e43e4d3ab263%3A0x485bd63d0648c89b!2sKantor%20Pemerintahan%20Kota%20(PEMKOT)%20Cimahi!5e0!3m2!1sid!2sid!4v1631073928090!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
            </div>


        </section><!-- End Contact Section -->

    </main><!-- End #main -->