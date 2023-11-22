@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-5">Manajemen Kajian</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_kajian"
                    class="active_title"> Data Kajian</a></li>
        </ol>

        <div class="card mb-4">
            <div class="card-header text-white d-flex justify-content-between align-items-center">
                <a href="{{ route('create')}}" class="btn btn-danger">Create</a>
            </div>


            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dataKajian as $kajian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('path/ke/gambar/'.$kajian->gambar) }}" alt="Profile Image"
                                    width="150">
                            </td>
                            <td>{{ $kajian->id_user }}</td>
                            <td>{{ $kajian->pemateri }}</td>
                            <td>{{ $kajian->judul_kajian }}</td>
                            <td>{{ $kajian->tanggal_postingan }}</td>
                            <td class="text-center">
                                <form action="{{ route('deleteKajian', $kajian->id) }}" method="post">
                                    <a href="{{ route('kajian', $kajian->id) }}" class="text-info me-2"
                                        title="View">
                                        <i class="fa fa-eye fa-lg"></i>
                                    </a>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link text-info" title="Delete"
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