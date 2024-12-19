@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Profile</h4>
        </div>

        <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">admin</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="align-items-center">
                        
                        <div class="silva-main-sections">
                            <div class="silva-profile-main">
                                <img src="{{ asset("assets_portal/img/team/team_1.jpeg") }}" class="rounded-circle img-fluid avatar-xxl img-thumbnail float-start" alt="image profile">

                                <span class="sil-profile_main-pic-change img-thumbnail">
                                    <i class="mdi mdi-camera text-white"></i>
                                </span>
                            </div>

                            <div class="overflow-hidden ms-md-4 ms-0">
                                <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">Abror Pratama</h4>
                                <span class="fs-15"><i class="mdi mdi-message me-2 align-middle"></i><span class="badge bg-primary-subtle text-primary px-2 py-1 fs-13 fw-normal">08872389267</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pt-0">
                    <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link p-2 active" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                                <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                <span class="d-none d-sm-block">Ubah Profile</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content text-muted bg-white">

                        <div class="tab-pane pt-4 active" id="profile_setting" role="tabpanel">
                            <div class="row">

                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="card border">

                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">                      
                                                        <h4 class="card-title mb-0">Informasi Pribadi</h4>                      
                                                    </div><!--end col-->                                                       
                                                </div>
                                            </div>

                                            <div class="card-body">
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="text" value="Abror Pratama">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Nomor WhatsApp</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                            <input class="form-control" type="text" placeholder="Phone" aria-describedby="basic-addon1" value="08897399615">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Email</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                            <input type="text" class="form-control" value="abroar@gmail.com" placeholder="Email" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Alamat</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="text" value="Australia">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <button type="submit" class="btn btn-primary mb-2 mb-md-0">Ubah Informasi Pribadi</button>
                                                        <button type="button" class="btn btn-danger">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-6">
                                        <div class="card border mb-0">

                                            <div class="card-header">
                                                <div class="row align-items-center">
                                                    <div class="col">                      
                                                        <h4 class="card-title mb-0">Ubah Password</h4>                      
                                                    </div><!--end col-->                                                       
                                                </div>
                                            </div>

                                            <div class="card-body mb-0">
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Password Lama</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password" placeholder="Password Lama">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Password Baru</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password" placeholder="Password Baru">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label class="form-label">Konfirmasi Password Baru</label>
                                                    <div class="col-lg-12 col-xl-12">
                                                        <input class="form-control" type="password" placeholder="Konfirmasi Password Baru">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <button type="submit" class="btn btn-primary mb-2 mb-md-0">Ubah Password</button>
                                                        <button type="button" class="btn btn-danger">Batal</button>
                                                    </div>
                                                </div>

                                            </div><!--end card-body-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> <!-- end education -->

                    </div> <!-- Tab panes -->
                </div>
            </div>
        </div>
    </div>

</div>  
@endsection

@section('template_scripts_admin')
@endsection
