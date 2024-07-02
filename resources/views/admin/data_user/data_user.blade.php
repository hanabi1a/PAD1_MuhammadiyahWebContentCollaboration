@extends('layouts.layout_admin')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="mt-2">Manajemen User</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_user"
                    class="active_title"> Data User</a></li>
        </ol>

        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($userdata as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ $user->foto_profile ? asset('storage/' . $user->foto_profile) : asset('assets/img/user-default-profile.png') }}" alt="Profile Image" width="50">
                                </td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>
                                    @if($user->role == 'admin')
                                        <span class="badge bg-secondary">Admin</span>
                                    @elseif($user->role == 'user')
                                        <span class="badge bg-primary">Bukan Anggota</span>
                                    @elseif($user->role == 'registered')
                                        <span class="badge bg-success">Anggota</span>
                                    @elseif($user->role == 'not_login')
                                        <span class="badge bg-primary">Status Default</span>
                                    @else
                                        <a href="{{ route('admin.show_detail_user', $user->id) }}" class="row btn btn-warning">Meminta Verifikasi Keanggotaan</a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($user->role != 'not_login')
                                        <div class="row">
                                            <a href="{{ route('admin.show_detail_user', $user->id) }}"
                                                class="col text-info me-2 d-flex justify-content-center align-items-center" title="View">
                                                <i class="fa fa-eye fa-lg"></i>
                                            </a>
                                            @if(Auth::user() != null && Auth::user()->id != $user->id)
                                                <form class="col" action="{{ route('admin.delete_user', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-lin text-info" title="Delete"
                                                        onclick="return confirm('Apakah anda yakin?')">
                                                        <i class="fa fa-trash fa-lg text-danger"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <div class="col"></div>
                                            @endif
                                        </div>
                                    @endif

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>
@endsection
