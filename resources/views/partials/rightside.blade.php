@php
if(\Request::is('/')) {
@$dashboard = 'active';
} else if(\Request::is('pembayaran/history')) {
@$history_pembayaran = 'active';
@$status = 'true';
} else if (\Request::is('pembayaran/entripembayaran')) {
@$entri_pembayaran = 'active';
} else if (\Request::is('data/siswa')) {
@$data_siswa = 'active';
} else if(\Request::is('data/kelas')) {
@$data_kelas = 'active';
} else if (\Request::is('data/petugas')) {
@$data_petugas = 'active';
} else if (\Request::is('data/tipetagihan')) {
@$data_tagihan = 'active';
} else if (\Request::is('pembayaran/data')) {
@$data_pembayaran = 'active';
} else if (\Request::is('ubahpassword')) {
@$ubah_password = 'active';
}
@endphp

<div class="wrapper">
    <nav class="parent-menu-rightside" style="position: -webkit-sticky; position: sticky; top: 0;">
        <ul class="pt-4 pl-3">
            <li class="mt-4">
                <a href="#">
                    <div class="back-icon2" style="float: left;">
                        <i class="fas fa-user" style="font-size: 23px;"></i>
                    </div>
                    <div style="padding-top: 1px;">
                        <span style="font-weight: 600; font-size: 13pt;">GolekGawean</span><br>
                        <span style="font-weight: 500; font-size: 10pt;">Administrator</span>
                    </div>
                    <div class="stop-float"></div>
                </a>
                <div class="stop-float"></div>
            </li>

            <li class="mt-5">
                <h4 style="font-weight: 600; border-bottom: 1.5px solid rgba(0,0,0,0.1); padding-bottom: 12px">Filter
                </h4>
            </li>

            <li style="margin-top: 40px;">
                <h5 style="font-weight: 600;">Kemampuan</h5>
            </li>

            <li style="margin-top: 25px;">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" value="backend" id="cb-1" name="category[]">
                    <label class="custom-control-label" for="cb-1">Backend Developer <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" value="frontend" id="cb-2" name="category[]">
                    <label class="custom-control-label" for="cb-2">Frontend Developer <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" value="android" id="cb-3" name="category[]">
                    <label class="custom-control-label" for="cb-3">Android Developer <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" value="ios" id="cb-4" name="category[]">
                    <label class="custom-control-label" for="cb-4">IOS Developer <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" value="design" id="cb-5" name="category[]">
                    <label class="custom-control-label" for="cb-5">Designer<span
                            style="font-size: 13px;">(30)</span></label>
                </div>
            </li>

            <li style="margin-top: 40px;">
                <h5 style="font-weight: 600;">Jenis Pekerjaan</h5>
            </li>

            <li style="margin-top: 25px;">
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="cb-8" name="example1">
                    <label class="custom-control-label" for="cb-8">Waktu Penuh <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="cb-9" name="example1">
                    <label class="custom-control-label" for="cb-9">Paruh Waktu <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="cb-10" name="example1">
                    <label class="custom-control-label" for="cb-10">Magang <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="cb-11" name="example1">
                    <label class="custom-control-label" for="cb-11">Pekerja Lepas <span
                            style="font-size: 13px;">(30)</span></label>
                </div>
            </li>

        </ul>
    </nav>
</div>