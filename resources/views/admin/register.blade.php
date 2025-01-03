<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pantau Tumbuh</title>
    <link href="{{ asset('assets_admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset('assets_admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />  
    <link href="{{ asset('assets_admin/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin-top: 1.2rem !important;
        }

        @media (min-width: 992px) {
            body {
                margin-top: 0 !important;
            }
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader {
            width: 50px;
            aspect-ratio: 1;
            display: grid;
        }

        .loader::before,
        .loader::after {
            content: "";
            grid-area: 1/1;
            --c: no-repeat radial-gradient(farthest-side, #25b09b 92%, #0000);
            background:
                var(--c) 50% 0,
                var(--c) 50% 100%,
                var(--c) 100% 50%,
                var(--c) 0 50%;
            background-size: 12px 12px;
            animation: l12 1s infinite;
        }

        .loader::before {
            margin: 4px;
            filter: hue-rotate(45deg);
            background-size: 8px 8px;
            animation-timing-function: linear
        }

        @keyframes l12 {
            100% {
                transform: rotate(.5turn)
            }
        }

        .cursor-pointer {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-primary-subtle">
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">
                <div class="col-xl-7">
                    <div class="row">
                        <div class="col-md-12 mx-auto ms-3">
                            <div class="card p-3 mb-0">
                                <div class="card-body">
                                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                        <div class="mb-4 p-0 text-center">
                                            <a href="{{ url('/') }}" class="auth-logo">
                                                <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="logo-dark"
                                                    class="mx-auto" height="70" />
                                            </a>
                                        </div>

                                        <div class="pt-0">
                                            <form id="registerForm" class="my-4">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="nama" class="form-label">Nama
                                                                Lengkap</label>
                                                            <input class="form-control" type="text" id="nama"
                                                                name="nama" placeholder="Masukan Nama Lengkap">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="notelp" class="form-label">Nomor
                                                                WhatsApp</label>
                                                            <input class="form-control" type="text" id="notelp"
                                                                name="notelp" placeholder="Masukan Nomor Telepon">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="alamat" class="form-label">Alamat</label>
                                                            <textarea class="form-control" id="alamat" rows="1" name="alamat"> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input class="form-control" type="email" id="email"
                                                                name="email" placeholder="Masukan Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <div class="input-group">
                                                                <input class="form-control" type="password"
                                                                    id="password" name="password"
                                                                    placeholder="Masukan Password">
                                                                <span class="input-group-text cursor-pointer"
                                                                    id="togglePasswordIcon1">
                                                                    <i id="icon-pass1" class="fas fa-eye"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <div class="form-group mb-3">
                                                                <label for="password_confirmation"
                                                                    class="form-label">Konfirmasi Password</label>
                                                                <div class="input-group">
                                                                    <input class="form-control" type="password"
                                                                        id="password_confirmation"
                                                                        name="password_confirmation"
                                                                        placeholder="Konfirmasi Password">
                                                                    <span class="input-group-text cursor-pointer"
                                                                        id="togglePasswordIcon2">
                                                                        <i id="icon-pass2" class="fas fa-eye"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <div class="form-group mb-0 row">
                                                            <div class="col-12">
                                                                <div class="d-grid">
                                                                    <button class="btn btn-primary" id="submit"
                                                                        type="submit">
                                                                        <div id="loader" class="loader"
                                                                            style="display:none;"></div>
                                                                        <span id="btn-daftar">Daftar</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>

                                            <div class="text-center text-muted mb-4">
                                                <p class="mb-0">Sudah Punya Akun ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='{{ url('/auth/login') }}'>Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <div class="auth-image">
                                <img src="{{ asset('assets_portal/img/login-4.svg') }}" class="mx-auto img-fluid"
                                    alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets_admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets_admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="{{ asset('assets_admin/js/pages/ecommerce-dashboard.init.js') }}"></script>
    <script src="{{ asset('assets_admin/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets_admin/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script>
        $('#registerForm').on('submit', function(e) {
            e.preventDefault();

            let formData = {
                nama: $('#nama').val(),
                notelp: $('#notelp').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                alamat: $('#alamat').val(),
                password_confirmation: $('#password_confirmation').val(),
            };

            $.ajax({
                url: `{{ url('auth/_register') }}`,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    $(".loader").show();
                    $("#btn-daftar").hide()
                    $("#submit").prop("disabled", true);
                },
                success: function(response) {
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-daftar").show();

                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Registrasi Berhasil',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        }).then(() => {
                            window.location.href = `{{ url('auth/login') }}`;
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Registrasi Gagal',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger',
                            },
                        })
                    }
                },
                error: function(xhr) {
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-daftar").show();

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessage = '';

                        $.each(errors, function(key, value) {
                            errorMessage += `<p>${value[0]}</p>`;
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Registrasi Gagal',
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

        $(document).ready(function() {
            $("#togglePasswordIcon1").on("click", function() {
                let passwordInput = $("#password");
                let icon = $("#icon-pass1");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    icon.removeClass("fas fa-eye").addClass(
                    "fas fa-eye-slash"); 
                } else {
                    passwordInput.attr("type", "password");
                    icon.removeClass("fas fa-eye-slash").addClass(
                    "fas fa-eye"); 
                }
            });

            $("#togglePasswordIcon2").on("click", function() {
                let passwordInput = $("#password_confirmation");
                let icon = $("#icon-pass2");

                if (passwordInput.attr("type") === "password") {
                    passwordInput.attr("type", "text");
                    icon.removeClass("fas fa-eye").addClass(
                    "fas fa-eye-slash"); 
                } else {
                    passwordInput.attr("type", "password");
                    icon.removeClass("fas fa-eye-slash").addClass(
                    "fas fa-eye"); 
                }
            });
        });
    </script>
</body>

</html>
