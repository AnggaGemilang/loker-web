@extends('layouts.layout-admin')
@section('title','Kumpulan Data')

@section('content')
<h1 class="mb-3">Kumpulan Data</h1>
<div>
    <nav class="breadcrumb">
        <a class="breadcrumb-item" href="{{url('/admin')}}">Dashboard</a>
        <a class="breadcrumb-item" href="{{url('/admin/data')}}">Kumpulan Data</a>
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
</div>
<div style="overflow-x: scroll;" style="width: 300%;">
    <table id="table_id" class="display">
        <thead>
            <tr align="center">
                <th>No</th>
                <th>Nama Pekerjaan</th>
                <th>Persyaratan Umum</th>
                <th>Persyaratan Khusus</th>
                <th>Job Desk</th>
                <th>Contact Person</th>
                <th>Nama Perusahaan</th>
                <th>Bidang Perusahaan</th>
                <th>Deskripsi Perusahaan</th>
                <th>Alamat Perusahaan</th>
                <th>Pengiriman Berkas</th>
                <th>Sumber Sosmed</th>
                <th>Tanggal Terbit</th>
                <th>Kota Ditempatkan</th>
                <th>Screenshot</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 1;
            @endphp
            @foreach($loker as $l)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $l->nama_pekerjaan }}</td>
                <td>{{ $l->persyaratan_umum }}</td>
                <td>{{ $l->persyaratan_khusus }}</td>
                <td>{{ $l->job_desk }}</td>
                <td>{{ $l->contact_person }}</td>
                <td>{{ $l->nama_perusahaan }}</td>
                <td>{{ $l->bidang_perusahaan }}</td>
                <td>{{ $l->deskripsi_perusahaan }}</td>
                <td>{{ $l->alamat_perusahaan }}</td>
                <td>{{ $l->pengiriman_cv }}</td>
                <td>{{ $l->sumber_sosmed }}</td>
                <td>{{ $l->tanggal_terbit }}</td>
                <td>{{ $l->kota_ditempatkan }}</td>
                <td><img class="img-ss" width="105" src="{{ asset('images_uploaded') . '/' . $l->screenshot }}" alt=""></td>
                <td>{{ $l->link }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
    $(document).ready(function () {
        $('#table_id').DataTable();
    });

</script>
@endpush
