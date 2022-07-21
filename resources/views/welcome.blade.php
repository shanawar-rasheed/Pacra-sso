@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('Material Dashboard')])

@section('content')
<passport-clients></passport-clients>
      <passport-authorized-clients></passport-authorized-clients>
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8">
          <h1 class="text-white text-center">{{ __('Welcome to PACRA SSO ') }}</h1>
      </div>
      <div>
      <a href="{{route('login')}}" class="btn btn-info ">Login</a>
    </div>
  </div>
</div>
@endsection
