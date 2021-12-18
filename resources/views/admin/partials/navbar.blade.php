<nav class="navbar top navbar-expand-lg navbar-light">
    <div class="container-fluid atas-nav" style="min-width: 290px;">
        <button type="button" id="sidebarCollapse" class="btn btn-info"
            style="margin-top: 4px; margin-bottom:2px; background: #FFFFFF !important;">
            <i class="fas fa-align-left"
                style="font-size: 20px; margin-top: 5px; margin-bottom: 6px; color: #24143F;"></i>
        </button>

        <div>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item position-relative" style="margin-right: 38px;">
                    <a href="{{ url('/cari-kerja') }}">Kembali Ke Beranda</a>
                </li>
                <li class="nav-item position-relative">
                    <a id="btn-dropdownnavbar" href=""
                        style="color: #24143F; font-weight: 500; text-transform: capitalize;">
                        {{ Auth::User()->nama }}
                        <i class="fas fa-caret-down ml-2"></i>
                    </a>
                    <div class="dropdown-navbar dropdown-navbar-status"
                        style="min-width: 310px !important; z-index: 999;">
                        <div class="profil-navbar-wrapper">
                            <div class="row m-0 pt-4 pb-4"
                                style="background: rgba(36,25,55,0.65); border-top-left-radius: 10px; border-top-right-radius: 10px;">
                                <div class="col-3 ml-1">
                                    <img>
                                </div>
                                <div class="col ml-2 pt-1">
                                    <p class="text-light mb-0 text-uppercase" style="font-weight: 500;">
                                        {{ Auth::User()->nama }}</p>
                                    <p class="text-light mb-0" style="font-size: 14px;">{{ Auth::User()->nomor_induk }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="triangle"></div>
                        <ul class="pl-0">
                            <a href="{{url('profil/' . Auth::User()->nama . '/' . Auth::User()->id . '/' . Auth::User()->role_id)}}">
                                <li class="profil"><i class="far fa-address-card"
                                        style="width: 38px; font-size: 16px; color: rgba(0, 0, 0, 0.5);"></i>Profile
                                </li>
                            </a>
                            <a href="" id="btn-about">
                                <li><i class="far fa-question-circle"
                                        style="width: 38px; font-size: 16px; color: rgba(0, 0, 0, 0.5);"></i>About</li>
                            </a>
                            <li class="btn-logout">
                                <a href="{{ route('logout') }}" id="btn-logout">Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('extras-js')
<script>
    $('#btn-about').click(function (e) {
        e.preventDefault();
        Swal.fire({
            title: '<span class="mt-4">ujikom_angga @ 2020</span>',
            html: '<span class="mt-3 mb-3">v. 1.0.0.0</span>',
            showCloseButton: true,
            showConfirmButton: false,
        })
    });

    $('#btn-logout').click(function (e) {
        e.preventDefault();
        swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Anda Akan Logout",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#24143F",
                confirmButtonText: "Logout",
                cancelButtonText: "Batal",
                closeOnConfirm: false,
                closeOnCancel: false,
            })
            .then((result) => {
                if (result.value) {
                    $('#btn-logout').attr("onclick",
                        "event.preventDefault(); document.getElementById('logout-form').submit();");
                    $('#logout-form').submit();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        confirmButtonColor: "#241937",
                        text: 'Login Gagal!',
                    });
                }
            });
    });

</script>
@endpush
