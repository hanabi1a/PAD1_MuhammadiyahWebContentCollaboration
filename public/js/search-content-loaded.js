document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const aboutSection = document.getElementById('about');
    const videoTerkiniSection = document.getElementById('video-terkini');

    searchInput.addEventListener('input', function() {
        const query = searchInput.value.trim();

        if (query.length > 0) {
            aboutSection.style.display = 'none';
            videoTerkiniSection.style.display = 'none';
        } else {
            aboutSection.style.display = 'block';
            videoTerkiniSection.style.display = 'block';
        }
    });
});