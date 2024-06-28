
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianMuhammadiyahResults = document.getElementById('kajianMuhammadiyahResults');
    const noResults = document.getElementById('noResults');

    const videoTerkiniSection = document.getElementById('video-terkini');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase();

            if (query) {
                videoTerkiniSection.style.display = 'none';
            } else {
                videoTerkiniSection.style.display = '';
            }

            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    kajianMuhammadiyahResults.innerHTML = '';
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
                            kajianMuhammadiyahResults.innerHTML += kajianItem;
                        });
                    } else {
                        noResults.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    noResults.classList.remove('d-none');
                });
        });
    } else {
        console.error('Element with ID searchInput not found.');
    }
});

function htmlspecialchars(str) {
    return str.replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;")
              .replace(/"/g, "&quot;")
              .replace(/'/g, "&#039;");
}

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



document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianRekomendasiResults = document.getElementById('kajianRekomendasiResults');
    const noResults = document.getElementById('noResults');

    const videoTerkiniSection = document.getElementById('video-terkini');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase();

            if (query) {
                videoTerkiniSection.style.display = 'none';
            } else {
                videoTerkiniSection.style.display = '';
            }

            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    kajianRekomendasiResults.innerHTML = '';
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
                            kajianRekomendasiResults.innerHTML += kajianItem;
                        });
                    } else {
                        noResults.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    noResults.classList.remove('d-none');
                });
        });
    } else {
        console.error('Element with ID searchInput not found.');
    }
});

function htmlspecialchars(str) {
    return str.replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;")
              .replace(/"/g, "&quot;")
              .replace(/'/g, "&#039;");
}

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

document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const kajianTerkiniResults = document.getElementById('kajianTerkiniResults');
    const noResults = document.getElementById('noResults');

    const videoTerkiniSection = document.getElementById('video-terkini');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const query = this.value.toLowerCase();

            if (query) {
                videoTerkiniSection.style.display = 'none';
            } else {
                videoTerkiniSection.style.display = '';
            }

            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    kajianTerkiniResults.innerHTML = '';
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
                            kajianTerkiniResults.innerHTML += kajianItem;
                        });
                    } else {
                        noResults.classList.remove('d-none');
                    }
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    noResults.classList.remove('d-none');
                });
        });
    } else {
        console.error('Element with ID searchInput not found.');
    }
});

function htmlspecialchars(str) {
    return str.replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;")
              .replace(/"/g, "&quot;")
              .replace(/'/g, "&#039;");
}

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