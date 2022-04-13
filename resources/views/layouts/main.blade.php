<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">

    <title>Hello, world!</title>
</head>

<body>
    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>


    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>

</html>
