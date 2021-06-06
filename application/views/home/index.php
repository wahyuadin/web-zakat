<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $judul; ?></title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/home/') ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/home/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/home/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/home/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/home/') ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets/home/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/home/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/home/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/home/') ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name:  - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url('assets/home/') ?>img/logo.png" alt="">
                <span>FlexStart</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('login'); ?>">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">APLIKASI PEMBELAJARAN MENGENAI E ZAKAT BERBASIS ANDROID
                    </h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Web ini berjutuan untuk menyelesaikan Ujian Akhir Semester Pemograman Web</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Selengkapnya</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url('assets/home/') ?>img/hero-img.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Who We Are</h3>
                            <h2> Pengertian Zakat , Dan Doa </h2>
                            <p>
                                Zakat adalah terbagi menjadi dua, yakni zakat mal atau zakat harta dan kemudian zakat fitrah (macam macam zakat).
                                1.Zakat mal atau mal zakat adalah zakat yang dikenakan atas segala jenis harta, yang secara zat maupun substansi perolehannya, tidak bertentangan dengan ketentuan agama. Sebagai contoh, zakat mal terdiri atas uang, emas, surat berharga, penghasilan profesi, dan sebagainya
                                (bacaan niat zakat mal "Nawaitu an ukhrija zakatadz dzahabi/zakatal fidhdhati/zakatal mali’an nafsi fardan lillahi ta’ala"
                                Artinya : “Saya berniat mengeluarkan zakat berupa emas/perak/harta dari diri sendiri karena Allah Ta’ala.”)
                                2.Zakat fitrah ini dibayarkan setahun sekali saat Bulan Ramadan. Di Indonesia, pembayaran zakat fitrah biasanya dilakukan menjelang mendekati Hari Raya Idul Fitri (Bacaan Niat Zakat Fitrah "Nawaytu an ukhrija zakaata al-fitri ‘an nafsi fardhan lillahi ta’ala"
                                Artinya: "Aku niat mengeluarkan zakat fitrah untuk diriku sendiri fardhu karena Allah Taala.")
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url('assets/home/') ?>img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Values Section ======= -->
        <section id="values" class="values">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Prodi Teknik Informatika</h2>
                    <p>Universitas Buna Perjuangan Karawang</p>
                    <h1>Jalan Ronggo Waluyo Sirnabaya, Puseurjaya, Kec. Telukjambe Tim., Kabupaten Karawang, Jawa Barat 41361</h1>
                </header>


                <!-- ======= Features Section ======= -->
                <section id="features" class="features">

                    <div class="container" data-aos="fade-up">


                    </div> <!-- / row -->

                    <!-- Feature Tabs -->


                    <!-- Feature Icons -->
                    <div class="row feature-icons" data-aos="fade-up">
                        <h3>Dosen Pengampu Final Project</h3>

                        <div class="row">

                            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                                <img src="<?= base_url('assets/home/') ?>img/features-3.png" class="img-fluid p-4" alt="">
                            </div>

                            <div class="col-xl-8 d-flex content">
                                <div class="row align-self-center gy-4">

                                    <div class="col-md-6 icon-box" data-aos="fade-up">
                                        <i class="ri-line-chart-line"></i>
                                        <div>
                                            <h4>Adi Rizky Pratama, M. Kom (Perancangan Basis Data)
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                        <i class="ri-stack-line"></i>
                                        <div>
                                            <h4>Ayu Ratna J, M. Kom (Rekayasa Perangkat Lunak)
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                        <i class="ri-brush-4-line"></i>
                                        <div>
                                            <h4>Cici Emilia, M. Kom (Pemrograman Web Framework)
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                        <i class="ri-magic-line"></i>
                                        <div>
                                            <h4>Gugy Guztaman, M. Kom (Mobile Programming)
                                            </h4>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>

                    </div><!-- End Feature Icons -->

            </div>

        </section><!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <p>Nama kelompok 22 </p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-box blue">
                            <i class="ri-discuss-line icon"></i>
                            <h3>1</h3>
                            <p>Ariel Kholid Ismail_19416255201176_IF19A</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-box orange">
                            <i class="ri-discuss-line icon"></i>
                            <h3>2</h3>
                            <p>Syahid Maulana Syaefudi_19416255201109_IF19D</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-box green">
                            <i class="ri-discuss-line icon"></i>
                            <h3>3</h3>
                            <p>Bima Cakra Wijaya_19416255201196_IF19E</p>
                        </div>
                    </div>


        </section><!-- End Services Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">


                </footer><!-- End Footer -->

                <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

                <!-- Vendor JS Files -->
                <script src="<?= base_url('assets/home/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/aos/aos.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/php-email-form/validate.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/swiper/swiper-bundle.min.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/purecounter/purecounter.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
                <script src="<?= base_url('assets/home/') ?>vendor/glightbox/js/glightbox.min.js"></script>

                <!-- Template Main JS File -->
                <script src="<?= base_url('assets/home/') ?>js/main.js"></script>

</body>

</html>