@extends('backend.layouts.master')
@section('title', 'Quick Page')


@section('content')
@include('backend.components.page_header', [
    'fa' => 'list',
    'name' => 'Page List',
    'header_name' => 'Page List',
    'route' =>route('backend.site_config.quick-page.index'),
    ])

    {{--  Start here  --}}
    <section class="bs-validation">
        <div class="col-md-12 col-12">
            <div class="card">
    
                <div class="card-body">
                    <form class="needs-validation" method="post" action="{{ route('backend.site_config.quick-page.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-1">
                            <label for="customFile1" class="form-label">Page Name</label>
                            <input name="name" class="form-control" type="text" id="customFile1" required="">
                            <div class="invalid-feedback">Please enter Image.</div>
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    
                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-addon-name">Description</label>
                            {{-- <textarea  name="short_desc" id="mytextarea"></textarea> --}}
                            @include('backend.components.summer_note',[
                            'name'=>'short_desc',
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
   
@endsection


