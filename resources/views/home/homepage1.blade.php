@extends('layouts.layout_user_1')
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
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 order-md-2">
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
                <div class="col-md-4 order-md-1">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid">
                </div>
            </div>

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

            <div class="row">
                <div class="col-md-8 order-md-2">
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
                        Sejarah Kebangkitan Nasional Daerah Jawa Tengah (1977) mencatat secara lengkap agenda dakwah
                        pendiri Muhammadiyah pada tahun 1922.
                    </p>
                </div>
                <div class="col-md-4 order-md-1">
                    <img src="/assets/img/ahmadDahlan.jpg" class="img-fluid" width="400px">
                </div>
            </div>
        </div>
    </section>

    <section id="kajian-home">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="shadow-sm text-center">
                        <img src="/assets/img/kajian3.jpg" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title mt-3">Pengajian Bulanan</div>
                            <p class="card-text">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                            <button class="btn btn-view">View More</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow-sm text-center">
                        <img src="/assets/img/kajian3.jpg" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title mt-3">Pengajian Bulanan</div>
                            <p class="card-text">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                            <button class="btn btn-view">View More</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="shadow-sm text-center">
                        <img src="/assets/img/kajian3.jpg" class="img-fluid">
                        <div class="card-body">
                            <div class="card-title mt-3">Pengajian Bulanan</div>
                            <p class="card-text">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                            <button class="btn btn-view">View More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kajian-home">
        <div class="container">
            @include('components.carousel')
        </div>
    </section>

    <section id="kajian-video">
        <div class="container">
            <div class="text-center title">Video Terbaru</div>
            <div class="row">
                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pQq9eP5OFhw?si=E8iD1iO3-9mgvTsC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

                <div class="col-md-6">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pQq9eP5OFhw?si=E8iD1iO3-9mgvTsC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pQq9eP5OFhw?si=E8iD1iO3-9mgvTsC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                </div>

                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pQq9eP5OFhw?si=E8iD1iO3-9mgvTsC"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection