$(document).ready(function () {
    // Handle logout button click
    $('.dropdown-item.logout').on('click', function () {
        window.location.href = "/logout";
    });
});