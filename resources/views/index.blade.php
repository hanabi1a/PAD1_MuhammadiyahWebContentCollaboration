<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8" /> <meta name="viewport" content="width=device-width,
    initial-scale=1.0" /> <title>Home Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light p-3">
        <div class="container">
            <a class="navbar-brand text-light" href="#">
                <img src="assets/img/logo.png" alt="" class="logo-navbar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold me-5" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5" href="kajian">Kajian</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control-sm me-2 small-placeholder" type="search" placeholder="Search"
                        aria-label="Search">
                    <img src="assets/img/search.png" alt="" class="me-3" width="30px" height="30px">
                </form>

                <div class="d-flex akun">
                    <button class="sign-up me-3 fw-bolder" type="submit">
                        Sign Up
                    </button>
                    <button class="sign-in fw-bolder me-3" type="submit">
                        Sign In
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section id="hero-about">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slider/slider-home1.png" alt="Slide 1" class="img-hero-about">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/slider-home2.png" alt="Slide 2" class="img-hero-about">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slider/slider-home3.png" alt="Slide 3" class="img-hero-about">
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

    <section id="tokoh">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 order-md-2 order2">
                    <h1 class="title fw-bold">Kiai Ahmad Dahlan</h1>
                    <p class="subtitle">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912,
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum),
                        Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H.
                        Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih. Jelang KH Ahmad Dahlan wafat di usia 54
                        tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa
                        daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan. Hingga tahun 1922
                        Muhammadiyah telah memiliki 15 Cabang di seluruh Indonesia. Pimpinan Pusat (hoofdbestuur)
                        Muhammadiyah sendiri mengurusi 1.230 anggota resmi yang di daerahnya belum memiliki cabang.
                        Sebelum wafat, KH. Ahmad Dahlan tetap bergerak aktif mendakwahkan Islam dan Muhammadiyah.
                        Sejarah Kebangkitan Nasional Daerah Jawa Tengah (1977) mencatat secara lengkap agenda dakwah
                        pendiri Muhammadiyah pada tahun 1922.
                    </p>
                </div>
                <div class="col-md-4 order-md-1 order1">
                    <img src="assets/img/tokoh/ahmadDahlan.jpg" alt="" class="container-fluid">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-5 order-md-1 order2">
                    <h1 class="title fw-bold">Hilman Latief, Figur Kader Muda di Jajaran PP Muhammadiyah
                        Periode 2022-2027</h1>
                    <p class="subtitle">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Muktamar Muhammadiyah ke-48 di Surakarta 18-20 November 2022
                        berakhir dengan keluarnya hasil sidang terkait 13 nama anggota Pimpinan Pusat Muhammadiyah masa
                        bakti 2022-2027.

                    <div class="button text-light">
                        View More
                    </div>
                    </p>
                </div>
                <div class="col-md-7 order-md-2 order1">
                    <img src="assets/img/tokoh/hilman.png" alt="" class="container-fluid">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 order-md-2 order2">
                    <h1 class="title fw-bold mb-5">Mengenal Syamsul Anwar, Pakar Hukum Islam dari Riau</h1>
                    <p class="subtitle">
                        MUHAMMADIYAH.OR.ID, YOGYAKARTA—Setelah berkali-kali menolak, Syamsul Anwar akhirnya menjadi
                        salah satu anggota Pimpinan Pusat Muhammadiyah periode 2022-2027. Padahal, sejak tahun 1985
                        hingga saat ini, ia aktif di Majelis Tarjih dari level wilayah hingga pusat.

                    <div class="button text-light">
                        View More
                    </div>
                    </p>
                </div>
                <div class="col-md-6 order-md-1 order1">
                    <img src="assets/img/tokoh/hilman.png" alt="" class="container-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="kajian-home">
        <h1 class="title mb-3">Kajian Terkini</h1>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                    <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                    <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                    <div class="button text-light">
                        View More
                    </div>
                </div>

                <div class="col-lg-4">
                    <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                    <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                    <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                    <div class="button text-light">
                        View More
                    </div>
                </div>

                <div class="col-lg-4">
                    <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                    <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                    <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                    <div class="button text-light">
                        View More
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col">
                    <center>
                        <img src="assets/img/icon/home.svg" alt="" width="45px" height="45px">
                    </center>
                    <div class="contact-title mb-3">Kantor</div>
                    <div class="contact-subtitle">Yogyakarta: Jalan Cik Ditiro 23 <br> Yogyakarta 55262</div>
                    <div class="contact-subtitle">Jakarta: Jalan Menteng Raya No. 62 <br> Jakarta 10340</div>
                </div>

                <div class="col">
                    <center>
                        <img src="assets/img/icon/email.svg" alt="" width="45px" height="45px">
                    </center>
                    <div class="contact-title mb-3">Email</div>
                    <a href="">
                        <div class="contact-subtitle">redaksi@muhammadiyah.id</div>
                    </a>
                </div>

                <div class="col">
                    <center>
                        <img src="assets/img/icon/phone.svg" alt="" width="45px" height="45px">
                    </center>
                    <div class="contact-title mb-3">Telp/Fax</div>
                    <div class="contact-subtitle">Telpon : 0274 553132 Ext 300 <br> Fax : 0274 553134</div>
                    <div class="contact-subtitle">Telepon : +62 21 3903021 <br>
                        Fax : +62 21 3903024</div>
                </div>
            </div>
        </div>
    </section>


    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>