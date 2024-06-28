document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianMuhammadiyahContainer = document.getElementById('kajianMuhammadiyahContainer');
    const paginationKajianTerkini = document.querySelector('.paginationKajianTerkini');
    const noResults = document.getElementById('noResults');
    const aboutSection = document.getElementById('about');
    const videoTerkiniSection = document.getElementById('video-terkini');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase().trim(); // Ensure query is trimmed and lowercased

            // Toggle visibility of other sections based on query presence
            if (query) {
                aboutSection.style.display = 'none';
                videoTerkiniSection.style.display = 'none';
            } else {
                aboutSection.style.display = '';
                videoTerkiniSection.style.display = '';
            }

            fetch(`/search?query=${encodeURIComponent(query)}`) // Encode URI component to handle special characters
                .then(response => response.json())
                .then(data => {
                    kajianMuhammadiyahContainer.innerHTML = '';

                    if (data.length > 0) {
                        noResults.classList.add('d-none');
                        data.forEach(item => {
                            const kajianItem = `
                                <div class="col-md-4 mb-5 kajian-item">
                                    <div class="card box-shadow card-hover"
                                        data-title="${item.judul_kajian}"
                                        data-pemateri="${item.pemateri}"
                                        data-deskripsi="${htmlspecialchars(strip_tags(item.deskripsi_kajian))}">
                                        <img src="/storage/${item.foto_kajian}" class="img-fluid img-card-kajian">
                                        <div class="card-kajian-body">
                                            <div class="card-kajian-title mt-3">${item.judul_kajian}</div>
                                            <p class="card-kajian-text">
                                                ${item.deskripsi_kajian.replace(/(<([^>]+)>)/gi, "").split(" ").slice(0, 12).join(" ")}...
                                            </p>
                                            <a href="/kajian/${item.slug}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>`;
                            kajianMuhammadiyahContainer.innerHTML += kajianItem;
                        });

                        // Show pagination for both sections if they exist
                        if (paginationKajianTerkini) {
                            paginationKajianTerkini.style.display = 'block';
                        }
                    } else {
                        noResults.classList.remove('d-none');
                        // Hide pagination when no results
                        if (paginationKajianTerkini) {
                            paginationKajianTerkini.style.display = 'none';
                        }
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    noResults.classList.remove('d-none');
                    // Ensure pagination is hidden on error
                    if (paginationKajianTerkini) {
                        paginationKajianTerkini.style.display = 'none';
                    }
                });
        });
    } else {
        console.error('Element with ID searchInput not found.');
    }
});

// Function to escape HTML special characters
function htmlspecialchars(str) {
    return str.replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;")
              .replace(/"/g, "&quot;")
              .replace(/'/g, "&#039;");
}

// Function to strip HTML tags
function strip_tags(input, allowed) {
    allowed = (((allowed || '') + '')
      .toLowerCase()
      .match(/<[a-z][a-z0-9]*>/g) || [])
      .join(''); 
    var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
        commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
    return input.replace(commentsAndPhpTags, '')
      .replace(tags, function ($0, $1) {
        return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
      });
}
