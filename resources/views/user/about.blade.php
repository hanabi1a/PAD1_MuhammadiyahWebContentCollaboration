@extends('user/layout')

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
                <img src="assets/img/slider/slider-about1.png" alt="Slide 1" class="img-hero-about">
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/slider-about2.png" alt="Slide 2" class="img-hero-about">
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider/slider-about3.png" alt="Slide 3" class="img-hero-about">
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


<section id="about">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-8 order-md-1">
                <p class="title">About Us</>
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

                <img src="assets/img/bendera-about.png" alt="" class="img-fluid">
                <div class="subtitle mt-4">DASAR DAN AMAL USAHA MUHAMMADIYAH</div>
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

                <div class="sifat">
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
                        <img src="assets/img/article.png" alt="" width="24px" height="24px">
                        Artikel
                    </div>
                    <div class="card-body">
                        <div class="list-article">Judul Artikel </div>
                        <div class="list-article">Judul Artikel </div>
                        <div class="list-article">Judul Artikel </div>
                        <div class="list-article">Judul Artikel </div>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header">
                        Judul Video
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/R0OezRPmy6Q?si=OUNi-vZ-lvzezwzd"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                <p class="subjudul mt-3"><img src="assets/img/clock.png" alt="" width="25px"
                                        height="25px">August 2, 2023
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/R0OezRPmy6Q?si=OUNi-vZ-lvzezwzd"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                <p class="subjudul mt-3"><img src="assets/img/clock.png" alt="" width="25px"
                                        height="25px">August 2, 2023
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/R0OezRPmy6Q?si=OUNi-vZ-lvzezwzd"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                <p class="subjudul mt-3"><img src="assets/img/clock.png" alt="" width="25px"
                                        height="25px">August 2, 2023
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/R0OezRPmy6Q?si=OUNi-vZ-lvzezwzd"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                <p class="subjudul mt-3"><img src="assets/img/clock.png" alt="" width="25px"
                                        height="25px">August 2, 2023
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-8">
                                <iframe width="100%" height="100%"
                                    src="https://www.youtube.com/embed/R0OezRPmy6Q?si=OUNi-vZ-lvzezwzd"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="col-md-4">
                                <div class="judul">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                                <p class="subjudul mt-3"><img src="assets/img/clock.png" alt="" width="25px"
                                        height="25px">August 2, 2023
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
        <div class="row text-center">
            <div class="col-lg-4">
                <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                <div class="button text-light">
                    View More
                </div>
            </div>

            <div class="col-lg-4">
                <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                <div class="button text-light">
                    View More
                </div>
            </div>

            <div class="col-lg-4">
                <img src="assets/img/kajian/1.png" alt="" class="img-fluid">
                <h2 class="kajian mt-3">Pengajian Bulanan</h2>
                <p>Peta Jalan Peradaban Islam Indonesia Dalam Perspektif Pendidikan</p>
                <div class="button text-light">
                    View More
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('user/footer')