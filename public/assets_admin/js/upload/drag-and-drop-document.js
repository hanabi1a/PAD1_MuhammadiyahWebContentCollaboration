document.addEventListener("DOMContentLoaded", function () {
    // Function to prevent default behavior
    function preventDefault(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Function to update file label for dokumen
    function updateFileLabelDokumen(fileName) {
        const fileLabelDokumen = document.querySelector(".custom-file-label-dokumen");
        if (fileLabelDokumen) {
            fileLabelDokumen.textContent = fileName;
        }
    }

    // Function to hide drop area for dokumen
    function hideDropAreaDokumen() {
        const dropAreaDokumen = document.getElementById("drop-area-dokumen");
        if (dropAreaDokumen) {
            dropAreaDokumen.classList.add("hidden");
        }
    }

    // Event listeners for dokumen drop area
    const dropAreaDokumen = document.getElementById("drop-area-dokumen");
    dropAreaDokumen.addEventListener("dragenter", function (e) {
        preventDefault(e);
        dropAreaDokumen.classList.add("drag-over");
    }, false);

    dropAreaDokumen.addEventListener("dragleave", function (e) {
        preventDefault(e);
        dropAreaDokumen.classList.remove("drag-over");
    }, false);

    dropAreaDokumen.addEventListener("dragover", preventDefault, false);

    dropAreaDokumen.addEventListener("drop", function (e) {
        preventDefault(e);

        const fileInputDokumen = document.getElementById("dokumen-input");
        const filesDokumen = e.dataTransfer.files;

        if (filesDokumen.length > 0) {
            fileInputDokumen.files = filesDokumen;
            const fileNameDokumen = filesDokumen[0].name;
            updateFileLabelDokumen(fileNameDokumen);
            hideDropAreaDokumen();
        }
    }, false);

    // Event listener for dokumen input change
    const fileInputDokumen = document.getElementById("dokumen-input");
    if (fileInputDokumen) {
        fileInputDokumen.addEventListener("change", function () {
            if (fileInputDokumen.files.length > 0) {
                const fileNameDokumen = fileInputDokumen.files[0].name;
                updateFileLabelDokumen(fileNameDokumen);
                hideDropAreaDokumen();
            }
        });
    }
});
