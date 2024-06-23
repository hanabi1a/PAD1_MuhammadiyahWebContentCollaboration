@extends('layouts.layout')


@section('style')
    <style>
        .diff-text del{
            color: red;
        }
        .diff-text ins{
            color: green;
        }

        .outline-box {
            border: 1px solid #ababab; /* Change the color as needed */
            padding: 24px; /* Adjust the padding as needed */
            border-radius: 24px;
        }

        .reference_link {
            color: rgb(3, 3, 39);
            transition: 300ms
        }

        .reference_link:hover {
            color: rgb(16, 16, 130);
            transition: 300ms
        }

        .limited {
            height: 300px; /* Adjust as needed */
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }
        
        .limited::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50px; /* Adjust as needed */
            background: linear-gradient(to bottom, transparent, white);
        }
        
        .see-more {
            background-color: #4CAF50; /* Green background */
            border: none; /* Remove border */
            color: white; /* White text */
            padding: 15px 32px; /* Padding */
            text-align: center; /* Centered text */
            text-decoration: none; /* Remove underline */
            display: block;
            font-size: 16px;
            margin: auto;
            cursor: pointer; /* Cursor on hover */
            transition-duration: 0.4s; /* Transition effects */
            border-radius: 24px;
        }

        .see-more:hover {
            background-color: white; /* White background */
            color: black; /* Black text */
        }

    </style>

@endsection

@section('content')
<main>
    <div class="container-fluid px-5 mt-sm-2 mb-sm-2 justify-content-center">
        <section id="kajian">
            <div class="card justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="content col-md-6 order-md-1 me-5">
                            <div class="row mb-3 ">
                            <div class="col-md-11">
                                <div class="account-detail row align-items-center">
                                    <div class="col-md-3 d-flex justify-content-center">
                                        @if($userkajian->user)
                                            <a href="{{ route('profile.akun_pengguna') }}">
                                                <img class="pp-account" 
                                                    src="{{ asset('storage/' . $userkajian->user->foto_profile) }}" 
                                                    alt="Foto tidak ada" style="border-radius: 50%; width: 50px;">
                                            </a>
                                        @else
                                            <a href="{{ route('profile.akun_pengguna') }}">
                                                <img src="\assets\img\foto_default.png" alt="Foto Profil Default" style="border-radius: 50%; width: 50px;">
                                            </a>
                                        @endif
                                    </div>
                                    @if ($userkajian->user)
                                        <div class="name-account col-md-9 align-items-center" style="display: flex;">
                                            <a style="text-decoration:none; color: #000;" href="{{ route('profile.akun_pengguna') }}">
                                                <div class="nama">{{ $userkajian->user->username }}</div>
                                            </a>
                                        </div>
                                    @else
                                        <div class="name-account col-md-9 mb-5 align-self-center mt-4">
                                            <div class="nama">User tidak ditemukan</div>
                                        </div>
                                    @endif
                                </div>
                                <img src="{{ asset('storage/' . $userkajian->foto_kajian) }}" alt="" class="img-fluid">
                            </div>
                                <div class="desc-kajian col-md-12">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Judul</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->judul_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Pemateri</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->pemateri }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Tanggal</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-5">
                                                <p>{{ $userkajian->tanggal_postingan }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Lokasi</strong>
                                            </div>
                                            <div class="col-md-1">
                                                <strong>:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $userkajian->lokasi_kajian }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="desc">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <strong>Deskripsi</strong>
                                            </div>
                                            <div class="col-md-1">
                                                :
                                            </div>
                                        </div>
                                        <p>{!! $userkajian->deskripsi_kajian !!}</p>
                                    </div>

                                    <div class="kategori">
                                        <strong>{{ $userkajian->kategori_kajian }}</strong>
                                    </div>

                                    <div class="mt-4">
                                        <button type="button" class="btn-download-share-kajian btn-block" onclick="window.location.href = '{{ route('kajian.download', $userkajian->id) }}'">
                                            <img src="/assets/img/icon/unduh-kajian.svg" alt="Unduh Icon" class="icon-img"> Unduh File Kajian
                                        </button>
                                        <button type="button" class="btn-download-share-kajian btn-block"
                                            onclick="navigator.clipboard.writeText(window.location.href); alert('URL copied to clipboard.');"
                                            >
                                            <img src="/assets/img/icon/share-kajian.svg" alt="Bagikan Icon" class="icon-img"> Bagikan Tautan Kajian
                                        </button>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-2">

                        @if (Auth::user() != null && Auth::user()->isAdmin())
                        <button type="submit" class="btn-green-submit btn-block" onclick="window.location.href = '{{ route('admin.kajian.edit.new_version', $userkajian) }}'">
                        @else
                        <button type="submit" class="btn-green-submit btn-block" onclick="window.location.href = '{{ route('kajian.edit.new_version', $userkajian) }}'">
                        @endif
                            <img src="/assets/img/icon/unggah-baru.svg" alt="Bagikan Icon" class="icon-img"> Unggah Kajian Versi Baru
                        </button>
                            <div class="card mt-4 col-md-12">
                                <div class="bungkus-card">
                                    <div class="card-body-user">
                                        <div class="row mb-4">
                                            <h1 class="heading3 mb-3"><strong>Kajian Versi Baru</strong></h1>
                                            @foreach($userkajian->versions as $version)
                                                <div class="col-md-3">
                                                    <img src="{{ asset('storage/' . $userkajian->user->foto_profile) }}"
                                                        alt="" style="border-radius: 50%; width: 60px; height: 60px;">
                                                </div>
                                                <div class="postingan col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-10 mt-3">
                                                            <p class="username-kajian-baru">{{ $userkajian->user->username }}</p>
                                                        </div>
                                                        <div class="col-md-1 mt-3">
                                                            <a href="{{ route('kajian.show', $version->kajian) }}">
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
            </div>
            @if($diffMessage)
                <div class="card">
                    <div class="container outline-box">
                        <h1 class="heading3 mb-3"><strong>Perbedaan Konten Kajian</strong></h1>
                        {{-- Real Author --}}
                        <div class="row">
                            <div class="col-md-2">
                                <strong>Kajian Referensi</strong>
                            </div>
                            <div class="col-md-1">
                                <strong>:</strong>
                            </div>
                            <div class="col-md-5">
                                @php
                                    $decodedData = json_decode($userkajian->current_versions->oldKajian);
                                @endphp
                                <p>
                                    <strong>
                                        @if (Auth::user() != null && Auth::user()->isAdmin())
                                        <a class="reference_link" href="{{route('admin.kajian.show', $userkajian->current_versions->oldKajian)}}">
                                        @else
                                        <a class="reference_link" href="{{route('kajian.show', $userkajian->current_versions->oldKajian)}}">
                                        @endif
                                            {{ $decodedData->judul_kajian }}
                                        </a>
                                    </strong> 
                                    oleh {{ $decodedData->pemateri }}
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div id="content_different" class="diff-text limited">
                            {!! $diffMessage !!}
                        </div>
                        <button 
                            id="seeMoreButton" 
                            class="see-more"
                            >See More</button>
                    </div>
                </div>
            @endif
        </section>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('seeMoreButton').addEventListener('click', function() {
            console.log('Button was clicked'); // This will print to the console when the button is clicked
        
            document.getElementById('content_different').classList.remove('limited');
            this.style.display = 'none';
        });

        function showDeleteConfirmation() {
            // Implement your delete logic here
            alert("Delete option clicked!");
        }
    });
</script>

@endsection