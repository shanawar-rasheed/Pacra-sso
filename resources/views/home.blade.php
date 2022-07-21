{{-- @extends('layouts.app') --}}
@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
 <div class="container shadow p-3 mt-4 mx-2   ">

        <div class="row d-flex h-100" >
            <div class="col-lg-4 col-md-6 col-12 p-3  app_div">
                <a href="http://192.172.100.35:8000/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">WizPac</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/PACRA_Logo.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="http://192.172.100.35:8002/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">HRMS</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/hrms6.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="http://192.172.100.35:8001/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Ticketi</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/ticket6.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3  app_div">
                <a href="http://127.0.0.1:8003/login/passport" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">PACRA Daily</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/news6.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="http://139.59.227.240/#login" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">CRM</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/crm6.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="https://www.office.com/" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Office 365</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/office365.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-md-6 col-12 p-3  app_div">
                <a href="#" target="_blank"
                    class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Sap</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/sap.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="http://45.14.49.3:8080/Avra/" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Avra</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/finus.jpeg') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 p-3 app_div ">
                <a href="#" target="_blank" class="d-flex flex-column w-100 p-3 bg-white">
                    <button class="btn w-100 btn-primary">Venus</button>
                    <div class="text-center">
                        <img src="{{ asset('/img/venus.png') }}" alt=""
                            style="height: 11vh; width: fit-content; object-fit: cover;">
                    </div>
                </a>
            </div>

        </div>
        <div class="footer float-right">
            <h5 class="mt-3 mr-1">MIT | Building Bit by Bit </h5>
        </div>

    </div>
    @endsection

















    {{-- <div class="col-lg-4 col-md-6 col-12 " style='flex : 1 1 auto'>
                            <a href="http://192.172.100.35:8000/login/passport" target="_blank">
                                <div class="card shadow-lg p-3 mb-5  rounded">
                                    <button class="btn btn-primary mb-1"
                                        style=" display: inline-block; text-decoration: none;  ">wizPAC</button>

                                    <img class="card-img-top embed-responsive-item" src="{{ asset('/img/pacra1.png') }}"
                                        alt="Card image cap" width="50" height="50">
                                    <div class="card-body  ">
                                    </div>
                                </div>
                            </a>
                        </div> --}}
    {{-- <div class="col-lg-4 col-md-6 col-12">
                <a href="http://192.172.100.35:8002/login/passport" target="_blank">

                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <button class="btn btn-primary mb-1"
                            style=" display: inline-block; text-decoration: none;  ">HRMS</button>

                        <img class="card-img-top embed-responsive-item" src="{{ asset('/img/hrms.png') }}"
                            alt="Card image cap">
                        <div class="card-body ">


                        </div>
                    </div>
                </a>
            </div> --}}

    {{-- <div class="col-lg-4 col-md-6 col-12">
                <a href="http://192.172.100.35:8001/login/passport" target="_blank">
                    <div class="card shadow-lg p-3  rounded">
                        <button class="btn btn-primary mb-1"
                            style=" display: inline-block; text-decoration: none;   ">Ticketi</button>

                        <img class="card-img-top embed-responsive-item" src="{{ asset('/img/ticketenew.png') }}"
                            alt="Card image cap">

                        <div class="card-body ">
                        </div>
                    </div>
                </a>
            </div> --}}

    {{-- <div class="col-lg-4 col-md-6 col-12">
                <a href="http://127.0.0.1:8003/login/passport" target="_blank">
                    <div class="card shadow-lg p-3  bg-white rounded">
                        <button class="btn btn-primary mb-1" style=" display: inline-block; text-decoration: none;  ">PACRA
                            Daily</button>

                        <img class="card-img-top-ticketi" src="{{ asset('/img/news.png') }}" alt="Card image cap">

                        <div class="card-body ">
                        </div>
                    </div>
                </a>
            </div> --}}

    {{-- <div class="col-lg-4 col-md-6 col-12">
                <a href="http://139.59.227.240/#login" target="_blank">

                    <img class="card-img-top-ticketi" src="{{ asset('/img/crm.png') }}" alt="Card image cap"
                        width="50" height="50">
                    <div class="card-body ">
                    </div>
                </div>
            </a> --}}


    {{-- </div> --}}

    {{-- <div class="col-lg-4 col-md-6 col-12">
            <a href="https://www.office.com/" target="_blank">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <button class="btn btn-primary mb-1" style=" display: inline-block; text-decoration: none;  ">Office
                        365</button>

                    <img class="card-img-top-ticketi" src="{{ asset('/img/office365.png') }}" alt="Card image cap"
                        width="50" height="50">

                        <div class="card-body ">
                    </div>
                </div>
            </a>
        </div> --}}

    {{-- <form method="POST" action="http://139.59.227.240/#login" target="_blank" id="wizpac">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <button class="btn btn-primary mb-1" style=" display: inline-block; "
                    type="submit">CRM</button>
                {{-- <div style="display: none" height="20">
                    <input id="login_email" type="email" name="login_email"
                        value="{{ Auth::user()->email }}">
                    <input id="text" type="password" name="login_password" value="{{ $password }}">
                </div>
                <div class="">

                </div>
        </form> --}}


    {{-- @endsection --}}



    {{-- <div class="card card-profile ml-auto mr-auto mt-5" style="max-width: 360px">
        <div class="card-header card-header-image">
              <a href="#pablo">
                  <img class="img" src="https://images.unsplash.com/photo-1492447273231-0f8fecec1e3a?auto=format&fit=crop&w=334&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
              </a>
          </div>

          <div class="card-body ">
              <h4 class="card-title">Alec Thompson</h4>
              <h6 class="card-category text-gray">CEO / Co-Founder</h6>
          </div>
          <div class="card-footer justify-content-center">
              <a href="#pablo" class="btn btn-just-icon btn-twitter btn-round">
                  <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-facebook btn-round">
                  <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-google btn-round">
                  <i class="fa fa-google"></i>
              </a>
          </div>
      </div>
@endsection --}}
