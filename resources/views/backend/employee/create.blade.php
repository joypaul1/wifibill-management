@extends('backend.layouts.master')
@section('title', 'Add Employee')
@push('css')
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(('assets/app-assets/css/plugins/forms/form-validation.css')) }}">

{{-- date picker --}}
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/pickers/pickadate/pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">

<link rel="stylesheet"
  href="{{ asset(('assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')) }}">

<link rel="stylesheet"
  href="{{ asset(('assets/app-assets/css/plugins/forms/pickers/form-pickadate.css')) }}">
  <style>
      .picker{
          top: 0% !important;
      }
  </style>
@endpush



@section('content')
    @include('backend.components.page_header', [
        'fa' => 'list',
        'name' => 'Employee List',
        'header_name' => 'Employee Create',
        'route' => route('backend.employee.index'),
    ])
    <section class="bs-validation row">
        <div class="col-md-8 col-12">
            <div class="card">

                <div class="card-body">
                    <form class="needs-validation" method="post" action="{{ route('backend.employee.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex-grow-1">
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                                    placeholder="John Doe" name="name" required/>
                            </div>

                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <input type="mail" id="basic-icon-default-email" class="form-control dt-email"
                                    placeholder="employee@example.com" name="email" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-contact">Mobile</label>
                                <input type="text" id="basic-icon-default-contact" class="form-control dt-contact"
                                    placeholder="01**********" name="mobile" required />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-contact">Password</label>
                                <input type="password" id="basic-icon-default-contact" class="form-control dt-contact"
                                    placeholder="01**********" name="password" required />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" >Image</label>
                                <input type="file" class="form-control"
                                    placeholder="profile image" id="imgInp" name="image" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-contact">Date OF Birth</label>

                                <input type="text" id="pd-default" class="form-control pickadate picker__input"
                                    placeholder="18 June, 1997" name="dob" aria-haspopup="true" aria-readonly="false"
                                    aria-owns="pd-default_root">
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-company">Present Address</label>
                                <input type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="present_address" name="present_address" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-company">NID Number</label>
                                <input type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="nid " name="nid" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-company">Permanent Address</label>
                                <input type="text" id="basic-icon-default-company" class="form-control"
                                    placeholder="permanent_address" name="permanent_address" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="country">Area</label>
                                <select id="country" class=" form-select select2" name="area_id[]" multiple>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="country">Status</label>
                                <select id="country" class="form-select" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>

                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary me-1 data-submit" >Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Current Logo</h4>
                </div>
                <img id="blah" src="#" alt="your image" style="height: 200px" />
            </div>
        </div>
    </section>

@endsection

@push('js')
<script src="{{ asset(('assets/app-assets/vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/js/scripts/forms/form-select2.js')) }}"></script>
{{-- date time --}}
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/pickadate/picker.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/pickadate/picker.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/pickadate/legacy.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/js/scripts/forms/pickers/form-pickers.js')) }}"></script>

<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }
</script>
@endpush
