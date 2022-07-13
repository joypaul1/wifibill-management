@extends('backend.layouts.master')
@section('title', 'Add Offer')


@section('content')
@include('backend.components.page_header', [
'fa' => 'list',
'name' => 'Offer List',
'header_name' => 'Offer Create',
'route' => route('backend.offer.index'),
])

<section class="bs-validation ">

    <div class="card">
        <div class="card-body">
            <form class="needs-validation invoice-repeater row" method="post"
                action="{{ route('backend.offer.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12">
                    <div class="mb-1">
                        <label for="customFile1" class="form-label">Package Name</label>
                        <input name="name" class="form-control" type="text" placeholder='name' id="customFile1" required="">
                        <div class="invalid-feedback">Please enter Image.</div>
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Package Rate (Per Month)</label>
                        <input name="rate" type="text" id="basic-addon-name" class="form-control" placeholder="500 (Tk)"
                            aria-label="Name" aria-describedby="basic-addon-name"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                             required="">
                        <div class="invalid-feedback">Please enter rate.</div>
                        <div class="invalid-feedback">{{ $errors->first('rate') }}</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="position">Position</label>
                        <input name="position" type="text" id="position" class="form-control" placeholder="Position(1,2,3..)"
                            aria-label="Name" aria-describedby="position"
                             onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                             required="">
                        <div class="invalid-feedback">Please enter position.</div>
                        <div class="invalid-feedback">{{ $errors->first('position') }}</div>
                    </div>


                </div>
                <div class="col-md-6 col-12">

                    <div data-repeater-list="invoice">
                        <div data-repeater-item>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-8 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemname"><i data-feather='arrow-right-circle'></i> Facility</label>
                                        <input type="text" name="" class="form-control" id="itemname"
                                            aria-describedby="itemname" placeholder="facility write here.." />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 mb-50">
                                    <div class="mb-1">
                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete
                                            type="button">
                                            <i data-feather="x" class="me-25"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                <i data-feather="plus" class="me-25"></i>
                                <span>Add New</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('backend.site_config.slider.index') }}" class="btn btn-warning btn-md"> <i
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
<script src="{{ asset('assets/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
<script src="{{ asset('assets/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script>
    // imgInp.onchange = evt => {
        //     const [file] = imgInp.files
        //     if (file) {
        //         blah.src = URL.createObjectURL(file)
        //     }
        // }
</script>
@endpush
