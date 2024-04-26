<section class="ftco-section">
    <nav class="navbar navbar-expand-lg ftco-navbar-light navbar-custom">

            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="" class="logo-navbar2">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('beranda', '/') || request()->routeIs('beranda') ? 'active' : '' }}">
                        <a href="{{ url('beranda') }}" class="nav-link" style="font-size: 16px; font-weight: bold;">Beranda</a>
                    </li>
                    <li class="nav-item {{ request()->is('kajian') ? 'active' : '' }}">
                        <a href="{{ route('kajian.show') }}" class="nav-link" style="font-size: 16px; font-weight: bold;">Kajian</a>
                    </li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                        <a href="{{ route('about') }}" class="nav-link" style="font-size: 16px; font-weight: bold;">Tentang Kami</a>
                    </li>
                </ul>
            </div>

            @if (Auth::user() != null)
                <div class="dropdown order-lg-last">
                    <div class="dropdown-toggle btn-login text-light" id="dropdownMenu2" data-bs-toggle="dropdown"
                        aria-expanded="true">
                        {{ Auth::user()->username }}
                        <img src="{{ asset('storage/' . Auth::user()->foto_profile) }}" alt="" width="30px" height="30px"
                            style="border-radius: 50%;" class="ms-2">
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <button class="dropdown-item" onclick="window.location.href = '{{ route('profile.show') }}';">
                                <img src="\assets\img\icon\icon_profile_pengguna.svg"/>
                                <span class="heading7">Profil Pengguna</span>
                            </button>
                        </li>
                        <li>
                            <!-- TODO: route  -->
                            <button class="dropdown-item" onclick="window.location.href = '';">
                                <img src="\assets\img\icon\icon_informasi_akun.svg"/>
                                <span class="heading7">Informasi Akun</span>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item logout" type="button" action="{{ route('logout') }}">
                                <img src="\assets\img\icon\icon_keluar.svg"/>
                                <span class="heading7">Keluar</span>
                            </button>
                        </li>
                    </ul>
                </div>        
            @else
            <div class="collapse navbar-collapse order-lg-last">
                    <div class="d-flex order-lg-last akun">
                        <button class="sign-up me-3 fw-bolder" onclick="window.location.href='{{ route('register') }}'">
                            Daftar
                        </button>
                        <button class="sign-in fw-bolder me-3" onclick="window.location.href='{{ route('login') }}'">
                            Masuk
                        </button>
                    </div>
                </div>
            @endif

    </nav>
</section>
