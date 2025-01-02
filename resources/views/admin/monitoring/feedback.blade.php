@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Feedback</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Feedback Monitoring</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Data Monitoring Kesehatan Anak</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <strong>Nama Anak:</strong> {{ $monitoring->anak->nama }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Berat Badan (KG):</strong> {{ $monitoring->berat_badan }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Jenis Kelamin:</strong> {{ $monitoring->anak->jenis_kelamin }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Tinggi Badan (CM):</strong> {{ $monitoring->tinggi_badan }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Tanggal Lahir:</strong>
                                {{ \Carbon\Carbon::parse($monitoring->anak->tanggal_lahir)->format('d-m-Y') }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Lingkar Kepala (CM):</strong> {{ $monitoring->lingkar_kepala }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Kondisi Kesehatan:</strong> {{ $monitoring->kondisi_kesehatan }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Status Imunisasi:</strong> {{ $monitoring->status_imunisasi }}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Foto Anak:</strong> <a href"#" class="ms-2 btn btn-info btn-sm" id="foto_anak"><i
                                        class="far fa-file-image" style="font-size: 2rem"></i></a>
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Pertanyaan Orang Tua:</strong> {!! $monitoring->pertanyaan_orang_tua !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Feedback Atau Jawaban Tenaga Medis</h5>
                    </div>

                    <div class="card-body">
                        @if (Auth::user()->role->id == 2)
                            <form id="feedbackForm" enctype="multipart/form-data">
                                <input type="hidden" name="rekaman_monitoring_id" id="rekaman_monitoring_id"
                                    value="{{ $monitoring->id }}">
                                <div class="row">
                                    <div class="mb-3 col-md-12 col-lg-12">
                                        <label for="editor" class="form-label">Jawaban Tenaga Medis</label>
                                        <textarea type="text" class="form-control" id="editor">{{ $feedback ? $feedback->isi_feedback : '' }}
                                    </textarea>
                                    </div>
                                    <div class="mb-3 col-md-6 col-lg-6">
                                        <label for="modul_kesehatan" class="form-label">Modul Kesehatan</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="modul_kesehatan"
                                                placeholder="Modul Kesehatan">
                                            <button type="button" class="btn btn-info"
                                                id="modul_kesehatan-btn">Preview</button>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-6 col-lg-6">
                                        <label for="surat_rujukan" class="form-label">Surat Rujukan</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="surat_rujukan"
                                                placeholder="Surat Rujukan">
                                            <button type="button" class="btn btn-info"
                                                id="surat_rujukan-btn">Preview</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="{{ url('/monitoring') }}"><button class="btn btn-info"
                                            type="button">Kembali</button></a>
                                    <button type="submit" class="btn btn-primary btn-submit"> Kirim</button>
                                </div>
                            </form>
                        @elseif ($feedback)
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <strong>Jawaban Tenaga Medis:</strong> {!! $feedback->isi_feedback !!}
                            </div>
                            <div class="mb-3 col-md-6">
                                <strong>Modul Kesehatan:</strong> <a href"#" class="ms-2 btn btn-danger btn-sm"
                                    id="modul_kesehatan-btn"><i class="far fa-file-pdf" style="font-size: 2rem"></i></a>
                            </div>
                            <div class="col-md-6">
                                <strong>Surat Rujukan:</strong> <a href"#" class="ms-2 btn btn-danger btn-sm"
                                    id="surat_rujukan-btn"><i class="far fa-file-pdf" style="font-size: 2rem"></i></a>
                            </div>
                        </div>
                        @else 
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <strong>Sedang Diproses oleh Tenaga Medis</strong>
                            </div>
                        </div>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModalModul" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Preview Modul Kesehatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="preview-content-modul"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModalSurat" tabindex="-1" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Preview Surat Rujukan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="preview-content-surat"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="previewModalAnak" tabindex="-1" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Preview Foto Anak</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="preview-content-anak"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
    <script>
        $('#feedbackForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData();
            formData.append('rekaman_monitoring_id', $('#rekaman_monitoring_id').val());
            formData.append('nama', $('#nama').val());
            formData.append('isi_feedback', $('#editor').summernote('code'))
            formData.append('modul_kesehatan', $('#modul_kesehatan')[0].files[0]);
            formData.append('surat_rujukan', $('#surat_rujukan')[0].files[0]);

            $.ajax({
                url: `{{ url('monitoring/feedback/_feedback') }}`,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    $(".overlay").show();
                    $(".loader").show();
                    $("#btn-login").hide()
                    $("#submit").prop("disabled", true);
                },
                success: function(response) {
                    $(".overlay").hide();
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-login").show();

                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        }).then(() => {
                            window.location.href = `{{ url('monitoring') }}`;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        })
                    }
                },
                error: function(xhr) {
                    $(".overlay").hide();
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-login").show();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';

                        $.each(errors, function(key, value) {
                            errorMessage += `<p>${value[0]}</p>`;
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Login Gagal',
                            html: errorMessage,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Terjadi kesalahan, silahkan coba lagi.',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        });
                    }
                },
            });
        });

        flatpickr("#tanggal_lahir", {
            dateFormat: "d-m-Y",
        });

        $('#surat_rujukan-btn').click(function() {
            var file = "{{ $feedback ? $feedback->surat_rujukan : '' }}";
            var path = "{{ asset('surat_rujukan/') }}/";

            if (file) {
                var fileExtension = file.split('.').pop().toLowerCase();

                var previewContent = $('#preview-content-surat');

                if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
                    previewContent.html('<img src="' + path + file + '" class="img-fluid" />');
                } else if (fileExtension === 'pdf') {
                    previewContent.html('<embed src="' + path + file +
                        '" type="application/pdf" width="100%" height="400px" />');
                } else {
                    previewContent.html('<p>Preview tidak tersedia untuk file ini.</p>');
                }

                $('#previewModalSurat').modal('show');
            } else {
                alert('File tidak ditemukan.');
            }
        });
        $('#modul_kesehatan-btn').click(function() {
            var file = "{{ $feedback ? $feedback->modul_kesehatan : '' }}";
            var path = "{{ asset('modul_kesehatan/') }}/";

            if (file) {
                var fileExtension = file.split('.').pop().toLowerCase();

                var previewContent = $('#preview-content-modul');

                if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
                    previewContent.html('<img src="' + path + file + '" class="img-fluid" />');
                } else if (fileExtension === 'pdf') {
                    previewContent.html('<embed src="' + path + file +
                        '" type="application/pdf" width="100%" height="400px" />');
                } else {
                    previewContent.html('<p>Preview tidak tersedia untuk file ini.</p>');
                }

                $('#previewModalModul').modal('show');
            } else {
                alert('File tidak ditemukan.');
            }
        });
        $('#foto_anak').click(function() {
            var file = "{{ $monitoring ? $monitoring->anak->foto : '' }}";
            var path = "{{ asset('foto_anak') }}/";

            if (file) {
                var fileExtension = file.split('.').pop().toLowerCase();

                var previewContent = $('#preview-content-anak');

                if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
                    previewContent.html('<img src="' + path + file + '" class="img-fluid" />');
                } else if (fileExtension === 'pdf') {
                    previewContent.html('<embed src="' + path + file +
                        '" type="application/pdf" width="100%" height="400px" />');
                } else {
                    previewContent.html('<p>Preview tidak tersedia untuk file ini.</p>');
                }

                $('#previewModalAnak').modal('show');
            } else {
                alert('File tidak ditemukan.');
            }
        });
    </script>
@endsection
