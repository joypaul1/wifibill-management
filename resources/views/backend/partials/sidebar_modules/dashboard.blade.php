{{-- <li class="{{$routeName === 'backend.dashboard.index' ? 'active' : ''}}">
    <a href="{{ route('backend.dashboard.index') }}">
        <i class="menu-icon fa fa-tachometer"></i>
        <span class="menu-text"> Dashboard </span>
    </a>
    <b class="arrow"></b>
</li> --}}
<li class=" nav-item {{$routeName === 'backend.dashboard.index' ? 'active' : ''}} "><a class="d-flex align-items-center"
    href="{{ route('backend.dashboard.index') }}"><i data-feather="home"></i>
    <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
</li>
