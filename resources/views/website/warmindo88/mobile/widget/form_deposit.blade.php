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
        <form id="formDeposit" method="POST" action="{{ route('apps_m.widget.deposit_save') }}"
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
                                                    <option value="{{ $val->id }}">
                                                        {{ $val->bank_name }} -
                                                        {{ $val->no_rekening }}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="Bank Lain">
                                            </optgroup>
                                        </select>
                                        <div class="input-group-append">
                                            <a href="#" data-toggle="modal"
                                                data-target="#bankDetail"
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
                                            <option value="{{ $val->id }}">
                                                {{ $val->bank_name }} -
                                                {{ $val->nama_rekening_bank_account_pemilik }} -
                                                {{ $val->no_rekening_bank_account_pemilik }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <span id="bankSelect-error"></span>
                                </div>
                            </div>
                        </div>

                        {{-- @include('mahacuan.DoLogin.tambah_dana.bankOption') --}}

                        <div class="form-group walletDest" hidden=""
                            style="display: block;">
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
                                            <option value="{{ $val->id }}">
                                                {{ $val->bonus_name }}</option>
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
                                            <input name="amount" id="depositAmount"
                                                type="number" placeholder="..." min="20"
                                                max="100000" required>
                                        </div>
                                        <span class="m-auto">
                                            <i class="fas fa-equals	"></i>
                                        </span>
                                        <div class="col-lg-6">
                                            <input class="bg-white" id="depositAmountText"
                                                data-currency="IDR" placeholder="IDR"
                                                autocomplete="false" disabled="">
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
                                        <span id="chooseModeText"
                                            class="input-group-text dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">SN</span>
                                        <div class="dropdown-menu">
                                            <span id="chooseModeSN" class="dropdown-item">Serial
                                                Number</span>
                                            <span id="chooseModeHP" class="dropdown-item">Nomor
                                                Pengirim</span>
                                        </div>
                                    </div>
                                    <input id="notes" class="form-control" name="notes"
                                        maxlength="100" type="text" placeholder="Keterangan">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <input type="hidden" name="phoneCreditMode">
                                <label style="font-size: 10px;" class="formulir-desc">Maksimal 100
                                    Karakter</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center">
                                    <label>Bukti Pembayaran</label>
                                </div>
                                <div class="col-lg-5">
                                    <input class="@error('img_bukti_payment') is-invalid @enderror"
                                        id="proof" name="img_bukti_payment" type="file"
                                        required>
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
                                <a href="javascript:;" onclick="downloadQr()" id="qrDownload"
                                    name="qrDownload" class="btn-custom">Download QR</a>
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

        @include('website.warmindo88.mobile.widget.modal_tambahBank')

        <div class="modal custom-popup fade" id="bankDetail" tabindex="-1"
            aria-labelledby="bankDetailLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <div class="popup-bank-detail">
                            <div class="bank-detail-header">
                                <h4>Rekening Saya</h4>
                            </div>
                            <div class="bank-detail-info">
                                <h6 class="info-header">Rekening Utama</h6>
                                <div class="bank-account">
                                    <div class="acc-details">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="acc-name">Nama Rek.:
                                                    <span>marina</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bank-name">Nama Bank:
                                                    <span>dana</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="acc-number">Nomor Rek.:
                                                    <span>081257548240</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bank-detail-info">
                                <h6 class="info-header">Rekening Lainnya</h6>
                                <div id="otherBank"></div>
                            </div>
                            <form id="addOptBankForm" novalidate="novalidate">
                                <input type="hidden" name="newData" value="true">
                                <div class="add-bank-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title">Nama Rek.</div>
                                                <input name="optAccountName"
                                                    class="form-control-sm" type="text"
                                                    value="marina" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title">Pilih Bank</div>
                                                <select class="form-control form-control-sm"
                                                    name="chooseOptionalBank"
                                                    id="chooseOptionalBank">
                                                    <option value="">--- Pilih Bank ---
                                                    </option>
                                                    <optgroup label="bank">
                                                        <option value="bca" data-id="10487"
                                                            data-max="10" data-min="10">
                                                            BCA
                                                        </option>
                                                        <option value="mandiri" data-id="10566"
                                                            data-max="13" data-min="13">
                                                            MANDIRI
                                                        </option>
                                                        <option value="bri" data-id="10565"
                                                            data-max="15" data-min="15">
                                                            BRI
                                                        </option>
                                                        <option value="bni" data-id="10567"
                                                            data-max="10" data-min="10">
                                                            BNI
                                                        </option>
                                                        <option value="cimb" data-id="10568"
                                                            data-max="13" data-min="12">
                                                            CIMB
                                                        </option>
                                                        <option value="bnc" data-id="16584"
                                                            data-max="0" data-min="0">
                                                            BANK NEO COMMERCE
                                                        </option>
                                                        <option value="jago" data-id="16585"
                                                            data-max="0" data-min="0">
                                                            BANK JAGO
                                                        </option>
                                                        <option value="bsi" data-id="16586"
                                                            data-max="0" data-min="0">
                                                            BSI
                                                        </option>
                                                        <option value="jatim" data-id="16587"
                                                            data-max="0" data-min="0">
                                                            BANK JATIM
                                                        </option>
                                                        <option value="bjb" data-id="16304"
                                                            data-max="0" data-min="0">
                                                            BANK BJB
                                                        </option>
                                                        <option value="ocbc" data-id="16588"
                                                            data-max="12" data-min="12">
                                                            OCBC
                                                        </option>
                                                        <option value="permata" data-id="16589"
                                                            data-max="0" data-min="0">
                                                            PERMATA
                                                        </option>
                                                        <option value="btn" data-id="16590"
                                                            data-max="0" data-min="0">
                                                            BTN
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="epayment">
                                                        <option value="ovo" data-id="10580"
                                                            data-max="0" data-min="0">
                                                            OVO
                                                        </option>
                                                        <option value="gopay" data-id="10581"
                                                            data-max="0" data-min="0">
                                                            GOPAY
                                                        </option>
                                                        <option value="linkaja" data-id="10582"
                                                            data-max="0" data-min="0">
                                                            LINKAJA
                                                        </option>
                                                        <option value="dana" data-id="10583"
                                                            data-max="0" data-min="0">
                                                            DANA
                                                        </option>
                                                    </optgroup>
                                                </select>
                                                <span id="chooseOptionalBank-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title" id="labelAccNumb">Nomor
                                                    Rek.</div>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend"
                                                        id="phoneInputPrepend">
                                                        <span class="input-group-text">+62</span>
                                                    </div>
                                                    <input class="form-control" type="text"
                                                        name="optAccountNumber"
                                                        id="optAccountNumber" minlength="8"
                                                        maxlength="20" autocomplete="off">
                                                </div>
                                                <span id="optAccountNumber-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bank-button" id="bankButton">
                                    <a class="btn-custom-sm cancel add-bank">Tambah Rek.</a>
                                    <button id="submitBank" class="btn-custom-sm"
                                        style="display: none;">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
