
        <li class="nav-item {{ strpos($routeName, 'backend.employee') === 0 ? 'sidebar-group-active open' : ''}}">
            <a class="d-flex align-items-center" href="#">
            <i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice"> All Employee </span></a>
            <ul class="menu-content">
                <li class="{{ $routeName === 'backend.employee.index' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.employee.index') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List">Employee List</span></a>
                </li>

            </ul>
        </li>
