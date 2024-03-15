@extends('layouts.layout_user_2')

@section('content')
<main>
    <div class="container-fluid px-5 px-5 mt-sm-2 mb-sm-2">
        <section id="akun-user">
            <div class="card">
                <div class="container">
                    <div class="row mb-5 justify-content-center align-items-center">
                        <div class="col-md-2">
                            <img class="user-profile-pp" src="{{ asset('storage/' . $user->foto_profile) }}" alt=""
                                style="border-radius: 50%; width: 100px; height: 100px;">
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="Username"><strong>{{ Auth::user()->username }}</strong></div>
                            <div class="nama">{{ $user->nama }}</div>
                            <div class="nama"><strong>6</strong> Posts</div>
                        </div>
                        <div class="col-md-5 text-end d-flex justify-content-end">
                            <!-- Button Edit Profile without image -->
                            <button class="button-kajian me-6 mt-2"
                                onclick="window.location.href = '{{ route('editProfile') }}';">
                                Edit Profile
                            </button>

                            <!-- Button Create with image -->
                            <div class="btn btn-edit" onclick="window.location.href = '{{ route('createUser') }}';">
                                <img src="\assets\img\btn-add.png" alt="Create Icon" width="40">
                                <span class="text-editdownshare">Create</span>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="posts col-md-12">
                        <h3 class="heading3">Posts</h3>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($dataKajian as $kajian)
                        <div class="custom-card col-md-6 mt-4" style="max-width: 540px; margin-right:25px;">
                            <div class="row">
                                <div class="col-md-4 me-2">
                                    <img src="{{ asset('storage/' . $kajian->foto_kajian) }}"
                                        class="post-img rounded-start" alt="Profile">
                                </div>
                                <div class="col-md-5 mt-2">
                                <a href="{{ route('userkajian', $kajian->id) }}" class="text-info me-2"title="View">
                                <h5 class="heading6"><strong>{{ $kajian->judul_kajian }}</strong></h5>
                                </a>
                                    
                                    <p class="heading7">{{ $kajian->deskripsi_kajian }}</p>
                                </div>
                                <div class="col-md-2">
                                <div class="card-body">
                                        <form action="{{ route('userdeleteKajian', $kajian->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete"
                                                onclick="return confirmDelete()">Delete</button>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <a href="{{ asset('storage/' . $kajian->file_kajian) }}"
                                                class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/download.svg" alt="Download Icon">
                                                <span class="text-editdownshare">{{ $kajian->download_text }}</span>
                                            </a>
                                        </div>
                                        <div class="col col-md-4">
                                            <a id="shareid" href="#" class="btn d-flex flex-column align-items-center">
                                                <img src="/assets_admin/assets/img/share.svg" alt="Share Icon">
                                                <span class="text-editdownshare">{{ $kajian->share_text }}</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </section>
    </div>
</main>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var maxLength = 200;
    var truncationIndicator =
        "... <a href='detail_kajian_nv' style='font-size: 10px; color: blue;'>Read More</a>";

    var descElements = document.querySelectorAll('.custom-card .heading7');
    descElements.forEach(function(element) {
        var fullText = element.textContent.trim();
        if (fullText.length > maxLength) {
            var truncatedText = fullText.substring(0, maxLength - truncationIndicator.length) +
                truncationIndicator;
            element.innerHTML = truncatedText;
        }
    });
});
</script>

<script>
document.getElementById('shareid').addEventListener('click', function() {
    // Buat URL yang ingin Anda bagikan
    var urlToShare =
        'https://www.instagram.com/ey_kean/'; // Ganti dengan URL yang sesuai

    // Salin URL ke clipboard
    navigator.clipboard.writeText(urlToShare).then(function() {
        alert('Link telah disalin ke clipboard!');
    }).catch(function(err) {
        console.error('Tidak dapat menyalin teks: ', err);
    });
});

function showDeleteConfirmation() {
    // Implement your delete logic here
    alert("Delete option clicked!");
}
</script>

<script>
    function confirmDelete() {
        // Menggunakan window.confirm() untuk menampilkan notifikasi
        return window.confirm('Apakah Anda yakin ingin menghapus data?');
    }
</script>
@endsection