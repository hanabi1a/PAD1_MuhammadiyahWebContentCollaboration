@extends('layouts.layout_admin')

@section('style')
    <style>
        .note-editor.fullscreen {
            background-color: white
        }

        .note-editable.fullscreen {
            background-color: white
        }
    </style>
@endsection

@section('content')

<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <br/><br/>
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <div class="card-form">
                        @if ($kajian != null)
                            <h1 class="heading3 title-form"><strong>Edit Kajian</strong></h1>
                        @else
                            <h1 class="heading3 title-form"><strong>Unggah Kajian</strong></h1>
                        @endif
                
                        
                        <div class="card-body">
                            <h1 class="heading4 mb-3"><strong>Data Kajian</strong></h1>
                            <div class="form-validation">
                                @if ($kajian != null && $new_version == null)
                                    <form class="form-valide" action="{{ route('kajian.update', $kajian) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                @else
                                    <form class="form-valide" action="{{ route('kajian.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @if(isset($new_version) && $new_version != null && $new_version)
                                        <input type="hidden" name="is_new_version" value="{{$new_version}}">
                                        <input type="hidden" name="old_kajian_id" value="{{$kajian->id}}">
                                    @endif

                                @endif
                                    <!-- Judul -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_judul">Judul Kajian
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text"
                                                class="form-control input-default @error('judul') is-invalid @enderror" 
                                                id="val_judul" name="val_judul" placeholder="Judul Kajian"
                                                @if ($kajian != null)
                                                    value="{{ $kajian->judul_kajian }}"
                                                @endif
                                                >
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
                                                name="val_pemateri" placeholder="Pemateri"
                                                @if ($kajian != null)
                                                    value="{{ $kajian->pemateri }}"
                                                @endif
                                                >
                                        </div>
                                    </div>

                                    <!-- Tempat -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-tempat">Tempat
                                        </label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control input-default" id="val-tempat"
                                                name="val_tempat" placeholder="Tempat"
                                                @if ($kajian != null)
                                                    value="{{ $kajian->lokasi_kajian }}"
                                                @endif
                                                >
                                        </div>
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_tanggal">Tanggal</label>
                                        <div class="col-lg-8">
                                            <input type="date" class="form-control input-default" id="val-tanggal"
                                                name="val_tanggal"
                                                @if ($kajian != null)
                                                    value="{{ $kajian->tanggal_postingan }}"
                                                @endif
                                                >
                                        </div>
                                    </div>
                                    <!-- Deskripsi -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val_deskripsi">Deskripsi</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" id="editor" name="val_deskripsi" 
                                                style="resize: vertical; min-height: 100px;">
                                                @if ($kajian != null)
                                                    {{ $kajian->deskripsi_kajian }}
                                                @endif
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- Photo Section -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-foto">Foto Kajian</label>
                                        <div class="col-lg-8">
                                            <!-- Display existing image -->
                                            @if($kajian != null && $kajian->foto_kajian)
                                                <div>
                                                    <img src="{{ asset('storage/' . $kajian->foto_kajian) }}" alt="Foto Kajian" style="max-width: 100%;">
                                                </div>
                                            @endif
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

                                    
                                    <!-- Kategori -->
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-kategori">Kategori</label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <select class="form-select">
                                                    @if ($kajian != null && $kajian->kategori != null)
                                                        <option value="{{ $kajian->kategori }}" selected disabled>{{ $kajian->kategori }}</option>
                                                    @endif
                                                    <option value="" disabled>Pilih Kategori</option>
                                                    @foreach ($kategori_kajian as $item)
                                                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5 mb-4">
                                        <button type="submit" class="btn-green-submit btn-block">Lanjut</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</main>
@if (session('alert'))
    <script>
        alert('{{ session('alert') }}');
    </script>
@endif
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
