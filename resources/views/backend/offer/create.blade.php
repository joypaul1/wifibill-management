@extends('backend.layouts.master')
@section('title', 'Add Offer')


@section('content')
@include('backend.components.page_header', [
'fa' => 'list',
'name' => 'Offer List',
'header_name' => 'Offer Create',
'route' =>route('backend.offer.index'),
])

    <section class="bs-validation">
        <div class="col-md-6 col-12">
            <div class="card">

                <div class="card-body">
                    <form class="needs-validation" method="post" action="{{route('backend.offer.store')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-1">
                            <label for="customFile1" class="form-label">Image</label>
                            <input name="image" class="form-control" type="file" id="customFile1" required="">
                            <div class="invalid-feedback">Please enter Image.</div>
                            <div class="invalid-feedback">{{ $errors->first('image') }}</div>

                        </div>
                        <div class="mb-1">
                            <label class="form-label" for="basic-addon-name">Positon</label>
                            <input name="position" type="text" id="basic-addon-name" class="form-control" placeholder="Name"
                                aria-label="Name" aria-describedby="basic-addon-name" required="">
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
        {{-- <div class="col-md-4 col-12">
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
        </div> --}}
    </section>
    <section class="form-control-repeater">
        <div class="row">
          <!-- Invoice repeater -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Invoice</h4>
              </div>
              <div class="card-body">
                <form action="#" class="invoice-repeater">
                  <div data-repeater-list="invoice">
                    <div data-repeater-item>
                      <div class="row d-flex align-items-end">
                        <div class="col-md-4 col-12">
                          <div class="mb-1">
                            <label class="form-label" for="itemname">Item Name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="itemname"
                              aria-describedby="itemname"
                              placeholder="Vuexy Admin Template"
                            />
                          </div>
                        </div>

                        <div class="col-md-2 col-12">
                          <div class="mb-1">
                            <label class="form-label" for="itemcost">Cost</label>
                            <input
                              type="number"
                              class="form-control"
                              id="itemcost"
                              aria-describedby="itemcost"
                              placeholder="32"
                            />
                          </div>
                        </div>

                        <div class="col-md-2 col-12">
                          <div class="mb-1">
                            <label class="form-label" for="itemquantity">Quantity</label>
                            <input
                              type="number"
                              class="form-control"
                              id="itemquantity"
                              aria-describedby="itemquantity"
                              placeholder="1"
                            />
                          </div>
                        </div>

                        <div class="col-md-2 col-12">
                          <div class="mb-1">
                            <label class="form-label" for="staticprice">Price</label>
                            <input type="text" readonly class="form-control-plaintext" id="staticprice" value="$32" />
                          </div>
                        </div>

                        <div class="col-md-2 col-12 mb-50">
                          <div class="mb-1">
                            <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                              <i data-feather="x" class="me-25"></i>
                              <span>Delete</span>
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
                </form>
              </div>
            </div>
          </div>
          <!-- /Invoice repeater -->
        </div>
      </section>
@endsection

@push('js')
<script src="{{ asset(('assets/app-assets/js/scripts/forms/form-repeater.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
    <script>
        // imgInp.onchange = evt => {
        //     const [file] = imgInp.files
        //     if (file) {
        //         blah.src = URL.createObjectURL(file)
        //     }
        // }
    </script>
@endpush
