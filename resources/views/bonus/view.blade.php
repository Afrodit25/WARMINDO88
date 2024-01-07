@extends('layouts.main')

@section('title', 'Data Bonus')

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
                        <h3 class="page-title">Bonus</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Administration</a></li>
                            <li class="breadcrumb-item active">Bonus</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#add_bonus"><i
                                class="fa fa-plus"></i> Add Bonus</a>
                    </div>

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
                                    <th>Name</th>
                                    <th>Remarks</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
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


        <!-- Add Bonus Modal -->
        @include('bonus.modal_add')
        <!-- /Add Bonus Modal -->

        <!-- Edit Bonus Modal -->
        @include('bonus.modal_edit')
        <!-- /Edit Bonus Modal -->


    </div>
    <!-- /Page Wrapper -->


@endsection



@section('under_body')
    <script type="text/javascript">
        $(function() {

            table = $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: "{{ url('/Bonus/json') }}",
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
                        data: 'bonus_name',
                        name: 'bonus_name'
                    },
                    {
                        data: 'remarks_bonus',
                        name: 'remarks_bonus'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
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

        function deleteData(url) {
            if (confirm('Yakin ingin menghapus data terpilih?')) {
                $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        table.ajax.reload();
                        Swal.fire(
                            'has been successfully',
                            'deleted data from the website!',
                            'success'
                        )
                    })
                    .fail((errors) => {
                        alert('Tidak dapat menghapus data');
                        return;
                    });
            }
        }
    </script>

@endsection
