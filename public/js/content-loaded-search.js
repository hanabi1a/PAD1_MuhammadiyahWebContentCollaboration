document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianItems = document.querySelectorAll('.kajian-item');
    const noResults = document.getElementById('noResults');
    const aboutSection = document.getElementById('about');
    const videoTerkiniSection = document.getElementById('video-terkini');

    searchInput.addEventListener('input', function () {
        const query = this.value.toLowerCase();
        let hasResults = false;

        if (query) {
            aboutSection.style.display = 'none';
            videoTerkiniSection.style.display = 'none';
        } else {
            aboutSection.style.display = '';
            videoTerkiniSection.style.display = '';
        }

        kajianItems.forEach(item => {
            const title = item.getAttribute('data-title').toLowerCase();
            const pemateri = item.getAttribute('data-pemateri').toLowerCase();
            const deskripsi = item.getAttribute('data-deskripsi').toLowerCase();

            if (title.includes(query) || pemateri.includes(query) || deskripsi.includes(query)) {
                item.style.display = '';
                hasResults = true;
            } else {
                item.style.display = 'none';
            }
        });

        if (!hasResults && query) {
            noResults.classList.remove('d-none');
        } else {
            noResults.classList.add('d-none');
        }
    });
});