@extends('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kajian Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>


@section('content')

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
                        <a class="nav-link  text-light fw-bold me-5" aria-current="page" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold me-5 active" href="kajian">Kajian</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control-sm me-2 small-placeholder" type="search" placeholder="Search"
                        aria-label="Search">
                    <img src="assets/img/search.png" alt="" class="me-3" width="30px" height="30px">
                </form>

                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle btn-login" type="button" id="dropdownMenu2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Aisa Selvira
                        <img src="assets/img/account-profile.png" alt="" width="30px" height="30px">
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <button class="dropdown-item" type="button">
                                <span class="fs-14">Account</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person-check icon-akun" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                    <path
                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">
                                <span class="fs-14">Profile</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-person icon-profile" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item" type="button">
                                <span class="fs-14">Log Out</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
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
            </div>
        </div>
    </nav>

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
                                    <img src="assets/img/kajian/kajian-hero.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 text-light mt-2 detail">
                                <div class="title">Muktamar Muhammadiyah</div>
                                <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                                <div class="subtitle">Monday | October 17, 2022</div>
                                <div class="subtitle"><img src="assets/img/clock-putih.png" alt="" class="me-3">07.30
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
                                    <img src="assets/img/kajian/kajian-hero.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-6 text-light mt-2 detail">
                                <div class="title">Muktamar Muhammadiyah</div>
                                <div class="subtitle">Drs. H. Marpuji Ali, M.SI </div>
                                <div class="subtitle">Monday | October 17, 2022</div>
                                <div class="subtitle"><img src="assets/img/clock-putih.png" alt="" class="me-3">07.30
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
                        <img src="assets/img/kajian/kajian1.png" alt="" class="img-fluid">
                        <div class="overlay">
                            <button class="btn btn-info btn-poster">Kajian Umum</button>
                            <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                            <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-container">
                        <img src="assets/img/kajian/kajian1.png" alt="" class="img-fluid">
                        <div class="overlay">
                            <button class="btn btn-info btn-poster">Kajian Umum</button>
                            <div class="title">Pengajian BPH, Dosen dan Pegawai Universitas Muhammadiyah Kudus</div>
                            <div class="subtitle">20 December, 2021 | By Annisa Urohmah</div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="image-container">
                        <img src="assets/img/kajian/kajian1.png" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                            <img src="assets/img/kajian/highest.png" alt="" class="img-fluid">
                        </div>

                        <div class="bungkus">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="nama-setor">Aisa Selvira</div>
                                        <div class="jumlah">40 post</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"><img src="assets/img/account-profile.png" alt=""></div>
                                    <div class="col-md-9">
                                        <div class="nama-setor">Aisa Selvira</div>
                                        <div class="jumlah">40 post</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"><img src="assets/img/account-profile.png" alt=""></div>
                                    <div class="col-md-9">
                                        <div class="nama-setor">Aisa Selvira</div>
                                        <div class="jumlah">40 post</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3"><img src="assets/img/account-profile.png" alt=""></div>
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
                                <img src="assets/img/icon/fb.png" alt="">
                                <img src="assets/img/icon/twt.png" alt="">
                                <img src="assets/img/icon/google.png" alt="">
                                <img src="assets/img/icon/yt.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection