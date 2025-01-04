@extends('template_portal/main')

@section('template_styles')
    <style>
        .about-video-wrap {
            margin-left: 0 !important;
        }

        .img-team-web {
            width: 288px !important;
            height: 340px !important;
        }
    </style>
@endsection

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets_portal/img/bg/breadcumb_1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tentang Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup" data-top="0" data-right="0"><img
                src="{{ asset('assets_portal/img/shape/pattern_shape_1.png') }}" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-none" data-bottom="10%" data-left="2%"><img
                src="{{ asset('assets_portal/img/shape/medicine_1.png') }}" alt="shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ asset('assets_portal/img/logo.png') }}" alt="About">
                        </div>
                        <div class="about-info style2">
                            <h3 class="box-title">Pantau Tumbuh</h3>
                            <a href="tel:+16356478965" class="box-link"><i class="fa-solid fa-phone"></i> +163 564 78965</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4 ms-xl-2 text-center text-xl-start">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                                    alt="shape">Tentang Kami</span>
                            <h2 class="sec-title">Anak Sehat, Masa Depan Cerah</h2>
                            <p class="sec-text">Aplikasi Pantau Tumbuh dikembangkan untuk membantu menangani masalah
                                stunting pada anak di Indonesia, yang masih memiliki prevalensi tinggi akibat kekurangan
                                gizi kronis dan infeksi berulang. Dengan aplikasi ini, orang tua dan tenaga kesehatan dapat
                                mencatat serta memantau perkembangan kesehatan anak, termasuk berat dan tinggi badan, sesuai
                                standar WHO.</p>
                        </div>
                        <div class="about-video-wrap">
                            <div class="box-content">
                                <div class="about-contact-wrap">
                                    <div class="about-contact">
                                        <p class="box-label">Support Line 24/7</p>
                                        <h3 class="box-title"><i class="fal fa-envelope"></i> <a
                                            href="{{ url('kontak_kami') }}">Kontak Kami</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" id="team-sec">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="Icon">Tim Pengembang Website</span>
                <h2 class="sec-title">Temui Tim Pengembangan Situs Web Kami</h2>
            </div>
            <div class="swiper th-slider has-shadow" id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/team_1_8.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://www.instagram.com/abdurrafa22_?igsh=MW9iMHY1bndwNnQyeg=="><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/rafa-abdurrahman-8a3758293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Abdurrahman Rafatullah</a></h3>
                            <span class="team-desig">Product Owner</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/abror.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://www.instagram.com/abrrpr/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/abror-pratama-harahap-947558308/"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Abror Pratama Harahap</a></h3>
                            <span class="team-desig">Scrum Master</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/agas.png') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank"
                                        href="https://www.instagram.com/agastriawan/?next=%2Fagastriawan%2F"><i
                                            class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/agas-triawan-b02354244/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Agas Triawan</a></h3>
                            <span class="team-desig">Developer</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/arby.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank"
                                        href="https://www.instagram.com/arbyali.a?igsh=MXhrOTEwN2xoMTducA=="><i
                                            class="fab fa-instagram"></i></a>
                                    <a target="_blank"
                                        href="https://www.linkedin.com/in/arby-ali-976b4a292?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Arby Ali Amaludin</a></h3>
                            <span class="team-desig">Developer</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/adi.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://www.instagram.com/adikurniawan1171?igsh=MWtoZzB1M3c0NW5nOQ=="><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/adi-kurniawan-789401293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Adi kurniawan</a></h3>
                            <span class="team-desig">Developer</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/ainun.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank"
                                        href="https://www.instagram.com/widya_ns0101/profilecard/?igsh=YjQ0eGFrYm92dWNz"><i
                                            class="fab fa-instagram"></i></a>
                                    <a target="_blank"
                                        href="https://www.linkedin.com/in/ainun-nisa-widya-ningrum-2ba589293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Ainun Nisa widya Ningrum</a></h3>
                            <span class="team-desig">Media Kreatif</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/ulfa.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://www.instagram.com/faradillah.ulfa/"><i
                                            class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/ulfa-faradillah-017b122a4/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Ulfa Faradillah</a></h3>
                            <span class="team-desig">Media Kreatif</span>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img class="img-team-web" src="{{ asset('assets_portal/img/team/team_1_8.jpg') }}"
                                    alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://www.instagram.com/hiii_nanazwaquen27/profilecard/?igsh=ZXg4enh1ZXo4cXg1"><i
                                            class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/in/nur-sabilla-nazwa-388bb8308?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="#">Nazwa Nur Sabilla</a></h3>
                            <span class="team-desig">Media Kreatif</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="space" id="achieve-sec">
        <div class="container">
            <div class="title-area text-center text-md-start">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="shape">Keunggulan</span>
                <h2 class="sec-title">Keunggulan Pantau Tumbuh</h2>
            </div>
            <div class="achieve-box-wrap">
                <div class="achieve-box hover-item item-active">
                    <div class="box-img">
                        <img src="{{ asset('assets_portal/img/normal/anak.jpg') }}" alt="Image">
                    </div>
                    <div class="box-year">1</div>
                    <div class="media-body">
                        <h3 class="box-title">Pemantauan Pertumbuhan Anak</h3>
                        <p class="box-text">Pantau Tumbuh membantu orang tua dan tenaga kesehatan memantau perkembangan
                            berat dan tinggi badan anak sesuai dengan standar WHO, memastikan deteksi dini masalah stunting.
                        </p>
                    </div>
                </div>
                <div class="achieve-box hover-item ">
                    <div class="box-img">
                        <img src="{{ asset('assets_portal/img/normal/nutrisi.jpg') }}" alt="Image">
                    </div>
                    <div class="box-year">2</div>
                    <div class="media-body">
                        <h3 class="box-title">Edukasi Gizi dan Kesehatan Anak</h3>
                        <p class="box-text">Aplikasi ini menyediakan berbagai informasi edukatif tentang gizi anak dan cara
                            pencegahan stunting, mendukung orang tua dalam merawat kesehatan anak secara optimal.</p>
                    </div>
                </div>
                <div class="achieve-box hover-item ">
                    <div class="box-img">
                        <img src="{{ asset('assets_portal/img/normal/monitoring.jpg') }}" alt="Image">
                    </div>
                    <div class="box-year">3</div>
                    <div class="media-body">
                        <h3 class="box-title">Pencatatan dan Monitoring yang Mudah</h3>
                        <p class="box-text">Fitur pencatatan yang mudah digunakan memungkinkan orang tua untuk memantau
                            perkembangan anak setiap saat, bahkan dengan notifikasi untuk memastikan pemantauan rutin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('template_scripts')
@endsection
