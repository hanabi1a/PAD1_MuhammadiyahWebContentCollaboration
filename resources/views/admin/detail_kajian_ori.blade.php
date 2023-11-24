@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-6">
        <section id="kajian">
            <div class="container">
                <div class="row">
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
                                        <img src="assets_admin/assets/img/three-dots.svg" alt="Menu Icon">
                                    </div>
                                </div>
                                <img src="{{ asset('storage/'.$kajian->foto_kajian) }}" alt="" class="img-fluid">
                            </div>
                            <div class="desc-kajian col-md-12">
                                <div class="mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Judul :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$kajian->judul_kajian}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Pemateri :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$kajian->pemateri}} </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="desc mb-3 mt-2">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <strong>Tanggal :</strong>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$kajian->tanggal_postingan}}</p>
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
                                            <p>{{$kajian->deskripsi_kajian}} </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="col-md-5 order-md-2">
                        <div class="edit-down-share row">
                            <div class="col-md-3">
                                <a href="{{ route('edit_kajian', ['id' => $kajian->id]) }}">
                                    <img src="assets_admin/assets/img/pencil-square.svg" alt="Menu Icon">
                                    <p class="text-editdownshare">Edit</p>
                                </a>
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