@extends('layouts.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">History Upload</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="history_upload"
                    class="active_title">
                    History Upload</a>
            </li>
        </ol>
        <div class="d-flex align-items-center">
            <div class="me-2">
                <label for="startDate" class="me-1">Start Date:</label>
                <input type="date" id="startDate" name="startDate" class="form-control form-control-sm date-input">
            </div>
            <div class="me-2">
                <label for="endDate" class="me-1">End Date:</label>
                <input type="date" id="endDate" name="endDate" class="form-control form-control-sm date-input">
            </div>
            <button id="filterBtn" class="btn btn-sm" title="Filter">
                <i class="fas fa-filter"></i>
            </button>
        </div>
        <br><br>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>User ID</th>
                            <th>Judul Kajian Ori</th>
                            <th>ID Kajian Ori</th>
                            <th>Judul Kajian NV</th>
                            <th>ID Kajian NV</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>User ID</th>
                            <th>Judul Kajian Ori</th>
                            <th>ID Kajian Ori</th>
                            <th>Judul Kajian NV</th>
                            <th>ID Kajian NV</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach($uploadHistory as $index => $kajian)

                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kajian->user->username }}</td>
                            <td>{{ $kajian->id_user }}</td>
                            <td>{{ $kajian->judul_kajian }}</td>
                            <td>{{ $kajian->id }}</td>
                            <td>{{ $kajian->judul_kajian }}</td>
                            <td>
                                @if($kajian->versionHistory()->exists())
                                {{ $kajian->versionHistory->count()}}
                                <!-- Menampilkan ID dari versi baru jika ada -->
                                @else
                                -
                                <!-- Jika tidak ada versi baru -->
                                @endif
                            </td>
                            <td>{{ $kajian->created_at }}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</main>
@endsection