@extends('template_portal/main')

@section('template_styles')
@endsection

@section('content')
    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="th-blog blog-single">
                        <div class="blog-img">
                            <img width="100%" src="{{ asset('image_artikel/' . $artikels->image) }}" alt="Blog Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="#"><i class="fal fa-user"></i> {{ $artikels->user->nama }}</a>
                                <a href="#"><i class="fal fa-calendar"></i>{{ $artikels->created_at->format('d M Y') }}</a>
                            </div>
                            <h2 class="blog-title">{{ $artikels->judul }}</h2>
                            <p>{!! $artikels->isi !!}</p>

                            <div class="share-links clearfix ">
                                <div class="row justify-content-between">
                                    <div class="col-sm-auto">
                                        <span class="share-links-title">Tags:</span>
                                        <div class="tagcloud">
                                            @php
                                                $tags = explode(',', $artikels->tags);
                                            @endphp
                                            @foreach ($tags as $tag)
                                                <a href="#">{{ trim($tag) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-auto text-xl-end">
                                        <span class="share-links-title">Share:</span>
                                        <div class="th-social">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url('artikel_detail') . '/' . $artikels->slug) }}" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                    
                                            <a href="https://wa.me/?text={{ urlencode(url('artikel_detail') . '/' . $artikels->slug) }}" target="_blank">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
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
