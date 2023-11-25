@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-6">
        <section id="kajian">
            <div class="container">
                <div class="row-ori">
                    <div class="content col-md-6 order-md-1">
                        <div class="row mb-3 ">
                            <div class="col-md-11">
                                <div class="account-detail row">
                                    <div class="col-md-2">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="name-account col-md-8">
                                        <div class="nama">Karthi Madesh</div>
                                    </div>
                                    <div class="name-account col-md-2 text-end">
                                        <div class="dropdown">
                                            <button class="btn btn-link text-info" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="nama" src="assets_admin/assets/img/three-dots.svg"
                                                    alt="Menu Icon" class="img-fluid">
                                            </button>
                                            <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button type="submit" class="btn btn-link text-dark" title="Delete"
                                                    onclick="return confirm('Apakah anda yakin?')">
                                                    <span
                                                        style="display:inline-block; vertical-align:middle;">Delete</span>
                                                    <i class="fa fa-trash fa-lg" style="margin-left: 5px;"></i>
                                                </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
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
                                            Muktamar Muhammadiyah ‘ Aisyiyah ke-48. </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="col-md-5 order-md-2">
                    <div class="edit-down-share row">
                        <div class="col-md-3 col-sm-4">
                            <img src="assets_admin/assets/img/pencil-square.svg" alt="Menu Icon">
                            <p class="text-editdownshare">Edit</p>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <img src="assets_admin/assets/img/download.svg" alt="Menu Icon">
                            <p class="text-editdownshare">Download</p>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <img src="assets_admin/assets/img/share.svg" alt="Menu Icon">
                            <p class="text-editdownshare">Share</p>
                        </div>
                    </div>
                    <div class="card mt-6 col-md-12">
                        <div class="bungkus">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9">
                                        <strong>
                                            <p>Karthi Madhes</p>
                                        </strong>
                                        <div class="row">
                                            <div class="col-md-11">
                                                <p>Karthi Madhes Taehyung</p>
                                            </div>
                                            <div class="col-md-1">
                                                <img src="assets_admin/assets/img/arrow-right-square.svg">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h1 class="text-edit">Edit by</h1>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center edit-by">
                                    <div class="col-md-3">
                                        <img src="assets/img/account-profile.png" alt="">
                                    </div>
                                    <div class="postingan col-md-9 d-flex align-items-center">
                                        <strong>
                                            <p class="mb-0">Karthi Madhes</p>
                                        </strong>
                                        <div class="col-md-5 text-center ml-2">

                                            <img src="assets_admin/assets/img/arrow-right-square.svg">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</main>
@endsection