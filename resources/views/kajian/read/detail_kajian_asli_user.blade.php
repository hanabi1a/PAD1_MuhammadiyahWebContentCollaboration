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
    <section id="search-kajian">
        <div class="row">
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
    </section>

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
                        <button type="submit" class="btn-green-submit btn-block" onclick="window.location.href = '{{ route('kajian.edit.new_version', $userkajian) }}'">
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
                                        <a class="reference_link" href="{{route('kajian.show', $userkajian->current_versions->oldKajian)}}">
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