<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link href="{{ asset('vendor/simple-datatables/style.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_admin/css/styles.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/pikaday/1.8.0/css/pikaday.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin\bootstrap-5.3.2-dist\css\bootstrap-grid.css.map') }}">
    <link rel="stylesheet" href="{{ asset('assets_admin/css/style.css') }}" rel=" stylesheet">
</head>

<body class="sb-nav-fixed">
    @include('admin.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}" href=" {{
                            route('admin.dashboard')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-home"></i>
                            </div>Dashboard
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>

                        {{-- TODO: Fix the Route and nav-link below--}}
                        <a class="nav-link {{ request()->is('data_kajian*') ? 'active' : '' }}"
                            href="{{ route('data_kajian')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-columns"></i>
                            </div>Data Kajian
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>


                        <a class="nav-link {{ request()->is('admin/data_user*') ? 'active' : '' }}"
                            href="{{ route('admin.show_data_user')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-user"></i>
                            </div>Data User
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                        </a>
                        <a class="nav-link {{ request()->is('admin.history_login*') ? 'active' : '' }}"
                            href="{{ route('admin.show_history_login')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-bar-chart"></i>
                            </div>History Login
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                        <a class="nav-link {{ request()->is('admin/history_download*') ? 'active' : '' }}"
                            href="{{ route('admin.show_history_download')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-download"></i>
                            </div>History Download
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                        <a class="nav-link {{ request()->is('admin/history_upload*') ? 'active' : '' }}"
                            href="{{route('admin.show_history_upload')}}">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-upload"></i>
                            </div>History Upload
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <a class="nav-link" href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <div class="sb-nav-link-icon">
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>Log Out
                                <div class="sb-sidenav-collapse-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('assets_admin/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets_admin/js/scripts.js') }}"></script>
    <script src="{{ asset('assets_admin\js\datatables-simple-demo.js') }}"></script>
    <script src="{{ asset('assets_admin\js\data-table\datatables.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets_admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets_admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets_admin/js/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets_admin/js/upload/drag-and-drop.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ asset('assets_admin/plugins/summernote/dist/summernote-init.js') }}"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="{{ asset('vendor/pikaday/1.8.0/pikaday.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- FILTER TANGGAL HISTORY -->
    <script>
        $(document).ready(function () {
            // Event listener untuk perubahan pada tanggal
            $('#filterBtn').on('click', function () {
                // Ambil nilai tanggal dari input
                var startDate = new Date($('#startDate').val());
                var endDate = new Date($('#endDate').val());

                // Loop melalui setiap baris dalam tabel
                $('table tbody tr').each(function () {
                    // Ambil nilai tanggal dari setiap baris
                    var rowDate = new Date($(this).find('td:eq(3)').text()); // Gantilah 3 dengan indeks kolom tanggal Anda

                    // Periksa apakah tanggal berada di antara tanggal mulai dan tanggal selesai
                    if (rowDate >= startDate && rowDate <= endDate) {
                        // Tampilkan baris jika memenuhi kriteria
                        $(this).show();
                    } else {
                        // Sembunyikan baris jika tidak memenuhi kriteria
                        $(this).hide();
                    }
                });
            })
        });
    </script>
</body>

</html>