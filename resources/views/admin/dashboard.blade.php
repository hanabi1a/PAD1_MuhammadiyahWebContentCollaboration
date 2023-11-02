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
                        <a class="has-arrow active" href="dashboard" aria-expanded="false">
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
        <p class="text_page">Dashboard</p>
        <h2 class="text_title">Main Dashboard</h2>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Jumlah User</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">320</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Jumlah Postingan</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">$ 445</h2>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

@endsection