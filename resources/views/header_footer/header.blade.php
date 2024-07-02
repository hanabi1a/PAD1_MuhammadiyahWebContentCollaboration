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
                        <a href="{{ route('kajian.index') }}" class="nav-link" style="font-size: 16px; font-weight: bold;">Kajian</a>
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
                        @if($user->foto_profile != null)
                        <img src="{{ asset('storage/' . Auth::user()->foto_profile) }}" alt="" width="30px" height="30px"
                            style="border-radius: 50%;" class="ms-2">
                        @else
                        <img src="/assets/img/foto_default.png" alt="profile_picture" width="30px" height="30px"
                        style="border-radius: 50%;" class="ms-2">
                        @endif
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li>
                            <button class="dropdown-item" onclick="window.location.href = '{{ route('profile.akun_pengguna') }}';">
                                <img src="\assets\img\icon\icon_profile_pengguna.svg"/>
                                <span class="heading7">Profil Pengguna</span>
                            </button>
                        </li>
                        <li>

                            <button class="dropdown-item" onclick="window.location.href = '{{ route('profile.show.information') }}';">
                                <img src="\assets\img\icon\icon_informasi_akun.svg"/>
                                <span class="heading7">Informasi Akun</span>
                            </button>
                        </li>
                        <li>
                            <!-- Authentication -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf

                                <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <div class="logout">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                             class="bi bi-person-x icon-logout" viewBox="0 0 16 16">
                                            <path
                                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                            <path
                                                d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z" />
                                        </svg>
                                        <span class="heading7">Log Out</span>
                                    </div>
                                </a>
                            </form>
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
