@extends('template_portal/main')

@section('template_styles')
@endsection

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets_portal/img/bg/breadcumb_1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Artikel Kesehatan</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Artikel</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="space" id="blog-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5">
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
                <div class="col-md-4 mb-5">
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
                <div class="col-md-4 mb-5">
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
                <div class="col-md-4 mb-5">
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
                <div class="col-md-4 mb-5">
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
                <div class="col-md-4 mb-5">
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

                <div class="th-pagination text-center">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('template_scripts')
@endsection
