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
            @foreach ($latestKajians as $kajian)
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $kajian->foto_kajian) }}" alt="" class="postkajian-kajian">
                        </div>
                        <div class="col-md-8">
                            <div class="title mb-3 mt-2">{{ $kajian->judul_kajian }}</div>
                            <ul class="list-unstyled">
                                <li>Narasumber : {{ $kajian->pemateri }}</li>
                                <li>Tema : “{{ $kajian->deskripsi_kajian }}”</li>
                            </ul>
                            <div class="d-flex mt-3">
                                <a href="{{ route('userkajian', ['id' => $kajian->id]) }}"
                                    class="button-kajian text-light me-3" style="text-decoration: none;">
                                    View More
                                </a>

                                <p>{{ $kajian->created_at->format('l | F d, Y') }} | By {{ $kajian->user->username }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


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
                                    <div class="social-icons">
                                        <img src="/assets/img/facebook-1.png" alt="Facebook"
                                            style="width: 190px; height: 60px;">
                                        <img src="/assets/img/twitter-1.png" alt="Twitter"
                                            style="width: 190px; height: 60px;">
                                        <img src="/assets/img/icon/google.png" alt="Google"
                                            style="width: 60px; height: 60px;">
                                    </div>
                                </div>
                                <div class="detail-kajian text-center">
                                    <span class="fw-bold">Kajian Al Islam dan Kemuhammadiyahan Series ke-26</span><br>
                                    Risalah Islam Berkemajuan | Prof. Dr. Abdul Mu'ti, M.Ed | Kajian Al-Islam &
                                    Kemuhammadiyahan UMS <br>
                                    Videos | 30 December, 2022 | Masjid Hj. Sudalmiyah Rais UMS
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
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="nama-setor">Aisa Selvira</div>
                                    <div class="jumlah">40 post</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="/assets/img/account-profile.png" alt="">
                                </div>
                                <div class="col-md-8">
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