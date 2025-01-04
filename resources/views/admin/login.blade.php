<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pantau Tumbuh</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets_portal/img/favicons/apple-icon.png") }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset("assets_portal/img/favicons/android-chrome-192x192.png") }}">

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
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <div class="card p-3 mb-0">
                                <div class="card-body">

                                    <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                        <div class="mb-4 p-0 text-center">
                                            <a href="{{ url('/') }}" class="auth-logo">
                                                <img src="{{ asset('assets_portal/img/logo-2.png') }}" alt="logo-dark"
                                                    class="mx-auto" height="70" />
                                            </a>
                                        </div>

                                        <div class="auth-title-section mb-3 text-center">
                                            <h3 class="text-dark fs-20 fw-medium mb-2">Selamat Datang</h3>
                                        </div>

                                        <div class="pt-0">
                                            <form id="loginForm" class="my-4">
                                                <div class="form-group mb-3">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input class="form-control" type="email" id="email"
                                                        required="" placeholder="Masukan Email">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <div class="input-group">
                                                        <input class="form-control" type="password" id="password"
                                                            name="password" placeholder="Masukan Password">
                                                        <span class="input-group-text cursor-pointer"
                                                            id="togglePasswordIcon1">
                                                            <i id="icon-pass1" class="fas fa-eye"></i>
                                                        </span>
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
                                                                    <span id="btn-login">Log In</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="text-center text-muted mb-4">
                                                <p class="mb-0">Belum Punya Akun ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='{{ url('/auth/register') }}'>Register</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <div class="auth-image">
                                <img src="{{ asset('assets_portal/img/login-3.svg') }}" class="mx-auto img-fluid"
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
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            let formData = {
                email: $('#email').val(),
                password: $('#password').val(),
            };

            $.ajax({
                url: `{{ url('auth/_login') }}`,
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                beforeSend: function() {
                    $(".loader").show();
                    $("#btn-login").hide()
                    $("#submit").prop("disabled", true);
                },
                success: function(response) {
                    $(".loader").hide();
                    $("#submit").prop("disabled", false);
                    $("#btn-login").show();

                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Berhasil',
                            text: response.message,
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                        }).then(() => {
                            window.location.href = `{{ url('dashboard') }}`;
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
        });
    </script>

</body>

</html>
