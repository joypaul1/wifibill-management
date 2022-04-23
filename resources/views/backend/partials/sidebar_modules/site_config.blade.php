     
        <li class="nav-item {{ strpos($routeName, 'backend.site_config') === 0 ? 'sidebar-group-active open' : ''}}">
            <a class="d-flex align-items-center" href="#">
            <i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice"> Site Config</span></a>
            <ul class="menu-content">
                <li class="{{ $routeName === 'backend.site_config.about-us' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.site_config.about-us') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List"> About-us</span></a>
                </li>
                <li class="{{ $routeName === 'backend.site_config.slider.index' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.site_config.slider.index') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List"> Slider</span></a>
                </li>
                {{-- <li class="{{ $routeName === 'backend.site_config.banner' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.site_config.banner.index') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List"> Banner</span></a>
                </li> --}}
                <li class="{{ $routeName === 'backend.site_config.quick-page.index' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.site_config.quick-page.index') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List"> Quick Page</span></a>
                </li>
                <li class="{{ $routeName === 'backend.site_config.info' ? 'active' : ''}}">
                    <a class="d-flex align-items-center" href="{{ route('backend.site_config.info') }}"><i data-feather="circle"></i>
                    <span class="menu-item text-truncate" data-i18n="List"> Site Info</span></a>
                </li>

            </ul>
        </li>
