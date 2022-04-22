@extends('backend.layouts.master')
@section('title', 'Quick Page')
@section('page-header')
    <i class="fa fa-info"></i> Quick Page
@endsection
@push('css')
    <style>
        @media only screen and (min-width: 768px) {
            .widget-box.first {
                margin-top: 0 !important;
            }
        }
    </style>
@endpush

@section('content')
    @include('backend.components.page_header')

    {{--  Start here  --}}
    <div class="row">
        <div class="col-sm-9">
            <form action="{{ route('backend.site_config.quick-page.update',$page->id) }}" method="post" class="form-horizontal"
                  role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 no-padding-right bolder" for="name">
                        Page Name</label>

                    <div class="col-sm-10">
                        <input name="name"
                               type="text"
                               id="name"
                               placeholder="Company Name"
                               class="form-control"
                               value="{{ $page->name }}">
                    </div>
                    <div class="col-sm-9 col-sm-offset-2">
                        <strong class=" red">{{ $errors->first('name') }}</strong>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 no-padding-right bolder" for="short_desc">Description </label>
                    <div class="col-sm-10">
                        @include('backend.components.summer_note',[
                        'name'=>'short_desc',
                        'content' =>$page->short_desc,
                        ])
                        <div class="col-sm-9 col-sm-offset-2">
                            <strong class=" red">{{ $errors->first('short_desc') }}</strong>
                        </div>
                    </div>
                </div>

                 <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                    <button class="btn btn-sm btn-success submit"><i class="fa fa-save"></i> Update</button>

                    <a href="{{ route('backend.site_config.quick-page.index') }}" class="btn btn-sm btn-gray"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
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
