<div class="transaksi-table-bottom">
    <div class="bottom-form">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4">
                <div class="form-title">Riwayat Deposit</div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <div class="form-check">
                        {{-- <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="historyType" value="deposit"
                                checked="">Deposit
                        </label> --}}
                    </div>
                    <div class="form-check">
                        {{-- <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="historyType"
                                value="adjustment">Adjustment
                        </label> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    {{-- <label for="depositRange">Pilih Tanggal</label>
                    <input class="form-control" type="text" id="depositRange" name="depositRange" readonly="readonly"> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid table-dataTable">
        <table class="table table-hover table-bordered" id="depositHistoryTable">
            <thead>
                <tr>
                    <th scope="col" style="width: 20px;" class="text-left">No.</th>
                    <th scope="col" class="text-left">Tanggal</th>
                    <th scope="col" class="text-left w-25">Nominal</th>
                    <th scope="col" class="text-center">Status</th>
                </tr>
            </thead>
            <tbody id="depositHistoryTableBody"></tbody>
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


        var table = $('#depositHistoryTable').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                url: "{{ route('apps_m.widget.deposit_json') }}",
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
                    data: 'tanggal',
                    name: 'tanggal'
                },
                {
                    data: 'nominal_deposit',
                    name: 'nominal_deposit'
                },
                {
                    data: 'status_deposit',
                    name: 'status_deposit'
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
