@extends('admin.layout')

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
                                <img src="{{ asset('storage/'.$user->foto_profile) }}" alt="Profile Image" width="150">
                            </td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td class="text-center">
                                <form action="{{ route('deleteUser', $user->id) }}" method="post">
                                    <a href="{{ route('showDetailUser', $user->id) }}" class="text-info me-2"
                                        title="View"><i class="fa fa-eye fa-lg"></i></a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-info" title="Delete"
                                        onclick="return confirm('Apakah anda yakin?')">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                </form>
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