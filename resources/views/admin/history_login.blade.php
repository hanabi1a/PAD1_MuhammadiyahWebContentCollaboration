@extends('admin.layout')

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
                        <tr>
                            <td>1</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>492345</td>
                            <td>Aisa Selvira</td>
                            <td>14/02/2023</td>
                        </tr>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</main>
@endsection