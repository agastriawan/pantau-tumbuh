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
                    <p class="hero-text">Bersama kita jaga pertumbuhan anak sesuai standar kesehatan. Solusi praktis untuk pemantauan dan edukasi gizi anak.</p>
                    <div class="btn-group justify-content-center">
                        <a href="{{ url('/login') }}" class="th-btn">Pantau Kesehatan Anak Disini</a>
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
                            <a href="{{ url('/tentang-kami') }}" class="th-btn">Selengkapnya</a>
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
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_1.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Internal Medicine</a></h3>
                        <p class="box-text">30+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_2.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Dental Care</a></h3>
                        <p class="box-text">20+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_3.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Urology Care</a></h3>
                        <p class="box-text">20+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_4.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Neurology Care</a></h3>
                        <p class="box-text">10+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_5.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Gynecologists</a></h3>
                        <p class="box-text">30+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_6.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Ophthalmology</a></h3>
                        <p class="box-text">24+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_7.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Orthopedics</a></h3>
                        <p class="box-text">26+ Doctors</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="service-card"
                        data-bg-src="{{ asset('assets_portal/img/service/service_bg_1.jpg') }}">
                        <div class="box-shape">
                            <img src="{{ asset('assets_portal/img/bg/service_card_bg.png') }}" alt="Service">
                        </div>
                        <div class="box-icon">
                            <img src="{{ asset('assets_portal/img/icon/service_card_8.svg') }}" alt="Icon">
                        </div>
                        <h3 class="box-title"><a href="service-details.html">Cardiology</a></h3>
                        <p class="box-text">20+ Doctors</p>
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
                                    alt="shape">Why
                                Choose Us</span>
                            <h2 class="sec-title">We Are Always Open For Your Health Services</h2>
                        </div>
                        <div class="choose-feature-wrap">
                            <div class="choose-feature">
                                <div class="box-number">01</div>
                                <div class="media-body">
                                    <h3 class="box-title">Compassionate & Expert Care</h3>
                                    <p class="box-text">Our team of dedicated healthcare professionals combines years of
                                        experience with a genuine commitment to providing.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">02</div>
                                <div class="media-body">
                                    <h3 class="box-title">Patient-Centered Approach</h3>
                                    <p class="box-text">Your health and well-being are our top priorities. We take the time
                                        to listen to your concerns, answer your questions.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-number">03</div>
                                <div class="media-body">
                                    <h3 class="box-title">Personalized Treatment Plans</h3>
                                    <p class="box-text">We understand that every patient is unique, and their healthcare
                                        needs may vary. That's why we create individualized treatment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box3">
                        <img src="{{ asset('assets_portal/img/normal/why_1.jpg') }}" alt="Why">
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
                        <span class="number"><span class="counter-number">69</span>k</span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Satisfied Patients</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">236</span></span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Professional Doctors</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">19</span>k</span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">Operations Successful</p>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <h2 class="box-number">
                        <span class="number"><span class="counter-number">320</span></span><span class="plus">+</span>
                    </h2>
                    <p class="box-text">National Awards Win</p>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>

    <section class="bg-top-center space" id="team-sec"
        data-bg-src="{{ asset('assets_portal/img/bg/team_bg_1.jpg') }}">
        <div class="container z-index-common">
            <div class="title-area text-center">
                <span class="sub-title"><img src="{{ asset('assets_portal/img/theme-img/title_icon.svg') }}"
                        alt="Icon">Tenaga Medis</span>
                <h2 class="sec-title">Temui Tenaga Medis Kami</h2>
            </div>
            <div class="swiper th-slider has-shadow" id="teamSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_1.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Malcolm Function</a></h3>
                            <span class="team-desig">Neurologist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_2.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Douglas Lyphe</a></h3>
                            <span class="team-desig">Physiotherapist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_3.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Wisteria Ravenc</a></h3>
                            <span class="team-desig">Cardiologist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_4.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Benjamin Evalent</a></h3>
                            <span class="team-desig">Dentist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_5.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Rishita Rosei</a></h3>
                            <span class="team-desig">Neurologist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_6.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Emanuyel Mac</a></h3>
                            <span class="team-desig">Physiotherapist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_7.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Wilium Lily</a></h3>
                            <span class="team-desig">Cardiologist</span>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="box-img">
                                <img src="{{ asset('assets_portal/img/team/team_1_8.jpg') }}" alt="Team">
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <h3 class="box-title"><a href="team-details.html">Dr. Esabel Macran</a></h3>
                            <span class="team-desig">Dentist</span>
                        </div>
                    </div>

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
                            <img src="{{ asset('assets_portal/img/normal/process_card_1.jpg') }}" alt="icon">
                        </div>
                        <p class="box-number">01</p>
                    </div>
                    <h3 class="box-title">Patient Registration</h3>
                    <p class="box-text">The first step in our process is to welcome our patients and ensure they have a
                        experience.</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/process_card_2.jpg') }}" alt="icon">
                        </div>
                        <p class="box-number">02</p>
                    </div>
                    <h3 class="box-title">Check-Ups</h3>
                    <p class="box-text">Once the patient is checked in, healthcare professional conduct a thorough
                        evaluation.</p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/process_card_3.jpg') }}" alt="icon">
                        </div>
                        <p class="box-number">03</p>
                    </div>
                    <h3 class="box-title">Get Report</h3>
                    <p class="box-text">Analyzing the result of diagnostic tests & incorporating them into the diagnosis.
                    </p>
                </div>
                <div class="process-card">
                    <div class="box-img">
                        <div class="img">
                            <img src="{{ asset('assets_portal/img/normal/process_card_4.jpg') }}" alt="icon">
                        </div>
                        <p class="box-number">04</p>
                    </div>
                    <h3 class="box-title">Ongoing Care</h3>
                    <p class="box-text">Our commitment to our patient extend beyond the initial visit. we ensure continuity
                        of care.</p>
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


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">01.
                                        What services does the clinic offer?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our clinic is strategically located for easy access, ensuring
                                            that you can reach us conveniently from various parts of the community. We also
                                            provide accessibility.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">02.
                                        How do I schedule an appointment?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our clinic is strategically located for easy access, ensuring
                                            that you can reach us conveniently from various parts of the community. We also
                                            provide accessibility.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">03.
                                        What are the clinic hours of operation?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">Our clinic is strategically located for easy access, ensuring
                                            that you can reach us conveniently from various parts of the community. We also
                                            provide accessibility.</p>
                                    </div>
                                </div>
                            </div>
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
                        alt="shape">Testimonials</span>
                <h2 class="sec-title">What Our Present Says?</h2>
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
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('assets_portal/img/testimonial/testi_1_1.jpg') }}" alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Pelican Steve</h3>
                                    <span class="box-desig">Neurologist</span>
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
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('assets_portal/img/testimonial/testi_1_2.jpg') }}" alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Alexa Milton</h3>
                                    <span class="box-desig">Physiotherapist</span>
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
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('assets_portal/img/testimonial/testi_1_1.jpg') }}" alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Pelican Steve</h3>
                                    <span class="box-desig">Neurologist</span>
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
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('assets_portal/img/testimonial/testi_1_2.jpg') }}" alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Alexa Milton</h3>
                                    <span class="box-desig">Physiotherapist</span>
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
                        <a href="{{ url('/artikel') }}" class="th-btn style4">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>15 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">How Business Is Taking Over & What
                                            to Do About It</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_2.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>16 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Health vs. Wealth Navigate Business
                                            in Medicine</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_3.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>17 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Preserving Care Strategy Amidst Food
                                            Changes</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_4.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>19 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Healthcare Tips Navigating Business
                                            & Patient Care</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_1.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>15 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Strategies Against Corporate
                                            Intrusion in Healthcare</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('assets_portal/img/blog/blog_1_2.jpg') }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                        <a href="blog.html"><i class="fal fa-calendar"></i>16 March, 2024</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Transform Your Nutrition with
                                            Organic Meal</a></h3>
                                    <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>

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
