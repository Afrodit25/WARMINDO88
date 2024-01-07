@extends('layouts.main')

@section('title', 'Data Karyawan')

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
                        <h3 class="page-title">Karyawan</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Administration</a></li>
                            <li class="breadcrumb-item active">Karyawan</li>
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
            {{-- <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="text" class="form-control floating">
                    <label class="focus-label">Name</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
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
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div> --}}
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
                                    <th>Jabatan</th>
                                    <th>Kode Refferal</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Remarks</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>User ID</th>
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

        <!-- Edit USER Modal -->
        {{-- @include('user.modal_edit') --}}
        <!-- /Edit USER Modal -->

        <!-- Change Password Modal -->
        {{-- @include('user.change_password') --}}
        <!-- /Change Password Modal -->


    </div>
    <!-- /Page Wrapper -->


@endsection



@section('under_body')
    <script type="text/javascript">
        $(function() {
            // $(document).ready(function () {


            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: "{{ url('/Karyawan/json') }}",
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
                        data: 'username_kary',
                        name: 'username_kary'
                    },
                    {
                        data: 'full_name_kary',
                        name: 'full_name_kary'
                    },
                    {
                        data: 'email_kary',
                        name: 'email_kary'
                    },
                    {
                        data: 'jabatan_kary',
                        name: 'jabatan_kary'
                    },
                    {
                        data: 'kode_refferal',
                        name: 'kode_refferal'
                    },
                    {
                        data: 'tlp_kary',
                        name: 'tlp_kary'
                    },
                    {
                        data: 'alamat_kary',
                        name: 'alamat_kary'
                    },
                    {
                        data: 'remarks_kary',
                        name: 'remarks_kary'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
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


        });
    </script>

@endsection
