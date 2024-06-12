@extends('layouts.layout_admin')

@section('content')
    <main>
        <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
            <h1 class="mt-2">Kategori Kajian</h1>
            <ol class="breadcrumb mt-2">
                <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_user"
                        class="active_title"> Kategori Kajian</a></li>
            </ol>
            
            <div class="card mb-4">
                <div class="card-body">
                    @if ($is_edit)
                        <h1>Edit Kategori Kajian</h1>
                    @else 
                        <h1>Tambah Kategori Kajian</h1>
                    @endif   

                    <form 
                        @if ($is_edit)
                            action="{{route('admin.kategori_kajian.update', $kategori_kajian->id)}}"
                        @else
                            action="{{route('admin.kategori_kajian.store')}}" 
                        @endif
                        method="POST">

                        @csrf

                        @if ($is_edit)
                            @method('put')
                        @endif

                        <div class="form-group mb-4">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control" required
                                value="{{ $is_edit ? $kategori_kajian->nama : '' }}">
                        </div>
                        <div class="row justify-content-between">
                            <button type="button" class="col-md-3 btn btn-secondary" onclick="window.history.back()">Cancel</button>
                            <button type="submit" class="col-md-3 btn btn-primary">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
