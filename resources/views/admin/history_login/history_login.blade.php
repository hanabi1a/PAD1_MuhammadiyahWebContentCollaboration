@extends('layouts.layout_admin')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">History Login</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="history_login"
                    class="active_title">
                    History Login</a>
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

                            <th>User ID</th>
                            <th>Username</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historis as $hs)
                        <tr>
                            <td>{{ $hs->user_id }}</td>
                            <td>{{ $hs->user->username }}</td>
                            <td>{{ $hs->timestamp }}</td>
                            <!-- Isi kolom lainnya -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection