@extends('backend.layouts.master')
@section('title', 'Site Information')


@section('content')
@include('backend.components.page_header', [
    'fa' => 'list',
    'name' => 'Site Information',
    'header_name' => 'Site Information',
    'route' =>'#',
    ])

    <section class="bs-validation row">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" method="post" action="{{ route('backend.site_config.info') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-1">
                            <label for="name" class="form-label"> Name</label>
                            <input name="name" class="form-control" type="text"  id="name" required=""
                            placeholder="Company Name"   value="{{ $info->name ?? old('name') }}">
                            <div class="invalid-feedback">Please Name.</div>
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" class="form-control" type="email"  id="email" required=""
                            placeholder="Company Email"   value="{{ $info->email ?? old('email') }}">
                            <div class="invalid-feedback">Please email.</div>
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>

                        </div>
                        <div class="mb-1">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input name="mobile" class="form-control" type="text"  id="mobile" required=""
                            placeholder="Company mobile"   value="{{ $info->mobile ?? old('mobile') }}">
                            <div class="invalid-feedback">Please mobile.</div>
                            <div class="invalid-feedback">{{ $errors->first('mobile') }}</div>

                        </div>
                        <div class="mb-1">
                            <label for="address" class="form-label">Address</label>
                            <input name="address" class="form-control" type="text"  id="address" required=""
                            placeholder="Company mobile"   value="{{ $info->address ?? old('address') }}">
                            <div class="invalid-feedback">Please address.</div>
                            <div class="invalid-feedback">{{ $errors->first('address') }}</div>

                        </div>
                        <div class="mb-1">
                            <label for="logo" class="form-label">Logo</label>
                            <input name="logo" class="form-control" type="file"  id="imgInp" 
                            placeholder="Company logo"  >
                            <div class="invalid-feedback">Please logo.</div>
                            <div class="invalid-feedback">{{ $errors->first('address') }}</div>

                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-addon-name">Description</label>
                            @include('backend.components.summer_note',[
                                'name'=>'short_desc',
                                'content'=>$info->short_desc ?? old('short_desc')
                                ])
                            <div class="invalid-feedback">{{ $errors->first('short_desc') }}</div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('backend.site_config.quick-page.index')}}" class="btn btn-warning btn-md"> <i
                                    class="fa fa-refresh"></i>
                                Cancel</a>
    
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Uploaded Logo</h4>
                </div>
                <img class="img-fluid" src="{{ asset($info->logo??'-') }}" alt="companey logo" style="height: 200px">
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Current Logo</h4>
                </div>
                <img id="blah" src="#" alt="your image"  style="height: 200px"/>
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
