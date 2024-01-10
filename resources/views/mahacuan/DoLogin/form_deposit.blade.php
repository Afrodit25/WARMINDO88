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
        <form id="formDeposit" method="POST" action="{{ route('apps.deposit_save') }}"
            enctype="multipart/form-data" data-parsley-validate>
            @csrf
            <div class="transaksi-formulir flip-card">
                <div class="flip-front">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="formulir-title"><i class="fas fa-wallet"></i> | Formulir
                        Deposit</div>
                    <div class="formulir-form">
                        <div class="row mb-3">
                            <div class="col-lg-12 d-flex flex-row">
                                <label class="note_addbank">Selalu pastikan rekening pengirim
                                    atau rekening tujuan sesuai dengan data yang
                                    terdaftar.</label>
                            </div>
                        </div>
                        <div class="mb-3" id="bank-lain">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Pilih Bank Anda</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <select name="bankMember" id="memberBankSelect"
                                            style="font-size: 12px; border-top-left-radius:3px; border-bottom-left-radius:3px; padding: 6px; font-weight: 600;">
                                            <optgroup label="Bank Utama">
                                                @foreach ($bankUtama as $val)
                                                    <option value="{{ $val->id }}">{{ $val->bank_name }} -
                                                        {{ $val->no_rekening }}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Bank Lain">
                                            </optgroup>
                                        </select>
                                        <div class="input-group-append">
                                            <a href="#" data-toggle="modal" data-target="#bankDetail"
                                                class="btn btn-sm btn-secondary ml-0">
                                                <i class="fa fa-plus mr-1"></i>
                                                Tambah Bank
                                            </a>
                                        </div>
                                    </div>
                                    <span id="memberBankSelect-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Pilih Bank Tujuan</label>
                                </div>
                                <div class="col-lg-6">
                                    <select name="bankOwner" id="bankSelect" required>
                                        <option value="">--- Pilih Bank ---</option>
                                        @foreach ($bankOwner as $val)
                                                    <option value="{{ $val->id }}">{{ $val->bank_name }} -
                                                        {{ $val->nama_rekening_bank_account_pemilik }} - {{ $val->no_rekening_bank_account_pemilik }}</option>
                                        @endforeach
                                    </select>
                                    <span id="bankSelect-error"></span>
                                </div>
                            </div>
                        </div>

                        {{-- @include('mahacuan.DoLogin.tambah_dana.bankOption') --}}

                        <div class="form-group walletDest" hidden="" style="display: block;">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Dompet Tujuan</label>
                                </div>
                                <div class="col-lg-6">
                                    <select name="walletDestination" id="walletSelectDeposit">
                                        <option value="main">Dompet Utama</option>
                                        <option value="poker">Dompet Poker</option>
                                    </select>
                                </div>
                            </div>
                            <span id="walletSelectDeposit-error"></span>
                        </div>
                        <br>
                        <div class="form-group mb-0">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Bonus</label>
                                </div>
                                <div class="col-lg-6">
                                    <select name="bonus_id" id="bonus_id">
                                        {{-- <option value="">--- Pilih Bonus ---</option> --}}
                                        @foreach ($bonus as $val)
                                                    <option value="{{ $val->id }}">{{ $val->bonus_name }}</option>
                                                @endforeach
                                    </select>
                                    <span id="bankSelect-error"></span>
                                </div>
                            </div>
                        </div><br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Jumlah Deposit</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <input name="amount" id="depositAmount" type="number"
                                                placeholder="..." min="20" max="100000" required>
                                        </div>
                                        <span class="m-auto">
                                            <i class="fas fa-equals	"></i>
                                        </span>
                                        <div class="col-lg-6">
                                            <input class="bg-white" id="depositAmountText" data-currency="IDR"
                                                placeholder="IDR" autocomplete="false" disabled="">
                                        </div>
                                    </div>
                                    <span id="depositAmount-error"></span>
                                </div>
                                <div class="col-lg-3">
                                    <label id="amountDesc" class="formulir-desc">Contoh:
                                        setoran deposit 50.000, tulis Rp 50 ( 3 digit
                                        dihilangkan )</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 d-flex align-items-center">
                                <label style="font-size: 14px;" id="notesLabel">Keterangan</label>
                            </div>
                            <div class="col-lg-6">
                                <div id="chooseMode" class="">
                                    <div class="input-group-prepend" style="display: none;">
                                        <span id="chooseModeText" class="input-group-text dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">SN</span>
                                        <div class="dropdown-menu">
                                            <span id="chooseModeSN" class="dropdown-item">Serial Number</span>
                                            <span id="chooseModeHP" class="dropdown-item">Nomor Pengirim</span>
                                        </div>
                                    </div>
                                    <input id="notes" class="form-control" name="notes" maxlength="100"
                                        type="text" placeholder="Keterangan">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <input type="hidden" name="phoneCreditMode">
                                <label style="font-size: 10px;" class="formulir-desc">Maksimal 100 Karakter</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Bukti Pembayaran</label>
                                </div>
                                <div class="col-lg-5">
                                    <input class="@error('img_bukti_payment') is-invalid @enderror" id="proof" name="img_bukti_payment" type="file" required>
                                </div>
                                <div class="col-lg-4">
                                    <label class="formulir-desc">Hanya format *.jpg, *.jpeg,
                                        dan *.png yang diperbolehkan, maksimal 1 MB</label>
                                </div>
                            </div>
                            @error('img_bukti_payment')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button name="deposit" type="submit"
                                        class="btn-custom full_width">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-back">
                    <div class="formulir-title text-center">PAY QRIS</div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="scan-amount">
                                <label>Top Up Amount: </label>
                                <label id="amountPaydia" class="float-right"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 align-items-center">
                            <div class="scan-img text-center">
                                <label class="d-block">Scan Me</label>
                                <div id="qrCode" class="rounded bg-white p-3"></div>
                            </div>
                            <div class="download-qr-button text-center">
                                <a href="javascript:;" onclick="downloadQr()" id="qrDownload" name="qrDownload"
                                    class="btn-custom">Download QR</a>
                            </div>
                        </div>
                        <div class="col-lg-6 align-items-center">
                            <div class="scan-img text-center">
                                <label class="d-block">Pay With</label>
                                <img class="img-fluid rounded"
                                    src="https://mahacuan.live/themes/1/img/bank-client/bank-client-square.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        @include('mahacuan.DoLogin.tambah_dana.modal_tambahBank')

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

{{-- @include('mahacuan.DoLogin.modal_tambahBank') --}}


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
                url: "{{ route('apps.json_tambahDana') }}",
                // type: "POST",
                // data: function(d) {
                //     d.from_date = picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                //     d.to_date = picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                //     return d
                // }
            },
            columns: [
                {
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


        $("#depositRange").on('apply.daterangepicker', function(ev, picker) {
            const payloads = {
                // _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU",
                startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                // historyType: $("input[name=historyType]:checked").val(),
            }
            $.ajax({
                type: "POST",
                url: "{{ route('apps.json_tambahDana') }}",
                data: payloads,
                success: function(response) {
                    $('#depositHistoryTable').DataTable().clear().destroy()
                    // tableDepoWdHistory($('#depositHistoryTable'), response.data);
                    table.draw();
                    var date = picker.startDate.format('YYYY-MM-DD') + ' 00:00:00'
                    console.log(date);
                }
            });

        });

    });
</script>
