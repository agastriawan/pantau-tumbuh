<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pantau Tumbuh</title>
    @include('admin/template_admin/styles')
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
                                                <img src="{{ asset("assets_portal/img/logo-2.png") }}" alt="logo-dark" class="mx-auto"
                                                    height="70" />
                                            </a>
                                        </div>

                                        <div class="auth-title-section mb-3 text-center">
                                            <h3 class="text-dark fs-20 fw-medium mb-2">Selamat Datang</h3>
                                        </div>

                                        <div class="pt-0">
                                            <form action="index.html" class="my-4">
                                                <div class="form-group mb-3">
                                                    <label for="emailaddress" class="form-label">Email</label>
                                                    <input class="form-control" type="email" id="emailaddress"
                                                        required="" placeholder="Masukan Email">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input class="form-control" type="password" required=""
                                                        id="password" placeholder="Masukan Password">
                                                </div>

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <div class="d-grid">
                                                            <button class="btn btn-primary" type="submit"> Log In
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="text-center text-muted mb-4">
                                                <p class="mb-0">Belum Punya Akun ?<a
                                                        class='text-primary ms-2 fw-medium'
                                                        href='{{ url('/register') }}'>Register</a></p>
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
                                <img src="{{ asset("assets_portal/img/login-3.svg") }}" class="mx-auto img-fluid" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin/template_admin/scripts')
    @yield('template_scripts_admin')
</body>

</html>
