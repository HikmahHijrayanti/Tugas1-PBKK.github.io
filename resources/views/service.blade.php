<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LifeSure - Life Insurance Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <img class="img-fluid me-3" src="img/logo.jpeg" alt="Logo" style="max-height: 40px;">
                    <h1 class="text-primary m-0">Al-Hadid</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/service" class="nav-item nav-link">Services</a>
                    </div>
                    <div class="nav-btn px-3">
                        <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a
                            Quote</a>
                    </div>
                </div>
        </div>

        </nav>
    </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Services</h4>
                <h1 class="display-4 mb-4">We Provide Best Services</h1>
                <p class="mb-0">Melalui situs web ini, kami berharap dapat memberikan informasi yang bermanfaat
                    tentang produk-produk kami, layanan yang kami tawarkan, dan nilai-nilai yang kami anut sebagai
                    perusahaan. Kami mengundang Anda untuk menjelajahi berbagai halaman kami, mengetahui lebih lanjut
                    tentang kami, dan menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan.

                    Terima kasih atas kunjungan Anda dan kepercayaan Anda kepada PT Al Hadid Farma BKL. Kami berharap
                    dapat memberikan layanan terbaik untuk mendukung kesehatan dan kesejahteraan Anda.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/konsull2.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-users fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Direct Consultation</a>
                                <p class="mb-4">Layanan ini memungkinkan pelanggan untuk berkonsultasi langsung
                                    dengan apoteker terkait obat yang diresepkan atau dibutuhkan. Apoteker akan
                                    memberikan informasi mengenai dosis, efek samping, interaksi dengan obat lain, serta
                                    petunjuk penggunaan yang tepat.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/konsul1.jpg" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-hospital fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4"> Online Consultation</a>
                                <p> Melalui layanan ini, pelanggan dapat
                                    berkonsultasi dengan apoteker secara daring, baik melalui chat atau
                                    platform lainnya. Layanan ini memudahkan pasien mendapatkan informasi obat
                                    dengan cepat tanpa harus datang langsung ke apotek. Hanya untuk
                                    beberapa wilayah yang terjangkau.
                                </p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-3.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-car fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Deliver Orders</a>
                                <p class="mb-4">Apotek menyediakan layanan pengantaran obat ke wilayah-wilayah
                                    tertentu. Setelah pelanggan memesan obat melalui aplikasi atau telepon, obat akan
                                    diantarkan langsung ke lokasi tujuan, memastikan pasien mendapatkan obat tanpa perlu
                                    keluar rumah, dengan layanan cepat dan aman.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/blog-4.png" class="img-fluid rounded-top w-100" alt="">
                            <div class="service-icon p-3">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                        </div>
                        <div class="service-content p-4">
                            <div class="service-content-inner">
                                <a href="#" class="d-inline-block h4 mb-4">Healthy Check</a>
                                <p class="mb-4">Layanan pemeriksaan kesehatan ini mencakup pengecekan tekanan darah,
                                    kadar gula darah, asam urat, dan parameter kesehatan lainnya. Pasien dapat
                                    memanfaatkan layanan ini di apotek untuk pemantauan kesehatan rutin atau sebagai
                                    bagian dari konsultasi terkait kondisi kesehatan mereka.</p>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid footer py-4 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-4">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="footer-item">
                        <a href="index.html" class="p-0">
                            <h3 class="text-white"><i class="fab fa-slack me-3"></i> Al-Hadid</h3>
                        </a>
                        <p class="text-white mb-4">Terima kasih atas kunjungan Anda dan kepercayaan Anda kepada PT Al
                            Hadid Farma BKL...</p>
                        <div class="footer-btn d-flex">
                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-md-square rounded-circle me-0" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white mb-4">Useful Links</h4>
                        <a href="/index"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="/about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="/service"><i class="fas fa-angle-right me-2"></i> Services</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4 text-white">Instagram</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-1.jpg" data-lightbox="footerInstagram-1"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-2.jpg" data-lightbox="footerInstagram-2"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-3.jpg" data-lightbox="footerInstagram-3"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-4.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-4.jpg" data-lightbox="footerInstagram-4"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-5.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-5.jpg" data-lightbox="footerInstagram-5"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="footer-instagram rounded">
                                    <img src="img/instagram-footer-6.jpg" class="img-fluid w-100" alt="">
                                    <div class="footer-search-icon">
                                        <a href="img/instagram-footer-6.jpg" data-lightbox="footerInstagram-6"
                                            class="my-auto"><i class="fas fa-link text-white"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <small class="text-white">
                        &copy; <a href="#" class="text-white">Al-hadid</a>. All Rights Reserved.
                    </small>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
