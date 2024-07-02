document.addEventListener('DOMContentLoaded', function () {
    function updateRecommendations(categoryName, action) {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('/update-recommendations', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify({ category: categoryName, action: action })
        })
        .then(response => response.json())
        .then(data => {
            const resultsContainer = document.getElementById('kajianRekomendasiResults');
            resultsContainer.innerHTML = ''; 

            data.recommendedKajian.forEach(item => {
                const generateCategoryContent = (item) => {
                    try {
                        if (item.topikKajians && item.topikKajians.length > 0) {
                            return item.topikKajians.map(topik => topik.nama).join(', ');
                        }
                        return 'Umum';
                    } catch (error) {
                        return 'Umum';
                    }
                    
                };
                
                const kajianItem = document.createElement('div');
                kajianItem.className = 'col-md-4 mb-5 kajian-item';
                kajianItem.innerHTML = `
                <a href="/kajian/${item.slug}" class="card-kajian">
                    <div class="card card-hover">
                        <img src="/storage/${item.foto_kajian}" class="img-fluid img-card-kajian">
                        <div class="card-kajian-body">
                            <div class="card-kajian-title mt-3">${item.judul_kajian}</div>
                            <p class="card-kajian-text">
                                ${stripWords(item.deskripsi_kajian, 10)}
                            </p>
                            <div class="card-kajian-category">
                                ##${generateCategoryContent(item)}
                            </div>
                            <a href="/kajian/${item.slug}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </a>
                `;
                resultsContainer.appendChild(kajianItem);
            });

            attachCancelEventListeners();
        })
        .catch(error => console.error('Error:', error));
    }

    function truncateText(text, wordLimit, ellipsis) {
        const words = text.split(' ');
        if (words.length > wordLimit) {
            return words.slice(0, wordLimit).join(' ') + ellipsis;
        }
        return text;
    }

    function stripTags(html) {
        const doc = new DOMParser().parseFromString(html, 'text/html');
        return doc.body.textContent || "";
    }

    function attachCancelEventListeners() {
        document.querySelectorAll('.kategori img').forEach(function (cancelIcon) {
            cancelIcon.addEventListener('click', function () {
                const categoryDiv = this.parentElement;
                const categoryName = categoryDiv.textContent.trim();
                categoryDiv.remove();

                updateRecommendations(categoryName, 'remove');
            });
        });
    }

    attachCancelEventListeners();

    document.querySelectorAll('#category-add-dropdown .dropdown-item').forEach(function (dropdownItem) {
        dropdownItem.addEventListener('click', function () {
            const categoryName = this.textContent.trim();

            if (Array.from(document.querySelectorAll('.kategori')).some(k => k.textContent.trim() === categoryName)) {
                return;
            }

            const categoryDiv = document.createElement('div');
            categoryDiv.className = 'kategori me-2';
            categoryDiv.innerHTML = `${categoryName} <img src="/assets/img/icon/cancel.svg" alt="Close Icon">`;
            const dropdownDiv = document.getElementById('category-add-dropdown');
            dropdownDiv.parentNode.insertBefore(categoryDiv, dropdownDiv);

            categoryDiv.querySelector('img').addEventListener('click', function () {
                const categoryDiv = this.parentElement;
                const categoryName = categoryDiv.textContent.trim();

                categoryDiv.remove();
                updateRecommendations(categoryName, 'remove');
            });
            updateRecommendations(categoryName, 'add');
        });
    });

    function stripWords(str, limit) {
        const words = str.split(' '); // Split the string into an array of words
        if (words.length > limit) {
            return truncateText(stripTags(item.deskripsi_kajian), limit, '...'); // Join the first 'limit' words and append '...'
        }
        return str; // Return the original string if it's within the limit
    }
});
