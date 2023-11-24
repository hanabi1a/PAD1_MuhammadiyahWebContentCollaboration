@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-5">Create Kajian</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard / </a>
                <a href="data_kajian" class="active_title">
                    Data Kajian /</a><a href="data_kajian" class="active_title"> Create Kajian</a>
            </li>
        </ol>

        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ route('storekajian') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- Judul -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val_judul">Judul
                            </label>
                            <div class="col-lg-6">
                                <input type="text"
                                    class="form-control input-default @error('judul') is-invalid @enderror"" id="
                                    val_judul" name="val_judul" placeholder="Judul">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('judul') }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Pemateri -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-pemateri">Pemateri
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-pemateri"
                                    name="val_pemateri" placeholder="Pemateri">
                            </div>
                        </div>

                        <!-- Tempat -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tempat">Tempat
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-tempat" name="val_tempat"
                                    placeholder="Tempat">
                            </div>
                        </div>

                        <!-- Tanggal -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val_tanggal">Tanggal</label>
                            <div class="col-lg-6">
                                <input type="date" class="form-control input-default" id="val-tanggal"
                                    name="val_tanggal">
                            </div>
                        </div>


                        <!-- Deskripsi -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val_deskripsi">Deskripsi</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-deskripsi" name="val_deskripsi"
                                    placeholder="Deskripsi"></textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-foto">Foto</label>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file-input"
                                            name="val_foto_kajian">
                                        <label class="custom-file-label" for="file-input">Choose
                                            file</label>
                                    </div>
                                </div>
                                <p class="text-upload-foto">Pastikan untuk mengunggah foto Anda dalam salah
                                    satu format berikut: PNG, JPG, JPEG.</p>
                                <div class="drop-area" id="drop-area">
                                    <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                    Drag & Drop Gambar Disini
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tanggal">File</label>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file-input" name="val_dokumen">
                                        <label class="custom-file-label" for="file-input">Choose
                                            file</label>
                                    </div>
                                </div>
                                <p class="text-upload-foto">Pastikan untuk mengunggah file Anda dalam salah
                                    satu format berikut: PDF, DOC, DOCX.</p>
                                <div class="drop-area" id="drop-area">
                                    <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                    Drag & Drop File Di Sini
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label"></label>
                            <div class="col-lg-6">
                                <input type="submit" class="btn btn-primary btn-block" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
@endsection