@extends('layouts.layout_admin')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($userdata as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $user->foto_profile) }}" alt="Profile Image" width="150">
                                </td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td class="text-center">
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