@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Detail</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Detail Kontak</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Data Kontak</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <strong>Nama:</strong> {{ $kontak->nama }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Email:</strong> {{ $kontak->email }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Nomor WhatsApp:</strong> {{ $kontak->number }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Dikirim Pada:</strong> {{ $kontak->created_at->format('d M Y, H:i') }}
                            </div>
                            <div class="mb-3 col-md-12">
                                <strong>Pesan:</strong>{{ $kontak->message }}
                            </div>
                        </div>    
                        <div class="text-end">
                            <a href="{{ url('kontak') }}" class="btn btn-info">Kembali</a>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
@endsection
