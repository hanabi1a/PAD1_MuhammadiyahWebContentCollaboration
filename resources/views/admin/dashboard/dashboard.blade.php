@extends('layouts.layout_admin')
@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <h1 class="mt-2">Main Dashboard</h1>
        <ol class="breadcrumb mt-2">
            <li class="text_page"><a href="dashboard" class="active_title">Dashboard</a></li>
        </ol>
        <div class="row mt-4">
            <div class="col-xl-3 col-md-6 mt-3">
                <div class="card bg-primary text-white gradient-1">
                    <div class="card-body">Jumlah Postingan</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">{{$totalKajian}} Postingan</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mt-3">
                <div class="card bg-danger text-white gradient-2">
                    <div class="card-body">Jumlah User</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">{{$totalUser}} User</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection