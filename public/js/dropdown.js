$(document).ready(function () {
    $(".dropdown").on("click", function (event) {
        event.preventDefault();

        $(this).find(".dropdown-menu").toggle();
    });
});