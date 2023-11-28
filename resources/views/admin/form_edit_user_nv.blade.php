@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">Edit Kajian</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard / </a>
                <a href="data_kajian" class="active_title">
                    Data Kajian /</a><a href="data_kajian" class="active_title"> Edit Kajian</a>
            </li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="#" method="post">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-judul">Judul
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-judul" name="val-judul"
                                    placeholder="Judul">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-pemateri">Pemateri
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-pemateri"
                                    name="val-pemateri" placeholder="Pemateri">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tempat">Tempat
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" id="val-tempat" name="val-tempat"
                                    placeholder="Tempat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tanggal">Tanggal</label>
                            <div class="col-lg-6" style="display: flex; align-items: center;">
                                <input type="text" class="form-control input-default" id="val-tanggal"
                                    name="val-tanggal" placeholder="Tanggal">
                                <button type="button" id="kalender-button">
                                    <i class="fa fa-calendar menu-icon" style="color: white;"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tanggal">Deskripsi</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-deskripsi" name="val-deskripsi"
                                    placeholder="Deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tanggal">Foto</label>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file-input">
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
                                        <input type="file" class="custom-file-input" id="file-input">
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
                            <label class="col-lg-4 col-form-label" for="val-pemateri">Commit Message
                            </label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-commit-message" name="val-commit-message"
                                    placeholder="Commit Message"></textarea>
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
</main>
@endsection