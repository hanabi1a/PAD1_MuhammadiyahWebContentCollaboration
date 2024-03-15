@extends('layouts.layout_user_2')

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
                                <strong>
                                    <h1 class="kajian-muh">Kajian Muhammadiyah</h1>
                                </strong>
                                <div class="col-md-11">
                                    <img src="{{ asset('storage/' . $kajian->foto_kajian) }}" alt="" class="img-fluid">
                                </div>
                                <div class="desc-kajian col-md-12">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Judul :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $kajian->judul_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Pemateri :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $kajian->pemateri }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Tanggal :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $kajian->tanggal_posting }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Lokasi:</strong>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ $kajian->lokasi_kajian}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <strong>Deskripsi:</strong>
                                            </div>
                                            <div class="col-md-12">
                                                <p>{{ $kajian->deskripsi_kajian }}</p>
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
                                                <img src="{{ asset('storage/' . $kajian->user->foto_profile) }}" alt="" width="60px" height="60px" style="border-radius: 50%;">
                                            </div>
                                            <div class="postingan col-md-9">
                                                <a style="text-decoration:none; color: #000;" href="profile_user">
                                                    <strong>
                                                        <p>{{ $kajian->user->username }}</p>
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
                                        @foreach($kajian->versions as $version)
                                        <div class="row align-items-center edit-by">
                                            <div class="col-md-3">
                                                <a href="#">
                                                    <img src="/assets/img/account-profile.png" alt="">
                                                </a>
                                            </div>
                                            <div class="postingan col-md-9 d-flex align-items-center">
                                                <a style="text-decoration:none; color: #000;" href="#">
                                                    <strong>
                                                        <p class="mb-0">{{ $version->user->username }}</p>
                                                    </strong>
                                                </a>
                                                <div class="col-md-5 text-center ml-2">
                                                    <a href="{{ route('detailNv', ['id' => $version->id]) }}">
                                                        <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
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