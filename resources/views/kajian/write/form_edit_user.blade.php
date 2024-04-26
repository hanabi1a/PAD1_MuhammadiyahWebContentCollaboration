@extends('layouts.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <h1 class="mt-2 heading3"><strong>Edit Kajian</strong></h1>
                    <hr>
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
                                        <input type="text" class="form-control input-default" id="val-tempat"
                                            name="val_tempat" placeholder="Tempat">
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
                                            placeholder="Deskripsi"
                                            style="resize: vertical; min-height: 100px;"></textarea>
                                    </div>
                                </div>


                                <!-- Photo Section -->
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-foto">Foto</label>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="foto-input"
                                                    name="val_foto_kajian" accept=".png, .jpg, .jpeg">
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

                                <!-- Document Section -->
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-dokumen">File</label>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="dokumen-input"
                                                    name="val_dokumen" accept=".pdf, .doc, .docx">
                                                <label class="custom-file-label-dokumen custom-file-label"
                                                    for="dokumen-input">Choose file</label>
                                            </div>
                                        </div>
                                        <p class="text-upload-foto">Pastikan untuk mengunggah file Anda dalam salah
                                            satu format:
                                            PDF, DOC, DOCX.</p>
                                        <div class="drop-area" id="drop-area-dokumen">
                                            <i class="fa fa-cloud" style="color: #04454D;"></i><br>
                                            Drag & Drop File Di Sini
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
                </div>
        </section>
    </div>
</main>
@endsection