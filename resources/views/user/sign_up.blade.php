<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-signup.css">
    <title>Sign Up</title>
</head>

<body> @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif

    <div class="container1">
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('assets/img/bg-sign-up.png');"></div>
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                            <h3><strong>Sign Up</strong></h3>
                            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"
                                            id="nama-lengkap" name="nama">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" class="form-control" placeholder="Pekerjaan" id="pekerjaan"
                                            name="pekerjaan">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" placeholder="Username" id="username"
                                            name="username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" id="alamat"
                                            name="alamat">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" id="password"
                                            name="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cabang">Cabang</label>
                                        <input type="text" class="form-control" placeholder="Cabang" id="cabang"
                                            name="cabang">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nomor_keanggotaan">Nomor Anggota</label>
                                        <input type="text" class="form-control" placeholder="Nomor Anggota"
                                            id="nomor_keanggotaan" name="nomor_keanggotaan">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="wilayah">Wilayah</label>
                                        <input type="text" class="form-control" placeholder="Wilayah" id="wilayah"
                                            name="wilayah">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tempat-lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" placeholder="Tempat Lahir"
                                            id="tempat-lahir" name="tempat_lahir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="daerah">Daerah</label>
                                        <input type="text" class="form-control" placeholder="Daerah" id="daerah"
                                            name="daerah">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tanggal-lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Lahir"
                                            id="tanggal-lahir" name="tanggal_lahir">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="foto_profile">Foto Profil</label>
                                        <input type="file" class="form-control" id="foto_profile" name="foto_profile">
                                        @if ($errors->has('foto_profile'))
                                        <span class="text-danger">{{ $errors->first('foto_profile') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jenis-kelamin">Jenis Kelamin</label>
                                        <div>
                                            <label class="control control--checkbox"><span
                                                    class="caption">Perempuan</span>
                                                <input type="checkbox" name="jenis-kelamin" value="Perempuan">
                                                <div class="control__indicator"></div>
                                            </label>
                                            <label class="control control--checkbox"><span
                                                    class="caption">Laki-Laki</span>
                                                <input type="checkbox" name="jenis-kelamin" value="Laki-Laki">
                                                <div class="control__indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="foto_kta">Foto KTA</label>
                                        <input type="file" class="form-control" id="foto_kta" name="foto_kta">
                                        @if ($errors->has('foto_kta'))
                                        <span class="text-danger">{{ $errors->first('foto_kta') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <input type="submit" value="Register" class="btn btn-block btn-primary">
                            </form>
                            <p class="text-center">Already Account? <a href="sign_in">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/script.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>