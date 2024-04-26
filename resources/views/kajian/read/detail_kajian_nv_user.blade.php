@extends('layouts.layout')

<head>
    <link href="{{ asset('assets_admin/css/styles.css') }}" rel="stylesheet" />
</head>
@section('content')
<main>
    <div class="container-fluid px-5 mt-sm-2 mb-sm-2 justify-content-center">
        <section id="kajian">
            <div class="card justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="content col-md-6 order-md-1 me-">
                            <div class="row mb-3 ">
                                <div class="col-md-11">
                                    <div class="account-detail row align-items-center">
                                        <div class="col-md-2">
                                            <a href="profile_user">
                                                <img class="pp-account" src="{{ asset('storage/' . $kajianNV->user->foto_profile) }}" alt="Foto"
                                                    style="border-radius: 50%; width: 50px; height: 50px;">

                                            </a>
                                        </div>
                                        <div class="name-account col-md-9 mb-5 align-self-center mt-4">
                                            <a style="text-decoration:none; color: #000;" href="profile_user_2">
                                                <div class="nama">{{ $kajianNV->user->username }}</div>
                                            </a>
                                        </div>
                                        <div class="name-account col-md-1 text-end align-self-center mb-4">
                                            <div class="dropdown">
                                                <button class="btn" type="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <img src="/assets_admin/assets/img/three-dots.svg" alt="Menu Icon">
                                                </button>
                                                <div class="dropdown-menu">
                                                    <button type="submit" class="btn btn-link text-danger"
                                                        title="Delete" onclick="return confirm('Apakah anda yakin?')"
                                                        style="text-decoration: none;">
                                                        <i class="fa fa-trash fa-lg"
                                                            style="color: red; margin-right: 10px;"></i> Delete
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/assets/img/kajian/kajian.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="desc-kajian col-md-12">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Judul :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>wkwk</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Pemateri :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Pemateri Kajian</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Tanggal :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Tanggal</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Lokasi:</strong>
                                            </div>
                                            <div class="col-md-9">
                                                <p>Lokasi</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <strong>Deskripsi:</strong>
                                            </div>
                                            <div class="col-md-12">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                                    impedit recusandae, esse corrupti iusto maxime sequi itaque
                                                    laboriosam quam, eveniet accusantium officia rem! Non dignissimos
                                                    nostrum reiciendis maxime, architecto aperiam.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="text-commit col-md-9">
                                                <strong>Commit Message :</strong>
                                            </div>
                                            <div class="text-commit2 col-md-9">
                                                <strong>Diubah bagian</strong>
                                            </div>
                                            <div class="li-commit col-md-10">
                                                <b>{{ $kajianNV->commit_msg }}</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 order-md-2">
                            <div class="edit-down-share row">
                                <div class="col-md-3">
                                    <a href="" class="btn d-flex flex-column align-items-center">
                                        <img src="/assets/img/btn-upload.png" alt="Edit Icon" width="21">
                                        <span class="text-editdownshare">Upload</span>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a href="" class="btn d-flex flex-column align-items-center" download>
                                        <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                        <span class="text-editdownshare">Download</span>
                                    </a>
                                </div>


                                <div class="col-md-3">
                                    <a id="shareid" href="#" class="btn d-flex flex-column align-items-center">
                                        <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                        <span class="text-editdownshare">Share</span>
                                    </a>
                                </div>
                            </div>
                            <div class="card mt-6 col-md-12">
                                <div class="bungkus-card">
                                    <div class="card-body-user">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="/assets/img/account-profile.png" alt="">
                                            </div>
                                            <div class="postingan col-md-9">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p>Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="row">
                                                    <div class="col-md-10">
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
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="profile_user">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p class="mb-0">Karthi Madhes</p>
                                                    </strong>
                                                </a>
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
<script>
    $(document).ready(function () {
        $(".dropdown").on("click", function (event) {
            // Mencegah default behavior dari anchor tag
            event.preventDefault();

            // Menampilkan atau menyembunyikan dropdown
            $(this).find(".dropdown-menu").toggle();
        });
    });

    document.getElementById('shareid').addEventListener('click', function () {
        // Buat URL yang ingin Anda bagikan
        var urlToShare = 'https://www.instagram.com/ey_kean/'; // Ganti dengan URL yang sesuai

        // Salin URL ke clipboard
        navigator.clipboard.writeText(urlToShare).then(function () {
            alert('Link telah disalin ke clipboard!');
        }).catch(function (err) {
            console.error('Tidak dapat menyalin teks: ', err);
        });
    });

    function showDeleteConfirmation() {
        // Implement your delete logic here
        alert("Delete option clicked!");
    }
</script>
@endsection