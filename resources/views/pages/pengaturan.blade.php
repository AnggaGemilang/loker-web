<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        html,
        body {
            font-family: 'Poppins', sans-serif;
        }

        .wrapper {
            position: absolute;
            top: 43%;
            left: 52%;
            transform: translate(-50%, -50%);
        }

        .content {
            position: relative;
        }

        .content>h2,.content>a {
            position: absolute;
            left: 16%;
            top: 88%;
            color: #394EFF;
        }

    </style>
    <title>Dashboard - Loker IT Indonesia</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <img src="{{ asset('assets') }}/images/maintenance.webp" alt="">
            <h2 style="font-weight: 600;">Halaman Ini Masih Dalam Pengembangan</h2>
            <a style="font-size: 18px; margin-top: -6px;" href="{{ url('cari-kerja') }}">Kembali</a>
        </div>
    </div>
</body>

</html>
