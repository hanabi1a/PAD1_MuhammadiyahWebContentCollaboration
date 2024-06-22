document.addEventListener('DOMContentLoaded', function () {
    var dropdownToggle = document.querySelector('.kategori-lainnya');
    dropdownToggle.addEventListener('click', function () {
        var dropdownMenu = document.querySelector('.dropdown-menu');
        dropdownMenu.classList.toggle('show');
    });
});