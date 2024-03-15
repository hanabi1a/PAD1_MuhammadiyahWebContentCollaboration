@extends('layouts.layout_admin')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="row col-md-12 mb-2 ">
                            <div class="col-md-11">
                                <h3 class="heading2">User Account </h3>
                            </div>
                            <div class="col-md-1 btn-end">
                                <button class="btn d-flex flex-column align-items-center"
                                    onclick="window.location.href='{{ route('admin.edit_user', $user->id) }}'">
                                    <img src="/assets_admin/assets/img/pencil-square.svg" alt="Edit Icon">
                                    <span class="text-editdownshare">Edit</span>
                                </button>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-3">
                                <img src="{{ asset('storage/' . $user->foto_profile) }}" alt="" class="img-fluid profile-user">
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <p class="heading3">Data Pribadi</p>
                                    <div class="col col-md-4">
                                        <h3 class="heading6">Nama</h3>
                                        <h3 class="heading6">Tempat, Tanggal Lahir</h3>
                                        <h3 class="heading6">Alamat</h3>
                                        <h3 class="heading6">Cabang</h3>
                                        <h3 class="heading6">Daerah</h3>
                                        <h3 class="heading6">Wilayah</h3>
                                    </div>
                                    <div class="col col-md-8">
                                        <h3 class="heading6">: {{$user->username}}</h3>
                                        <h3 class="heading6">: {{$user->tempat_lahir}},{{$user->tanggal_lahir}}</h3>
                                        <h3 class="heading6">: {{$user->alamat}}</h3>
                                        <h3 class="heading6">: {{$user->cabang}}</h3>
                                        <h3 class="heading6">: {{$user->daerah}}</h3>
                                        <h3 class="heading6">: {{$user->wilayah}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 card-body">
                            <div class="custom-card" style="width: 100%;">
                                <div class="card-header">
                                    <p class="heading4"><strong>Keanggotaan Muhammadiyah</strong></p>
                                </div>
                                <hr>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <h3 class="heading6">Alamat</h3>
                                                <h3 class="heading6">Cabang</h3>
                                                <h3 class="heading6">Daerah</h3>
                                                <h3 class="heading6">Wilayah</h3>
                                            </div>
                                            <div class="col col-md-8">
                                                <h3 class="heading6">: {{$user->alamat}}</h3>
                                                <h3 class="heading6">: {{$user->cabang}}</h3>
                                                <h3 class="heading6">: {{$user->daerah}}</h3>
                                                <h3 class="heading6">: {{$user->wilayah}}</h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-header">
                                    <p class="heading6">Kartu Anggota Muhammadiyah (KTA)</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col col-md-4">
                                                <img class="card-muhammadiyah"
                                                    src="{{ asset('storage/' . $user->foto_kta) }}">
                                            </div>
                                            <div class="col col-md-8">
                                                <button class="btn-green mb-3">Anggota</button><br>
                                                <button class="btn-green-2">Non-Anggota</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
</main>
@endsection