@extends('user.layout')
@section('content')

<section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide
            2">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider/slider-homepage-1.png" class="img-carousel img-carousel" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-homepage-2.png" class="img-carousel img-carousel" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-homepage-3.png" class="img-carousel img-carousel" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<div class="container">
    <section id="about">
        <p class="text-center heading2"><strong>Tokoh Muhammadiyah</strong></p>
        <hr class="hr">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 order-md-2">
                    <div class="subtitle">Kiai Ahmad Dahlan</div>
                    <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912,
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum),
                        Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H.
                        Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih. Jelang KH Ahmad Dahlan wafat di usia 54
                        tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa
                        daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan. Hingga tahun 1922
                        Muhammadiyah telah memiliki 15 Cabang di seluruh Indonesia. Pimpinan Pusat (hoofdbestuur)
                        Muhammadiyah sendiri mengurusi 1.230 anggota resmi yang di daerahnya belum memiliki cabang.
                        Sebelum wafat, KH. Ahmad Dahlan tetap bergerak aktif mendakwahkan Islam dan Muhammadiyah.
                    </p>
                </div>
                <div class="col-md-4 order-md-1 me-4">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-7 order-md-1 me-6">
                    <div class="subtitle">Kiai Ahmad Dahlan</div>
                    <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912,
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum),
                        Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H.
                        Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih. Jelang KH Ahmad Dahlan wafat di usia 54
                        tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa
                        daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan. Hingga tahun 1922
                        Muhammadiyah telah memiliki 15 Cabang di seluruh Indonesia. Pimpinan Pusat (hoofdbestuur)
                        Muhammadiyah sendiri mengurusi 1.230 anggota resmi yang di daerahnya belum memiliki cabang.
                        Sebelum wafat, KH. Ahmad Dahlan tetap bergerak aktif mendakwahkan Islam dan Muhammadiyah.
                    </p>
                </div>
                <div class="col-md-4 order-md-2 float-md-right">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <p class="text-center heading2"><strong>Berita Terkini</strong></p>
    <hr class="hr">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 order-md-1">
                <div class="subtitle">Hilman Latief, Figur Kader Muda di Jajaran PP Muhammadiyah Periode 2022-2027
                </div>
                <p class="paragraf">
                    MUHAMMADIYAH.OR.ID, JAKARTA – Muktamar Muhammadiyah ke-48 di Surakarta 18-20 November 2022
                    berakhir dengan keluarnya hasil sidang terkait 13 nama anggota Pimpinan Pusat Muhammadiyah masa
                    bakti 2022-2027.
                </p>
            </div>
            <div class="col-md-7 order-md-2">
                <img src="/assets/img/tokoh/hilman.png" class="img-fluid">
            </div>
        </div>
    </div>

    <section id="kajian-home">
        <p class="text-center heading2"><strong>Tokoh Muhammadiyah</strong></p>
        <hr class="hr">
        <div class="container justify-content-center">
            @include('user.carousel')
        </div>
    </section>

    <section id="kajian-video">
        <p class="text-center heading2"><strong>Video Terkini</strong></p>
        <hr class="hr">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/nuF60TmusIw?si=bfMYdaXP2-s2MqxR"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/AHBl03lNZEc?si=iPuszVPQQ5Je6xdx"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/ClmfzaVPYyQ?si=8dIuuvdlAcjJh4gp"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/hSYcVnuzPMA?si=Y286BQcjjDciOm5t"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection

homepage2
@extends('user.layout2')
@section('content')

<section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide
            2">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">
            </button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider/slider-homepage-1.png" class="img-carousel img-carousel" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-homepage-2.png" class="img-carousel img-carousel" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-homepage-3.png" class="img-carousel img-carousel" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<div class="container">
    <section id="about">
        <p class="text-center heading2"><strong>Tokoh Muhammadiyah</strong></p>
        <hr class="hr">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 order-md-2">
                    <div class="subtitle">Kiai Ahmad Dahlan</div>
                    <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912,
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum),
                        Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H.
                        Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih. Jelang KH Ahmad Dahlan wafat di usia 54
                        tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa
                        daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan. Hingga tahun 1922
                        Muhammadiyah telah memiliki 15 Cabang di seluruh Indonesia. Pimpinan Pusat (hoofdbestuur)
                        Muhammadiyah sendiri mengurusi 1.230 anggota resmi yang di daerahnya belum memiliki cabang.
                        Sebelum wafat, KH. Ahmad Dahlan tetap bergerak aktif mendakwahkan Islam dan Muhammadiyah.
                    </p>
                </div>
                <div class="col-md-4 order-md-1 me-4">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-7 order-md-1 me-6">
                    <div class="subtitle">Kiai Ahmad Dahlan</div>
                    <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912,
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum),
                        Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H.
                        Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih. Jelang KH Ahmad Dahlan wafat di usia 54
                        tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa
                        daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan. Hingga tahun 1922
                        Muhammadiyah telah memiliki 15 Cabang di seluruh Indonesia. Pimpinan Pusat (hoofdbestuur)
                        Muhammadiyah sendiri mengurusi 1.230 anggota resmi yang di daerahnya belum memiliki cabang.
                        Sebelum wafat, KH. Ahmad Dahlan tetap bergerak aktif mendakwahkan Islam dan Muhammadiyah.
                    </p>
                </div>
                <div class="col-md-4 order-md-2 float-md-right">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <p class="text-center heading2"><strong>Berita Terkini</strong></p>
    <hr class="hr">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-5 order-md-1">
                <div class="subtitle">Hilman Latief, Figur Kader Muda di Jajaran PP Muhammadiyah Periode 2022-2027
                </div>
                <p class="paragraf">
                    MUHAMMADIYAH.OR.ID, JAKARTA – Muktamar Muhammadiyah ke-48 di Surakarta 18-20 November 2022
                    berakhir dengan keluarnya hasil sidang terkait 13 nama anggota Pimpinan Pusat Muhammadiyah masa
                    bakti 2022-2027.
                </p>
            </div>
            <div class="col-md-7 order-md-2">
                <img src="/assets/img/tokoh/hilman.png" class="img-fluid">
            </div>
        </div>
    </div>

    <section id="kajian-home">
        <p class="text-center heading2"><strong>Tokoh Muhammadiyah</strong></p>
        <hr class="hr">
        <div class="container">
            @include('user.carousel')
        </div>
    </section>

    <section id="kajian-video">
        <p class="text-center heading2"><strong>Video Terkini</strong></p>
        <hr class="hr">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/nuF60TmusIw?si=bfMYdaXP2-s2MqxR"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/AHBl03lNZEc?si=iPuszVPQQ5Je6xdx"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/ClmfzaVPYyQ?si=8dIuuvdlAcjJh4gp"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6">
                    <iframe width="560" height="240" src="https://www.youtube.com/embed/hSYcVnuzPMA?si=Y286BQcjjDciOm5t"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection

header1
<section class="ftco-section">
    <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="" class="logo-navbar">
            </a>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="fa fa-search"></span></button>
                </div>
            </form>
            <div class="collapse navbar-collapse order-lg-last">
                <div class="d-flex order-lg-last akun">
                    <button class="sign-up me-3 fw-bolder" onclick="window.location.href='{{ route('register') }}'">
                        Sign Up
                    </button>
                    <button class="sign-in fw-bolder me-3" onclick="window.location.href='{{ route('login') }}'">
                        Sign In
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse nvbar" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('homepage') ? 'active' : '' }}"><a href="{{ url('homepage') }}"
                            class="nav-link">Home</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('about') }}"
                            class="nav-link">About</a></li>
                    <li class="nav-item {{ request()->is('kajian') ? 'active' : '' }}"><a href="{{ url('kajian') }}"
                            class="nav-link">Kajian</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
</section>

header2
<section class="ftco-section">
    <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="" class="logo-navbar2">
            </a>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="fa fa-search"></span></button>
                </div>
            </form>
            <div class="dropdown order-lg-last">
                <button class=" btn btn-light dropdown-toggle btn-login" type="button" id="dropdownMenu2"
                    data-bs-toggle="dropdown" aria-expanded="true">
                    Username
                    <img src="/assets/img/account-profile.png" alt="" width="30px" height="30px">
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <li>
                        <button class="dropdown-item logout" type="button">
                            <span class="heading7">Account</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="fas fa-person-check icon-akun" viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                <path
                                    d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button">
                            <span class="heading7">Profile</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person icon-profile" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item logout" type="button">
                            <span class="heading7">Log Out</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person-x icon-logout" viewBox="0 0 16 16">
                                <path
                                    d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse nvbar" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('homepage2') ? 'active' : '' }}"><a
                            href="{{ url('homepage') }}" class="nav-link">Home</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('about') }}"
                            class="nav-link">About</a></li>
                    <li class="nav-item {{ request()->is('kajian2') ? 'active' : '' }}"><a href="{{ url('kajian') }}"
                            class="nav-link">Kajian</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

</section>

kajian
@extends('user.layout')
@section('content')
<section id="kajian-hero">
    <div class="container">
        <div id="kajianCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <button class="button-kajian-hero">View More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <img src="/assets/img/kajiann-1.jpg" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class=" col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <button class="button-kajian-hero">View More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <img src="/assets/img/kajiann-3.png" alt="" class="img-fluid card-kajian-slide me-3">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-4 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <button class="button-kajian-hero">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="control">
                <!-- Controls -->
                <a class="carousel-control-prev" href="#kajianCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#kajianCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="poster">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajiann-2.png" alt="" class="img-fluid img-ov">
                    <div class="overlay">
                        <button class="btn btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<section id="kajian">
    <div class="container">
        <div class="heading2 mb-3 mt-5"><strong>Kajian Terkini</strong></div>
        <hr>
        <div class="row">
            <div class="col-md-9 order-md-1">
                <div class="row mb-3 ">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid img-overlay-kajian">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <button class="button-kajian text-light me-3" onclick="window.location.href='#'">
                                View More
                            </button>
                            <p class="mt-1">Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>


                <!-- Card Video YouTube -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="video-card">
                            <!-- Video Background -->
                            <div class="video-background">
                                <iframe width="540" height="240"
                                    src="https://www.youtube.com/embed/nuF60TmusIw?si=bfMYdaXP2-s2MqxR"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <!-- White Overlay -->
                            <div class="white-overlay">
                                <!-- Social Media Info with Images -->
                                <div class="social-media-info">
                                    <p>Follow us on:</p>
                                    <div class="social-icons">
                                        <img src="/assets/img/facebook-1.png" alt="Facebook"
                                            style="width: 190px; height: 60px;">
                                        <img src="/assets/img/twitter-1.png" alt="Twitter"
                                            style="width: 190px; height: 60px;">
                                        <img src="/assets/img/icon/google.png" alt="Google"
                                            style="width: 60px; height: 60px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-3 order-md-2">
                <div class="card mt-5">
                    <div class="row">
                        <img src="/assets/img/kajian/highest.png" alt="" class="img-fluid">
                    </div>

                    <div class="bungkus">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <center class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </center>
                    </div>

                    <div class="title mt-5">
                        Follow Us :
                        <div class="d-flex justify-content-between mt-3">
                            <img src="/assets/img/icon/fb.png" alt="">
                            <img src="/assets/img/icon/twt.png" alt="">
                            <img src="/assets/img/icon/google.png" alt="">
                            <img src="/assets/img/icon/yt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

kajian2
@extends('user.layout2')
@section('content')
<section id="kajian-hero">
    <div class="container">
        <div id="kajianCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="1"></li>
                <!-- Tambahkan lebih banyak indicator jika Anda memiliki lebih banyak slide -->
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <img src="/assets/img/kajian/kajian-hero.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-2 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <button class="button-kajian-hero">View More</button>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <img src="/assets/img/kajian/kajian-hero.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 text-light mt-2 detail">
                            <div class="title">Muktamar Muhammadiyah</div>
                            <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                            <div class="subtitle">Monday | October 17, 2022</div>
                            <div class="subtitle"><img src="/assets/img/clock-putih.png" alt="" class="me-3">07.30
                                WIB - End</div>
                            <div class="subtitle">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                Muhammadiyah ‘ Aisyiyah ke-48</div>
                            <button class="button-kajian-hero">View More</button>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak slide sesuai kebutuhan Anda -->
            </div>

            <div class="control">
                <!-- Controls -->
                <a class="carousel-control-prev" href="#kajianCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#kajianCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" ariahidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="poster">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajian/kajian1.png" alt="" class="img-fluid">
                    <div class="overlay">
                        <button class="btn btn-info btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajian/kajian1.png" alt="" class="img-fluid">
                    <div class="overlay">
                        <button class="btn btn-info btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="image-container">
                    <img src="/assets/img/kajian/kajian1.png" alt="" class="img-fluid">
                    <div class="overlay">
                        <button class="btn btn-info btn-poster">Kajian Umum</button>
                        <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                        <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<section id="kajian">
    <div class="container">
        <div class="title mb-3 mt-5">Kajian Terkini</div>
        <div class="row">
            <div class="col-md-9 order-md-1">
                <div class="row mb-3 ">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <div class="button-kajian text-light me-3">
                                View More
                            </div>
                            <p>Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <div class="button-kajian text-light me-3">
                                View More
                            </div>
                            <p>Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <div class="button-kajian text-light me-3">
                                View More
                            </div>
                            <p>Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <div class="button-kajian text-light me-3">
                                View More
                            </div>
                            <p>Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 mt-5">
                    <div class="col-md-3">
                        <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <div class="title mb-3 mt-2">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus
                        </div>
                        <ul class="list-unstyled">
                            <li>Narasumber : Prof. Dr. H. M. Dailamy S.P</li>
                            <li>Tema : “Rahasia dibalik kemampuan Muhammadiyah dapat bertahan sampai lebih dari satu
                                abad”</li>
                        </ul>
                        <div class="d-flex mt-3">
                            <div class="button-kajian text-light me-3">
                                View More
                            </div>
                            <p>Monday | December 19, 2022 | By Aisa selvira</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 order-md-2">
                <div class="card mt-5">
                    <div class="row">
                        <img src="/assets/img/kajian/highest.png" alt="" class="img-fluid">
                    </div>

                    <div class="bungkus">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3"><img src="/assets/img/account-profile.png" alt=""></div>
                                <div class="col-md-9">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <center class="mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-chevron-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </center>
                    </div>

                    <div class="title mt-5">
                        Follow Us :
                        <div class="d-flex justify-content-between mt-3">
                            <img src="/assets/img/icon/fb.png" alt="">
                            <img src="/assets/img/icon/twt.png" alt="">
                            <img src="/assets/img/icon/google.png" alt="">
                            <img src="/assets/img/icon/yt.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

layout
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCC</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-homepage.css')}}">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
</head>

<body>
    @include('user.header1')
    @yield('content')
    @include('user.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<!-- JavaScript for handling the logout action -->
<script>
    $(document).ready(function () {
        // Handle logout button click
        $('.dropdown-item.logout').on('click', function () {
            // Perform logout action, for example, redirect to a static logout URL
            window.location.href = "/logout";
        });
    });
</script>

</html>

layout2
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WCC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-homepage.css')}}">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
</head>

<body>
    @include('user.header2')
    @yield('content')
    @include('user.footer')
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js\main.js"></script>
<script src="{{ asset('assets_admin/js/upload/drag-and-drop.js') }}"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


<!-- JavaScript for handling the logout action -->
<script>
    $(document).ready(function () {
        // Handle logout button click
        $('.dropdown-item.logout').on('click', function () {
            // Perform logout action, for example, redirect to a static logout URL
            window.location.href = "/logout";
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(".dropdown").on("click", function (event) {
            // Mencegah default behavior dari anchor tag
            event.preventDefault();

            // Menampilkan atau menyembunyikan dropdown
            $(this).find(".dropdown-menu").toggle();
        });
    });
</script>

</html>


carousel
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/style-carousel.css">
    <link rel="stylesheet" href="css/style-homepage.css">

    <title>Responsive card slider - Bedimcode</title>
</head>

<body>
    <div class="card__container swiper">
        <div class="card__content">
            <div class="swiper-wrapper">
                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajian3.jpg" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif
                                Pendidikan</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajiann-2.png" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Rahasia di Balik Kemampuan Muhammadiyah Dapat Bertahan Sampai
                                Lebih dari
                                Satu Abad</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajiann-3.png" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Muhammadyah Gerakan Amar Ma'ruf Nahi Munkar</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

            </div>
        </div>


        <br><br><br>

        <div class="card__content">
            <div class="swiper-wrapper">
                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajian3.jpg" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif
                                Pendidikan</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajiann-2.png" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Rahasia di Balik Kemampuan Muhammadiyah Dapat Bertahan Sampai
                                Lebih dari
                                Satu Abad</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

                <article class="card__article swiper-slide">
                    <div class="card__image">
                        <img src="assets/img/kajiann-3.png" alt="image" class="card__img" style="width: 100%;">
                        <div class="card__shadow"></div>
                    </div>

                    <div class="card__data">
                        <h3 class="card__judul"><strong>Muhammadyah Gerakan Amar Ma'ruf Nahi Munkar</strong></h3>
                        <p class="card__description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ut dignissimos
                            necessitatibus.
                        </p>

                        <button class="btn btn-view">View More</button>
                    </div>
                </article>

            </div>
        </div>

        <!-- Navigation buttons
        <div class="swiper-button-next">
            <i class="ri-arrow-right-s-line"></i>
        </div>

        <div class="swiper-button-prev">
            <i class="ri-arrow-left-s-line"></i>
        </div> -->

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!--=============== SWIPER JS ===============-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="js/main-carousel.js"></script>
</body>

</html>


profile_user_2
@extends('user.layout2')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <div class="row mb-5 justify-content-center align-items-center">
                        <div class="col-md-2">
                            <img class="user-profile-pp" src="assets_admin\assets\img\mz.png" alt="">
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="nama"><strong>Karthi Madesh</strong></div>
                            <div class="nama">Karthi Madesh Taehyung</div>
                            <div class="nama"><strong>6</strong> Posts</div>
                        </div>
                        <div class="col-md-5 text-end d-flex justify-content-end">
                            <!-- Button Edit Profile without image -->
                            <button class="button-kajian me-6 mt-2" onclick="window.location.href='EditProfileURL'">
                                Edit Profile
                            </button>

                            <!-- Button Create with image -->
                            <div class="btn btn-edit" onclick="window.location.href='form_create_user'">
                                <img src="\assets\img\btn-add.png" alt="Create Icon" width="40">
                                <span class="text-editdownshare">Create</span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="posts col-md-12">
                        <h3 class="heading3">Posts</h3>
                    </div>
                    <div class="row justify-content-center">
                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px; margin-right:25px;">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px; margin-right:25px">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px; margin-right:25px">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px;">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="/assets/img/kajian/kajian.jpg" class="post-img rounded-start "
                                        alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                    <h5 class="heading6"><strong>Muaktamar Muhammadiyah</strong></h5>
                                    <p class="heading7">Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                        Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                        Kudus
                                        ke-24 dan Muktamar</p>
                                </div>
                                <div class="col-md-2">
                                    <div class="card-body">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="your_download_url"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>

                                        <div class="col col-md-4">
                                            <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var maxLength = 200;
        var truncationIndicator = "... <a href='detail_kajian_nv' style='font-size: 10px; color: blue;'>Read More</a>";

        var descElements = document.querySelectorAll('.custom-card .heading7');
        descElements.forEach(function (element) {
            var fullText = element.textContent.trim();
            if (fullText.length > maxLength) {
                var truncatedText = fullText.substring(0, maxLength - truncationIndicator.length) + truncationIndicator;
                element.innerHTML = truncatedText;
            }
        });
    });
</script>
@endsection