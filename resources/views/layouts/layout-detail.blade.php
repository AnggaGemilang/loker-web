<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('extras-css')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.css">   
    <link rel="stylesheet" href="{{ asset('assets') }}/css/all.css">
    <title>@yield('title') - Loker IT Indonesia</title>
  </head>
  <body>

   @include('partials.leftside2')  

    <script src="{{ asset('assets') }}/js/all.js"></script>        
    <script src="{{ asset('assets') }}/js/jquery-3.5.1.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    @stack('extras-js')    
  </body>
</html>