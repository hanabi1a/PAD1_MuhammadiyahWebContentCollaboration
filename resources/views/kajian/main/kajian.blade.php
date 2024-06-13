@extends('layouts.layout')
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

<section id="kajian-muhammadiyah" class="default-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 id="title-kajian-muhammadiyah" class="mt-4 mb-4">Kajian Muhammadiyah</h1>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
                <a href="{{ route('profile.akun_muhammadiyah') }}" class="m-0 me-2"><strong>Lihat Semua</strong></a>
                <img src="assets/img/icon/btn_next.svg" style="width: 20px; height: 20px;" alt="Next Button">
            </div>
        </div>
        <div class="row" id="kajianMuhammadiyahResults">
            @foreach ($kajian as $item)
            <div class="col-md-4 mb-5 kajian-item" 
                data-category="muhammadiyah" 
                data-title="{{ $item->judul_kajian }}"
                data-pemateri="{{ $item->pemateri }}"
                data-deskripsi="{{ strip_tags($item->deskripsi_kajian) }}"
                data-kategori="{{ $item->kategori }}">
                <div class="card box-shadow">
                    <img src="{{ asset('storage/' . $item->foto_kajian) }}" class="img-fluid img-kajian">
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
    </div>
</section>

@if (Auth::user() != null && Auth::user()->role == 'registered')
<section id="kajian-rekomendasi" class="default-content">
    <div class="container">
        <h1 id="title-kajian-rekomendasi" class="mb-2">Kajian Rekomendasi</h1>
        <div class="list-rekomendasi d-flex flex-wrap mb-4 mt-4">
            <div class="kategori me-2">
                Sejarah
                <img src="assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
            <div class="kategori me-2">
                Aqidah
                <img src="assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
            <div class="kategori me-2">
                Akhlak
                <img src="assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
            <div class="kategori me-2">
                Fiqih
                <img src="assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
            <div class="kategori me-2">
                Al-Qur’an
                <img src="assets/img/icon/cancel.svg" alt="Close Icon">
            </div>
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
            <div class="row" id="kajianRekomendasiResults">
                @foreach ($kajian as $item)
                <div class="col-md-4 mb-5 kajian-item" 
                    data-category="muhammadiyah" 
                    data-title="{{ $item->judul_kajian }}"
                    data-pemateri="{{ $item->pemateri }}"
                    data-deskripsi="{{ strip_tags($item->deskripsi_kajian) }}"
                    data-kategori="{{ $item->kategori }}">
                    <div class="card box-shadow">
                        <img src="{{ asset('storage/' . $item->foto_kajian) }}" class="img-fluid img-kajian">
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
        <div class="d-flex justify-content-center">
            {!! $kajian->links('pagination.custom') !!}
        </div>
        @endif
    </div>
</section>
@endif

<section id="kajian-terkini" class="default-content">
    <div class="container">
        <h1 id="title-kajian-terkini" class="mb-4">Kajian Terkini</h1>
        @if (isset($kajian))
        <div class="row" id="kajianTerkiniResults">
            @foreach ($kajian as $item)
            <div class="col-md-4 mb-5 kajian-item" 
                data-category="muhammadiyah" 
                data-title="{{ $item->judul_kajian }}"
                data-pemateri="{{ $item->pemateri }}"
                data-deskripsi="{{ strip_tags($item->deskripsi_kajian) }}"
                data-kategori="{{ $item->kategori }}">
                <div class="card box-shadow">
                    <img src="{{ asset('storage/' . $item->foto_kajian) }}" class="img-fluid img-kajian">
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