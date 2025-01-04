@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Aktivitas Akun Anda</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="widget-first">
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div
                                            class="bg-secondary-subtle rounded-2 p-1 me-2 border border-dashed border-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 640 512">
                                                <path fill="#963b68"
                                                    d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4" />
                                            </svg>
                                        </div>
                                        <p class="mb-0 text-dark fs-15">Total Pemeriksaan</p>
                                    </div>
                                    <h3 class="mb-0 fs-24 text-black me-2">{{ $totalMonitoring ?? 0 }}</h3>
                                </div>

                                <div>
                                    <div id="monthly-orders" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="widget-first">
                            <div class="d-flex justify-content-between align-items-end">
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-info-subtle rounded-2 p-1 me-2 border border-dashed border-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path fill="#73bbe2"
                                                    d="M7 20V8.975q0-.825.6-1.4T9.025 7H20q.825 0 1.413.587T22 9v8l-5 5H9q-.825 0-1.412-.587T7 20M2.025 6.25q-.15-.825.325-1.487t1.3-.813L14.5 2.025q.825-.15 1.488.325t.812 1.3L17.05 5H9Q7.35 5 6.175 6.175T5 9v9.55q-.4-.225-.687-.6t-.363-.85zM20 16h-4v4z" />
                                            </svg>
                                        </div>
                                        <p class="mb-0 text-dark fs-15">Total Feedback</p>
                                    </div>
                                    <h3 class="mb-0 fs-24 text-black me-2">{{ $totalFeedback ?? 0 }}</h3>
                                </div>

                                <div>
                                    <div id="monthly-revenue" class="apex-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Ada kendala? Hubungi Tim Support Kami</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card overflow-hidden mb-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-traffic mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Nomor WhatsApp</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td>
                                        <p class="mb-0">Abdurrahman Rafatullah</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">088295747118</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">rafa689@gmail.com</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-subtle text-primary fw-semibold">Customer
                                            Service</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="mb-0">Abror Pratama Harahap</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">088295747112</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">abror908@gmail.com</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-subtle text-primary fw-semibold">Customer
                                            Service</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p class="mb-0">Adi kurniawan</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">088295707116</p>
                                    </td>
                                    <td>
                                        <p class="mb-0">adi808@gmail.com</p>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary-subtle text-primary fw-semibold">Customer
                                            Service</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('template_scripts_admin')
@endsection
