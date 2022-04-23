
<div class="content-header row">
    @if(isset($header_name))
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">{{ $header_name}} </h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('backend.dashboard.index') }}">Home</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endif


    @if(isset($route) && isset($fa) && isset($name))

    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <a href="{{ $route }}" class="dt-button add-new btn btn-primary">
                    <span>  <i data-feather="{{ $fa }}"></i> {{ $name }}</span>
                </a>
            </div>
        </div>
    </div>
    @endif
</div>
