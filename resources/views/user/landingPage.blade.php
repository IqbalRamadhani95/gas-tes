<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-yellow fixed-top">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="./images/logo.png" width="60"
                        alt="MDB Logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang GAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#daftar">Daftar</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#karir">Karir</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <button class="btn btn-mitra">
                    masuk mitra
                </button>

            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="hero">
        <div class="hero-mask">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="position: relative">
                        <div class="caption-kiri">
                            <h1>Bergabung dengan GAS</h1>
                            <p>Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Daftarkan tokomu
                                dan nikmati keuntungan bersama GAS!</p>
                            <button class="btn btn-unduh">Unduh Sekarang</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="caption-kanan text-center">
                            <img src="./images/hero.png" class="img-hero" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="tentang" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>GAS adalah aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Melalui gerakan #AyoBelanjaTokoTetangga GAS mengajak untuk menjelajah dan mendukung usaha-usaha di sekitarmu.</h3>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </section>

    <section class="fitur" id="fitur">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="fitur-kiri">
                        <h2>Ayo Nikmati Beragam Fitur GAS dan Kembangkan Usahamu Jadi Toko Online</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide text-center">
                            <img src="./images/fitur.png" alt="">
                          </div>
                          <div class="swiper-slide text-center">
                            <img src="./images/fitur.png" alt="">
                          </div>
                          <div class="swiper-slide text-center">
                            <img src="./images/fitur.png" alt="">
                          </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="daftar text-center" id="daftar">
        <div class="mask-daftar">
            <h3 class="mb-5">Apa pun jenis tokomu bisa bergabung bersama GAS</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/VxVWACx9NIY" title="#BerjalanBersamaGAS - Apa pun Tokomu Dapat Bergabung Bersama GAS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </section>

    <section class="karir" id="karir">
        <div class="container">
            <h3 class="text-center">Temukan Karier Impianmu</h3>
            <p class="text-center">Mari bergabung bersama kami. Jadilah bagian dari kami dan kembangkan bakat, kreatifmu
                di GAS
            </p>
            <div class="row ms-5 me-5 mt-5 g-5">
                <div class="col-md-6">
                    <div>
                        <div class="d-flex mt-4">
                            <img src="./images/karir.png" class="img-karir" alt="">
                            <div class="ps-3">
                                <h4 style="color: yellow">Marketing Communication</h4>
                                <p>Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran
                                    langsung.</p>
                            </div>
                        </div>
                        <div style="position: relative">
                            <button class="btn btn-baca">
                                Baca selengkapnya
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex mt-4">
                            <img src="./images/karir.png" class="img-karir" alt="">
                            <div class="ps-3">
                                <h4 style="color: yellow">Marketing Communication</h4>
                                <p>Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran
                                    langsung.</p>
                            </div>
                        </div>
                        <div style="position: relative">
                            <button class="btn btn-baca">
                                Baca selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="d-flex">
                            <img src="./images/karir.png" class="img-karir" alt="">
                            <div class="ps-3">
                                <h4 style="color: yellow">Marketing Communication</h4>
                                <p>Merancang strategi komunikasi pemasaran mulai dari branding, iklan dan pemasaran
                                    langsung.</p>
                            </div>
                        </div>
                        <button class="btn btn-baca">
                            Baca selengkapnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-yellow">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Form -->
            <section class="">
                <form action="">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center g-5">
                        <!--Grid column-->
                        <div class="col-auto">
                           <img src="./images/logo.png" style="width: 100px" alt="">
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <h4>Tentang GAS</h4>
                            <P>Terms and Conditions
                                Privacy</P>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <h4>Hubungi kami</h4>
                            <a href="/kritik" style="text-decoration: none;">Kritik & saran</a>
                        </div>
                        <div class="col-auto">
                            <!-- Submit button -->
                            <h4>Hubungi kami</h4>
                            <div class="d-flex">
                                <i class="fab fa-facebook"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mb-4">
                                Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
            </section>
            <!-- Section: Form -->
        </div>
        <!-- Grid container -->

    </footer>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 0,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      </script>
</body>

</html>
