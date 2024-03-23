<section class="ftco-section">
    <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/logo.png" alt="" class="logo-navbar">
            </a>
            <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" placeholder="" class="form-control search"><span
                            class="fa fa-search"></span></button>
                </div>
            </form>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse nvbar" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item {{ request()->is('homepage') ? 'active' : '' }}"><a
                            href="{{ url('public_homepage') }}" class="nav-link">Home</a></li>
                    <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ route('about') }}"
                            class="nav-link">About</a></li>
                    <li class="nav-item {{ request()->is('kajian') ? 'active' : '' }}"><a href="#"
                            class="nav-link">Kajian</a></li>
                    {{-- {{ route('nlkajian') }} --}}
                </ul>
            </div>
        </div>
    </nav>
</section>