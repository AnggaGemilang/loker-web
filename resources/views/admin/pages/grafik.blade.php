@extends('layouts.layout-admin')
@section('title','Grafik')

@section('content')
<h1 class="mb-3">Grafik</h1>
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{url('/admin')}}">Dashboard</a>
    <a class="breadcrumb-item" href="{{url('/admin/grafik')}}">Grafik</a>
    <span class="breadcrumb-item active"></span>
</nav>
<div style="background: #EDE6F7; border-radius: 20px;" class="p-2 mt-4 mb-4">
    <p class="mb-1 ml-2 pl-1 mt-2 text-dark" style="font-weight: 500;">Hal Yang Harus Diperhatikan</p>
    <ol style="opacity: 0.7;">
        <li>Harap ganti password saat pertama kali login</li>
        <li>Password default adalah Nomor Induk anda sendiri</li>
        <li>Pastikan anda mengetahui password sebelumnya</li>
        <li>Klik tombol ubah password ketika keterangan bernilai "password sama"</li>
        <li>Ketika berhasil, untuk keamanan anda akan diarahkan kembali untuk login</li>
    </ol>
</div>

@include('admin.partials.footer')
@endsection

@push('extras-css')
<style>
    #content {
        margin-bottom: -12px !important;
    }

    .penghalang {
        height: 99.5% !important;
    }

    @media (max-width: 865px) {
        .row>.col.atas {
            flex: 0 0 100%;
        }

        .row>.col.atas:last-child {
            margin-top: 20px !important;
            margin-left: 0px !important;
        }

        .info-content {
            margin-top: 14px;
            margin-bottom: -6px;
        }

        .info-content>p {
            margin-bottom: 0px !important;
        }
    }

    @media (max-width: 556px) {
        .row.atas-siswa>.col {
            flex: 0 0 100%;
        }

        .row.atas-siswa>.col:nth-child(2) {
            margin-top: -5px;
            margin-left: 7px;
        }

        .row.atas-siswa>.col>h4 {
            margin-bottom: 0px !important;
            float: left !important;
        }
    }

    @media (max-width: 468px) {
        #item-history>h4 {
            margin-bottom: 0px !important;
        }

        #item-history>h3 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        .row>.col.bawah {
            flex: 0 0 100%;
        }

        .row>.col.bawah>p {
            margin-bottom: 5px !important;
        }

        .row>.col.bawah:nth-child(2)>p {
            margin-top: -2px !important;
        }

        p.kekiri {
            float: left !important;
        }
    }

    @media (max-width: 431px) {
        .row>.col.atas>img {
            display: none;
        }
    }

</style>
@endpush

@push('extras-js')
<script>
    setInterval(function () {
        var weekday = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
        var date = new Date();

        $('#wrapper-day').html(
            weekday[date.getDay()] + ", "
        ).css('margin-right', '8px');

        $('#wrapper-date').html(
            ((date.getDate() < 10) ? "0" + date.getDate() : date.getDate()) + " - " + ((date.getMonth() <
                10) ? "0" + date.getMonth() : date.getMonth()) + " - " + date
            .getFullYear() + ", " + ((date.getHours() < 10) ? "0" + date.getHours() : date.getHours()) +
            ":" + ((date.getMinutes() < 10) ? "0" + date.getMinutes() : date.getMinutes()) + ":" + ((date
                .getSeconds() < 10) ? "0" + date.getSeconds() : date.getSeconds())
        );

        $('#tgl-hari').html(
            weekday[date.getDay()] + ", " + ((date.getDate() < 10) ? "0" + date.getDate() : date
                .getDate()) + " - " + ((date.getMonth() < 10) ? "0" + date.getMonth() : date.getMonth()) +
            " - " +
            date
            .getFullYear()
        );
        $('#waktu').html(
            ((date.getHours() < 10) ? "0" + date.getHours() : date.getHours()) +
            ":" + ((date.getMinutes() < 10) ? "0" + date.getMinutes() : date.getMinutes()) + ":" + ((date
                .getSeconds() < 10) ? "0" + date.getSeconds() : date.getSeconds())
        );
    }, 500);

    $(document).on('click', '#item-history', function () {
        var id = $(this).data('id');
        var diterima = conventer($(this).data('diterima'));
        var sisa = conventer($(this).data('sisa'));
        $.ajax({
            url: 'pembayaran/history/detail/' + id,
            type: 'get',
            data: {
                diterima: diterima,
                sisa: sisa
            },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                swal.fire({
                    html: data,
                    showCloseButton: true,
                    showCancelButton: false,
                    showConfirmButton: false,
                    focusConfirm: false,
                });
            },
            error: function (data) {
                console.log("Gagal" + data);
            }
        });
    });

</script>
@endpush
