@php
if(\Request::is('admin')) {
@$dashboard = 'active';
} else if(\Request::is('admin/upload')) {
@$upload = 'active';
} else if (\Request::is('admin/grafik')) {
@$grafik = 'active';
} else if (\Request::is('admin/data')) {
@$data = 'active';
} 

@endphp

<div class="wrapper" style="overflow: auto;">
    <span id="tanda-responsive"></span>
    <nav id="sidebar">
        <div class="sidebar-header" style="padding-top: 28px;">
            <a href="{{ url('/admin') }}">
                <h3 style="font-size: 20px;">
                    <i class="fab fa-affiliatetheme mr-2 pr-1" style="font-size: 23px; margin-left: 15px;"></i>
                    GolekGawean
                </h3>
                <strong><i class="fab fa-affiliatetheme pr-1"></i></strong>
            </a>
        </div>
        <ul class="list-unstyled components pt-5">
            <li class="{{ @$dashboard }}" id="item-list" data-toggle="tooltip" data-placement="right" title="Home">
                <a href="{{ url('admin') }}" id="data" data-baseurl="{{ url('/admin') }}">
                    <i class="fas fa-home" style="width: 18px;"></i>
                    <span>Beranda</span>
                </a>
            </li>
            <li class="{{ @$upload }}" id="item-list" data-toggle="tooltip">
                <a href="{{ url('admin/upload') }}" data-placement="right" title="Import Excel">
                    <i class="fas fa-chart-pie" style="width: 18px;"></i>
                    <span>Upload Excel</span>
                </a>
            </li>          
            <li class="{{ @$grafik }}" id="item-list" data-toggle="tooltip">
                <a href="{{ url('/admin/grafik') }}" data-placement="right" title="Grafik Data">
                    <i class="fas fa-chart-line" style="width: 18px;"></i>
                    <span>Data Grafik</span>
                </a>
            </li>
            <li class="{{ @$data }}" id="item-list" data-toggle="tooltip">
                <a href="{{ url('/admin/data') }}" data-placement="right" title="Kumpulan Data">
                    <i class="fas fa-database" style="width: 18px;"></i>
                    <span>Kumpulan Data</span>
                </a>
            </li>            
        </ul>
    </nav>

    <div id="content-section" class="status-sd">
        @include('admin.partials.navbar')
        <div id="content">
            <div class="penghalang"></div>
            @yield('content')
        </div>
    </div>
</div>

@push('extras-js')
<script type="text/javascript">
    var base_url = $('#data').attr('data-baseurl');
    var periode;
    var jenis_filter;

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            boundary: 'window'
        });
    })

    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });

    $('a#btn-generate').on('click', function (e) {

        e.preventDefault();

        var jenis_filter =
            "<select name='jenis_filter' id='jenis_filter' class='form-control greylight-bg w-100 pl-2' style='height: 37px; border: none; border-radius: 7px; box-shadow: 1px 1px 6px rgba(0,0,0,0.1); margin-top: 10px;'>";
        jenis_filter += "<option value=''>Pilih Filter</option>";
        jenis_filter += "<option value='jenis_perbulan'>Perbulan</option>";
        jenis_filter += "<option value='jenis_triwulan'>Triwulan</option>";
        jenis_filter += "<option value='jenis_semester'>Semester</option>";
        jenis_filter += "<option value='jenis_pertahun'>Pertahun</option>";
        jenis_filter += "</select>";

        var jenis_perbulan =
            "<select name='jenis_perbulan' id='jenis_perbulan' class='form-control greylight-bg w-100 pl-2 klik' style='height: 37px; border: none; border-radius: 7px; box-shadow: 1px 1px 6px rgba(0,0,0,0.1); margin-top: 10px; margin-top: 25px;'>";
        jenis_perbulan += "<option value=''>Pilih Perbulan</option>";
        jenis_perbulan += "<option value='Januari'>Januari</option>";
        jenis_perbulan += "<option value='Februari'>Februari</option>";
        jenis_perbulan += "<option value='Maret'>Maret</option>";
        jenis_perbulan += "<option value='April'>April</option>";
        jenis_perbulan += "<option value='Mei'>Mei</option>";
        jenis_perbulan += "<option value='Juni'>Juni</option>";
        jenis_perbulan += "<option value='Juli'>Juli</option>";
        jenis_perbulan += "<option value='Agustus'>Agustus</option>";
        jenis_perbulan += "<option value='September'>September</option>";
        jenis_perbulan += "<option value='Oktober'>Oktober</option>";
        jenis_perbulan += "<option value='November'>November</option>";
        jenis_perbulan += "<option value='Desember'>Desember</option>";
        jenis_perbulan += "</select>";

        var jenis_triwulan =
            "<select name='jenis_triwulan' id='jenis_triwulan' class='form-control greylight-bg w-100 pl-2 klik' style='height: 37px; border: none; border-radius: 7px; box-shadow: 1px 1px 6px rgba(0,0,0,0.1); margin-top: 10px; margin-top: 25px;'>";
        jenis_triwulan += "<option value=''>Pilih Triwulan</option>";
        jenis_triwulan += "<option value='Januari-Februari-Maret'>Januari - Februari - Maret</option>";
        jenis_triwulan += "<option value='April-Mei-Juni'>April - Mei - Juni</option>";
        jenis_triwulan += "<option value='Juli-Agustus-September'>Juli - Agustus - September</option>";
        jenis_triwulan +=
            "<option value='Oktober-November-Desember'>Oktober - November - Desember</option>";
        jenis_triwulan += "</select>";

        var jenis_semester =
            "<select name='jenis_semester' id='jenis_semester' class='form-control greylight-bg w-100 pl-2 klik' style='height: 37px; border: none; border-radius: 7px; box-shadow: 1px 1px 6px rgba(0,0,0,0.1); margin-top: 10px; margin-top: 25px;'>";
        jenis_semester += "<option value=''>Pilih Semester</option>";
        jenis_semester +=
            "<option value='Januari-Februari-Maret-April-Mei-Juni'>Januari - Februari - Maret - April - Mei - Juni</option>";
        jenis_semester +=
            "<option value='Juli-Agustus-September-Oktober-November-Desember'>Juli - Agustus - September - Oktober - November - Desember</option>";
        jenis_semester += "</select>";

        var jenis_pertahun =
            "<select name='jenis_pertahun' id='jenis_pertahun' class='form-control greylight-bg w-100 pl-2 klik' style='height: 37px; border: none; border-radius: 7px; box-shadow: 1px 1px 6px rgba(0,0,0,0.1); margin-top: 10px; margin-top: 25px;'>";
        jenis_pertahun += "<option value=''>Pilih Pertahun</option>";
        jenis_pertahun += "<option value='2020'>2020</option>";
        jenis_pertahun += "<option value='2019'>2019</option>";
        jenis_pertahun += "</select>";

        Swal.fire({
            title: '<span class="m-2">Generate Report</span>',
            html: jenis_filter +
                "<button disabled type='submit' id='gen' jenis='' class='btn text-light w-100 btn-generate' style='margin-bottom:20px; margin-top: 30px; background: #241937; transition: all .5s;'>Generate Laporan</button>",
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
        })

        $('#jenis_filter').on('change', function () {
            var jenis_filter = $(this).children("option:selected").val();
            if ($(this).attr('status')) {
                $(this).next().remove();
                if (jenis_filter == 'jenis_perbulan') {
                    $(this).after(jenis_perbulan);
                } else if (jenis_filter == 'jenis_triwulan') {
                    $(this).after(jenis_triwulan);
                } else if (jenis_filter == 'jenis_semester') {
                    $(this).after(jenis_semester);
                } else {
                    $(this).after(jenis_pertahun);
                }
            } else {
                $(this).attr('status', 'active');
                if (jenis_filter == 'jenis_perbulan') {
                    $(this).after(jenis_perbulan);
                } else if (jenis_filter == 'jenis_triwulan') {
                    $(this).after(jenis_triwulan);
                } else if (jenis_filter == 'jenis_semester') {
                    $(this).after(jenis_semester);
                } else {
                    $(this).after(jenis_pertahun);
                }
            }
            $('.btn-generate').attr("href", "cetak_pdf/" + jenis_filter);
            $('.btn-generate').attr("jenis", jenis_filter);

            $('#' + jenis_filter).on('change', function () {
                if ($(this).children("option:selected").val() == '') {
                    $('#gen').attr('disabled', true);
                } else if ($(this).children("option:selected").val() != '') {
                    $('#gen').attr('disabled', false);
                    periode = $(this).children("option:selected").val();
                    jenis_filter = $('.btn-generate').attr('jenis');
                }

            });

            $('#gen').on('click', function (e) {
                e.preventDefault();
                var url = base_url + "/pembayaran/cetak_pdf/" + jenis_filter + "/" +
                    periode;
                location.href = url;
            });
        });
    });

</script>
@endpush

@push('extras-css')
<style>
    #sidebar::-webkit-scrollbar {
        width: 2px;
    }

    #sidebar::-webkit-scrollbar-track {
        border-radius: 200px;
    }

    #sidebar::-webkit-scrollbar-thumb {
        background: #939393;
        border-radius: 200px;
    }

    #sidebar::-webkit-scrollbar-thumb:hover {
        background: darkgray;
    }

</style>
@endpush
