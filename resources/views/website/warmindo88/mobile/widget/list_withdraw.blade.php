<div class="transaksi-table-bottom">
    <div class="bottom-form">
        <div class="row d-flex align-items-center">
            <div class="col-lg-8">
                <div class="form-title">Riwayat Withdraw</div>
            </div>
            {{-- <div class="col-lg-4">
                <div class="form-group">
                    <label>Pilih Tanggal</label>
                    <input type="text" id="withdrawRange" readonly="readonly">
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container-fluid table-dataTable">
        <table class="table table-hover table-bordered" id="withdrawHistoryTable">
            <thead>
                <tr>
                    <th scope="col" class="text-left">No.</th>
                    <th scope="col" class="text-left">Tanggal</th>
                    <th scope="col" class="text-left">Nominal</th>
                    <th scope="col" class="text-center">Status</th>
                    {{-- <th scope="col" class="text-center">Action</th> --}}
                </tr>
            </thead>
            <tbody id="withdrawHistoryTableBody"></tbody>
        </table>
    </div>
</div>


<script type="text/javascript">
    $(function() {

        // GLOBAL SETUP
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('#withdrawHistoryTable').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: "{{ route('apps_m.widget.withdraw_json') }}",
                type: "POST",
                // data: function(d) {
                //     d.from_date = picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                //     d.to_date = picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                //     return d
                // }
            },
            columns: [{
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'nominal_withdraw',
                    name: 'nominal_withdraw'
                },
                {
                    data: 'status_withdraw',
                    name: 'status_withdraw'
                },
                // { data: 'action', name: 'action', orderable: false, searchable: false },
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

        $('#nav-withdraw-tab').on('click', function(e) {
            location.reload();
        });

        $('#nav-deposit-tab').on('click', function(e) {
            location.reload();
        });

    });
</script>
