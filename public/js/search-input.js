document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianSections = {
        muhammadiyah: document.getElementById('kajian-muhammadiyah'),
        rekomendasi: document.getElementById('kajian-rekomendasi'),
        terkini: document.getElementById('kajian-terkini')
    };
    const noResultsMessage = document.getElementById('noResults');
    const videoSection = document.getElementById('video-terkini');

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.toLowerCase();
        let totalResults = 0;

        if (query) {
            Object.keys(kajianSections).forEach(sectionKey => {
                const section = kajianSections[sectionKey];
                const items = section.querySelectorAll('.kajian-item');
                let hasResults = false;

                items.forEach(item => {
                    const title = item.getAttribute('data-title').toLowerCase();
                    const pemateri = item.getAttribute('data-pemateri').toLowerCase();
                    const deskripsi = item.getAttribute('data-deskripsi').toLowerCase();
                    const kategori = item.getAttribute('data-kategori').toLowerCase();

                    if (title.includes(query) || pemateri.includes(query) || deskripsi.includes(query) || kategori.includes(query)) {
                        item.classList.remove('d-none');
                        hasResults = true;
                        totalResults++;
                    } else {
                        item.classList.add('d-none');
                    }
                });
                if (hasResults) {
                    section.classList.remove('d-none');
                } else {
                    section.classList.add('d-none');
                }
            });

            videoSection.classList.add('d-none');

            if (totalResults === 0) {
                noResultsMessage.classList.remove('d-none');
            } else {
                noResultsMessage.classList.add('d-none');
            }
        } else {
            Object.keys(kajianSections).forEach(sectionKey => {
                const section = kajianSections[sectionKey];
                const items = section.querySelectorAll('.kajian-item');

                items.forEach(item => {
                    item.classList.remove('d-none');
                });

                section.classList.remove('d-none');
            });

            videoSection.classList.remove('d-none');

            noResultsMessage.classList.add('d-none');
        }
    });
});