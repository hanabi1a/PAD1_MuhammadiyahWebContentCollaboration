@extends('admin.layout')
@section('content')
<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label"></li>
                    <li>
                        <a class="has-arrow" href="dashboard" aria-expanded="false">
                            <i class="fa fa-home menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="data_kajian" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Data Kajian</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="data_user" aria-expanded="false">
                            <i class="fa fa-user menu-icon"></i> <span class="nav-text">Data User</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow active" href="history_login" aria-expanded="false">
                            <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">History Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_download" aria-expanded="false">
                            <i class="fa fa-download menu-icon"></i> <span class="nav-text">History Download</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_upload" aria-expanded="false">
                            <i class="fa fa-upload menu-icon"></i><span class="nav-text">History Upload</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="sign_out" aria-expanded="false">
                            <i class="fa fa-arrow-right menu-icon"></i><span class="nav-text">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">
        <p class="text_page">Dashboard / History Login</p>
        <h2 class="text_title">History Login</h2>
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-right mb-2">
                        <div class="date-filter">
                            <label for="startDate" class="date-label">From:</label>
                            <input type="date" id="startDate" class="date-input">
                            <label for="endDate" class="date-label">To:</label>
                            <input type="date" id="endDate" class="date-input">
                            <button id="filterButton" class="btn btn-primary"><i
                                    class="fa fa-filter menu-icon"></i></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="bootstrap-data-table-panel">
                            <table id="row-select" class="display table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>User ID</th>
                                        <th>Username</th>
                                        <th>Waktu/Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/23/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/24/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/25/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/26/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/27/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/28/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/15/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/16/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/17/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/18/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/19/2023</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>234567</td>
                                        <td>Aisa Selvira</td>
                                        <td>05/20/2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- #/ container -->
    </div>
</div>
</div>
<script>
    $(document).ready(function () {
        // Inisialisasi DataTable
        var table = $('#row-select').DataTable();

        // Filter Tabel Berdasarkan Tanggal
        $('#filterButton').on('click', function () {
            var startDate = $('#startDate').val();
            var endDate = $('#endDate').val();

            table.columns(3).search(startDate + '|' + endDate, true, false).draw();
        });
    });
</script>




@endsection