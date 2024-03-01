document.addEventListener('DOMContentLoaded', function() {
    var picker = new Pikaday({
        field: document.getElementById('val-tanggal'),
        format: 'YYYY-MM-DD', // adjust the format as needed
        showYearDropdown: true,
        yearRange: [moment().year() - 10, moment().year() + 10]
    });

    // Attach the picker to the button
    document.getElementById('kalender-button').addEventListener('click', function() {
        picker.show();
    });
});