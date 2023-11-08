$(document).ready(function () {
    // Inisialisasi Datepicker
    $("#val-tanggal").datepicker();

    // Fungsi untuk menampilkan kalender saat tombol diklik
    $("#kalender-button").on("click", function () {
        $("#val-tanggal").datepicker("show");
    });

    // Menyembunyikan tombol kalender dari tampilan
    $("#val-tanggal").on("focus", function () {
        $("#kalender-button").hide();
    });

    // Menampilkan tombol kalender saat input kehilangan fokus
    $("#val-tanggal").on("blur", function () {
        $("#kalender-button").show();
    });
});