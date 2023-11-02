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
                        <a class="has-arrow active" href="data_user" aria-expanded="false">
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
        <p class="text_page">Dashboard / Data User</p>
        <h2 class="text_title">Manajemen User</h2>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-right mb-2">
                        <a href="" class="btn btn-danger">Create</a>
                    </div>
                    <div class="card">
                        <div class="bootstrap-data-table-panel">
                            <div class="table-responsive">
                                <table id="row-select" class="display table table-borderd table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Profile</th>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Image</td>
                                            <td>152671</td>
                                            <td>Aisa Selvira</td>
                                            <td>
                                                <form action="" method="post">
                                                    <a href="user/kajian" class="btn btn-warning"><i
                                                            class="fa fa-eye"></i></a>
                                                    @csrf
                                                    @method('delete')
                                                    <a href="user/kajian" class="btn btn-danger"
                                                        onClick="return confirm('Apakah anda yakin?')"><i
                                                            class="fa fa-trash"></i></a>
                                                </form>
                                            </td>

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



        @endsection