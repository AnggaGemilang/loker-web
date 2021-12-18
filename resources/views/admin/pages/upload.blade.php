@extends('layouts.layout-admin')
@section('title','Upload Excel')

@section('content')
<h1 class="mb-3">Upload Excel</h1>
<nav class="breadcrumb">
    <a class="breadcrumb-item" href="{{url('/admin')}}">Dashboard</a>
    <a class="breadcrumb-item" href="{{url('/admin/upload')}}">Upload Excel</a>
    <span class="breadcrumb-item active"></span>
</nav>
<div style="background: #EDE6F7; border-radius: 20px; margin-bottom: 27px;" class="p-2 mt-4">
    <p class="mb-1 ml-2 pl-1 mt-2 text-dark" style="font-weight: 500;">Hal Yang Harus Diperhatikan</p>
    <ol style="opacity: 0.7;">
        <li>Harap ganti password saat pertama kali login</li>
        <li>Password default adalah Nomor Induk anda sendiri</li>
        <li>Pastikan anda mengetahui password sebelumnya</li>
        <li>Klik tombol ubah password ketika keterangan bernilai "password sama"</li>
        <li>Ketika berhasil, untuk keamanan anda akan diarahkan kembali untuk login</li>
    </ol>
</div>
<form action="{{ url('/admin/upload/post') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="container-fluid">
        <div class="row">
            <div class="parent-box-uploaded col-md-3 d-none"
                style="display: flex; justify-content: center; align-items: center; background: #EDE6F7;">
                <div class="row pr-2 justify-content-center">
                    <div style="position:relative;text-align-last: center;">
                        <img src="{{ asset('assets') }}/admin/images/excel.png" alt="" style="width: 90px;">
                        <p id="uploaded-link">tes</p>
                        <button type="button" class="btn btn-danger btn-xs remove-preview p-0"
                            style="position: absolute; right:-20px; width: 30px; height: 30px; top:-5px; border-radius: 100px;">
                            <i class="fa fa-times" style="font-size: 14px; margin-top:2.2px;"></i>
                        </button>
                    </div>
                    <button style="position: absolute; bottom: 0px; left:0; background: #241937; color: white;" type="submit"
                        class="w-100 btn pull-right">Upload</button>
                </div>
            </div>
            <div class="parent-box-upload col-md-9 active" style="padding:0;">
                <div class="form-group mb-0">
                    <div class="dropzone-wrapper">
                        <div class="dropzone-desc">
                            <i class="glyphicon glyphicon-download-alt"></i>
                            <p>Pilih file excel atau geser ke sini</p>
                        </div>
                        <input type="file" name="file" class="dropzone">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@include('admin.partials.footer')
@endsection

@push('extras-css')
<style>
    #content {
        margin-bottom: -12px !important;
    }

    .container {
        padding: 50px 10%;
    }

    .box {
        position: relative;
        background: #ffffff;
        width: 100%;
    }

    .box-header {
        color: #444;
        display: block;
        padding: 10px;
        position: relative;
        border-bottom: 1px solid #f4f4f4;
        margin-bottom: 10px;
    }

    .box-tools {
        position: absolute;
        right: 10px;
        top: 5px;
    }

    .dropzone-wrapper {
        border: 2px dashed #91b0b3;
        color: #92b0b3;
        position: relative;
        height: 320px;
    }

    .dropzone-desc {
        position: absolute;
        margin: 0 auto;
        left: 50%;
        right: 0;
        text-align: center;
        top: 48%;
        font-size: 16px;
        transform: translate(-50%, -50%);
    }

    .dropzone,
    .dropzone:focus {
        position: absolute;
        outline: none !important;
        width: 100%;
        height: 100%;
        cursor: pointer;
        opacity: 0;
    }

    .dropzone-wrapper:hover,
    .dropzone-wrapper.dragover {
        background: #EDE6F7;
    }

    .preview-zone {
        text-align: center;
    }

    .preview-zone .box {
        box-shadow: none;
        border-radius: 0;
        margin-bottom: 0;
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
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var wrapperZone = $(input).parent();
                var previewZone = $(input).parent().parent().find('.preview-zone');
                var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
                $('.parent-box-upload').removeClass('active');
                $('.parent-box-uploaded').removeClass('d-none');
                $('#uploaded-link').html(input.files[0].name);
                wrapperZone.removeClass('dragover');
                previewZone.removeClass('hidden');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function reset(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }

    $(".dropzone").change(function () {
        readFile(this);
    });

    $('.dropzone-wrapper').on('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
    });

    $('.dropzone-wrapper').on('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
    });

    $('.remove-preview').on('click', function () {
        var boxZone = $(this).parents('.preview-zone').find('.box-body');
        var previewZone = $(this).parents('.preview-zone');
        var dropzone = $(this).parents('.form-group').find('.dropzone');
        boxZone.empty();
        previewZone.addClass('hidden');
        $('.parent-box-upload').addClass('active');
        $('.parent-box-uploaded').addClass('d-none');
        reset(dropzone);
    });
</script>
@endpush
