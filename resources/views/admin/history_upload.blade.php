@extends('admin.layout')

@section('content')
<main> <div class="container-fluid px-4"> <h1 class="mt-5">History Upload</h1> <ol class="breadcrumb mt-2"> <li
    class="text_page breadcrumb"><a href="dashboard">Dashboard /</a><a href="history_upload" class="active_title">
    History Upload</a>
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
            <button class="btn btn-primary btn-sm" title="Filter">
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
                    <tr>
                        <td>1</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Aisa Selvira</td>
                        <td>485678</td>
                        <td>Rindu Ramadhan</td>
                        <td>493854</td>
                        <td>Berkah Bulan Ramadhan</td>
                        <td>678534</td>
                        <td>14/02/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </main>
    @endsection