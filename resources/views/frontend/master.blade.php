<!DOCTYPE html>
<html lang="en">
<head>
@include('frontend.partials.head_css')
</head>
<body>
    @include('frontend.partials.navbar')

    @yield('frontend_content')

    @include('frontend.partials.footer')
</body>
</html>
