@extends('admin.layout')
@section('content')
<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"></li>
                    <li>
                        <a class="has-arrow" href="dashboard" aria-expanded="false">
                            <i class="fa fa-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow active" href="data_kajian" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Data Kajian</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="data_user" aria-expanded="false">
                            <i class="fa fa-user menu-icon"></i> <span class="nav-text">Data User</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_login" aria-expanded="false">
                            <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">History Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_download" aria-expanded="false">
                            <i class="fa fa-download menu-icon"></i> <span class="nav-text">History Download</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_upload" aria-expanded="false">
                            <i class="fa fa-upload menu-icon"></i><span class="nav-text">History Upload</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="sign_out" aria-expanded="false">
                            <i class="fa fa-arrow-right menu-icon"></i><span class="nav-text">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">
        <p class="text_page">Dashboard / Data Kajian</p>
        <h2 class="text_title">Edit Kajian</h2>
        <!-- row -->

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="form-valide" action="#" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-judul">Judul
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control input-default" id="val-judul"
                                                name="val-judul" placeholder="Judul">
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
                                            <input type="text" class="form-control input-default" id="val-tempat"
                                                name="val-tempat" placeholder="Tempat">
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
                                            <div class="summernote">
                                            </div>
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
                                        <label class="col-lg-4 col-form-label"></label>
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    @endsection