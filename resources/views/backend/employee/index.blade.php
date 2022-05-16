@extends('backend.layouts.master')

@section('title', 'Employee List')

@push('css')
{{-- Page Css files --}}

<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
<link rel="stylesheet" href="{{ asset(('assets/app-assets/vendors/css/forms/select/select2.min.css')) }}">

@endpush


@section('content')
<!-- users list start -->
<section class="app-user-list">
  <div class="row">
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">21,459</h3>
            <span>Total Users</span>
          </div>
          <div class="avatar bg-light-primary p-50">
            <span class="avatar-content">
              <i data-feather="user" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">4,567</h3>
            <span>Paid Users</span>
          </div>
          <div class="avatar bg-light-danger p-50">
            <span class="avatar-content">
              <i data-feather="user-plus" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">19,860</h3>
            <span>Active Users</span>
          </div>
          <div class="avatar bg-light-success p-50">
            <span class="avatar-content">
              <i data-feather="user-check" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6">
      <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between">
          <div>
            <h3 class="fw-bolder mb-75">237</h3>
            <span>Pending Users</span>
          </div>
          <div class="avatar bg-light-warning p-50">
            <span class="avatar-content">
              <i data-feather="user-x" class="font-medium-4"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- list and filter start -->
  <div class="card">
    <div class="card-body border-bottom">
      <h4 class="card-title">Search & Filter</h4>
      <div class="row">
        <div class="col-md-4 user_role"></div>
        <div class="col-md-4 user_plan"></div>
        <div class="col-md-4 user_status"></div>
      </div>
    </div>
    <div class="card-datatable table-responsive pt-0">
      <table class="table" id="employee-list-table">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Area</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>

  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection



@push('js')
{{-- Page js files --}}
<script src="{{ asset(('assets/app-assets/js/scripts/pages/app-user-list.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/js/scripts/forms/form-select2.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/jszip.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/forms/cleave/cleave.min.js')) }}"></script>
<script src="{{ asset(('assets/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>



<script>
  $(function () {
        var userView = window.location.origin+ '/userView';
        var assetPath =window.location.origin ;
        var statusObj =[];
        var dtUserTable = $('#employee-list-table');
        if (dtUserTable.length) {
            dtUserTable.DataTable({
            ajax: {
                "url": "{{ route('backend.employee.index') }}",
                "type": "GET",
                "datatype": "json"
            },// JSON file to add data
            columns: [
                // columns according to JSON
                { data: 'id' },
                { data: 'name' },
                { data: 'mobile' },
                { data: 'email'},
                { data: 'areas' },
                { data:'status'},
                { data: '' }
            ],
            columnDefs: [
                {
                // For Responsive
                className: 'control',
                orderable: false,
                responsivePriority: 2,
                targets: 0,
                render: function (data, type, full, meta) {
                    return '';
                }
                },
                {
                // User full name and username
                targets: 1,
                responsivePriority: 4,
                render: function (data, type, full, meta) {
                    var $name = full['name'],
                    $ip_id = '',
                    $image = full['image'];

                    if ($image) {
                    // For Avatar image
                    var $output =
                        '<img src="' + assetPath + '/' + $image + '" alt="Avatar" height="32" width="32">';
                    } else {
                    // For Avatar badge
                    var stateNum = Math.floor(Math.random() * 6) + 1;
                    var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
                    var $state = states[stateNum],
                        $name = full['name'],
                        $initials = $name.match(/\b\w/g) || [];
                    $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
                    $output = '<span class="avatar-content">' + $initials + '</span>';
                    }
                    var colorClass = $image === '' ? ' bg-light-' + $state + ' ' : '';
                    // Creates full output for row
                    var $row_output =
                    '<div class="d-flex justify-content-left align-items-center">' +
                    '<div class="avatar-wrapper">' +
                    '<div class="avatar ' +colorClass + ' me-1">' + $output +'</div>' +
                    '</div>' +
                    '<div class="d-flex flex-column">' +
                    '<a href="#" class="user_name text-truncate text-body"><span class="fw-bolder">' +$name +'</span></a>' +
                    '<small class="emp_post text-muted">' + $ip_id +'</small>' +
                    '</div>' +
                    '</div>';
                    return $row_output;
                }
                },
                {
                // User Role
                targets: 2,
                render: function (data, type, full, meta) {
                    return "<span class='text-truncate align-middle'>" + full['mobile'] + '</span>';
                }
                },
                {
                targets: 4,
                render: function (data, type, full, meta) {
                    var $billing = full['areas'];
                    var areaArray= new Array();
                    $billing.forEach(element => {
                        areaArray.push(element.area_name.name)
                    });
                    return '<span class="text-nowrap">' + areaArray  + '</span>';
                }
                },
                {

                // User Status
                targets: 5,
                render: function (data, type, full, meta) {
                    var $status = full['status'];

                    if($status == 1){
                      var $className = 'badge rounded-pill badge-light-success me-1 text-capitalized' ;
                      var valueName = 'Active';
                    }else{
                      var $className = 'badge rounded-pill badge-light-warning  me-1 text-capitalized' ;
                      var valueName = 'Deactive';
                    }

                    return (
                    '<span class="' +$className+'">' + valueName+'</span>'
                    );
                }
                },
                {
                // Actions
                targets: -1,
                title: 'Actions',
                orderable: false,
                render: function (data, type, full, meta) {
                    return (
                    '<div class="btn-group">' +
                    '<a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
                    feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                    '</a>' +
                    '<div class="dropdown-menu dropdown-menu-end">' +
                    '<a href="' +userView + '" class="dropdown-item">' +
                    feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
                    'Details</a>' +
                    '<a href="javascript:;" class="dropdown-item delete-record">' +
                    feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
                    'Delete</a></div>' +
                    '</div>' +
                    '</div>'
                    );
                }
                }
            ],
            order: [[1, 'desc']],
            dom:
                '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Search',
                searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [
                {
                extend: 'collection',
                className: 'btn btn-outline-secondary dropdown-toggle me-2',
                text: feather.icons['external-link'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                buttons: [
                    {
                    extend: 'print',
                    text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                    },
                    {
                    extend: 'csv',
                    text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                    },
                    {
                    extend: 'excel',
                    text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                    },
                    {
                    extend: 'pdf',
                    text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                    },
                    {
                    extend: 'copy',
                    text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                    }
                ],
                init: function (api, node, config) {
                    $(node).removeClass('btn-secondary');
                    $(node).parent().removeClass('btn-group');
                    setTimeout(function () {
                    $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex mt-50');
                    }, 50);
                }
                },
                {
                text: 'Add New Employee',
                className: 'add-new btn btn-primary',
                attr: {
                    'herf' :'/',
                    // 'data-bs-toggle': 'modal',
                    // 'data-bs-target': '#modals-slide-in'
                },
                init: function (api, node, config) {
                    $(node).removeClass('btn-secondary');
                }
                }
            ],
            // For responsive popup
            responsive: {
                details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                    var data = row.data();
                    return 'Details of ' + data['name'];
                    }
                }),
                type: 'column',
                renderer: function (api, rowIdx, columns) {
                    var data = $.map(columns, function (col, i) {
                    return col.columnIndex !== 6 // ? Do not show row in modal popup if title is blank (for check box)
                        ? '<tr data-dt-row="' +
                            col.rowIdx +
                            '" data-dt-column="' +
                            col.columnIndex +
                            '">' +
                            '<td>' +
                            col.title +
                            ':' +
                            '</td> ' +
                            '<td>' +
                            col.data +
                            '</td>' +
                            '</tr>'
                        : '';
                    }).join('');
                    return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
                }
                }
            },
            language: {
                paginate: {
                // remove previous & next text from pagination
                previous: '&nbsp;',
                next: '&nbsp;'
                }
            },
            initComplete: function () {
                // Adding role filter once table initialized
                this.api()
                .columns(4)
                .every(function () {
                    var column = this;
                    var label = $('<label class="form-label" for="UserRole">Area</label>').appendTo('.user_role');
                    var select = $(
                    '<select id="UserRole" class="form-select select2  text-capitalize mb-md-0 mb-2"><option value=""> Select Area </option></select>'
                    )
                    .appendTo('.user_role')
                    .on('change', function (e) {
                        var val = $.fn.dataTable.util.escapeRegex(this.options[this.selectedIndex].text);
                        column.search(val ? '^' + val + '$' : '', true, false).draw();
                    });

                    column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        // console.log(d);
                        var areaArray= new Array();
                        d.forEach(element => {
                            areaArray.push(element.area_name.name)
                        });
                        select.append('<option value="' + areaArray + '" class="text-capitalize">' + areaArray + '</option>');
                    });
                });

                // Adding plan filter once table initialized
                this.api()
                .columns(2)
                .every(function () {
                    var column = this;
                    var label = $('<label class="form-label" for="UserPlan">Mobile</label>').appendTo('.user_plan');
                    var select = $(
                    '<select id="UserPlan" class="form-select text-capitalize mb-md-0 mb-2"><option value=""> Select Mobile </option></select>'
                    )
                    .appendTo('.user_plan')
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex($(this).val());
                        column.search(val ? '^' + val + '$' : '', true, false).draw();
                    });
                    column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                    });
                });

                // Adding status filter once table initialized
                this.api()
                .columns(5)
                .every(function () {
                    var column = this;

                    var label = $('<label class="form-label" for="FilterTransaction">Status</label>').appendTo('.user_status');
                    var select = $(
                    '<select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx"><option value=""> Select Status </option></select>'
                    )
                    .appendTo('.user_status')
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex($(this).val());

                        if (val == true) {
                           var $statusValue = 'Active';
                        }else{
                            var $statusValue = 'Deactive';
                        }
                        column.search(val ? '^' + $statusValue  + '$' : '', true, false).draw();
                    });

                    column
                    .data()
                    .unique()
                    .sort()
                    .each(function (d, j) {
                        // console.log(j, d);
                        if (j == true) {
                            var $statusValue = 'Active';
                            d = 1;
                        }else{
                            var $statusValue = 'Deactive';
                            d = 0;
                        }
                        select.append('<option value="' + d + '" class="text-capitalize">' +  $statusValue + '</option>');
                    });
                });
            }
            });
        }
    });

</script>
<script>


    $(document).on('click', '.add-new', function(){
        window.location = "{{ route('backend.employee.create') }}";
    })

</script>

@endpush
