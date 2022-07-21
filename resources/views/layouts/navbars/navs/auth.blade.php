<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper d-none d-md-block">
            <a class="navbar-brand" href="#">{{ $titlePage }}</a>
        </div>

        <div class="navbar-nav d-md-none">
            <div class="nav-item p-0">
                <a class="nav-link d-inline-flex" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="" alt="" srcset="">
                    <i class="material-icons">person</i>
                    <p class="mb-0">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                </div>
            </div>

        </div>
        <div class="justify-content-end d-inline-flex">
            <div class="navbar-nav d-none d-md-flex">
                <div class="nav-item p-0">
                    <a class="nav-link d-inline-flex" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="mb-0">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
        </div>
    </div>
</nav>










{{-- @extends('layouts.app') --}}
{{-- @extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
    <div class="container shadow p-3 mt-5 mx-2   ">

        <div class="row d-flex h-100">
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="http://192.172.100.35:8000/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">WizPac</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/PACRA_Logo.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="http://192.172.100.35:8002/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">HRMS</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/hrms6.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="http://192.172.100.35:8001/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Ticketi</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/ticket6.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="http://127.0.0.1:8003/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">PACRA Daily</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/news6.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="http://139.59.227.240/#login" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">CRM</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/crm6.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 ">
                <a href="https://www.office.com/" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Office 365</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/office365.png') }}" alt=""
                            style="height: 18vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
 --}}

