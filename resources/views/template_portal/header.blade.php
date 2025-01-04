<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

<!-- Mobile Menu -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <div class="logo-bg" data-bg-src="{{ asset('assets_portal/img/bg/logo_bg_1.png') }}">
            </div>
            <a href="{{ url('/') }}"><img width="202px" height="62px"
                    style="margin-top:-5px;" src="{{ asset('assets_portal/img/logo-2.png') }}"
                    alt="Pantau Tumbuh"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="">
                    <a href="{{ url('/') }}">Beranda</a>
                </li>
                <li><a href="{{ url('tentang_kami') }}">Tentang</a></li>
                <li>
                    <a href="{{ url('artikel_kesehatan') }}">Artikel</a>
                </li>
                <li>
                    <a href="{{ url('kontak_kami') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1">
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <div class="logo-bg" data-bg-src="{{ asset('assets_portal/img/bg/logo_bg_1.png') }}">
                            </div>
                            <a href="{{ url('/') }}"><img width="202px" height="62px"
                                    style="margin-top:-5px;" src="{{ asset('assets_portal/img/logo-2.png') }}"
                                    alt="Pantau Tumbuh"></a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-inline-block">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="">
                                    <a href="{{ url('/') }}">Beranda</a>
                                </li>
                                <li><a href="{{ url('tentang_kami') }}">Tentang</a></li>
                                <li>
                                    <a href="{{ url('artikel_kesehatan') }}">Artikel</a>
                                </li>
                                <li>
                                    <a href="{{ url('kontak_kami') }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-button">
                            <a href="{{ url('auth/login') }}" class="th-btn" id="btn-daftar">Masuk</a>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="fas fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
