<div class="sidebar" data-color="orange" data-background-color="black" data-image="{{ asset('material') }}/img/sidebar-2.jpg">
  {{-- jango --}}
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('PAC | Apps') }}
    </a>
    <div class="ml-5">
    <a href="https://www.facebook.com/pacra.pk/"   target="_blank" class="btn btn-just-icon btn-link btn-white">
        <i class="fa fa-facebook-square"></i>
      </a>
      <a href="https://pk.linkedin.com/company/pacra#:~:text=PACRA%20%2D%20The%20first%20and%20leading,the%20time%20Lahore%20Stock%20Exchange)." class="btn btn-just-icon btn-link btn-white" target="_blank">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="https://www.pacra.com/" class="btn btn-just-icon btn-link btn-white" target="_blank">
          {{-- <i class="fa fa-linkedin"></i> --}}
          <img src=" {{ asset('/img/logologin.png') }}"  alt="" style="width: 80%">
      </a>
    </div>
  </div>



  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
          <i class="material-icons">settings</i>

          <p>{{ __('Management') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            {{-- <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li> --}}
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                  <span class="sidebar-mini"> US </span>
                  <span class="sidebar-normal"> {{ __('User Management') }} </span>
                </a>
              </li>
            <li class="nav-item{{ $activePage == 'role-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('roles.index') }}">
                <span class="sidebar-mini"> RM </span>
                <span class="sidebar-normal"> {{ __('Role Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Authorize App') }}</p>
        </a>
      </li>
      {{-- <li class="nav-item{{ $activePage == 'authorize' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('authorizeapp') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Authorize App') }}</p>
        </a>
      </li> --}}
      {{-- <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> --}}
    </ul>


  </div>


</div>
