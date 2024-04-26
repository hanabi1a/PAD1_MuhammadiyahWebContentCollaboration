<section class="ftco-section">
    <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="" class="logo-navbar2">
            </a>
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
                            <!-- TODO: route  -->
                            <button class="dropdown-item" onclick="window.location.href = '';">
                                <span class="heading7">Account</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="fas fa-person-check icon-akun" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                    <path
                                        d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="dropdown-item" onclick="window.location.href = '{{ route('profile.show') }}';">
                                <span class="heading7">Profile</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-person icon-profile" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>
                            </button>
                        </li>

                        <li>
                            <!-- Authentication -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
    
                                <a class="nav-link" href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <div class="sb-nav-link-icon">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </div>Log Out
                                    <div class="sb-sidenav-collapse-arrow">
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                            </form>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item logout">
                                    <span class="heading7">Log Out</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-person-x icon-logout" viewBox="0 0 16 16">
                                        <path
                                            d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z" />
                                    </svg>
                                </button>
                            </form>
                            
                        </li>
                    </ul>
                </div>          
            @else 
                <div class="collapse navbar-collapse order-lg-last">
                    <div class="d-flex order-lg-last akun">
                        <button class="sign-up me-3 fw-bolder" onclick="window.location.href='{{ route('register') }}'">
                            Sign Up
                        </button>
                        <button class="sign-in fw-bolder me-3" onclick="window.location.href='{{ route('login') }}'">
                            Sign In
                        </button>
                    </div>
                </div>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse nvbar" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('beranda') ? 'active' : '' }}"><a href="{{ url('beranda') }}"
                            class="nav-link" style="font-size: 16px; font-weight: bold;">Beranda</a></li>
                    <li class="nav-item {{ request()->is('kajian') ? 'active' : '' }}"><a
                            href="{{ route('kajian.show') }}" class="nav-link"
                            style="font-size: 16px; font-weight: bold;">Kajian</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"
                            class="nav-link" style="font-size: 16px; font-weight: bold;">Tentang Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>
