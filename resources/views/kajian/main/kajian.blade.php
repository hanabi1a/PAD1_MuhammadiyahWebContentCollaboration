@extends('layouts.layout')
@section('content')
<section id="kajian-hero">
    <div class="container">
        <div id="kajianCarousel" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#kajianCarousel" data-bs-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
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
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
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
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex flex-row-reverse bd-highlight center-image">
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
                            <a href="#">
                                <button class="button-kajian-hero">Lihat Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="control">
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


<section id="search">
    <div class="row">
        @if (Auth::user() != null && Auth::user()->role == 'registered')
        <div class="col-9 col-md-10 align-item-center">
            <div class="search">
                <input type="text" class="search-input" placeholder="Search..." id="searchInput">
                <a href="#" class="search-icon">
                    <img src="\assets\img\icon\search-icon.svg">
                </a>
            </div>
        </div>
        <div class="col-3 col-md-2">
            <a href="{{ route('kajian.create') }}">
                <div class="btn btn-light unggah-kajian">
                    <img src="\assets\img\icon\unggah.svg">Unggah Kajian
                </div>
            </a>
        </div>
        @else
        <div class="search pb-3">
            <input type="text" class="search-input" placeholder="Search..." id="searchInput">
            <a href="#" class="search-icon">
                <img src="\assets\img\icon\search-icon.svg">
            </a>
        </div>
        @endif
    </div>
</section>

<section id="kajian-muhammadiyah" class="default-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 id="title-kajian-muhammadiyah" class="mt-4 mb-4">Kajian Muhammadiyah</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('profile.akun_muhammadiyah') }}" class="m-0 me-2"><strong>Lihat Semua</strong></a>
                <img src="\assets/img/icon/btn_next.svg" style="width: 20px; height: 20px;" alt="Next Button">
            </div>
        </div>
        <div class="row" id="kajianMuhammadiyahResults">
            @foreach ($kajianList as $item)
                @include('kajian.components.card_kajian', ['item' => $item])
            @endforeach
        </div>
    </div>
</section>


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
            @foreach ($kajianTerkini as $item)
                @include('kajian.components.card_kajian', ['item' => $item])
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {!! $kajianTerkini->links('pagination.custom') !!}
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

@endsection