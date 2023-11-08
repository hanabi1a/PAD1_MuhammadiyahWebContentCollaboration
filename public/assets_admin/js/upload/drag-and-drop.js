// Fungsi untuk mencegah default drag-and-drop
function preventDefault(e) {
    e.preventDefault();
    e.stopPropagation();
}

// Menambahkan event listener ke elemen drop area
const dropArea = document.getElementById("drop-area");
dropArea.addEventListener("dragenter", function (e) {
    preventDefault(e);
    dropArea.classList.add("drag-over");
}, false);

dropArea.addEventListener("dragleave", function (e) {
    preventDefault(e);
    dropArea.classList.remove("drag-over");
}, false);

dropArea.addEventListener("dragover", preventDefault, false);

// Menangani drop event
dropArea.addEventListener("drop", function (e) {
    preventDefault(e);

    const fileInput = document.getElementById("file-input");
    const files = e.dataTransfer.files;

    if (files.length > 0) {
        fileInput.files = files;
        updateFileLabel(files[0].name);
        hideDropArea();
    }
}, false);

// Mengubah label file ketika file dipilih
function updateFileLabel(fileName) {
    const fileLabel = document.querySelector(".custom-file-label");
    fileLabel.textContent = fileName;
}

// Sembunyikan elemen drop area
function hideDropArea() {
    const dropArea = document.getElementById("drop-area");
    dropArea.classList.add("hidden");
}

// Event listener untuk memantau perubahan pada input file
document.getElementById("file-input").addEventListener("change", function() {
    const fileInput = document.getElementById("file-input");
    const fileName = fileInput.files[0].name;
    updateFileLabel(fileName);
    hideDropArea();
});