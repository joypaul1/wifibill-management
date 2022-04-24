@extends('backend.layouts.master')

@section('title','Quick-page List')
@section('content')
    @include('backend.components.page_header', [
       'fa' => 'plus',
       'name' => 'Create Page',
       'header_name' => 'Page List',
       'route' => route('backend.site_config.quick-page.create')
    ])


    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">SL</th>
                                <th style="width: 20%">Name</th>
                                <th style="width: 20%">Slug</th>
                                <th style="width: 50%">Descripyion</th>
                                <th style="">Action</th>
                            </tr>
                            @forelse($pages as $key => $page)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $page->name }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>
                                        {!! \Illuminate\Support\Str::limit($page->short_desc,50) !!}
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-mini btn-corner">
                                            <a href="{{ route('backend.site_config.quick-page.edit', $page->id) }}"
                                               class="btn btn-xs btn-info"
                                               title="Edit">
                                               <i data-feather='edit'></i>
                                            </a>
                    
                                            <button type="button" class="btn btn-xs btn-danger"
                                                    onclick="delete_check({{$page->id}})"
                                                    title="Delete">
                                                    <i data-feather='trash-2'></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('backend.site_config.quick-page.destroy', $page->id)}}"
                                              id="deleteCheck_{{ $page->id }}" method="GET">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No data available in table</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
    
                    @include('backend.partials._paginate', ['data' => $pages])
    
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
