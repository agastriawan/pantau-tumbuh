@extends('template_portal/main')

@section('template_styles')
@endsection

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets_portal/img/bg/breadcumb_1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Detail Artikel Kesehatan</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Detail Artikel</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img width="100%" src="{{ asset("assets_portal/img/blog/blog-s-1-1.jpg") }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                <a href="blog.html"><i class="fal fa-calendar"></i>21 June, 2024</a>
                                <a href="blog-details.html"><i class="fal fa-comments"></i>Comments (3)</a>
                            </div>
                            <h2 class="blog-title">How Business Is Taking Over & What to Do About It</h2>
                            <p>We offer flexible appointment scheduling options to accommodate your busy lifestyle. Whether you prefer to book in advance or need a same-day appointment, we strive to make the process as seamless as possible.</p>
                            <p>Especially in light of the ongoing COVID-19 pandemic, we maintain rigorous safety protocols and hygiene standards to ensure the well-being of our patients and staff. Your health and safety are our utmost priority.</p>

                            <div class="share-links clearfix ">
                                <div class="row justify-content-between">
                                    <div class="col-sm-auto">
                                        <span class="share-links-title">Tags:</span>
                                        <div class="tagcloud">
                                            <a href="blog.html">Medical</a>
                                            <a href="blog.html">Renovations</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-auto text-xl-end">
                                        <span class="share-links-title">Share:</span>
                                        <div class="th-social">
                                            <a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                            <a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </div><!-- End Social Share -->
                                    </div><!-- Share Links Area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('template_scripts')
@endsection
