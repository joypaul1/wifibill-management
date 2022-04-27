
        {{-- Order --}}
        {{-- @include('backend.partials.sidebar_modules.order') --}}

        {{-- Purchase --}}
        {{-- @include('backend.partials.sidebar_modules.purchase') --}}

        {{-- Product --}}
        {{-- @include('backend.partials.sidebar_modules.product') --}}



@php
$routeName = request()->route()->getName();

@endphp


<div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        @include('backend.partials.sidebar_modules.dashboard')

        {{-- package --}}
        @include('backend.partials.sidebar_modules.offer')

        {{-- Customer --}}
        @include('backend.partials.sidebar_modules.user')


        {{-- employee --}}
        @include('backend.partials.sidebar_modules.employee')

        
        {{-- Site Config --}}
        @include('backend.partials.sidebar_modules.site_config')




    </ul>
</div>
