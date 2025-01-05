@extends('template_portal/main')

@section('template_styles')
@endsection

@section('content')
    <div class="th-hero-wrapper hero-2" id="hero" data-bg-src="{{ asset('assets_portal/img/hero/hero_bg_2_1.jpg') }}">
        <div class="hero-inner">
            <div class="container">
                <div class="hero-style2">
                    <h1 class="hero-title2">
                        <span class="title1">Anak <span class="line-text">Sehat</span></span>
                        <span class="title2">Masa Depan Cerah</span>
                    </h1>
                    <p class="hero-text">Bersama kita jaga pertumbuhan anak sesuai standar kesehatan. Solusi praktis untuk
                        pemantauan dan edukasi gizi anak.</p>
                    <div class="btn-group justify-content-center">
                        <a href="{{ url('auth/login') }}"class="th-btn">Pantau
                            Kesehatan Anak
                            Disini</a>
                    </div>
                </div>
            </div>
            <div class="hero-img">
                <img width="765px" height="782px" src="{{ asset('assets_portal/img/hero/childern.png') }}" alt="Image">
            </div>
            <div class="hero-shape1">
                <img src="{{ asset('assets_portal/img/hero/hero_shape_2_1.svg') }}" alt="shape">
            </div>
            <div class="hero-shape2">
                <img src="{{ asset('assets_portal/img/hero/hero_shape_2_2.svg') }}" alt="shape">
            </div>
            <div class="hero-shape3">
                <img src="{{ asset('assets_portal/img/hero/hero_shape_2_3.svg') }}" alt="shape">
            </div>
            <div class="hero-shape4">
                <img src="{{ asset('assets_portal/img/hero/hero_shape_2_4.svg') }}" alt="shape">
            </div>
            <div class="hero-shape5">
                <img src="{{ asset('assets_portal/img/hero/hero_shape_2_5.svg') }}" alt="shape">
            </div>
        </div>
    </div>

    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-30 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="{{ asset('assets_portal/img/logo.png') }}" alt="About">
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
                        <div>
                            <a href="{{ url('tentang_kami') }}" class="th-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden bg-smoke space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                                alt="Icon">Layanan Kami</span>
                        <h2 class="sec-title">Semua layanan Pantau Tumbuh</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/consultation.png') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="#">Konsultasi dengan Ahli</a></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/little-kid.png') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="#">Pantau Tumbuh</a></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/reading-book.png') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="#">Edukasi Orang Tua</a></h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card" data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/diet.png') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="#">Nutrisi dan Pola Asuh</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5 mb-40 mb-xl-0">
                        <div class="title-area mb-32">
                            <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                                    alt="shape">Mengapa Memilih Kami</span>
                            <h2 class="sec-title">Selalu Sigap Melayani</h2>
                        </div>
                        <div class="choose-feature-wrap">
                            <div class="choose-feature">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">Pemantauan Pertumbuhan Anak</h3>
                                    <p class="box-text">Pantau Tumbuh membantu orang tua dan tenaga kesehatan
                                        memantau perkembangan berat dan tinggi badan anak sesuai
                                        dengan standar WHO memastikan deteksi dini masalah stunting.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">Edukasi Gizi dan Kesehatan Anak</h3>
                                    <p class="box-text">Pantau Tumbuh menyediakan berbagai informasi edukatif tentang gizi
                                        anak dan cara pencegahan stunting, mendukung orang tua dalam
                                        merawat kesehatan anak secara optimal.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">Pencatatan dan Monitoring yang Mudah</h3>
                                    <p class="box-text">Fitur pencatatan yang mudah digunakan memungkinkan orang tua untuk
                                        memantau
                                        perkembangan anak setiap saat, bahkan dengan notifikasi untuk memastikan pemantauan
                                        rutin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box3">
                        <img src="{{ asset('assets_portal/img/normal/Dokter-Landing Page.png') }}" alt="Why">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="z-index-common" data-pos-for="#team-sec" data-sec-pos="bottom-half">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">{{ $orangtua ?? 0 }}</span></span>
                    </h2>
                    <p class="box-text">Orang Tua Terdaftar</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">{{ $tenagamediscount ?? 0 }}</span></span>
                    </h2>
                    <p class="box-text">Tenaga Medis</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">5</span></span>
                    </h2>
                    <p class="box-text">Partner Rumah Sakit</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">1</span></span>
                    </h2>
                    <p class="box-text">Penghargaan</p>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>

    <section class="bg-top-center space" id="team-sec" data-bg-src="{{ asset('assets_portal/img/bg/team_bg_1.jpg') }}">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="Icon">Tenaga Medis</span>
                <h2 class="sec-title">Temui Tenaga Medis Kami</h2>
            </div>
            <div class="swiper th-slider has-shadow" id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @if (!empty($tenagamedis))
                        @foreach ($tenagamedis as $nakes)
                            <div class="swiper-slide">
                                <div class="th-team team-card">
                                    <div class="box-img">
                                        <img src="{{ asset('foto_user/' . $nakes->foto) }}" alt="Team">
                                    </div>
                                    <h3 class="box-title"><a href="#">{{ $nakes->nama }}</a></h3>
                                    <span class="team-desig">Tenaga Medis</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="space" data-bg-src="{{ asset('assets_portal/img/bg/process_bg_1.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="Icon">Alur Kerja</span>
                <h2 class="sec-title">Mari Kita Lihat Bagaimana Proses Kerja Kami</h2>
            </div>
            <div class="process-card-wrap">
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/Pendaftaran.png') }}" alt="icon">
                        </div>
                        <p class="box-number">01</p>
                    </div>
                    <h3 class="box-title">Pendaftaran</h3>
                    <p class="box-text">Mulai monitoring anak dengan mendaftar melalui web Pantau Tumbuh</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/Pemeriksaan.png') }}" alt="icon">
                        </div>
                        <p class="box-number">02</p>
                    </div>
                    <h3 class="box-title">Pemeriksaan</h3>
                    <p class="box-text">Memastikan anak sehat dan terhindar dari stunting sesuai standar WHO</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/Feedback.png') }}" alt="icon">
                        </div>
                        <p class="box-number">03</p>
                    </div>
                    <h3 class="box-title">Feedback</h3>
                    <p class="box-text">Terima hasil pemeriksaan lengkap dengan saran kesehatan dari tenaga medis.
                    </p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/monitoring.jpg') }}" alt="icon">
                        </div>
                        <p class="box-number">04</p>
                    </div>
                    <h3 class="box-title">Monitoring</h3>
                    <p class="box-text">Pantau perkembangan anak secara rutin untuk memastikan pertumbuhan optimal.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden" id="faq-sec" data-bg-src="{{ asset('assets_portal/img/bg/faq_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 text-center text-xl-start align-self-center">
                    <div class="pe-xl-4 space-top pt-xl-0 pb-40 pb-xl-0">
                        <div class="title-area text-center text-xl-start">
                            <span class="sub-title"><img
                                    src="{{ asset('assets_portal/img/theme-img/title_icon_2.svg') }}"
                                    alt="Icon">Faqs</span>
                            <h2 class="sec-title text-white">Pertanyaan yang Sering Diajukan</h2>
                        </div>
                        <div class="accordion" id="faqAccordion">
                            @if (!empty($faqs))
                            @foreach ($faqs as $faq)
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-{{ $loop->iteration }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $loop->iteration }}"
                                            aria-expanded="false"
                                            aria-controls="collapse-{{ $loop->iteration }}">
                                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}. {{ $faq->judul }}
                                        </button>
                                    </div>
                                    <div id="collapse-{{ $loop->iteration }}"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="collapse-item-{{ $loop->iteration }}"
                                        data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">{{ $faq->isi }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xxl-4">
                        <div class="faq-img1">
                            <img src="{{ asset('assets_portal/img/normal/faq-img-1.png') }}" alt="faq">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space" id="testi-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="shape">Testimoni</span>
                <h2 class="sec-title">Apa yang mereka katakan?</h2>
            </div>
            <div class="swiper th-slider" id="testiSlide1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card bg-smoke">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('assets_portal/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Pantau Tumbuh sangat membantu saya memahami perkembangan anak dengan mudah. Grafik pertumbuhan yang disediakan benar-benar memudahkan saya memantau kondisi anak setiap bulan!”</p>
                            <div class="box-profile">
                                <div class="box-content">
                                    <h3 class="box-title">Kafi Rijal Rabbani Sopian</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card bg-smoke">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('assets_portal/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Dulu saya khawatir anak saya kekurangan gizi, tapi dengan kalkulator gizi dan saran menu MPASI di Pantau Tumbuh, saya jadi lebih percaya diri. Anak saya sekarang lebih sehat dan aktif!”</p>
                            <div class="box-profile">
                                
                                <div class="box-content">
                                    <h3 class="box-title">Nurlela</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card bg-smoke">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('assets_portal/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Layanan konsultasi online di Pantau Tumbuh sangat praktis. Saya bisa langsung bertanya ke dokter tanpa harus antre di klinik, dan jawabannya sangat membantu!”</p>
                            <div class="box-profile">
                                <div class="box-content">
                                    <h3 class="box-title">Ahmad Hilmy</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card bg-smoke">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('assets_portal/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Saya suka fitur pengingat jadwal imunisasi! Jadi tidak pernah lagi lupa kapan anak harus ke posyandu. Benar-benar membantu orang tua yang sibuk seperti saya.”</p>
                            <div class="box-profile">
                                <div class="box-content">
                                    <h3 class="box-title">Nadia Shaliha</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </section>

    <section class="space" id="blog-sec" data-bg-src="{{ asset('assets_portal/img/bg/blog_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                                alt="shape">Artikel</span>
                        <h2 class="sec-title">Artikel Kesehatan</h2>
                    </div>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn">
                        <a href="{{ url('artikel_kesehatan') }}" class="th-btn style4">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        @if (!empty($artikels))
                            @foreach ($artikels as $artikel)
                                <div class="swiper-slide">
                                    <div class="blog-card">
                                        <div class="blog-img">
                                            <img src="{{ asset('image_artikel/' . $artikel->image) }}" alt="blog image">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><i
                                                        class="fal fa-user"></i>{{ $artikel->user->nama }}</a>
                                                <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><i
                                                        class="fal fa-calendar"></i>{{ $artikel->created_at->format('d M Y') }}</a>
                                            </div>
                                            <h3 class="box-title"><a
                                                    href="{{ url('artikel_detail') }}/{{ $artikel->slug }}">{{ $artikel->judul }}</a>
                                            </h3>
                                            <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"
                                                class="th-btn btn-sm">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <button data-slider-prev="#blogSlider1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </section>
@endsection

@section('template_scripts')
@endsection
