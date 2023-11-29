@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="kajian">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="content col-md-6 order-md-1">
                            <div class="row mb-3 ">
                                <div class="col-md-11">
                                    <div class="account-detail row">
                                        <div class="col-md-2">
                                            <img src="/assets/img/account-profile.png" alt="">
                                        </div>
                                        <div class="name-account col-md-8">
                                            <div class="nama">Karthi Madesh</div>
                                        </div>
                                        <div class="name-account col-md-2 text-end">
                                            <img src="/assets_admin/assets/img/three-dots.svg" alt="Menu Icon">
                                        </div>
                                    </div>
                                    <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
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
                                                    Muhammadiyah ‘ Aisyiyah ke-48. Pengajian Milad Universitas
                                                    Muhammadiyah
                                                    Kudus ke-24 dan Muktamar Muhammadiyah ‘ Aisyiyah ke-48. Pengajian
                                                    Milad
                                                    Universitas Muhammadiyah Kudus ke-24 dan Muktamar Muhammadiyah ‘
                                                    Aisyiyah ke-48. Pengajian Milad Universitas Muhammadiyah Kudus ke-24
                                                    dan
                                                    Muktamar Muhammadiyah ‘ Aisyiyah ke-48. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc mb-3 mt-2">
                                        <div class="row">
                                            <div class="text-commit col-md-9">
                                                <strong>Commit Message :</strong>
                                            </div>
                                            <div class="text-commit2 col-md-9">
                                                <strong>Diubah bagian</strong>
                                            </div>
                                            <div class="li-commit col-md-10">
                                                <li>
                                                    <p>Judul</p>
                                                </li>
                                                <li>
                                                    <p>Narasi paragraf 2</p>
                                                </li>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="col-md-5 order-md-2">
                            <div class="edit-down-share row">
                                <div class="col-md-3">
                                    <a href="form_edit_user_nv" class="btn d-flex flex-column align-items-center">
                                        <img src="/assets_admin/assets/img/pencil-square.svg" alt="Edit Icon">
                                        <span class="text-editdownshare">Edit</span>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a href="your_download_url" class="btn d-flex flex-column align-items-center">
                                        <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                        <span class="text-editdownshare">Download</span>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a href="your_share_url" class="btn d-flex flex-column align-items-center">
                                        <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                        <span class="text-editdownshare">Share</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card mt-6 col-md-12">
                                <div class="bungkus">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
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
                                                        <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h1 class="text-edit">Edit by</h1>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <strong>
                                                    <p class="mb-0">Karthi Madhes</p>
                                                </strong>
                                                <div class="col-md-5 text-center ml-2">

                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
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