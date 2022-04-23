@extends('backend.layouts.master')

@section('title','Slider List')

@section('content')
@include('backend.components.page_header', [
'fa' => 'plus',
'name' => 'Slider Create',
'header_name' => 'Slider List',
'route' => route('backend.site_config.slider.create')
])
<div class="row" id="basic-table">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($sliders as $key => $slider)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ asset($slider->image) }}" height="30" width="120" alt="No Image">
                                </td>
                                <td>
                                    <div class="btn-group btn-group-mini btn-corner">
                                        <a href="{{ route('backend.site_config.slider.edit', $slider->id) }}"
                                            class="btn btn-xs btn-info" title="Edit"> <i data-feather="edit"></i>
                                        </a>

                                        <button type="button" class="btn btn-xs btn-danger"
                                            onclick="delete_check({{$slider->id}})" title="Delete">
                                            <i data-feather='trash-2'></i>
                                        </button>
                                    </div>
                                    <form action="{{ route('backend.site_config.slider.destroy', $slider->id)}}"
                                        id="deleteCheck_{{ $slider->id }}" method="GET">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No data available in table</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                @include('backend.partials._paginate', ['data' => $sliders])

            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    function delete_check(id) {
            Swal.fire({
                title: 'Are you sure?',
                html: "<b>You will delete it permanently!</b>",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                width: 400,
            }).then((result) => {
                if (result.value) {
                    $('#deleteCheck_' + id).submit();
                }
            })
        }
</script>
@endpush
