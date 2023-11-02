<!DOCTYPE html> <html lang="en"> 
    <head> 
    <meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> <!-- theme meta --> <meta name="theme-name"
    content="quixlab" />
<title>Dashboard Admin</title> <!-- Pignose Calender -->
<link href="./assets_admin/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet"> <!-- Chartist --> <link
    rel="stylesheet" href="./assets_admin/plugins/chartist/css/chartist.min.css"> <link rel="stylesheet"
    href="./assets_admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
<link href="assets_admin/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link href="path-to-bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

<!-- Custom Stylesheet -->
<link href="assets_admin/css/style.css" rel="stylesheet">
</head>

<body>
    @include('admin.header_admin')

    @yield('content')


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="assets_admin/plugins/common/common.min.js"></script>
    <script src="assets_admin/js/custom.min.js"></script>
    <script src="assets_admin/js/settings.js"></script>
    <script src="assets_admin/js/gleek.js"></script>
    <script src="assets_admin/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./assets_admin/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./assets_admin/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./assets_admin/plugins/d3v3/index.js"></script>
    <script src="./assets_admin/plugins/topojson/topojson.min.js"></script>
    <script src="./assets_admin/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./assets_admin/plugins/raphael/raphael.min.js"></script>
    <script src="./assets_admin/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./assets_admin/plugins/moment/moment.min.js"></script>
    <script src="./assets_admin/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./assets_admin/plugins/chartist/js/chartist.min.js"></script>
    <script src="./assets_admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="./assets_admin/js/dashboard/dashboard-1.js"></script>

    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>


    <script src="assets_admin/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->
    <script src="assets_admin/js/data-table/datatables.min.js"></script>
    <script src="assets_admin/js/data-table/dataTables.buttons.min.js"></script>
    <script src="assets_admin/js/data-table/jszip.min.js"></script>
    <script src="assets_admin/js/data-table/pdfmake.min.js"></script>
    <script src="assets_admin/js/data-table/vfs_fonts.js"></script>
    <script src="assets_admin/js/data-table/buttons.html5.min.js"></script>
    <script src="assets_admin/js/data-table/buttons.print.min.js"></script>
    <script src="assets_admin/js/data-table/buttons.colVis.min.js"></script>
    <script src="assets_admin/js/data-table/datatables-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>