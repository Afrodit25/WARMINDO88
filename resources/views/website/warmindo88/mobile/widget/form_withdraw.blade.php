<div class="transaksi-grid">
    <div class="transaksi-payment">
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/bca.webp"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">BCA</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 100000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/bank/bri.png"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">BRI</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 100000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/qris.webp"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">QRIS</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 10000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/ovo.webp"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">OVO</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 10000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/gopay_color.webp"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">GOPAY</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 10000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
        <div class="payment-item">
            <div class="payment-status online">ONLINE</div>
            <div class="payment-body">
                <div class="payment-icon">
                    <img src="https://statis-images.s3.ap-southeast-1.amazonaws.com/global/payment/V2/IDR/epayment/dana.webp"
                        alt="">
                </div>
                <div class="payment-content">
                    <div class="title">DANA</div>
                    <div class="desc"></div>
                    <div class="desc">Deposit Min = 20, Max = 10000</div>
                    <div class="desc"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="transaksi-form">
        <form id="formWithdraw" action="{{ route('apps_m.widget.withdraw_save') }}" method="POST" novalidate="novalidate">
            @csrf
            <div class="transaksi-formulir">
                <div class="formulir-title">Formulir Penarikan</div>
                <div class="formulir-form">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center">
                                <label>Nama Bank</label>
                            </div>
                            <div class="col-lg-5">
                                <select name="bankDestination" id="memberBankSelect"
                                    style="font-size: 12px; border-top-left-radius:3px; border-bottom-left-radius:3px; padding: 6px; font-weight: 600;" required>
                                    <optgroup label="Bank Utama">
                                        @foreach ($bankUtama as $val)
                                            <option value="{{ $val->id }}">{{ $val->bank_name }} -
                                                {{ $val->no_rekening }}</option>
                                        @endforeach
                                    </optgroup>
                                    <optgroup label="Bank Lain">
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" hidden="">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center">
                                <label>Dompet Asal</label>
                            </div>
                            <div class="col-lg-5 d-flex">
                                <select class="m-auto" name="walletOrigin" id="walletSelectWithdraw">
                                    <option value="main">Dompet Utama</option>
                                    <option value="poker">Dompet Poker</option>
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <label class="formulir-desc">Saldo yang dapat anda tarik :
                                </label>
                                <div class="balance-wd">IDR: <span id="mainDesc" class="originDesc">0.00</span><span
                                        id="pokerDesc" class="originDesc" style="display: none;">0.00</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-3 d-flex align-items-center">
                                <label>Nominal</label>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <input class="form-control money" type="number" min="50"
                                            max="100000" name="amount_withdraw" id="withdrawAmount" placeholder="..." required>
                                    </div>
                                    <span class="m-auto">
                                        <i class="fas fa-equals	"></i>
                                    </span>
                                    <div class="col-lg-6">
                                        <input class="bg-white" id="withdrawAmountText" data-currency="IDR"
                                            placeholder="IDR" autocomplete="false" disabled="">
                                    </div>
                                </div>
                                <span id="withdrawAmount-error"></span>
                            </div>
                            <div class="col-lg-4">
                                <label class="formulir-desc">Jumlah Penarikan ( 50 = Rp50.000
                                    )</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        {{-- <button type="submit" class="btn-custom" id="submit-withdraw">Kirim</button> --}}
                        <button type="submit" class="btn-custom get-btn">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="transaksi-info">
    <div class="info-header">Informasi</div>
    <div class="info-content">

    </div>
</div>
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
