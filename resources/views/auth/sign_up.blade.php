<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-signup.css">
    <title>Sign Up</title>
</head>

<body>
    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif

    <div class="container1">
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('assets/img/bg-sign-up.png');"></div>
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <form id="form1" action="" method="post" enctype="multipart/form-data" class="form-slide">
                                <h3><strong>Daftar</strong></h3>
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"
                                            id="nama-lengkap" name="nama">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="username">Nama Pengguna</label>
                                        <input type="text" class="form-control" placeholder="Nama Pengguna"
                                            id="username" name="username">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="password">Kata Sandi</label>
                                        <input type="password" class="form-control" placeholder="Kata Sandi"
                                            id="password" name="password">
                                    </div>
                                    <div class="form-group col-md-12 mt-3">
                                        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" placeholder="Konfirmasi Kata Sandi"
                                            id="password_confirmation" name="password_confirmation">
                                    </div>
                                </div>
                            </form>
                            <form id="form2" action="" method="post" enctype="multipart/form-data" class="form-slide">
                                <h3><strong>Daftar</strong></h3>
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
                                        <input type="text" class="form-control" placeholder="Alamat" id="alamat"
                                            name="alamat">
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
                            </form>
                            <form id="form3" action="" method="post" enctype="multipart/form-data" class="form-slide">
                                <h3><strong>Daftar</strong></h3>
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
                            </form>
                            <form id="form4" action="" method="post" enctype="multipart/form-data" class="form-slide">
                                <h3><strong>Kategori kajian apa yang Anda sukai?</strong></h3>
                                <p class="ml-3 caption-title-signup">Pilih 5 Kategori</p>
                                @csrf
                                <div class="form-row justify-content-center align-items-center">
                                    <button type="button" class="form-group col-md-5 btn btn-kategori mr-5 ml-1"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i> Al Qur'an</button>
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
                                    <button type="button" class="form-group col-md-5 btn btn-kategori"><i
                                            class="fas fa-plus-square fa-lg mr-2"></i>Humaniora</button>
                                </div>
                                <input type="submit" value="Register" class="btn btn-block btn-primary mt-3">
                            </form>
                            <nav id="pagination" aria-label="pagination-sign-up" class="mt-4">
                                <ul class="pagination">
                                    <li class="page-item active" data-slide="1">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item" data-slide="2">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item" data-slide="3">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item" data-slide="4">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                </ul>
                            </nav>
                            <p class="text-center">Telah memiliki akun? <a href="sign_in">Masuk sini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('.form-slide').hide();
            $('#form1').show();

            $('.page-item').click(function () {
                var slide = $(this).data('slide');
                $('.form-slide').hide();
                $('#form' + slide).show();
                $('.page-item').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>

</html>
