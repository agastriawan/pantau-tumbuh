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
                @if (!$artikels->isEmpty())
                    @foreach ($artikels as $artikel)
                        <div class="col-md-4 mb-5">
                            <div class="blog-card">
                                <div class="blog-img">
                                    <img src="{{ asset('image_artikel/' . $artikel->image) }}" alt="blog image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><i class="fal fa-user"></i>{{ $artikel->user->nama }}</a>
                                        <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}"><i class="fal fa-calendar"></i>{{ $artikel->created_at->format('d M Y') }}</a>
                                    </div>
                                    <h3 class="box-title"><a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}">{{ $artikel->judul }}</a></h3>
                                    <a href="{{ url('artikel_detail') }}/{{ $artikel->slug }}" class="th-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No articles found.</p>
                @endif
            </div>
    
            <div class="th-pagination text-center">
                <ul>
                    @if ($artikels->onFirstPage())
                        <li><a href="#" class="rounded disabled">&laquo;</a></li>
                    @else
                        <li><a href="{{ $artikels->previousPageUrl() }}" class="rounded">&laquo;</a></li>
                    @endif
    
                    @for ($i = 1; $i <= $artikels->lastPage(); $i++)
                        @if ($i == $artikels->currentPage())
                            <li><a href="#" class="active rounded">{{ $i }}</a></li>
                        @else
                            <li><a href="{{ $artikels->url($i) }}" class="rounded">{{ $i }}</a></li>
                        @endif
                    @endfor
    
                    @if ($artikels->hasMorePages())
                        <li><a href="{{ $artikels->nextPageUrl() }}" class="rounded">&raquo;</a></li>
                    @else
                        <li><a href="#" class="rounded disabled">&raquo;</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </section>
    
    
    

@endsection
@section('template_scripts')
@endsection
