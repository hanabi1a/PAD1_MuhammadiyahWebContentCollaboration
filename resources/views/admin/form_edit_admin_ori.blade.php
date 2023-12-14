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
        <body> @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ route('update_kajian', ['id' => $kajian->id]) }}"
                        enctype="multipart/form-data"
                        method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label"  for="val-judul">Judul
                            </label>
                            <div class="col-lg-6">
                                <input type="text" value="{{$kajian->judul_kajian}}" class="form-control input-default" id="val-judul" name="val_judul"
                                    placeholder="Judul">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-pemateri">Pemateri
                            </label>
                            <div class="col-lg-6">
                                <input type="text" value="{{$kajian->pemateri}}" class="form-control input-default" id="val_pemateri"
                                    name="val_pemateri" placeholder="Pemateri">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tempat">Tempat
                            </label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control input-default" value="{{$kajian->lokasi_kajian}}" id="val-tempat" name="val_tempat"
                                    placeholder="Tempat">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val_tanggal">Tanggal</label>
                            <div class="col-lg-6">
                                <input type="date" value="{{$kajian->tanggal_postingan}}" class="form-control input-default" id="val_tanggal"
                                    name="val_tanggal">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-tanggal">Deskripsi</label>
                            <div class="col-lg-6">
                                <textarea class="form-control" id="val-deskripsi" value="{{$kajian->deskripsi_kajian}}" name="val_deskripsi"
                                    placeholder="Deskripsi"></textarea>
                            </div>
                        </div>

                        <!-- Photo Section -->
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="val-foto">Foto</label>
                            <div class="col-lg-6">
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto-input"
                                            name=" val_ed_foto" accept=".png, .jpg, .jpeg">
                                        <label class="custom-file-label-foto custom-file-label" for="foto-input">Choose
                                            file</label>
                                    </div>
                                </div>
                                <p class="text-upload-foto">Pastikan untuk mengunggah foto Anda dalam salah satu format:
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
                                            name="val_ed_dokumen" accept=".pdf, .doc, .docx">
                                        <label class="custom-file-label-dokumen custom-file-label"
                                            for="dokumen-input">Choose file</label>
                                    </div>
                                </div>
                                <p class="text-upload-foto">Pastikan untuk mengunggah file Anda dalam salah satu format:
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
</main>
@endsection