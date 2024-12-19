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
                    <li class="breadcrumb-item active">Monitoring</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Monitoring Kesehatan Anak</h5>
                        <a href="{{ url('/orangtua/monitoring/add') }}"><button type="submit" class="btn btn-primary">Tambah</button></a>
                    </div>


                    <div class="card-body">
                        <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Nama Anak</th>
                                    <th>Tanggal Pengiriman</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Smith</td>
                                    <td>2023-08-10</td>
                                    <td class="text-center"><span class="badge bg-warning-subtle text-warning fw-semibold fs-13">Diproses</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="text-primary"><i data-feather="book"></i></a>
                                        <a href="" class="text-info" style="font-size:10px;"><i data-feather="edit"></i></a> 
                                        <a href="" class="text-danger"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Smith</td>
                                    <td>2023-08-10</td>
                                    <td class="text-center"><span class="badge bg-primary-subtle text-primary fw-semibold fs-13">Selesai</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="text-primary"><i data-feather="book"></i></a>
                                        <a href="" class="text-info" style="font-size:10px;"><i data-feather="edit"></i></a> 
                                        <a href="" class="text-danger"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection

@section('template_scripts_admin')
@endsection
