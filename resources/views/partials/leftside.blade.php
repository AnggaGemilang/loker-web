@php
if(\Request::is('/')) {
@$dashboard = 'active';
} else if(\Request::is('cari-kerja')) {
@$carikerja = 'active';
} else if(\Request::is('cari-kerja/cari')) {
@$carikerja = 'active';
}
@endphp

<div class="wrapper">
    <nav class="parent-menu-leftside">
        <ul class="pt-4 pl-4">
            <li class="mt-4">
                <a href="{{ url('/') }}">
                    <div class="back-icon2">
                        <i class="fab fa-affiliatetheme" style="font-size: 23px;"></i>
                    </div>
                    <span style="font-weight: 800; font-size: 13pt;">GolekGawean</span>
                </a>
                <div class="stop-float"></div>
            </li>

            <li class="{{ @$dashboard }}" style="margin-top: 42px;">
                <a href="{{ url('/') }}">
                    <div class="back-icon">
                        <i class="fas fa-columns" style="font-size: 23px;"></i>
                    </div>
                    <span class="caption-menu">Dashboard</span>
                </a>
                <div class="stop-float"></div>
            </li>

            <li class="{{ @$carikerja }}">
                <a href="{{ url('cari-kerja') }}">
                    <div class="back-icon">
                        <i class="fa fa-briefcase" style="font-size: 23px;"></i>
                    </div>
                    <span class="caption-menu">Cari Kerja</span>
                </a>
                <div class="stop-float"></div>
            </li>

            <li>
                <a href="{{ url('kotak-masuk') }}">
                    <div class="back-icon">
                        <i class="fas fa-inbox" style="font-size: 23px;"></i>
                    </div>
                    <span class="caption-menu">Kotak Masuk</span>
                </a>
                <div class="stop-float"></div>
            </li>

            <li>
                <a href="{{ url('pelacak-waktu') }}">
                    <div class="back-icon">
                        <i class="fa fa-stopwatch" style="font-size: 23px;"></i>
                    </div>
                    <span class="caption-menu">Pelacak Waktu</span>
                </a>
                <div class="stop-float"></div>
            </li>

            <li>
                <a href="{{ url('pengaturan') }}">
                    <div class="back-icon">
                        <i class="fa fa-cog" style="font-size: 23px;"></i>
                    </div>
                    <span class="caption-menu">Pengaturan</span>
                </a>
                <div class="stop-float"></div>
            </li>
        </ul>
    </nav>
    <div id="content-section" class="status-sd">
        <div id="content">
            <div class="penghalang"></div>
            @yield('content')
        </div>
    </div>
    @include('partials.rightside')
</div>
