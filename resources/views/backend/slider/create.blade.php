@extends('backend.layouts.master')
@section('title', 'Add Slider')



@section('content')
@include('backend.components.page_header', [
'fa' => 'list',
'name' => 'Slider List',
'header_name' => 'Slider Create',
'route' =>route('backend.site_config.slider.index'),
])
<section class="bs-validation">
    <div class="col-md-6 col-12">
        <div class="card">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('backend.site_config.slider.store')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="customFile1" class="form-label">Image</label>
                        <input name="image" class="form-control" type="file" id="customFile1" required="">
                        <div class="invalid-feedback">Please enter Image.</div>
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Positon</label>
                        <input name="position" type="text" id="basic-addon-name" class="form-control" placeholder="Name"
                            aria-label="Name" aria-describedby="basic-addon-name" required="">
                        <div class="invalid-feedback">Please enter Position.</div>
                        <div class="invalid-feedback">{{ $errors->first('position') }}</div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.site_config.slider.index')}}" class="btn btn-warning btn-md"> <i
                                class="fa fa-refresh"></i>
                            Cancel</a>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
{{-- <div class="row"> --}}
    {{-- <div class="col-sm-9">
        <form class="form-horizontal" method="post" action="{{route('backend.site_config.slider.store')}}" role="form"
            enctype="multipart/form-data">
            @csrf


            <!-- Image -->
            <div class="form-group">
                <label class="col-sm-2 bolder" for="image">Image
                </label>
                <div class="col-sm-4">
                    <input name="image" type="file" id="image" class="form-control" onchange="readURL(this);">
                    <strong class="red">{{ $errors->first('image') }}</strong>
                    @if($errors->first('image'))
                    <br>
                    @endif

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 bolder" for="image">Position
                </label>
                <div class="col-sm-4">
                    <input name="position" type="text" id="position" class="form-control">
                    <strong class="red">{{ $errors->first('position') }}</strong>
                    @if($errors->first('position'))
                    <br>
                    @endif

                </div>
            </div>


            <!-- Buttons -->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit create-button"><i class="fa fa-save"></i> Add
                    </button>

                    <a href="{{route('backend.site_config.slider.index')}}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
        </form>
    </div> --}}

    {{-- <div class="col-sm-3">
        <div class="widget-box first">
            <div class="widget-header">
                <h4 class="widget-title">Current Image</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body" style="display:flex; align-items: center; justify-content: center; height:100px;">
                <div class="widget-main">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <img id="current" src="" width="100" height="100" class="img-responsive center-block"
                                alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@push('js')
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $('#current')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endpush
