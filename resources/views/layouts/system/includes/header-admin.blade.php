<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="60">
                </span>
                <span class="logo-lg">
                    <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="40">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="60">
                </span>
                <span class="logo-lg">
                    <img src="https://proconsig.app/backend/proconsig/images/logo.png" alt="" height="40">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
            data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
        </button>
    </div>

    <div class="d-flex">
        <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-2x text-success"></i>

                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->

                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" {{ route('admin.logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Sair</a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    <input type="text" value="{{ session()->get('language') }}" name="session_name"
                        class="form-control" id="language">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
