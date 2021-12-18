@extends('layouts.layout-detail')
@section('title','Cari Kerja')

@section('content')
<div class="row">
    <div class="col-9">
        <form class="mt-5">
            <div class="form-group search">
                <input type="text" class="form-control search" placeholder="Judul Pekerjaan atau Kata Kunci"
                    id="search">
                <button class="btn-submit">Cari Pekerjaan</button>
                <i class="icon-search fa fa-search"></i>
            </div>
        </form>
    </div>
    <div class="col-3 pt-5">
        <a href="#">
            <div>
                <div class="back-icon2" style="float: left;">
                    <i class="fas fa-user" style="font-size: 23px;"></i>
                </div>
                <div style="padding-top: 1px;">
                    <span style="font-weight: 600; font-size: 13pt;">GolekGawean</span><br>
                    <span style="font-weight: 500; font-size: 10pt;">Administrator</span>
                </div>
                <div class="stop-float"></div>
            </div>
        </a>
        <div class="stop-float"></div>
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-5 pl-0">
            @foreach($subloker as $sl)
            <a href="{{ url('/cari-kerja/detail/') . '/' . $sl->id }}">
                <div class="iklanside mb-3" data-id="{{ url('cari-kerja/detail/') . '/' . $sl->id }}">
                    <div style="float:left;">
                        <div class="wrapper-icon">
                            <img style="width: 100%;" src="{{ asset('assets') }}/images/icon-job.png" alt="">
                        </div>
                    </div>
                    @php $len = strlen($sl->nama_pekerjaan); @endphp
                    <p style="font-weight: 600; font-size: 21px;">@if($len>20) @php echo
                        substr($sl->nama_pekerjaan,0,20)." ...." @endphp @else
                        {{ $sl->nama_pekerjaan }}
                        @endif </p>
                    <p style="margin-top: -13px;">{{ $sl->nama_perusahaan }}</p>
                    <div class="item">
                        {{ $sl->kota_ditempatkan }}</div>
                    <div class="item">
                        {{ $sl->sumber_sosmed }}</div>
                    <div class="stop-float"></div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="col-7" style="border-radius: 15px; padding:0;">
            <div style="position: relative; transition: .5s;">
                <img class="img-ss" src="{{ asset('images_uploaded') . '/' . $loker->screenshot }}" alt="">
                <div
                    style="width: 100px; bottom:-45px; left: 40px; border: 3px solid white; height: 100px; border-radius: 100px; position: absolute; margin-right: 20px;">
                    <img style="width: 100%;" src="{{ asset('assets') }}/images/icon-job.png" alt="">
                </div>
            </div>
            <div
                style="padding: 20px 32px; background: white; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
                <h3 style="font-weight: 600; margin-top: 45px;">{{ $loker->nama_pekerjaan }}</h3>
                <div class="row">
                    <div class="col">
                        <p><a href="{{ $loker->link }}" target="__blank"><span
                                    style="color: #2B2067; font-weight: 600;">{{ $loker->nama_perusahaan }}</span></a -
                                {{ $loker->kota_ditempatkan }} </p> </div> <div class="col" style="text-align: right;">
                            <p>Diposting {{ $loker->tanggal_terbit }}</p>
                    </div>
                </div>
                <div class="row mt-2 mb-4">
                    <div class="col">
                        <table>
                            <tr>
                                <td>
                                    <p><strong>Contact Person</strong></p>
                                </td>
                                <td>
                                    <p>:</p>
                                </td>                                
                                <td>
                                    <p>{{ $loker->contact_person }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Sumber Loker</strong></p>
                                </td>
                                <td>
                                    <p>:</p>
                                </td>
                                <td>
                                    <p class="sumber"><strong><a target="__blank" href="{{ $loker->link }}">{{ $loker->sumber_sosmed }}</a></strong></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Penempatan</strong></p>
                                </td>
                                <td>
                                    <p>:</p>
                                </td>
                                <td>
                                    <p>{{ $loker->kota_ditempatkan }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><strong>Pengiriman Berkas</strong></p>
                                </td>
                                <td>
                                    <p>:</p>
                                </td>
                                <td>
                                    <p>{{ $loker->pengiriman_cv }}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p style="font-size: 19px; font-weight: 600;">Tugas dan Tanggung Jawab</p>
                <p>
                    {{ $loker->job_desk }}
                </p>
                <p style="font-size: 19px; font-weight: 600;">Persyaratan Umum</p>
                <p>
                    {{ $loker->persyaratan_umum }}
                </p>
                <p style="font-size: 19px; font-weight: 600;">Persyaratan Khusus</p>
                <span>
                    {{ $loker->persyaratan_khusus }}
                </span>
            </div>
            <div style="padding: 20px 32px; background: white; border-radius: 15px; margin-top: 18px;">
                <h4 class="mb-4 mt-2">Tentang Perusahaan</h4>
                <div style="float:left;">
                    <div class="wrapper-icon">
                        <img style="width: 100%;" src="{{ asset('assets') }}/images/icon-job.png" alt="">
                    </div>
                </div>
                <p style="font-weight: 600; font-size: 19px;">{{ $loker->nama_perusahaan }}</p>
                <p style="margin-top: -13px;">{{ $loker->bidang_perusahaan }} - {{ $loker->sumber_sosmed }}</p>
                <p style="font-size: 19px; font-weight: 600; margin-top: 30px;">Alamat Perusahaan</p>
                <p>
                    {{ $loker->alamat_perusahaan }}
                </p>
                <p style="font-size: 19px; font-weight: 600;">Deskripsi Perusahaan</p>
                <p style="text-align:justify;">
                    {{ $loker->deskripsi_perusahaan }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('extras-css')
<style>
    .alert-success,
    .alert-danger {
        font-size: 13px !important;
        padding: 2px 9px !important;
        float: left !important;
        margin-right: 6px !important;
        margin-bottom: 9px !important;
        border-radius: 12px !important;
    }

    .page-item.active .page-link {
        background-color: #2B2067 !important;
        border-color: #2B2067 !important;
    }

    a {
        color: #2C2069 !important;
        text-decoration: none !important;
    }

    .pagination {
        right: 42px;
        position: absolute;
    }

    .img-ss {
        width: 100%;
        max-height: 200px;
        transition: max-height .5s ease-out;
        object-fit: cover;
        object-position: 0% 40%;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .img-ss:hover {
        max-height: 1000px;
        transition: max-height .5s ease-in;
    }

    .iklanside {
        background: white;
        padding: 20px 24px;
        transition: .5s;
        border-radius: 15px;
    }

    .iklanside.active p {
        color: white;
    }

    .iklanside:hover p {
        color: white;
    }

    .iklanside.active {
        background: linear-gradient(390deg, #232354, #4516A8) !important;
        box-shadow: 0 0 50px rgba(62, 24, 151, 0.4);
    }

    .iklanside:hover {
        background: linear-gradient(390deg, #232354, #4516A8) !important;
        box-shadow: 0 0 50px rgba(62, 24, 151, 0.4);
    }

    .iklanside.active .wrapper-icon {
        border: 3px solid white;
    }

    .iklanside:hover .wrapper-icon {
        border: 3px solid white;
    }

    .iklanside.active .item {
        background: rgba(255, 255, 255, 0.3);
        color: white;
    }

    .iklanside:hover .item {
        background: rgba(255, 255, 255, 0.3);
        color: white;
    }

    .item {
        float: left;
        background: #F0F0F0;
        margin-right: 10px;
        transition: .5s;
        padding: 6px 10px;
        border-radius: 8px;
    }

    .wrapper-icon {
        width: 60px;
        border: none;
        transition: .5s;
        height: 60px;
        border-radius: 100px;
        margin-right: 20px;
    }

    tr > td > p{
        margin-bottom: 8px !important;
    }

    tr > td > p.sumber:hover{
        text-decoration: underline;
    }

    table tr td:nth-child(1){
        width: 180px;
    }
    table tr td:nth-child(2){
        width: 24px;
    }

</style>
@endpush

@push('extras-js')
<script>
    var link = $(location).attr('href');
    $(".iklanside").each(function (index, element) {
        if ($(this).data("id") == link) {
            $(this).addClass("active");
        }
    });
</script>
@endpush
