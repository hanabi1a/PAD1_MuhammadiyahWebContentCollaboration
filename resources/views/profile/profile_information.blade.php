
@extends('layouts.layout')

@section('style')
    <style>
        .kta-wrap-container {
            padding: 16px;
        }

        .gray-box {
            background: rgba(217, 217, 217, 0.50);
            padding: 8px 29px;
            border-radius: 7px;
        }

        img.foto_kta {
            width: 270px;
            height: 170px;
            margin: 16px 0px;
            object-fit: contain
        }

        .profile-picture {
            width: 20vh;
            height: 20vh;
            border-radius: 100%;
        }

        .btn-med {
            height: 42px;
            width: 100%;
            min-width: 150px;
            border-radius: 10px;
            margin: 8px 24px;
        }

        .hr-blue {
            margin: 32px 0px;
            height: 6px;
            background: rgba(4, 69, 77, 0.60);
        }

        .card {
            mask-clip: initial;
            
            background-color: #FFF;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)) drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        }

        .card.top{
            margin-top: 185px;
            border-radius: 20px 20px 0px 0px;
            background-color: var(--Extra, #04454D);
            color: white;
        }

        .card.bottom{
            border-radius: 0px 0px 20px 20px;
            padding-bottom: 120px
        }

        .profile-header{
            padding: 16px;
        }

        h3.heading3 {
            margin-left: 0px;
            padding-left: -50px
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
            <section id="akun-user">
                <div class="container">
                    <div class="card top">
                        <h1 class="mt-2 heading3" style="text-align: center"><strong>Informasi Akun</strong></h1>
                    </div>
                    <div class="card bottom">
                        <br>
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                @if($user->foto_profile != null)
                                    <img class="profile-picture" src="{{asset('storage/' . $user->foto_profile)}}" alt="profile_picture">
                                @else
                                    <img class="profile-picture" src="/assets/img/foto_default.png" alt="profile_picture">
                                @endif
                            </div>
                        
                            
                            <div class="col-md-6">
                                <p style="margin-bottom: 8pt">Email Pengguna</p>
                                <p><strong>{{$user->email}}</strong></p>

                                <div class="row">
                                    <form class="col-md-6 profile-header" id="uploadForm" action="{{route('profile.update.picture')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <label for="foto_profile" class="button btn-med" style="color: white; cursor: pointer;">
                                            Ubah Foto Profil
                                        </label>
                                        <input type="file" id="foto_profile" name="foto_profile" style="display: none;" onchange="document.getElementById('uploadForm').submit();">
                                    </form>
                                    <form class="col-md-6 profile-header" action="{{route('profile.delete.picture')}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn-med" style="border-radius: 10px">
                                            Hapus Foto Profil
                                        </button>
                                    </form>
                                    
                                </div>

                                <button class="btn-med" onclick="window.location.href = '{{ route('profile.edit_profile') }}';">
                                    Edit Profile
                                </button>
                            </div>
                        </div>

                        

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif


                        <div class="card-body">

                            <div class="hr-blue"></div>

                            <h3 class="heading3">Data Pribadi</h3>

                            {{-- Nama Lengkap --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Nama Lengkap</p>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->nama}}</p>
                                </div>
                            </div>

                            {{-- Tempat Tanggal Lahir --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Tempat, Tanggal Lahir</p>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->tempat_lahir}}, {{$user->tanggal_lahir}}</p>
                                </div>
                            </div>

                            {{-- Profesi --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Profesi</p>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->pekerjaan}}</p>
                                </div>
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Jenis Kelamin</p>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->jenis_kelamin}}</p>
                                </div>
                            </div>

                            {{-- Alamat --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p>Alamat</p>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$user->alamat}}</p>
                                </div>
                            </div>


                            @if (strpos($user->role, 'pending') !== false)
                                <div class="hr-blue"></div>

                                <h3 class="heading3">Data Keanggotaan</h3>

                                {{-- Data anda sedang diperiksa --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Status</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Pengajuan perubahan status keanggotaan sedang dalam proses</p>
                                    </div>
                                </div>

                            @elseif ($user->role == 'registered')
                                <div class="hr-blue"></div>

                                <h3 class="heading3">Data Keanggotaan</h3>

                                {{-- Status --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Status</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->role}}</p>
                                    </div>
                                </div>

                                {{-- Nomor keanggotaan --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Nomor Keanggotaan</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->nomor_keanggotaan}}</p>
                                    </div>
                                </div>

                                {{-- Cabang --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Cabang</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->cabang}}</p>
                                    </div>
                                </div>

                                {{-- Daerah --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Daerah</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->daerah}}</p>
                                    </div>
                                </div>

                                {{-- Wilayah --}}
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Wilayah</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$user->wilayah}}</p>
                                    </div>
                                </div>

                                <br>

                                <label class="row gray-box" for="val-foto-kta">Foto KTA Muhammadiyah</label>

                                @if($user->foto_kta)
                                    <img class="col foto_kta" src="{{asset('storage/'. $user->foto_kta)}}" alt="Foto KTA">
                                @else 
                                    <img class="col foto_kta" src="/assets/img/default_kta.png" alt="Foto KTA">
                                @endif
                                
                            @endif
                            
                        </div>

                        

                    </div> <!-- End Container -->
                    <!-- End Form Validation -->

                </div>
        </div>
        </section>
        </div>
    </main>

@endsection