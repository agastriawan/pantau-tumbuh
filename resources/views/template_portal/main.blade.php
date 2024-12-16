<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pantau Tumbuh</title>
    @include('template_portal/styles')
    @yield('template_styles')
</head>

<body>
    @include('template_portal/header')
    @yield('content')
    @include('template_portal/footer')

    @include('template_portal/scripts')
    @yield('template_scripts')
</body>

</html>
