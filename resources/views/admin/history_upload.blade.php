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
                        <a class="has-arrow" href="history_login" aria-expanded="false">
                            <i class="fa fa-bar-chart menu-icon"></i><span class="nav-text">History Login</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="history_download" aria-expanded="false">
                            <i class="fa fa-download menu-icon"></i> <span class="nav-text">History Download</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow active" href="history_upload" aria-expanded="false">
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
        <p class="text_page">Dashboard / History Upload</p>
        <h2 class="text_title">History Upload</h2>
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
                            <div class="table-responsive">
                                <table id="row-select" class="display table table-borderd table-hover">
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
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Aisa</td>
                                            <td>152671</td>
                                            <td>Ramadhan Semakin Dekat</td>
                                            <td>234567</td>
                                            <td>Ramadhan Semakin Dekat 2023</td>
                                            <td>23456437</td>
                                            <td>05/23/2023</td>
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