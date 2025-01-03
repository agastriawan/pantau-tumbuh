@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Monitoring</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Daftar Monitoring</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Daftar Monitoring</h5>
                        <div class="button">
                            <a href="{{ url('monitoring/_export') }}" class="me-2"><button type="submit"
                                    class="btn btn-info">Export</button></a>
                            <a href="{{ url('monitoring/tambah_monitoring') }}"><button type="submit"
                                    class="btn btn-primary {{ Auth::user()->role->id == 2 ? 'd-none' : '' }}">Tambah</button></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="monitoringTable" class="table table-bordered table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Monitoring</th>
                                    <th>Tanggal Monitoring</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
    <script>
        $(document).ready(function() {
            $('#monitoringTable').DataTable({
                processing: true,
                serverSide: false,
                ajax: {
                    url: "{{ url('monitoring/_list_monitoring') }}",
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                },
                columns: [{
                        data: null,
                        className: 'text-center',
                        orderable: true,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'nama_anak',
                    },
                    {
                        data: 'created_at',
                        render: function(data, type, row) {
                            if (data) {
                                var date = new Date(data);
                                var day = ('0' + date.getDate()).slice(-
                                    2);
                                var month = ('0' + (date.getMonth() + 1)).slice(-
                                    2);
                                var year = date.getFullYear();
                                return day + '-' + month + '-' + year;
                            }
                            return data;
                        }
                    },
                    {
                        data: 'status',
                        className: "text-center",
                        render: function(data, type, row, meta) {
                            if (data === 'Diproses') {
                                return `<span class="badge bg-warning-subtle text-warning fw-semibold">${data}</span>`;
                            } else if (data === 'Selesai') {
                                return `<span class="badge bg-info-subtle text-info fw-semibold">${data}</span>`;
                            } else {
                                return `-`;
                            }
                        }
                    },
                    {
                        data: "id",
                        className: "text-center",
                        orderable: false,
                        render: function(data, type, row, meta) {
                            var deleteLink =
                                `<a href="#" class="ms-2 btn btn-danger btn-sm delete-btn" data-id="${data}"><i class="fas fa-trash"></i></a>`;
                            var editLink =
                                `<a href="{{ url('monitoring/edit_monitoring') }}/${data}" class="ms-2 btn btn-primary btn-sm edit-btn"><i class="far fa-edit"></i></a>`;
                            var feedbackLink =
                                `<a href="{{ url('monitoring/feedback') }}/${data}" class="ms-2 btn btn-info btn-sm edit-btn"><i class="fas fa-comment-medical"></i></a>`;

                            if ("{{ Auth::user()->role->id }}" == 2) {
                                return feedbackLink;
                            } else {
                                return feedbackLink + ' ' + editLink + ' ' + deleteLink;
                            }
                        }
                    }
                ]
            });
        });

        $('#monitoringTable').on('click', '.delete-btn', function(e) {
            e.preventDefault();
            var Id = $(this).data('id');
            Swal.fire({
                title: 'Anda yakin?',
                text: "Data ini akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-info'
                },
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('monitoring/_delete_monitoring/') }}/${Id}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: 'Data berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            });
                            $('#monitoringTable').DataTable().ajax.reload();
                        },
                        error: function(error) {
                            console.error('Gagal menghapus data:', error);
                            Swal.fire({
                                title: 'Gagal!',
                                text: 'Data gagal dihapus Karena Id Pembina Sudah digunakan di umkm',
                                icon: 'error',
                                confirmButtonText: 'OK',
                                customClass: {
                                    confirmButton: 'btn btn-primary',
                                },
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
