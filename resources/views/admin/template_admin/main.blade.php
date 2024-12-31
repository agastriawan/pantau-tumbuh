<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pantau Tumbuh</title>
    @include('admin/template_admin/styles')
    @yield('template_styles_admin')
</head>

<body data-menu-color="light" data-sidebar="default"> 
    <div id="app-layout">
        @include('admin/template_admin/header')
        @include('admin/template_admin/sidebar')

        <div class="content-page">
            <div class="content">
                <div id="overlay" class="overlay" style="display:none;"></div>
                <div id="loader" class="loader" style="display:none;"></div>
                @yield('content_admin')
            </div>
        </div>
    </div>

    @include('admin/template_admin/scripts')
    @yield('template_scripts_admin')
</body>

</html>
