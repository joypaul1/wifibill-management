@extends('backend.layouts.master')
@section('title', 'Site Information')


@section('content')
@include('backend.components.page_header', [
    'fa' => 'list',
    'name' => 'Site Information',
    'header_name' => 'Site Information',
    'route' =>'#',
    ])

    <section class="bs-validation">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" method="post" action="{{ route('backend.site_config.quick-page.store') }}"
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
                            <input name="logo" class="form-control" type="file"  id="logo" required=""
                            placeholder="Company logo"   onchange="readURL(this);">
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
    </section>
   

    {{-- <div class="col-sm-3">
        <div class="widget-box first">
            <div class="widget-header">
                <h4 class="widget-title">Site Logo</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="widget-body"
                 style="display:flex; align-items: center; justify-content: center; height:100px;">
                <div class="widget-main">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <img src="{{asset($info->logo)}}" class="img-responsive center-block" alt="logo"
                                 width="100" height="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Current Logo</h4>

                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body"
                 style="display:flex; align-items: center; justify-content: center; height:100px;">
                <div class="widget-main">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <img id="current" src="" width="100" height="100" class="img-responsive center-block"
                                 alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.col -->
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
