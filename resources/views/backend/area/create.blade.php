@extends('backend.layouts.master')
@section('title', 'Add Slider')



@section('content')
@include('backend.components.page_header', [
'fa' => 'list',
'name' => 'Area List',
'header_name' => 'Area Create',
'route' =>route('backend.site_config.area.index'),
])
<section class="bs-validation row">
    <div class="col-md-6 col-12">
        <div class="card">

            <div class="card-body">
                <form class="needs-validation" method="post" action="{{route('backend.site_config.area.store')}}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <label for="customFile1" class="form-label">Name</label>
                        <input name="name" class="form-control" type="text" id="customFile1" required="">
                        <div class="invalid-feedback">Please enter name.</div>
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
    {{-- <div class="col-md-4 col-12">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Current Logo</h4>
            </div>
            <img id="blah" src="#" alt="your image"  style="height: 200px"/>
        </div>
    </div> --}}
</section>

@endsection

@push('js')
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
