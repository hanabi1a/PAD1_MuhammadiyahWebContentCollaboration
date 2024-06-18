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
                const kajianItem = document.createElement('div');
                kajianItem.className = 'col-md-4 mb-5 kajian-item';
                kajianItem.innerHTML = `
                    <div class="card box-shadow">
                        <img src="/storage/${item.foto_kajian}" class="img-fluid img-kajian">
                        <div class="card-body">
                            <div class="card-title mt-3">${item.judul_kajian}</div>
                            <p class="card-text">${item.pemateri}</p>
                            <div class="card-title" style="color: #04454D;">${item.deskripsi_kajian}</div>
                            <a href="/kajian/${item.slug}" class="btn btn-view mt-2">Lihat Selengkapnya</a>
                        </div>
                    </div>
                `;
                resultsContainer.appendChild(kajianItem);
            });

            attachCancelEventListeners();
        })
        .catch(error => console.error('Error:', error));
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
});
