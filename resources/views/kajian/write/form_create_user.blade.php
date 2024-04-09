@extends('layouts.layout')

@section('content')
<main>
    <section id="search-form">
        <div class="row">
            <div class="search">
                <input type="text" class="search-input" placeholder="Search..." name="">
                <a href="#" class="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                                d="M21.7505 20.6895L16.0865 15.0255C17.4475 13.3914 18.1263 11.2956 17.9815 9.17389C17.8366 7.05219 16.8794 5.06801 15.3089 3.6341C13.7384 2.2002 11.6755 1.42697 9.54942 1.47528C7.42333 1.52359 5.39772 2.38971 3.89396 3.89347C2.3902 5.39723 1.52408 7.42284 1.47577 9.54893C1.42746 11.675 2.20068 13.7379 3.63459 15.3084C5.0685 16.8789 7.05268 17.8361 9.17438 17.981C11.2961 18.1258 13.3919 17.4471 15.026 16.086L20.69 21.75L21.7505 20.6895ZM3.00045 9.74996C3.00045 8.41494 3.39633 7.1099 4.13803 5.99987C4.87973 4.88983 5.93394 4.02467 7.16734 3.51378C8.40074 3.00289 9.75794 2.86921 11.0673 3.12966C12.3767 3.39011 13.5794 4.03299 14.5234 4.97699C15.4674 5.921 16.1103 7.12373 16.3708 8.4331C16.6312 9.74248 16.4975 11.0997 15.9866 12.3331C15.4757 13.5665 14.6106 14.6207 13.5006 15.3624C12.3905 16.1041 11.0855 16.5 9.75045 16.5C7.96085 16.498 6.24512 15.7862 4.97967 14.5207C3.71423 13.2553 3.00244 11.5396 3.00045 9.74996Z"
                                fill="#4A5A67" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
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
                                            <textarea class="form-control" id="val-deskripsi" name="val_deskripsi"
                                                placeholder="Deskripsi"
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
                                                <div class = "custom-select">
                                                    <select class="form-control input-default custom-select" id="val-kategori" name="val_kategori">
                                                        <option value="">Pilih Kategori</option>
                                                        <option value="Fiqih">Fiqih</option>
                                                        <option value="Alquran">Alquran</option>
                                                        <option value="Ramadhan">Ramadhan</option>
                                                    </select>
                                                    <img src="/assets/img/icon/dropdown.svg" alt="Dropdown" id="dropdown-icon">
                                                </div>
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