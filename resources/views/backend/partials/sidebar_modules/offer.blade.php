
        <li class="nav-item {{ strpos($routeName, 'backend.offer') === 0 ? 'sidebar-group-active open' : ''}}">
            <a class="d-flex align-items-center" href="#">
            <i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice"> All Package </span></a>
            <ul class="menu-content">
                <li class="{{ $routeName === 'backend.offer.index' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.offer.index') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Package</span></a>
                </li>

            </ul>
        </li>
