<div class="sidemenu-wrapper sidemenu-info ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="home-medical-clinic.html"><img src="{{ asset('assets_portal/img/logo.svg') }}"
                            alt="Mediax"></a>
                </div>
                <p class="about-text">Subscribe to out newsletter today to receive latest news administrate cost
                    effective for tactical data.</p>
                <p class="footer-info">
                    <i class="fal fa-location-dot"></i>
                    2478 Street City Ohio 90255
                </p>
                <p class="footer-info">
                    <i class="fal fa-envelope"></i>
                    <a href="mailto:info@mediax.com" class="info-box_link">info@mediax.com</a>
                </p>
                <p class="footer-info">
                    <i class="fal fa-phone"></i>
                    <a href="tel:+40276328246" class="info-box_link">+(402) 763 282 46</a>
                </p>
                <div class="th-social">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Let’s Stay In Touch</h3>
            <div class="newsletter-widget">
                <p class="footer-text">Subscribe for newsletter</p>
                <form action="#" class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Enter Email" required="">
                    </div>
                    <button type="submit" class="simple-icon"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
                <div class="form-group">
                    <input type="checkbox" id="checkboxagree" name="checkboxagree">
                    <label for="checkboxagree">I agree with the terms & conditions</label>
                </div>
                <div class="btn-group">
                    <a href="https://play.google.com/" class="img-btn">
                        <img src="{{ asset('assets_portal/img/normal/apple_store.png') }}" alt="icon">
                    </a>
                    <a href="https://play.google.com/" class="img-btn">
                        <img src="{{ asset('assets_portal/img/normal/play_store.png') }}" alt="icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

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
            <a href="{{ url('/') }}"><img src="{{ asset('assets_portal/img/logo.svg') }}" alt="Mediax"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="home-medical-clinic.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="home-medical-clinic.html">Medical Clinic</a></li>
                        <li><a href="home-dental-care.html">Dental Care</a></li>
                        <li><a href="home-medical-shop.html">Medical Shop</a></li>


                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Service</a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Service</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="appointment.html">Appointments</a></li>
                        <li><a href="faq.html">Faq Page</a></li>
                        <li><a href="pricing.html">Pricing Plan</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
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
                                <li><a href="{{ url('/tentang-kami') }}">Tentang</a></li>
                                <li>
                                    <a href="{{ url('/artikel') }}">Artikel</a>
                                </li>
                                <li>
                                    <a href="{{ url('/kontak') }}">Kontak</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto">
                        <div class="header-button">
                            <a href="{{ url('/login') }}" class="th-btn" id="btn-daftar">Masuk</a>
                            <button type="button" class="icon-btn sideMenuInfo d-none d-xl-inline-block"><i
                                    class="far fa-bars"></i></button>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
