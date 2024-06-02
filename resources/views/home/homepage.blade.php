@extends('layouts.layout')

@section('content')
<section id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">
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

<section id="search">
    <div class="row">
    @if (Auth::user() != null && Auth::user()->role == 'registered')
        <div class="col-9 col-md-10 align-item-center">
            <div class="search">
                <input type="text" class="search-input" placeholder="Search..." name="">
                <a href="#" class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z"
                            fill="#4A5A67" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-3 col-md-2">
            <a href="{{ route('kajian.create') }}">
                <div class="btn btn-light unggah-kajian">
                    <img src="assets\img\icon\unggah.svg">Unggah Kajian
                </div>
            </a>
        </div>
    @else
        <div class="search pb-3">
            <input type="text" class="search-input" placeholder="Search..." name="">
            <a href="#" class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                            d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z"
                            fill="#4A5A67" />
                </svg>
            </a>
        </div>
    @endif
    </div>
</section>

<div class="container">
    <section id="about">
        <div class="container">
                <div class="row mb-5">
                    <h2 class="title">Mengenal Tokoh Muhammadiyah</h2>
                    <div class="col-md-8 order-md-2">
                    <div class="subtitle">Setahun Sebelum Wafat, Kemana Sajakah Agenda Dakwah <span class="highlight">KH Ahmad Dahlan</span> Pada Tahun 1922?</div>
                        <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Ketika Persyarikatan Muhammadiyah berdiri pada 18 November 1912, 
                        ada delapan nama yang tercatat sebagai pengurusnya. Antara lain KH. Ahmad Dahlan (Ketua Umum), Abd Siratj (Sekretaris), dan anggotanya: Haji Akhmad, H. Abdurrahman, R. Haji Sarkawi, H. Muhammad, R.H. Jaelani, H. Anies, dan H. Muhammad Hakih.
                        Jelang KH Ahmad Dahlan wafat di usia 54 tahun pada 23 Februari 1923, Muhammadiyah yang telah berusia 10 tahun berkembang ke beberapa daerah Karesidenan seperti Yogyakarta, Surakarta, Pekalongan, dan Pekajangan.
                        </p>
                        <a href="https://muhammadiyah.or.id/2023/06/setahun-sebelum-wafat-kemana-sajakah-agenda-dakwah-kh-ahmad-dahlan-pada-tahun-1922/" class="btn btn-view">Lihat Selengkapnya</a>
                    </div>
                    <div class="col-md-4 order-md-1">
                        <img src="/assets/img/tokoh/ahmadDahlan.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-8 order-md-1">
                        <div class="subtitle"><span class="highlight">KH Hisyam:</span> Peletak Fondasi Pendidikan Muhammadiyah</div>
                        <p class="paragraf">
                        MUHAMMADIYAH.OR.ID, JAKARTA – Memasuki usia ke-110 tahun, Muhammadiyah semakin kokoh dalam melaksanakan salah satu tujuan Republik Indonesia di dalam Preambule UUD 1945 yang berbunyi “memajukan kesejahteraan umum, dan mencerdaskan kehidupan bangsa.”

                        Di bidang pendidikan tinggi saja Muhammadiyah telah memiliki 170 Perguruan Tinggi (82 diantaranya berbentuk universitas) yang tersebar di seluruh Indonesia serta satu di Malaysia, merujuk pada data Majelis Diktilitbang Pimpinan Pusat Muhammadiyah Januari 2023.
                        Jumlah tersebut tidak jauh berbeda dengan jumlah Perguruan Tinggi Negeri pada tahun 2023 yang berjumlah 183 PTN (125 PTN berada di bawah Kemendikbud Ristek, 58 PTN dibawah Kemenag).
                        </p>
                        <a href="https://muhammadiyah.or.id/2023/04/kh-hisyam-peletak-fondasi-pendidikan-muhammadiyah/" class="btn btn-view">Lihat Selengkapnya</a>
                    </div>
                    <div class="col-md-4 order-md-2">
                        <img src="/assets/img/tokoh/khhisyam.jpg" class="img-fluid tokoh-muhammadiyah">
                    </div>
                </div>

                <div class="row mb-5">
                    <h2 class="title">Artikel Muhammadiyah</h2>
                    <div class="col-md-8 order-md-2">
                        <div class="subtitle">Mengenal <span class="highlight">Syamsul Anwar</span>, Pakar Hukum Islam dari Riau</div>
                            <p class="paragraf">
                            MUHAMMADIYAH.OR.ID, YOGYAKARTA—Setelah berkali-kali menolak, Syamsul Anwar akhirnya menjadi salah satu anggota Pimpinan Pusat Muhammadiyah periode 2022-2027. Padahal, sejak tahun 1985 hingga saat ini, ia aktif di Majelis Tarjih dari level wilayah hingga pusat.
                            </p>
                            <a href="https://muhammadiyah.or.id/2022/11/mengenal-syamsul-anwar-pakar-hukum-islam-dari-riau/" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                        </div>
                    <div class="col-md-4 order-md-1">
                        <img src="/assets/img/tokoh/syamsul_anwar.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-4 order-md-1">
                        <img src="/assets/img/tokoh/hilman_latief.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-8 order-md-2">
                        <div class="subtitle"><span class="highlight">Hilman Latief,</span> Kader Muda di Jajaran PP Muhammadiyah Periode 2022-2027</div>
                                <p class="paragraf">
                                MUHAMMADIYAH.OR.ID, JAKARTA – Muktamar Muhammadiyah ke-48 di Surakarta 18-20 November 2022 berakhir dengan keluarnya hasil sidang terkait 13 nama anggota Pimpinan Pusat Muhammadiyah masa bakti 2022-2027.
                                </p>
                                <a href="https://muhammadiyah.or.id/2022/11/hilman-latief-figur-kader-muda-di-jajaran-pp-muhammadiyah-periode-2022-2027/" class="btn btn-view">Lihat Selengkapnya</a>
                            </div>
                    </div>
                </div>
    </section>


    @if (Auth::user() != null && Auth::user()->role == 'registered')
        <section id="kajian-home">
            <div class="container">
                <h1 class="mb-4">Kajian Rekomendasi</h1>
                <div class="list-rekomendasi d-flex flex-wrap">
                    <div class="kategori me-2">Sejarah   <img src="assets\img\icon\cancel.svg"></div>
                    <div class="kategori me-2">Aqidah</div>
                    <div class="kategori me-2">Akhlak</div>
                    <div class="kategori me-2">Fiqih</div>
                    <div class="kategori me-2">Al-Qur’an</div>
                    <div class="dropdown">
                        <button class="kategori-lainnya dropdown-toggle" type="button" id="dropdownMenuButton1">
                            Tambah Kategori
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Sejarah</a></li>
                            <li><a class="dropdown-item" href="#">Aqidah</a></li>
                            <li><a class="dropdown-item" href="#">Fiqih</a></li>
                        </ul>
                    </div>
                </div>
                @if (isset($kajian))
                    <div class="row">
                        @foreach ($kajian as $item)
                            <div class="col-md-4 mb-5">
                                <div class="card box-shadow">
                                    <img src="{{ asset('storage/'.$item->foto_kajian) }}" class="img-fluid img-kajian">
                                    <div class="card-body">
                                        <div class="card-title mt-3">{{ $item->judul_kajian }}</div>
                                        <p class="card-text">{{ $item->pemateri }}</p>
                                        <div class="card-title" style="color: #04454D;">{!! $item->deskripsi_kajian !!}</div>
                                        <a href="{{ route('kajian.show', ['kajian' => $item->slug]) }}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center">
                        {!! $kajian->links('pagination.custom') !!}
                    </div>
                    <!-- End Pagination -->
                @endif
            </div>
        </section>
    @else
        <section id="kajian-home">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Kajian Muhammadiyah</h1>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a href="" class="d-flex align-items-center">
                            <p class="m-0 me-2"><strong>Lihat Semua</strong></p>
                            <img src="assets\img\icon\btn_next.svg" style="width: 20px; height: 20px;" alt="Next Button">
                        </a>
                    </div>
                </div>
                @if (isset($kajian))
                    <div class="row">
                        @foreach ($kajian as $item)
                            <div class="col-md-4 mb-5">
                                <div class="card box-shadow">
                                    <img src="{{ asset('storage/'.$item->foto_kajian) }}" class="img-fluid img-kajian">
                                    <div class="card-body">
                                        <div class="card-title mt-3">{{ $item->judul_kajian }}</div>
                                        <p class="card-text">{{ $item->pemateri }}</p>
                                        <div class="card-title" style="color: #04454D;">{!! $item->deskripsi_kajian !!}</div>
                                        <a href="{{ route('kajian.show', ['kajian' => $item->slug]) }}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif

    <section id="kajian-home">
        <div class="container">
            <h1 class="mb-4">Kajian Terkini</h1>
            @if (isset($kajian))
                <div class="row">
                    @foreach ($kajian as $item)
                        <div class="col-md-4 mb-5">
                            <div class="card box-shadow">
                                <img src="{{ asset('storage/'.$item->foto_kajian) }}" class="img-fluid img-kajian">
                                <div class="card-body">
                                    <div class="card-title mt-3">{{ $item->judul_kajian }}</div>
                                    <p class="card-text">{{ $item->pemateri }}</p>
                                    <div class="card-title" style="color: #04454D;">{!! $item->deskripsi_kajian !!}</div>
                                    <a href="{{ route('kajian.show', ['kajian' => $item->slug]) }}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section id="kajian-home">
            <div class="container">
                <h1>Video Terkini</h1>
                <div class="row">
                    <div class="col-md-6">
                        <iframe width="540" height="315" src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="col-md-6">
                        <iframe width="540" height="315" src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


