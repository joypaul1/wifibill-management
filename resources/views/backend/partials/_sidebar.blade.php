
        {{-- Dashboard --}}
        {{-- @include('backend.partials.sidebar_modules.dashboard') --}}

        {{-- Order --}}
        {{-- @include('backend.partials.sidebar_modules.order') --}}

        {{-- Purchase --}}
        {{-- @include('backend.partials.sidebar_modules.purchase') --}}

        {{-- Product --}}
        {{-- @include('backend.partials.sidebar_modules.product') --}}

         {{-- Customer --}}
        {{-- @include('backend.partials.sidebar_modules.customer') --}}

        {{-- Site Config --}}
        {{-- @include('backend.partials.sidebar_modules.site_config') --}}


@php
$routeName = request()->route()->getName();

@endphp


<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        @include('backend.partials.sidebar_modules.dashboard')
        @include('backend.partials.sidebar_modules.site_config')

        <li class=" nav-item sidebar-group-actives opens"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
            <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                </li>
                <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                </li>
            </ul>
        </li>


    </ul>
</div>
