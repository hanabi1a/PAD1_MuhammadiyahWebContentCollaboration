@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-6">
        <section id="kajian">
            <div class="container">
                <div class="row content-kajian">
                    <div class="content col-md-6 order-md-1">
                        <div class="row mb-3 ">
                            <strong>
                                <h1 class="kajian-muh">Kajian Muhammadiyah</h1>
                            </strong>
                            <div class="col-md-11">
                                <img src="assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="desc-kajian col-md-12">
                                <div class="mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Judul :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Muktamar Muhammadiyah</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Pemateri :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Drs. H. Marpuji Ali, M.SI </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Tanggal :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Senin, 17 Oktober 2022</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Lokasi:</strong>
                                        </div>
                                        <div class="col-md-9">
                                            <p>Universitas Muhammadiyah Kudus | Via Zoom</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <strong>Deskripsi:</strong>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                                Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah
                                                Kudus ke-24 dan Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad
                                                Universitas Muhammadiyah Kudus ke-24 dan Muktamar Muhammadiyah ‘
                                                Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan
                                                Muktamar Muhammadiyah ‘ Aisyiyah ke-48 </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5 order-md-2">
                        <div class="edit-down-share row">
                            <div class="col-md-3">
                                <img src="assets_admin/assets/img/pencil-square.svg" alt="Menu Icon">
                                <p class="text-editdownshare">Edit</p>
                            </div>
                            <div class="col-md-3">
                                <img src="assets_admin/assets/img/download.svg" alt="Menu Icon">
                                <p class="text-editdownshare">Download</p>
                            </div>
                            <div class="col-md-3">
                                <img src="assets_admin/assets/img/share.svg" alt="Menu Icon">
                                <p class="text-editdownshare">Share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection