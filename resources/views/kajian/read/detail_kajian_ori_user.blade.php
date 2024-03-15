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
                                <div class="col-md-11">
                                    <div class="account-detail row align-items-center">
                                        <div class="col-md-2">
                                            @if($userkajian->user)
                                            <a href="profile_user">
                                                <img class="pp-account"
                                                    src="{{ asset('storage/' . $userkajian->user->foto_profile) }}"
                                                    alt="Foto tidak ada" style="border-radius: 50%; width: 50px;">
                                            </a>
                                            @else
                                            <a href=" profile_user">
                                                <img src="/assets/img/account-profile.png" alt="Foto Profil Default">
                                            </a>
                                            @endif
                                        </div>
                                        @if ($userkajian->user)
                                        <div class="name-account col-md-9 mb-5 align-self-center mt-4">
                                            <a style="text-decoration:none; color: #000;" href="profile_user_2">
                                                <div class="nama">{{ $userkajian->user->username }}</div>
                                            </a>
                                        </div>
                                        @else
                                        <div class="name-account col-md-9 mb-5 align-self-center mt-4">
                                            <div class="nama">User tidak ditemukan</div>
                                        </div>
                                        @endif

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
                                    <img src="{{ asset('storage/' . $userkajian->foto_kajian) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <div class="desc-kajian col-md-12">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Judul :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $userkajian->judul_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Pemateri :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $userkajian->pemateri }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Tanggal :</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $userkajian->tanggal_postingan }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Lokasi:</strong>
                                            </div>
                                            <div class="col-md-9">
                                                <p>{{ $userkajian->lokasi_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <strong>Deskripsi:</strong>
                                            </div>
                                            <div class="col-md-12">
                                                <p>{{ $userkajian->deskripsi_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 order-md-2">
                            <div class="edit-down-share row">
                                <div class="col-md-3">
                                    <a href="{{ route('kajian.edit.new_version', $userkajian->id) }}"
                                        class="btn d-flex flex-column align-items-center">
                                        <img src="/assets/img/btn-upload.png" alt="Edit Icon" width="21">
                                        <span class="text-editdownshare">Upload</span>
                                    </a>
                                </div>

                                <div class="col-md-3">
                                    <a onclick="window.location.href='{{ route('kajian.download', $userkajian->id) }}'""
                                        class="btn d-flex flex-column align-items-center" download>
                                        <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                        <span class="text-editdownshare">Download</span>
                                    </a>
                                </div>


                                <div class="col-md-3">
                                    <a id="sharesid" href="#" class="btn d-flex flex-column align-items-center">
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
                                                <img src="{{ asset('storage/' . $userkajian->user->foto_profile) }}"
                                                    alt="" style="border-radius: 50%; width: 60px; height: 60px;">

                                            </div>
                                            <div class="postingan col-md-9">
                                                <a style="text-decoration:none; color: #000;" href="#">
                                                    <strong>
                                                        <p>{{ $userkajian->user->username }}</p>
                                                    </strong>
                                                </a>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <p>{{ $userkajian->user->nama }}</p>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img src="/assets_admin/assets/img/arrow-right-square.svg">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h1 class="text-edit">Edit by</h1>
                                        @foreach($userkajian->versions as $version)
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
$(document).ready(function() {
    $(".dropdown").on("click", function(event) {
        // Mencegah default behavior dari anchor tag
        event.preventDefault();

        // Menampilkan atau menyembunyikan dropdown
        $(this).find(".dropdown-menu").toggle();
    });
});

document.getElementById('sharesid').addEventListener('click', function() {
    // Buat URL yang ingin Anda bagikan
    var urlToShare = 'https://www.instagram.com/ey_kean/'; // Ganti dengan URL yang sesuai

    // Salin URL ke clipboard
    navigator.clipboard.writeText(urlToShare).then(function() {
        alert('Link telah disalin ke clipboard!');
    }).catch(function(err) {
        console.error('Tidak dapat menyalin teks: ', err);
    });
});

function showDeleteConfirmation() {
    // Implement your delete logic here
    alert("Delete option clicked!");
}
</script>
@endsection