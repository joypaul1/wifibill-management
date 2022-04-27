@extends('backend.layouts.master')

@section('title','Edit Slider')


@section('content')
@include('backend.components.page_header', [
'fa' => 'fa fa-list',
'name' => 'Area List',
'header_name' => 'Area Create',
'route' =>route('backend.site_config.area.index'),
])
<section class="bs-validation row">
    <div class="col-md-6 col-sm-12">
        <div class="card">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('backend.site_config.area.update',$area->id)}}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Positon</label>
                        <input name="name" type="text" id="basic-addon-name" class="form-control" placeholder="Name"
                            aria-label="Name" aria-describedby="basic-addon-name" value="{{ $area->name }}" required="">
                        <div class="invalid-feedback">Please enter Position.</div>
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{route('backend.site_config.area.index')}}" class="btn btn-warning btn-md"> <i
                                class="fa fa-refresh"></i>
                            Cancel</a>

                    </div>

                </form>
            </div>
        </div>
    </div>




</section>
@endsection

@push('js')
    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
@endpush
