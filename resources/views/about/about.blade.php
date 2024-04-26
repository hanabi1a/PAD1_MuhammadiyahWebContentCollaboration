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
        <div class="col-9 col-md-10">
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
        <div class="row">
            <div class="col-md-4">
                <div class="card box-shadow">
                    <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                    <div class="card-body">
                        <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                        <button class="btn btn-view">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow">
                    <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                    <div class="card-body">
                        <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                        <button class="btn btn-view">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card box-shadow">
                    <img src="/assets/img/kajian3.jpg" class="img-fluid img-kajian">
                    <div class="card-body">
                        <div class="card-title mt-3">Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan
                        </div>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="card-title" style="color: #04454D;">#SEJARAH</div>
                        <button class="btn btn-view">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kajian-home">
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

@endsection
