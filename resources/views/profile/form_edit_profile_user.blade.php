
@extends('layouts.layout_user_2')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <h1 class="mt-2 heading3"><strong>Edit Profile User</strong></h1>
                    <hr>

                    <body> @if($errors->any())
                        {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif
                        <div class="card-body">
                            <div class="form-validation">
                            <form class="form-valide" action="{{ route('profile.store') }}" method="post" enctype="multipart/form-data">
                            @method('put')        
                            @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-nama">Nama
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" value="{{$user->nama}}"
                                                id="val-nama" name="nama" placeholder="Nama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-nama-lengkap">Username
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" value="{{$user->username}}"
                                                id="val-nama" name="username" placeholder="Nama">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-foto">Foto Profile</label>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto-input"
                                                        name="foto_profiles" accept=".png, .jpg, .jpeg">
                                                    <label class="custom-file-label-foto custom-file-label"
                                                        for="foto-input">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                            <p class="text-upload-foto">Pastikan untuk mengunggah foto Anda dalam salah
                                                satu format:
                                                PNG, JPG, JPEG.</p>
                                            <div class="drop-area" id="drop-area-foto">
                                                <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                                Drag & Drop Gambar Disini
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label"></label>
                                        <div class="col-md-6 mt-2">
                                            <button type="submit" class="btn-green-submit btn-block">Submit</button>
                                        </div>
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
@endsection