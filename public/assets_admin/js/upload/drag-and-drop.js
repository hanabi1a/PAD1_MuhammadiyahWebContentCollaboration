// For Photo
function preventDefaultFoto(e) {
    e.preventDefault();
    e.stopPropagation();
}

const dropAreaFoto = document.getElementById("drop-area-foto");
dropAreaFoto.addEventListener("dragenter", function (e) {
    preventDefaultFoto(e);
    dropAreaFoto.classList.add("drag-over");
}, false);

dropAreaFoto.addEventListener("dragleave", function (e) {
    preventDefaultFoto(e);
    dropAreaFoto.classList.remove("drag-over");
}, false);

dropAreaFoto.addEventListener("dragover", preventDefaultFoto, false);

dropAreaFoto.addEventListener("drop", function (e) {
    preventDefaultFoto(e);

    const fileInputFoto = document.getElementById("foto-input");
    const filesFoto = e.dataTransfer.files;

    if (filesFoto.length > 0) {
        fileInputFoto.files = filesFoto;
        updateFileLabelFoto(filesFoto[0].name);
        hideDropAreaFoto();
    }
}, false);

function updateFileLabelFoto(fileName) {
    const fileLabelFoto = document.querySelector(".custom-file-label-foto");
    fileLabelFoto.textContent = fileName;
}

function hideDropAreaFoto() {
    const dropAreaFoto = document.getElementById("drop-area-foto");
    dropAreaFoto.classList.add("hidden");
}

document.getElementById("foto-input").addEventListener("change", function () {
    const fileInputFoto = document.getElementById("foto-input");
    const fileNameFoto = fileInputFoto.files[0].name;
    updateFileLabelFoto(fileNameFoto);
    hideDropAreaFoto();
});

// For Document
function preventDefaultDokumen(e) {
    e.preventDefault();
    e.stopPropagation();
}

const dropAreaDokumen = document.getElementById("drop-area-dokumen");
dropAreaDokumen.addEventListener("dragenter", function (e) {
    preventDefaultDokumen(e);
    dropAreaDokumen.classList.add("drag-over");
}, false);

dropAreaDokumen.addEventListener("dragleave", function (e) {
    preventDefaultDokumen(e);
    dropAreaDokumen.classList.remove("drag-over");
}, false);

dropAreaDokumen.addEventListener("dragover", preventDefaultDokumen, false);

dropAreaDokumen.addEventListener("drop", function (e) {
    preventDefaultDokumen(e);

    const fileInputDokumen = document.getElementById("dokumen-input");
    const filesDokumen = e.dataTransfer.files;

    if (filesDokumen.length > 0) {
        fileInputDokumen.files = filesDokumen;
        updateFileLabelDokumen(filesDokumen[0].name);
        hideDropAreaDokumen();
    }
}, false);

function updateFileLabelDokumen(fileName) {
    const fileLabelDokumen = document.querySelector(".custom-file-label-dokumen");
    fileLabelDokumen.textContent = fileName;
}

function hideDropAreaDokumen() {
    const dropAreaDokumen = document.getElementById("drop-area-dokumen");
    dropAreaDokumen.classList.add("hidden");
}

document.getElementById("dokumen-input").addEventListener("change", function () {
    const fileInputDokumen = document.getElementById("dokumen-input");
    const fileNameDokumen = fileInputDokumen.files[0].name;
    updateFileLabelDokumen(fileNameDokumen);
    hideDropAreaDokumen();
});
