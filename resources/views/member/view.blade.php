@extends('layouts.main')

@section('title', 'Data Member')

@section('content')

    <style>
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            flex: 1 0 100%;
        }
    </style>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Member</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Administration</a></li>
                            <li class="breadcrumb-item active">Member</li>
                        </ul>
                    </div>

                    {{-- <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn btn-success btn-rounded" data-toggle="modal" data-target="#add_user"><i
                                class="fa fa-plus"></i> Add User</a>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger btn-rounded dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Import User</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#import_user">Import</a>
                                <a class="dropdown-item" href="#">Template Import User</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary btn-rounded dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export User</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('user.export') }}">Export</a>
                                <a class="dropdown-item" href="#">Template Export User</a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="username_filter">
                        <label class="focus-label">Username</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating" id="fullname_filter">
                        <label class="focus-label">Full Name</label>
                    </div>
                </div>
                {{-- <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Select Company</option>
                            <option>Global Technologies</option>
                            <option>Delta Infotech</option>
                        </select>
                        <label class="focus-label">Company</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Select Roll</option>
                            <option>Web Developer</option>
                            <option>Web Designer</option>
                            <option>Android Developer</option>
                            <option>Ios Developer</option>
                        </select>
                        <label class="focus-label">Role</label>
                    </div>
                </div> --}}
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block" id="btnFilter"> Search </a>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session()->has('failures'))
                        <div class="alert alert-danger" role="alert">
                            Email (
                            @foreach (session()->get('failures') as $validasi)
                                {{ $validasi->values()[$validasi->attribute()] . ',' }}
                            @endforeach
                            ) is Duplicate
                        </div>
                    @endif

                    @if (isset($errors) && $errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif


                    <div class="table-responsive">
                        <table id="datatables" class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Saldo</th>
                                    <th>Website Ref</th>
                                    <th>Kode Refferal</th>
                                    <th>Remarks</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    {{-- <th>User ID</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->


        <!-- Add USER Modal -->
        {{-- @include('user.modal_add') --}}
        <!-- /Add USER Modal -->

        <!-- Edit Member Modal -->
        @include('member.modal_EditMember')
        <!-- /Edit Member Modal -->

        <!-- Change Password Modal -->
        @include('member.modal_ChangePassword')
        <!-- /Change Password Modal -->

        <!-- Edit Saldo Modal -->
        @include('member.modal_Editsaldo')
        <!-- /Edit Saldo Modal -->


    </div>
    <!-- /Page Wrapper -->


@endsection



@section('under_body')
    <script type="text/javascript">
        $(function() {
            // $(document).ready(function () {


            var table = $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: {
                    url: "{{ route('Members') }}",
                    // type: "POST",
                    data: function(d) {
                        d.username_filter = $('#username_filter').val(),
                        d.fullname_filter = $('#fullname_filter').val()
                    }
                },
                columns: [{
                        data: 'action',
                        name: 'action',
                        searchable: false,
                        sortable: false
                    },
                    {
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    {
                        data: 'username_member',
                        name: 'username_member'
                    },
                    {
                        data: 'full_name_member',
                        name: 'full_name_member'
                    },
                    {
                        data: 'email_member',
                        name: 'email_member'
                    },
                    {
                        data: 'tlp_member',
                        name: 'tlp_member'
                    },
                    {
                        data: 'saldo_deposit',
                        name: 'saldo_deposit'
                    },
                    {
                        data: 'website_ref',
                        name: 'website_ref'
                    },
                    {
                        data: 'kode_refferal',
                        name: 'kode_refferal'
                    },
                    {
                        data: 'remarks_member',
                        name: 'remarks_member'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    // {
                    //     data: 'user_id',
                    //     name: 'user_id'
                    // },
                ],
                dom: 'Bfrtip',
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10 rows', '25 rows', '50 rows', 'Show all']
                ],
                buttons: [
                    'pageLength',
                    {
                        "extend": "colvis",
                        "text": "Show/Hide Columns"
                    },
                    'copy', 'csv',
                    {
                        extend: "excel",
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    'print'
                ],
            });


            $('#btnFilter').on('click', function() {
                table.ajax.reload();
            });

        });
    </script>

@endsection
