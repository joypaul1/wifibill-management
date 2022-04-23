@extends('backend.layouts.master')
@section('title', 'About-Us')



@section('content')
  
    <section class="bs-validation row">
        <div class="col-md-12 col-12">
            <div class="card">  
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('backend.site_config.about-us.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-1">
                            <label for="customFile1" class="form-label">Description</label>
                            @include('backend.components.summer_note',[
                                'name'=>'description',
                                'content'=>$aboutus->description,
                                ])
                            <div class="invalid-feedback">Please enter Image.</div>
                            <div class="invalid-feedback">{{ $errors->first('image') }}</div>
    
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
@endsection