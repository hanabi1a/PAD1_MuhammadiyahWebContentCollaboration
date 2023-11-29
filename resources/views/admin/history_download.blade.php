@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">History Download</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="history_download"
                    class="active_title">
                    History Download</a>
            </li>
        </ol>
        <div class="d-flex align-items-center filter-tgl">
            <div class="me-2">
                <label for="startDate" class="me-1">Start Date:</label>
                <input type="date" id="startDate" name="startDate" class="form-control form-control-sm">
            </div>
            <div class="me-2">
                <label for="endDate" class="me-1">End Date:</label>
                <input type="date" id="endDate" name="endDate" class="form-control form-control-sm">
            </div>
            <button id="filterBtn" class="btn btn-primary btn-sm" title="Filter">
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
                            <th>Judul Kajian</th>
                            <th>ID Kajian</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>User ID</th>
                            <th>Judul Kajian</th>
                            <th>ID Kajian</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($historyDownloads as $index => $historyDownload)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $historyDownload->user->name }}</td>
                            <td>{{ $historyDownload->user_id }}</td>
                            <td>{{ $historyDownload->kajian->judul }}</td>
                            <td>{{ $historyDownload->kajian_id }}</td>
                            <td>{{ $historyDownload->downloaded_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection