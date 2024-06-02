
@extends('layouts.layout')

@section('style')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

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
        }

        .profile-header{
            padding: 16px;
        }

        h3.heading3 {
            margin-left: 0px;
            padding-left: -50px
        }

        .back-button {
            height: 48px;
            width: 48px;
            position: fixed;
            left: -100px;
            top: 10px;
            padding: 10px;
            background-color: #f8f9fa00;
            border: none;
            border-radius: 100%;
            cursor: pointer;
            color: black
        }


    </style>
@endsection

@section('content')
    <main>
        <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
            <section id="akun-user">
                <div class="container">


                    
                    <div class="card top">
                        <a href="{{ url()->previous() }}" class="back-button">
                            <span class="material-symbols-outlined">
                            chevron_backward
                            </span>
                        </a>

                        <h1 class="mt-2 heading3" style="text-align: center"><strong>Ubah Informasi Akun</strong></h1>
                    </div>
                    <div class="card bottom">

                        <br>

                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                @if($user->foto_profile == null)
                                    <img class="profile-picture" src="/assets/img/foto_default.png" alt="profile_picture">
                                @else
                                    <img class="profile-picture" src="{{asset('storage/' . $user->foto_profile)}}" alt="profile_picture">
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
                            </div>
                        </div>

                        

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif


                        <div class="card-body">

                            <div class="hr-blue"></div>

                            <h3 class="heading3">Data Pribadi</h3>

                            <div class="form-validation">

                            <form class="form-valide" action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                                @method('put')        
                                @csrf

                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-nama-lengkap">Username
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->username}}"
                                                id="val-nama" name="username" placeholder="Nama">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-nama">Nama Lengkap
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->nama}}"
                                                id="val-nama" name="nama" placeholder="Nama">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-tempat-lahir">Tempat Lahir
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->tempat_lahir}}"
                                                id="val-tempat-lahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-tanggal-lahir">Tanggal Lahir
                                        </label>
                                        <div class="row">
                                            <input type="date" class="form-control input-default" value="{{$user->tanggal_lahir}}"
                                                id="val-tanggal-lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-pekerjaan">Pekerjaan
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->pekerjaan}}"
                                                id="val-pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-alamat">Alamat
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->alamat}}"
                                                id="val-alamat" name="alamat" placeholder="Alamat">
                                        </div>
                                    </div>

                                    {{-- Jenis kelamin --}}
                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-jenis-kelamin">Jenis Kelamin
                                        </label>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="L" id="val-jenis-kelamin-l" name="jenis_kelamin" @if($user->jenis_kelamin == 'L') checked @endif>
                                                <label class="form-check-label" for="val-jenis-kelamin-l">
                                                    Laki-laki
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="P" id="val-jenis-kelamin-p" name="jenis_kelamin" @if($user->jenis_kelamin == 'P') checked @endif>
                                                <label class="form-check-label" for="val-jenis-kelamin-p">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                                    <div class="hr-blue"></div>

                                    {{-- Registered User Only!! --}}

                                    <h3 class="heading3">Data Keanggotaan</h3>

                                    <div class="form-group">
                                        <label class="row col-form-label" for="val-status">Status Keanggotaan
                                        </label>
                                        <div class="row">
                                            <select class="form-control input-default" id="val-status" name="status">
                                                @if ($user->role == 'admin')
                                                    <option value="admin" selected>Admin</option>
                                                @elseif ($user->role == 'registered')
                                                    <option value="registered" selected>Anggota</option>
                                                    <option value="user">Pengguna Biasa</option>
                                                @else 
                                                    <option value="pending_registered">Anggota</option>
                                                    <option value="user" selected>Non Anggota</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Nomor Keanggotaan --}}
                                    <div id="fnk" class="form-group">
                                        <label class="row col-form-label" for="val-nomor-keanggotaan">Nomor Keanggotaan
                                        </label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" value="{{$user->nomor_keanggotaan}}"
                                                id="val-nomor-keanggotaan" name="nomor_keanggotaan" placeholder="Nomor Keanggotaan">
                                        </div>
                                    </div>

                                    {{-- Cabang --}}
                                    <div id="fc" class="form-group">
                                        <label class="row col-form-label" for="val-cabang">Cabang</label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" id="val-cabang" name="cabang" value="{{ $user->cabang }}">
                                        </div>
                                    </div>

                                    {{-- Daerah --}}
                                    <div id="fd" class="form-group">
                                        <label class="row col-form-label" for="val-daerah">Daerah</label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" id="val-daerah" name="daerah" value="{{ $user->daerah }}">
                                        </div>
                                    </div>

                                    {{-- Wilayah --}}
                                    <div id="fw" class="form-group">
                                        <label class="row col-form-label" for="val-wilayah">Wilayah</label>
                                        <div class="row">
                                            <input type="text" class="form-control input-default" id="val-wilayah" name="wilayah" value="{{ $user->wilayah }}">
                                        </div>
                                    </div>

                                    {{-- Foto KTA --}}
                                    <div id="fkta" class="form-group">
                                        <label class="row col-form-label gray-box" for="val-foto-kta">Foto KTA Muhammadiyah</label>
                                        <div class="row">

                                            @if($user->foto_kta)
                                                <img class="col foto_kta" src="{{asset('storage/'. $user->foto_kta)}}" alt="Foto KTA">
                                            @else 
                                                <img class="col foto_kta" src="/assets/img/foto_default.png" alt="Foto KTA">
                                            @endif

                                            <div class="col-lg-8 col-md-8 kta-wrap-container">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="foto-input"
                                                            name="foto_kta" accept=".png, .jpg, .jpeg">
                                                        <label class="custom-file-label-foto custom-file-label"
                                                            for="foto-kta-input">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <p class="text-upload-foto">Pastikan untuk mengunggah foto KTA Anda dalam salah
                                                    satu format:
                                                    PNG, JPG, JPEG.</p>
                                                <div class="drop-area" id="drop-area-foto">
                                                    <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                                    Drag & Drop Gambar Disini
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="row col-form-label"></label>
                                        <button type="submit" class="btn-green-submit btn-block">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        

                    </div> <!-- End Container -->
                    <!-- End Form Validation -->

                </div>
        </div>
        </section>
        </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#val-status').change(function() {
                if ($(this).val() == 'user') {
                    $('#fnk').hide();
                    $('#fc').hide();
                    $('#fd').hide();
                    $('#fw').hide();
                    $('#fkta').hide();
                } else {
                    $('#fnk').show();
                    $('#fc').show();
                    $('#fd').show();
                    $('#fw').show();
                    $('#fkta').show();
                }
            });
        });
    </script>

    @if ($user->isAdmin() || $user->isRegistered())
        <script>
            $(document).ready(function() {
                $('#fnk').show();
                $('#fc').show();
                $('#fd').show();
                $('#fw').show();
                $('#fkta').show();
            });
        </script>
    @else
        <script>
            $(document).ready(function() {
                $('#fnk').hide();
                $('#fc').hide();
                $('#fd').hide();
                $('#fw').hide();
                $('#fkta').hide();
            });
        </script>
    @endif

@endsection