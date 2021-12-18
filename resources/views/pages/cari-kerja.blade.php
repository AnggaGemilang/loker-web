@extends('layouts.layout')
@section('title','Cari Kerja')

@section('content')
<h1 class="pt-5 pb-4 mb-3">Cari Kerja</h1>

<form action="/cari-kerja/cari" method="GET">
    <div class="form-group search">
        <input type="text" name="cari" class="form-control search" placeholder="Judul Pekerjaan atau Kata Kunci" id="search">
        <button class="btn-submit">Cari Pekerjaan</button>
        <i class="icon-search fa fa-search"></i>
    </div>
</form>

<div class="alert bar text-center mt-4 mb-4" role="alert">
    Menampilkan {{ $count }} buah pekerjaan
</div>

@foreach($loker as $l)
<a style="text-decoration: none;" href="{{ url('cari-kerja/detail/' . $l->id) }}">
    <div class="box-loker" style="position: relative;">
        <div style="float:left;">
            <div style="width: 60px; border: none; height: 60px; border-radius: 100px; margin-right: 20px;">
                <img style="width: 100%;" src="{{ asset('assets') }}/images/icon-job.png" alt="">
            </div>
        </div>
        @php $len = strlen($l->nama_pekerjaan); @endphp
        <h3 style="text-transform: capitalize">@if($len>23) @php echo substr($l->nama_pekerjaan,0,23)." . . ." @endphp @else {{ $l->nama_pekerjaan }}
            @endif </h3>
        <h5 class="link" style="position:absolute; right:30px; top: 31px;"><a href="{{ $l->link }}"
                target="_blank">{{ $l->sumber_sosmed }}</a></h5>
        <p style="margin-top: -4px;" class="mb-3">{{ $l->nama_perusahaan }} - {{ $l->kota_ditempatkan }}</p>
        <div class="stop-float"></div>
        <div>
            <div @if($l->persyaratan_umum=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Persyaratan Umum</div>
            <div @if($l->persyaratan_khusus=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Persyaratan Khusus</div>
            <div @if($l->job_desk=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Job Desk</div>
            <div @if($l->contact_person=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Contact Person</div>
            <div @if($l->contact_person=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Screenshot</div>
            <div @if($l->link=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Link</div>
            <div @if($l->bidang_perusahaan=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Bidang Perusahaan</div>
            <div @if($l->bidang_perusahaan=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Pengiriman CV</div>
            <div @if($l->tanggal_terbit=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Tanggal Terbit</div>
            <div @if($l->deskripsi_perusahaan=="") class="alert alert-danger" @else class="alert alert-success"
                @endif>Deskripsi Perusahaan</div>
            <div @if($l->alamat_perusahaan=="") class="alert alert-danger" @else class="alert alert-success"
                @endif >Alamat Perusahaan</div>
        </div>
        <div class="stop-float"></div>
    </div>
</a>
@endforeach

{{ $loker->links() }}

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

</style>
@endpush