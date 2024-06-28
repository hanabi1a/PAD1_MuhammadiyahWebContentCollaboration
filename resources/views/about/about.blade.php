{{-- Note: Resolve Conflict : Remove auth branch condition, End of the file is from 754 -> 339 --}}

@extends('layouts.layout')
@section('content')
<section id="hero-about">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider/slider-about1.png" alt="Slide 1" class="img-hero-about">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-about2.png" alt="Slide 2" class="img-hero-about">
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider/slider-about3.png" alt="Slide 3" class="img-hero-about">
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

<section id="search">
    <div class="row">
        @if (Auth::user() != null && Auth::user()->isRegistered())
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

<section id="about">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-8 order-md-1">
                <p class="title">Tentang Kami</>
                    <p class="paragraf">
                        Muhammadiyah adalah persyarikatan yang merupakan Gerakan Islam. Maksud gerakanya ialah
                        Dakwah
                        Islam dan Amar Ma’ruf nahi Munkar yang ditujukan kepada dua bidang: perseorangan dan
                        masyarakat
                        <br><br>
                        Dakwah dan Amar Ma’ruf nahi Munkar pada bidang pertama terbagi kepada dua golongan: Kepada
                        yang
                        telah Islam bersifat pembaharuan (tajdid), yaitu mengembalikan kepada ajaran Islam yang asli
                        dan
                        murni; dan yang kedua kepada yang belum Islam, bersifat seruan dan ajakan untuk memeluk
                        agama
                        Islam.
                        <br><br>
                        Adapun da’wah Islam dan Amar Ma’ruf nahi Munkar bidang kedua, ialah kepada masyarakat,
                        bersifat
                        kebaikan dan bimbingan serta peringatan. Kesemuanya itu dilaksanakan dengan dasar taqwa dan
                        mengharap keridlaan Allah semata-mata.
                        <br>
                        Dengan melaksanakan dakwah Islam dan amar ma’ruf nahi munkar dengan caranya masing-masing
                        yang
                        sesuai, Muhammadiyah menggerakkan masyarakat menuju tujuannya, ialah “Terwujudnya masyarakat
                        Islam yang sebenar-benarnya”.
                    </p>

                    <img src="/assets/img/bendera-about.png" alt="" class="img-fluid">
                    <div class="subtitle mt-5">DASAR DAN AMAL USAHA MUHAMMADIYAH</div>
                    <p class="paragraf mt-4">
                        Dalam perjuangan melaksanakan usahanya menuju tujuan terwujudnya masyarakat Islam yang
                        sebenarbenarnya, dimana kesejahteraan, kebaikan dan kebahagiaan luas-merata, Muhammadiyah
                        mendasarkan segala gerak dan amal usahanya atas prinsip-prinsip yang tersimpul dalam
                        Muqaddimah
                        Anggaran Dasar, yaitu :
                        <ol type="1">
                            <li>Hidup manusia harus berdasar tauhid, ibadah, dan taat kepada Allah.</li>
                            <li>Hidup manusia bermasyarakat.</li>
                            <li>Mematuhi ajaran-ajaran agama Islam dengan berkeyakinan bahwa ajaran Islam itu
                                satu-satunya
                                landasan kepribadian dan ketertiban bersama untuk kebahagiaan dunia akhirat.</li>
                            <li>Menegakkan dan menjunjung tinggi agama Islam dalam masyarakat adalah kewajiban
                                sebagai
                                ibadah
                                kepada Allah dan ikhsan kepada kemanusiaan.</li>
                            <li>
                                Ittiba’ kepada langkah dan perjuangan Nabi Muhammad SAW.
                            </li>
                            <li>
                                Melancarkan amal usaha dan perjuangannya dengan ketertiban organisasi.
                            </li>
                        </ol>
                    </p>

                    <div class="sifat mt-5">
                        <div class="container">
                            <div class="title-sifat text-light">
                                Sifat Muhammadiyah
                            </div>
                            <ol type="1" class="text-light">
                                <li>Beramal dan berjuang untuk perdamaian dan kesejahteraan.</li>
                                <li>Memperbanyak kawan dan mengamalkan ukhuwah Islamiyah.</li>
                                <li>Lapang dada, luas pandangan, dengan memegang teguh ajaran Islam.</li>
                                <li>Bersifat keagamaan dan kemasyarakatan.</li>
                                <li>
                                    Mengindahkan segala hukum, undang-undang, peraturan, serta dasar dan falsafah
                                    negara
                                    yang
                                    sah.
                                </li>
                            </ol>
                        </div>
                    </div>
            </div>

            <div class="col-md-4 order-md-2">
                <div class="card">
                    <div class="card-header">
                        <img src="/assets/img/article.png" alt="" width="24px" height="24px">
                        Artikel
                    </div>
                    <div class="card-body">
                        <div class="list-article"">
                            <a
                                        href="
                            https://muhammadiyah.or.id/ikhtiar-menyelamatkan-semesta-memaknai-tema-milad-ke-111-muhammadiyah/">
                            Ikhtiar Menyelamatkan Semesta, Memaknai Tema Milad ke-111 Muhammadiyah</a> </div> <div class="mt-2 mb-2"
                            style="width: 100%; height: 1px; background: #000;">
                        </div>

                        <div class="list-article"">
                            <a
                                        href="
                            https://muhammadiyah.or.id/2022/12/mengapa-buya-ar-sutan-mansur-mendapat-gelar-mayor-jenderal-tituler/">
                            Mengapa Buya AR Sutan Mansur Mendapat Gelar Mayor Jenderal Tituler?</a> </div> <div class="mt-2 mb-2"
                            style="width: 100%; height: 1px; background: #000;">
                        </div>

                        <div class="list-article"">
                            <a
                                        href="
                            https://muhammadiyah.or.id/2022/12/buya-hamka-mui-dan-fatwa-perayaan-natal-bersama-apa-yang-sebenarnya-terjadi/">
                            Buya Hamka, MUI dan Fatwa Perayaan Natal Bersama, Apa Yang Sebenarnya Terjadi?</a> </div> <div class="mt-2 mb-2"
                            style="width: 100%; height: 1px; background: #000;">
                        </div>
                        <div class="list-article"">
                            <a
                                        href="
                            https://muhammadiyah.or.id/2022/12/mengenal-salmah-orbayyinah-ketua-umum-pp-aisyiyah-2022-2027/">
                            Mengenal Salmah Orbayinah, Ketua Umum PP ‘Aisyiyah 2022-2027</a> </div> <div class="mt-2 mb-2"
                            style="width: 100%; height: 1px; background: #000;">
                        </div>

                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h2 class="heading3 mb-2"><strong>Berkah Sedekah</strong></h2>
                        <iframe width="100%" height="70%"
                            src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                            <div class="time-container">
                                <img src="assets\img\icon\clock.svg" class="mr-3">
                                <p class="time mt-3">8 September 2023</p>
                            </div>
                    </div>
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-md-8">
                                <iframe class="rounded-iframe" width="100%" height="70%"
                                    src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Berkah Sedekah</div>
                                <p class="subjudul mt-3">2 Agustus 2023
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <iframe class="rounded-iframe" width="100%" height="70%"
                                    src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Berkah Sedekah</div>
                                <p class="subjudul mt-3">2 Agustus 2023
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <iframe class="rounded-iframe" width="100%" height="70%"
                                    src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Berkah Sedekah</div>
                                <p class="subjudul mt-3">2 Agustus 2023
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8">
                                <iframe class="rounded-iframe" width="100%" height="70%"
                                    src="https://www.youtube.com/embed/fXTXrfw-YR4?si=UiBSTnz4288WnIiH"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Berkah Sedekah</div>
                                <p class="subjudul mt-3">2 Agustus 2023
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="row" id="kajianMuhammadiyahContainer">
            @foreach ($kajianList as $item)
                @include('kajian.components.card_kajian', ['item' => $item])
            @endforeach
        </div>
    </div>
</section>

<section id="kajian-home video-terkini" class="default-content">
    <div class="container">
        <div class="video-kajian">
            <img src="\assets\img\video-kajian.png" alt="Video Kajian">
            <div class="share-kajian mt-3">
                <a href="#">
                    <img src="\assets\img\facebookk.svg" alt="Facebook">
                </a>
                <a href="#">
                    <img src="\assets\img\twitter-1.svg" alt="Twitter">
                </a>
                <a href="#">
                    <img src="\assets\img\google.svg" alt="Google">
                </a>
                <div class="text-video-kajian mt-3">
                    <h2>Kajian Al Islam dan Kemuhammadiyahan Series ke-26</h2>
                    <p>Risalah Islam Berkemajuan | Prof. Dr. Abdul Mu'ti, M.Ed | Kajian Al-Islam & Kemuhammadiyahan UMS</p>
                    <p>Videos | 30 December, 2022 | Masjid Hj. Sudalmiyah Rais UMS</p>
            </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div id="noResults" class="d-none text-center mt-3">
        Tidak ada hasil ditemukan
    </div>
</div>

@endsection
