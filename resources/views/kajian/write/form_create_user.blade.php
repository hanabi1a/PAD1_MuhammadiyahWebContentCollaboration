@extends('layouts.layout')

@section('content')

<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <br/><br/>
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <div class="card-form">
                        <h1 class="heading3 title-form"><strong>Unggah Kajian</strong></h1>
                        <div class="card-body">
                            <h1 class="heading4 mb-3"><strong>Data Kajian</strong></h1>
                            <div class="form-validation">
                                <form class="form-valide" action="{{ route('kajian.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- Judul -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_judul">Judul Kajian
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text"
                                                class="form-control input-default @error('judul') is-invalid @enderror"" id="
                                                val_judul" name="val_judul" placeholder="Judul Kajian">
                                            @if ($errors->has('val_judul'))
                                            <span class="text-danger">{{ $errors->first('val_judul') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Pemateri -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-pemateri">Pemateri
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="val-pemateri"
                                                name="val_pemateri" placeholder="Pemateri">
                                        </div>
                                    </div>

                                    <!-- Tempat -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-tempat">Tempat
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="val-tempat"
                                                name="val_tempat" placeholder="Tempat">
                                        </div>
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_tanggal">Tanggal</label>
                                        <div class="col-lg-8">
                                            <input type="date" class="form-control input-default" id="val-tanggal"
                                                name="val_tanggal">
                                        </div>
                                    </div>
                                    <!-- Deskripsi -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_deskripsi">Deskripsi</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" id="editor" name="val_deskripsi" 
                                                style="resize: vertical; min-height: 100px;"></textarea>
                                        </div>
                                    </div>
                                    <!-- Photo Section -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-foto">Foto Kajian</label>
                                        <div class="col-lg-8">
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
                                                Tarik & Lepas Foto Disini
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Document Section -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-dokumen">File Kajian</label>
                                        <div class="col-lg-8">
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
                                                Tarik & Lepas File Disini
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Kategori -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-kategori">Kategori</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select class="form-select">
                                                    <option value="" disabled>Pilih Kategori</option>
                                                    <option value="Fiqih">Fiqih</option>
                                                    <option value="Alquran">Alquran</option>
                                                    <option value="Ramadhan">Ramadhan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5 mb-4">
                                        <button type="submit" class="btn-green-submit btn-block">Unggah Kajian</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>
<script>
    document.getElementById('shareid').addEventListener('click', function () {
        // Buat URL yang ingin Anda bagikan
        var urlToShare = 'https://www.instagram.com/ey_kean/'; // Ganti dengan URL yang sesuai

        // Salin URL ke clipboard
        navigator.clipboard.writeText(urlToShare).then(function () {
            alert('Link telah disalin ke clipboard!');
        }).catch(function (err) {
            console.error('Tidak dapat menyalin teks: ', err);
        });
    });

    function showDeleteConfirmation() {
        // Implement your delete logic here
        alert("Delete option clicked!");
    }

</script>

@endsection
