@extends('backend.layouts.master')

@section('title','Edit Slider')


@section('content')
@include('backend.components.page_header', [
'fa' => 'fa fa-list',
'name' => 'Slider List',
'header_name' => 'Slider Create',
'route' =>route('backend.site_config.slider.index'),
])
<section class="bs-validation row">
    <div class="col-md-6 col-sm-12">
        <div class="card">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('backend.site_config.slider.update',$slider->id)}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="customFile1" class="form-label">Image</label>
                        <input name="image" class="form-control" type="file" id="customFile1" >
                        <div class="invalid-feedback">Please enter Image.</div>
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Positon</label>
                        <input name="position" type="text" id="basic-addon-name" class="form-control" placeholder="Name"
                            aria-label="Name" aria-describedby="basic-addon-name" value="{{ $slider->position }}" required="">
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
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Old Image</h4>
            </div>
            <img class="img-fluid" src="{{ asset($slider->image) }}" alt="Card image cap" style="height: 200px">
        </div>
    </div>
</section>
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
