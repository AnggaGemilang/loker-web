<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1C102B" />
    <title>@yield('title') - Loker IT Indonesia</title>

    <!-- Styles-->
    <link rel="stylesheet" href="{{asset('assets')}}/auth/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('assets')}}/auth/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/toastr.css">

    <!-- Favicon-->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

    @yield('content')

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/auth/js/script.js"></script>
    <script src="{{ asset('assets') }}/auth/js/particles.js"></script>
    <script src="{{ asset('assets') }}/js/all.js"></script>        
    <script src="{{ asset('assets') }}/auth/js/app.js"></script>
    <script src="{{ asset('assets') }}/js/toastr.js"></script>

    @if(Session::get('errors'))
    <script>
        toastr.error("Email atau Password Salah", "Login Gagal", {
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            timeOut: 4000
        });
    </script>
    @endif

    @stack('extras-js')

</body>

</html>