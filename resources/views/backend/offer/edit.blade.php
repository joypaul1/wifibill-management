@extends('backend.layouts.master')
@section('title', 'Add Offer')


@section('content')
@include('backend.components.page_header', [
'fa' => 'list',
'name' => 'Offer List',
'header_name' => 'Offer Edit',
'route' => route('backend.offer.index'),
])

<section class="bs-validation ">

    <div class="card">
        <div class="card-body">
            <form class="needs-validation invoice-repeater row" method="post" action="{{ route('backend.offer.update', $offer->id) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12">
                    <div class="mb-1">
                        <label for="customFile1" class="form-label">Package Name</label>
                        <input name="name" class="form-control" type="text" placeholder='name'  value="{{ $offer->name }}" id="customFile1" required="">
                        <div class="invalid-feedback">Please enter Image.</div>
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>

                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-addon-name">Package Rate (Per Month)</label>
                        <input name="rate" type="text" id="basic-addon-name " value="{{ $offer->rate }}" class="form-control" placeholder="500 (Tk)"
                            aria-label="Name" aria-describedby="basic-addon-name"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                             required="">
                        <div class="invalid-feedback">Please enter rate.</div>
                        <div class="invalid-feedback">{{ $errors->first('rate') }}</div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="position">Position</label>
                        <input name="position" type="text" id="position" class="form-control" placeholder="Position(1,2,3..)"
                            aria-label="Name" aria-describedby="position"
                            value="{{ $offer->position }}"
                             onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                             required="">
                        <div class="invalid-feedback">Please enter position.</div>
                        <div class="invalid-feedback">{{ $errors->first('position') }}</div>
                    </div>


                </div>
                <div class="col-md-6 col-12">

                    <div data-repeater-list="item" id="item">
                        <div data-repeater-itemfa-stack-1x>
                            @forelse ($offer->serials as $key=>$serial)
                            <div class="row d-flex align-items-end">
                                <div class="col-md-8 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="itemname{{ $key }}"><i data-feather='arrow-right-circle'></i> Facility</label>
                                        <input type="text" name="item[{{ $serial->id }}]" value="{{ $serial->name }}" class="form-control" id="itemname{{ $key }}"
                                            aria-describedby="itemname{{ $key }}" placeholder="facility write here.." />
                                    </div>
                                </div>

                                <div class="col-md-2 col-12 mb-50">
                                    <div class="mb-1">
                                        <button class="btn btn-outline-danger text-nowrap px-1" id="data-repeater-delete"
                                        onclick="deleteFacility(this);"
                                            type="button">
                                            <i data-feather="x" class="me-25"></i>

                                        </button>
                                    </div>
                                </div>
                            </div>
                            @empty

                            @endforelse

                            <hr />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-icon btn-info" type="button" data-repeater-create>
                                <i data-feather="plus" class="me-25"></i>
                                <span>Add New</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('backend.offer.index') }}" class="btn btn-warning btn-md"> <i
                            class="fa fa-refresh"></i>
                        Cancel</a>

                </div>
            </form>
        </div>
    </div>
    </div>



</section>

<div class="itemDisplaynone d-none" >

    <div class="row d-flex align-items-end">
        <div class="col-md-8 col-12">
            <div class="mb-1">
                <label class="form-label" for="new_item"><i data-feather='arrow-right-circle'></i> Facility</label>
                <input type="text" name="new_item[]"  class="form-control" id="new_item"
                    aria-describedby="new_item" placeholder="facility write here.." />
            </div>
        </div>

        <div class="col-md-2 col-12 mb-50">
            <div class="mb-1">
                <button class="btn btn-outline-danger text-nowrap px-1" id="data-repeater-delete"
                onclick="deleteFacility(this);"
                    type="button">
                    <i data-feather="x" class="me-25"></i>

                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script src="{{ asset('assets/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
<script src="{{ asset('assets/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script>

    function deleteFacility(where){
        where.closest('.align-items-end').remove()
    };

    $('.btn-info').on('click', function(){
        $('.itemDisplaynone:first').clone().removeClass('d-none').appendTo('#item:last').find("input").val("").show();
    });
    // imgInp.onchange = evt => {
        //     const [file] = imgInp.files
        //     if (file) {
        //         blah.src = URL.createObjectURL(file)
        //     }
        // }
</script>
@endpush
