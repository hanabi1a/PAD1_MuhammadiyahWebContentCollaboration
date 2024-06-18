$(document).ready(function () {
    $('#TabProfile a[data-toggle="tab"]').on('click', function (e) {
        e.preventDefault();

        $('#TabProfile .nav-link').removeClass('active');
        
        $(this).addClass('active');

        $('.tab-pane').removeClass('show active');

        $($(this).attr('href')).addClass('show active');
    });
});