@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Tambah</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Tambah Monitoring</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Monitoring Kesehatan Anak</h5>
                    </div>

                    <div class="card-body">
                        <form id="monitoringForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="nama" class="form-label">Nama Anak</label>
                                    <select id="anak_id" name="anak_id" class="form-control">
                                        <option value="">Pilih Anak</option>
                                        @foreach ($anak as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="berat_badan" class="form-label">Berat Badan (KG)</label>
                                    <input type="text" class="form-control" id="berat_badan"
                                        placeholder="Berat Badan (KG)">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="tinggi_badan" class="form-label">Tinggi Badan (CM)</label>
                                    <input type="text" class="form-control" id="tinggi_badan"
                                        placeholder="Tinggi Badan (CM)">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="lingkar_kepala" class="form-label">Lingkar Kepala (CM)</label>
                                    <input type="text" class="form-control" id="lingkar_kepala"
                                        placeholder="Lingkar Kepala (CM)">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="kondisi_kesehatan" class="form-label">Kondisi Kesehatan</label>
                                    <input type="text" class="form-control" id="kondisi_kesehatan"
                                        placeholder="Kondisi Kesehatan">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="status_imunisasi" class="form-label">Status Imunisasi</label>
                                    <select id="status_imunisasi" name="status_imunisasi" class="form-control">
                                        <option value="">Pilih Status Imunisasi</option>
                                        <option value="Lengkap">Lengkap</option>
                                        <option value="Tidak Lengkap">Tidak Lengkap</option>
                                        <option value="Belum Imunisasi">Belum Imunisasi</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12 col-lg-12">
                                    <label for="editor" class="form-label">Pertanyaan Orang Tua</label>
                                    <textarea type="text" class="form-control" id="editor"> </textarea>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ url('/orangtua/monitoring') }}"><button class="btn btn-info"
                                        type="button">Kembali</button></a>
                                <button type="submit" class="btn btn-primary btn-submit"> Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
    <script>
        $('#monitoringForm').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData();
            formData.append('anak_id', $('#anak_id').val());
            formData.append('berat_badan', $('#berat_badan').val());
            formData.append('tinggi_badan', $('#tinggi_badan').val());
            formData.append('lingkar_kepala', $('#lingkar_kepala').val());
            formData.append('kondisi_kesehatan', $('#kondisi_kesehatan').val());
            formData.append('status_imunisasi', $('#status_imunisasi').val());
            formData.append('pertanyaan_orang_tua', $('#editor').summernote('code'))

            $.ajax({
                url: `{{ url('orangtua/monitoring/_tambah_monitoring') }}`,
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
                            window.location.href = `{{ url('orangtua/monitoring') }}`;
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
    </script>
@endsection
