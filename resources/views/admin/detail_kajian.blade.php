@extends('admin.layout')

@section('content')
<main> <div class="container-fluid px-4"> 
    <h1 class="mt-5">Create Kajian</h1> 
    <ol class="breadcrumb mt-2"> 
        <li class="text_page breadcrumb"> <a href="dashboard">Dashboard / </a>
        <a href="data_kajian" class="active_title">Data Kajian / </a>
        <a href="data_kajian" class="active_title"> Detail Kajian</a>
    </li>
    </ol>

    <div class="card mb-4">
        <div class="right-panel">
            <div class="main">
                <div class="post">
                    <div class="scrollable">
                        <div class="smnav">
                            <a href="Index.html" style="text-decoration: none;"><img
                                    src="assets_admin/assets/img_detail_kajian/insta-logo.png" class="smlogo-icon"
                                    alt="logo"></a>
                            <input type="text" class="search-input" placeholder="Search">
                            <img src="assets_admin/assets/img_detail_kajian/notification.png" class="smnav-img"
                                alt="notification">
                        </div>
                        <div class="user-post">
                            <div class="card-title">
                                <a href="#"><img src="assets_admin/assets/img_detail_kajian/profile.png"
                                        class="profile-img" alt="userprofile">
                                    <p>Karthi Madesh</p>
                                    <span class="three-dots">...</span>
                                </a>
                            </div>
                            <div class="card-img">
                                <img src="assets\img\kajian\kajian.jpg" class="post-img"
                                    alt="iaf">
                            </div>
                            <!-- Additional Card Content -->
                            <div class="card-content">
                                <div style="display: flex; align-items: baseline;">
                                    <p><strong>Judul:</strong></p>
                                    <p style="margin-left: 10px;">Muktamar MH</p>
                                </div>
                                <div style="display: flex; align-items: baseline;">
                                    <p><strong>Pemateri:</strong></p>
                                    <p style="margin-left: 10px;">Drs. H. Marpuji Ali, M.SI</p>
                                </div>
                                <div style="display: flex; align-items: baseline;">
                                    <p><strong>Tanggal:</strong></p>
                                    <p style="margin-left: 10px;">Senin, 17 Oktober 2022</p>
                                </div>
                                <div style="display: flex; align-items: baseline;">
                                    <p><strong>Lokasi:</strong></p>
                                    <p style="margin-left: 10px;">Universitas Muhammadiyah Kudus | Via Zoom</p>
                                </div>
                                <div>
                                    <p><strong>Deskripsi:</strong></p>
                                    <p>
                                        Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                        Muhammadiyah 'Aisyiyah ke-48. Pengajian Milad Universitas
                                        Muhammadiyah Kudus ke-24 dan Muktamar Muhammadiyah 'Aisyiyah ke-48.
                                        Pengajian Milad Universitas Muhammadiyah Kudus ke-24 dan Muktamar
                                    </p>
                                </div>
                            </div>
                            <!-- End of Additional Card Content -->
                        </div>
                    </div>
                </div>

                <div class="profile-section">
                    <a href="#"><img src="assets_admin/assets/img_detail_kajian/create.png" class="nav-img" alt="create">
                        <p>Create</p>
                    </a>
                    <br>
                    <div class="myprofile">
                        <img src="assets_admin/assets/img_detail_kajian/profile.png" alt="profile" class="myprofile-img">
                        <p style=" margin-top: 15px; margin-top: 25px; font-size: large; cursor: pointer;">
                            Karthi Madesh<br><span>Karthi Madesh Taehyung</span>
                        </p>
                        </span>
                        <button style="background: none; border: none;">
                            <i class="fas fa-chevron-right"></i>
                        </button>

                    </div>
                    <div class="suggestion">
                        <p style="color: gray;">Edit By</p>
                        <br><br>
                    </div>
                    <div class="myprofile">
                        <img src="assets_admin/assets/img_detail_kajian/profile.png" alt="profile" class="suggprofile-img">
                        <p style="  margin-top: 15px; cursor: pointer;">Karthi Madesh<br>
                        </p>
                        <button
                            style="background: none; border: none; margin-left: 180px; margin-top: 8px; cursor: pointer;">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div><br>
                    <div class="myprofile">
                        <img src="assets_admin/assets/img_detail_kajian/profile.png" alt="profile" class="suggprofile-img">
                        <p style="  margin-top: 15px; cursor: pointer;">Karthi Madesh<br>
                        </p>
                        <button
                            style="background: none; border: none; margin-left: 180px; margin-top: 8px; cursor: pointer;">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div><br>
                    <div class="myprofile">
                        <img src="assets_admin/assets/img_detail_kajian/profile.png" alt="profile" class="suggprofile-img">
                        <p style="  margin-top: 15px; cursor: pointer;">Karthi Madesh<br>
                        </p>
                        <button
                            style="background: none; border: none; margin-left: 180px; margin-top: 8px; cursor: pointer;">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
            </div>
        </div>
    </div>
    </div>
    </main>
@endsection