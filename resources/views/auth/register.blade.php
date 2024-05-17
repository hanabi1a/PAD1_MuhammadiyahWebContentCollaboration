<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-signup.css') }}">
    <title>Halaman Register</title>
</head>


<body>
    <div class="container1">
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2"
                style="background-image: url('{{ asset('assets/img/bgsignup.png') }}');"></div>
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">

                        @switch($page)
                            @case(1)
                            <!-- Form Slide 2 -->
                            <form id="form2" action="{{ route('register.step2') }}" method="post"
                                enctype="multipart/form-data" class="form-slide">
                                <h3 class="heading1"><strong>Daftar Akun</strong></h3>
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="tempat-lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            id="tempat-lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="tanggal-lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir"
                                            id="tanggal-lahir" name="tanggal_lahir">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" placeholder="Pekerjaan" id="pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" id="val-alamat"
                                            name="alamat" placeholder="Alamat">
                                    </div>
                                    <div class="form-group col-md-3 mt-3">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="custom-control custom-radio mt-2">
                                            <input type="radio" id="jenis_kelamin_perempuan" name="jenis_kelamin"
                                                class="custom-control-input" value="P">
                                            <label class="custom-control-label"
                                                for="jenis_kelamin_perempuan">Perempuan</label>
                                        </div>
                                        <div class="custom-control custom-radio mt-3">
                                            <input type="radio" id="jenis_kelamin_laki" name="jenis_kelamin"
                                                class="custom-control-input" value="L">
                                            <label class="custom-control-label bullet-option"
                                                for="jenis_kelamin_laki">Laki-Laki</label>
                                        </div>
                                    </div>
                                </div>

                                <button type="button"
                                    class="btn-before col-5 btn mt-5 mr-6 prev-slide">Sebelumnya</button>
                                <button type="submit" class="btn-after col-5 btn mt-5 next-slide">Selanjutnya</button>
                            </form>

                            @break
                        @case(2)
                            <!-- Form Slide 3 -->
                            <form id="form3" action="{{ route('register.step3') }}" method="post"
                                enctype="multipart/form-data" class="form-slide">
                                <h3 class="heading1"><strong>Daftar Akun</strong></h3>
                                @csrf
                                <p class="caption-title-signup"><strong>Data Kartu Keanggotaan Muhammadiyah
                                        (Opsional)</strong></p>
                                <div class="form-row">
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="nomor_keanggotaan">Nomor Anggota</label>
                                        <input type="text" class="form-control" placeholder="Nomor Anggota"
                                            id="nomor_keanggotaan" name="nomor_keanggotaan">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="cabang">Cabang</label>
                                        <input type="text" class="form-control" placeholder="Cabang" id="cabang"
                                            name="cabang">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="daerah">Daerah</label>
                                        <input type="text" class="form-control" placeholder="Daerah" id="daerah"
                                            name="daerah">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="wilayah">Wilayah</label>
                                        <input type="text" class="form-control" placeholder="Wilayah" id="wilayah"
                                            name="wilayah">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="foto_kta">Foto KTA</label>
                                        <input type="file" class="form-control" id="foto_kta" name="foto_kta">
                                        @if ($errors->has('foto_kta'))
                                        <span class="text-danger">{{ $errors->first('foto_kta') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="foto_profile">Foto Profil</label>
                                        <input type="file" class="form-control" id="foto_profile" name="foto_profile">
                                        @if ($errors->has('foto_profile'))
                                        <span class="text-danger">{{ $errors->first('foto_profile') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <button type="button" class="btn-before col-5 btn mt-5 mr-6 prev-slide"
                                    action="{{ route('register.show', ['page' => 3]) }}">Lewati</button>
                                <button type="submit" class="btn-after col-5 btn mt-5 next-slide">Simpan</button>
                            </form>

                            @break

                        @case(3)
                            <!-- Form Slide 4 -->
                            <form id="form4" action="{{ route('register.step4') }}" method="post"
                                enctype="multipart/form-data" class="form-slide">
                                <h3 class="heading1"><strong>Kategori kajian apa yang Anda sukai?</strong></h3>
                                <p class="ml-3 caption-title-signup">Pilih 5 Kategori</p>
                                @csrf
                                <div class="form-row justify-content-center align-items-center">
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Al Qur'an</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Hadist</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Aqidah</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Fiqih</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Sejarah</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Pendidikan</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>llmu
                                        Sosial</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Pendidikan</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Teknologi</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Humaniora</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>llmu
                                        Sosial</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Pendidikan</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Teknologi</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Humaniora</button>
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Teknologi</button>
                                    <button type="button"
                                        class="align-item-centerform-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Humaniora</button>

                                    <button type="button"
                                        class="btn-before col-5 btn mt-5 mr-6 prev-slide">Sebelumnya</button>
                                    <input type="submit" class="btn-after col-5 btn mt-5" value="Register">
                                </div>
                            </form>

                            @break
                        @default
                            <!-- Form Slide 1 -->
                            <form id="form1" method="POST" action="{{ route('register.step1') }}" class="form-slide">
                                <h3 class="heading1"><strong>Daftar Akun</strong></h3>

                                @csrf
                                <!-- Name -->
                                <div>
                                    <label for="name">Nama Lengkap</label>
                                    <input id="name" class="form-control" type="text" name="name"
                                        value="{{ old('name') }}" required autofocus autocomplete="name"
                                        placeholder="Nama Lengkap">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Username -->
                                <div class="mt-4">
                                    <label for="username">Username</label>
                                    <input id="username" class="form-control" type="text" name="username"
                                        value="{{ old('username') }}" required autocomplete="username"
                                        placeholder="Username">
                                    @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Email Address -->
                                <div class="mt-4">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Password -->
                                <div class="mt-4">
                                    <label for="password">Kata Sandi</label>
                                    <input id="password" class="form-control" type="password" name="password" required
                                        autocomplete="new-password" placeholder="Kata Sandi">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                                    <input id="password_confirmation" class="form-control" type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Konfirmasi Kata Sandi">
                                    @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-block btn-after mt-3 next-slide">Selanjutnya
                                </button>


                            </form>

                        @endswitch

                            <p class="text-center">Telah memiliki akun? <a href="register">Masuk di sini</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    </script>
    </script>
</body>
</html>