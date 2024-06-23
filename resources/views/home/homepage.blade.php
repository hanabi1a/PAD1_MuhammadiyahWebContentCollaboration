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
                <input type="text" class="search-input" placeholder="Search..." id="searchInput">
                <a href="#" class="search-icon">
                    <img src="assets\img\icon\search-icon.svg">
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
            <input type="text" class="search-input" placeholder="Search..." id="searchInput">
            <a href="#" class="search-icon">
                <img src="assets\img\icon\search-icon.svg">
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
</div>

@if (Auth::check() && Auth::user()->role == 'registered')
<section id="kajian-rekomendasi" class="default-content">
    <div class="container">
        <h1 id="title-kajian-rekomendasi" class="mb-2">Kajian Rekomendasi</h1>
        <div class="list-rekomendasi d-flex flex-wrap mb-4 mt-4">
        @foreach ($selectedCategories as $category)
            <div class="kategori me-2">
                {{ $category->nama }}
                <img src="/assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
        @endforeach

        <div class="dropdown" id="category-add-dropdown">
            <button class="kategori-lainnya dropdown-toggle" type="button" id="dropdownMenuButton1">
                Tambah Kategori
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach ($kategoriKajian as $item)
                    <li><a class="dropdown-item" href="#">{{ $item->nama }}</a></li>
                @endforeach
            </ul>
        </div>

        </div>

        <div id="kajianRekomendasiResults" class="row">
            @foreach ($recommendedKajian as $item)
                @include('kajian.components.card_kajian', ['item' => $item])
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {!! $recommendedKajian->links('pagination.custom') !!}
        </div>
    </div>
</section>
@endif

<section id="kajian-terkini" class="default-content">
    <div class="container">
        <h1 id="title-kajian-terkini" class="mb-4">Kajian Terkini</h1>
        <div class="row" id="kajianTerkiniResults">
            @foreach ($kajianList as $item)
                @include('kajian.components.card_kajian', ['item' => $item])
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $kajianList->links('pagination.custom') !!}
        </div>
    </div>
</section>


    <section id="video-terkini" class="default-content">
        <div class="container">
            <h1 id="video-terkini" class="mb-3">Video Terkini</h1>
            <div class="row">
                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                        gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <div id="noResults" class="d-none">Tidak ada hasil ditemukan</div>
</div>

</script>
@endsection

