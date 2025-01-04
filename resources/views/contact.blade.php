@extends('template_portal/main')

@section('template_styles')
@endsection

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets_portal/img/bg/breadcumb_1.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Kontak Kami</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Kontak Kami</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space">
        <div class="container">
            <div class="appointment-row">
                <div class="schedule-box">
                    <div class="shape"></div>
                    <h3 class="box-title">Butuh Bantuan?</h3>
                    <p class="box-text">"Jika ada hal yang ingin Anda tanyakan atau jika Anda membutuhkan dukungan, kami
                        siap membantu. Kirimkan pesan Anda kepada kami dan kami akan segera merespons."</p>
                </div>
                <div class="form-wrap">
                    <form action="{{ url('_kontak') }}" method="POST" class="appointment-form">
                        @csrf
                        <h4 class="form-title">Kontak Kami</h4>
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col-12">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-group col-12">
                                <input type="tel" class="form-control" name="number" id="number"
                                    placeholder="Nomor WhatsApp" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" name="message" id="message" placeholder="Pesan" rows="5" required></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button type="submit" class="th-btn btn-fw">Kirim</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts')
@endsection
