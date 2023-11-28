@extends('admin.layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-5">History Login</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="history_login"
                    class="active_title">
                    History Login</a>
            </li>
        </ol>
        <div class="d-flex align-items-center">
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
                            
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Waktu/Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historis as $hl)
                        <tr>
                            
                            <td>{{ $hl->user_id }}</td>
                            <td>{{ $hl->user->username }}</td>
                            <td>{{ $hl->timestamp }}</td>
                        </tr>
                        @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</main>
@endsection