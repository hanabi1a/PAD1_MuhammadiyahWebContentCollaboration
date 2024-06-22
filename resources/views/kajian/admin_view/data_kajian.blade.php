@extends('layouts.layout_admin')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">Manajemen Kajian</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="data_kajian"
                    class="active_title"> Data Kajian</a></li>
        </ol>

        <div class="card mb-4">
            <div class="card-header text-white d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.kajian.create')}}" class="btn btn-danger">Create</a>
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
                        @foreach($kajianList as $kajian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $kajian->foto_kajian) }}" alt="Profile Image" width="150">
                            </td>
                            <td>{{ $kajian->id_user }}</td>
                            <td>{{ $kajian->pemateri }}</td>
                            <td>{{ $kajian->judul_kajian }}</td>
                            <td>{{ $kajian->tanggal_postingan }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.kajian.show', $kajian) }}" class="text-info me-2"
                                    title="View"><i class="fa fa-eye fa-lg"></i>
                                </a>
                                <form action="{{ route('admin.kajian.destroy', $kajian->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-lin text-info" title="Delete"
                                        onclick="return confirm('Apakah anda yakin?')">
                                        <i class="fa fa-trash fa-lg"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

                <div class="d-flex justify-content-center">
                    {!! $kajianList->links('pagination.custom') !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection