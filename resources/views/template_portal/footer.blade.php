<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets_portal/img/bg/footer_bg_1.jpg') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets_portal/img/logo-3.png') }}"
                                        alt="Mediax"></a>
                            </div>
                            <p class="about-text">Bersama kita jaga pertumbuhan anak sesuai standar kesehatan. Solusi
                                praktis untuk pemantauan dan edukasi gizi anak.</p>
                            <p class="footer-info">
                                <i class="fal fa-location-dot"></i>
                                STT Terpadu Nurul Fikri - Kampus B
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-envelope"></i>
                                <a href="mailto:info@mediax.com" class="info-box_link">pantautumbuh@gmail.com</a>
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-phone"></i>
                                <a href="tel:+40276328246" class="info-box_link">088295747113</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Menu</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
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
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Layanan</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Konsultasi dengan Ahli</a></li>
                                <li><a href="#">Pantau Kembang Anak</a></li>
                                <li><a href="#">Edukasi Orang Tua</a></li>
                                <li><a href="#">Nutrisi dan Pola Asuh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Artikel Terbaru</h3>
                        <div class="recent-post-wrap">
                            @if (!empty($artikelTerbaru))
                                @foreach ($artikelTerbaru as $artikel)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><img
                                                    src="{{ asset('image_artikel/' . $artikel->image) }}"
                                                    alt="Blog Image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title"><a class="text-inherit" href="{{ url('artikel_detail') }}/{{ $artikel->slug }}">{{ $artikel->judul }}</a></h4>
                                            <div class="recent-post-meta">
                                                <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><i class="fal fa-calendar"></i>{{ $artikel->created_at->format('d M Y') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-7">
                    <p class="copyright-text">Kelompok <a href="#">Burung Hantu</a> TI-05</p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>
