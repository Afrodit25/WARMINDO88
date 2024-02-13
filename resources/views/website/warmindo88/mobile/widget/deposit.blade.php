@extends('website.warmindo88.mobile.widget.layout.main')

@section('title', 'Deposit')

@section('content_mobile')

    <main id="main-route">
        <div class="main-content transaksi">
            <div class="container">
                <ul class="component-tabs nav nav-tabs" id="transactionTabs">
                    <li class="nav-item">
                        <a class="button-pills nav-link active" id="nav-deposit-tab" data-toggle="tab" href="#nav-deposit"
                            role="tab" aria-controls="nav-deposit" aria-expanded="false">
                            <img src="https://mahacuan.support/themes/1/img/navigation/deposit1.svg" width="40"
                                height="40">
                            <span>Tambah Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-withdraw-tab" data-toggle="tab" href="#nav-withdraw"
                            role="tab" aria-controls="nav-withdraw" aria-expanded="false">
                            <img src="https://mahacuan.support/themes/1/img/navigation/cashback.svg" width="40"
                                height="40">
                            <i class="fas fa-coins"></i>
                            <span>Tarik Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-claim-tab" data-toggle="tab" href="#nav-claim"
                            role="tab" aria-controls="nav-claim" aria-expanded="false">
                            <img src="https://mahacuan.support/themes/1/img/navigation/claim-bonus.svg" width="40"
                                height="40">
                            <span>Klaim Promo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-cashback-tab" data-toggle="tab" href="#nav-cashback"
                            role="tab" aria-controls="nav-cashback" aria-expanded="false">
                            <img src="https://mahacuan.support/themes/1/img/navigation/cashback.svg" width="40"
                                height="40">
                            <span>Cashback</span>
                        </a>
                    </li>
                </ul>
                <div class="component-tab-content tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="nav-deposit" role="tabpanel"
                        aria-labelledby="nav-deposit-tab">
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
                                        <div class="form-title">Informasi</div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="historyType"
                                                        value="deposit" checked="">Deposit
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="historyType"
                                                        value="adjustment">Adjustment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="depositRange">Pilih Tanggal</label>
                                            <input class="form-control" type="text" id="depositRange"
                                                readonly="readonly">
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
                    </div>
                    <div class="tab-pane fade" id="nav-withdraw" role="tabpanel" aria-labelledby="nav-withdraw-tab">
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
                                <form id="formWithdraw" novalidate="novalidate">
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
                                                            style="font-size: 12px; border-top-left-radius:3px; border-bottom-left-radius:3px; padding: 6px; font-weight: 600;">
                                                            <optgroup label="Bank Utama">
                                                                <option value="utama" data-code="dana"
                                                                    data-accountnumber="081257548240">
                                                                    DANA - 081257548240
                                                                </option>
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
                                                        <select class="m-auto" name="walletOrigin"
                                                            id="walletSelectWithdraw">
                                                            <option value="main">Dompet Utama</option>
                                                            <option value="poker">Dompet Poker</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label class="formulir-desc">Saldo yang dapat anda tarik :
                                                        </label>
                                                        <div class="balance-wd">IDR: <span id="mainDesc"
                                                                class="originDesc">0.00</span><span id="pokerDesc"
                                                                class="originDesc" style="display: none;">0.00</span>
                                                        </div>
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
                                                                <input class="form-control money" type="number"
                                                                    min="50" max="100000" name="amount"
                                                                    id="withdrawAmount" placeholder="...">
                                                            </div>
                                                            <span class="m-auto">
                                                                <i class="fas fa-equals	"></i>
                                                            </span>
                                                            <div class="col-lg-6">
                                                                <input class="bg-white" id="withdrawAmountText"
                                                                    data-currency="IDR" placeholder="IDR"
                                                                    autocomplete="false" disabled="">
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
                                                <button type="submit" class="btn-custom"
                                                    id="submit-withdraw">Kirim</button>
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
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Pilih Tanggal</label>
                                            <input type="text" id="withdrawRange" readonly="readonly">
                                        </div>
                                    </div>
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
                                        </tr>
                                    </thead>
                                    <tbody id="withdrawHistoryTableBody"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-claim" role="tabpanel" aria-labelledby="nav-claim-tab">
                        <div class="transaksi-bonus" style="display: block;">
                            <div class="claim-bonus">
                                <div id="promoPage"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-cashback" role="tabpanel" aria-labelledby="nav-cashback-tab">
                        <div class="transaksi-bonus" style="display: block;">
                            <div id="cashbackPage">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('under_body_mobile')
    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.support/locale",
                data: {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                    locale: locale,
                },
                success: function(res) {
                    if (res) {
                        location.reload()
                    } else {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: "Locale not supported."
                        });
                    }
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(this).scrollTop(0);

            function getBalance() {
                $.post("https://mahacuan.support/transaction/checkBalance", {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o"
                }, (data) => {
                    let main = 0;
                    let prov = 0;
                    let mainWd = 0;
                    let pokerWd = 0;
                    $('span[name=provBalance]').text(prov.toFixed(2));
                    if ((data.success == true)) {
                        main += data.balance
                        window.mainBalance = data.commonWd
                        $.each(data.data, function(index, value) {
                            $('span[id=balance-' + index + ']').text(value.credit.toFixed(2));
                            if (value.lockedIn == true) {
                                $('#lockedIn' + index).show()
                                $('#lockedOut' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedOut == true) {
                                $('#lockedOut' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#locked' + index).hide()
                            }
                            if (value.lockedIn == true && value.lockedOut === true) {
                                $('#locked' + index).show()
                                $('#lockedIn' + index).hide()
                                $('#lockedOut' + index).hide()
                            }
                        });
                        mainWd += parseFloat(data.commonWd);
                        pokerWd += parseFloat(data.pokerWd);
                    }
                    $('span[id=balance-common-total]').text(data.common.toFixed(2));
                    $('span[id=balance-poker-total]').text(data.poker.toFixed(2));
                    $('span[name*=mainBalance]').text(main.toFixed(2));
                    $('span[id=mainDesc]').text(mainWd.toFixed(2));
                    $('span[id=pokerDesc]').text(pokerWd.toFixed(2));
                });
            }
            getBalance();
            $("a[name=refreshWallet]").on("click", function(e) {
                e.preventDefault();
                $('span[name*=mainBalance]').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                );
                getBalance();
            })

            $("#depositModal").on("click", function(e) {
                e.preventDefault()
                $('#nav-deposit-tab').click()
                $(".modal").modal('hide');
            })
            $("#withdrawModal").on("click", function(e) {
                e.preventDefault()
                $('#nav-withdraw-tab').click()
                $(".modal").modal('hide');
            })
            $("a[name=transactionSidebar]").on('click', function(e) {
                e.preventDefault();
                $('.tabs-sidebar').removeClass('active');
                $('#' + this.id + ' li').addClass('active');
            });
            $("#depositSidebar").on("click", function(e) {
                e.preventDefault()
                $('#nav-deposit-tab').click()
                $(".sidenav").removeClass('sidenav-open');
                $("#overlay").hide();
            })
            $("#claimSidebar").on("click", function(e) {
                e.preventDefault()
                $('#nav-claim-tab').click()
                $(".sidenav").removeClass('sidenav-open');
                $("#overlay").hide();
            })
            $("#withdrawSidebar").on("click", function(e) {
                e.preventDefault()
                $('#nav-withdraw-tab').click()
                $(".sidenav").removeClass('sidenav-open');
                $("#overlay").hide();
            })
            $("#cashbackSidebar").on("click", function(e) {
                e.preventDefault()
                $('#nav-cashback-tab').click()
                $(".sidenav").removeClass('sidenav-open');
                $("#overlay").hide();
            })
        });
        $('#mobilePageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function handler(e) {
            e.stopPropagation();
            e.preventDefault();
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            $(".sidenav").removeClass('sidenav-open');
            $(".modal").modal("hide");
            $("#overlay").hide();
            let url = "https://mahacuan.support" + window.location.pathname;
            if (path == '/') {
                window.location.replace("https://mahacuan.support")
                return false;
            }
            $(".header-form>a").removeClass('active')
            let elem = document.getElementById("mobilePageLoadingBar");
            let width = 1;
            $.ajax({
                type: "GET",
                url: url,
                beforeSend: () => {
                    $('#mobilePageLoadingBar').show()
                    document.addEventListener("click", handler, true);
                    let id = setInterval(frame, 100);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                        } else {
                            width++;
                            elem.style.width = width + '%';
                        }
                    }
                },
                success: function(page) {
                    document.removeEventListener("click", handler, true);
                    width = 100;
                    elem.style.width = width + '%';
                    $("main[id=main-route]").empty().append(page);
                    $("title").text($("#title-seo").text());
                    const script = $("scope-script").html()
                    $("scope-script").remove()
                    setTimeout(() => {
                        $("html, body").animate({
                            scrollTop: "0"
                        }, 1000);
                        $('#mobilePageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                    let checkPath = path.split('/')
                },
                error: function(e) {
                    window.location.replace("https://mahacuan.support")
                    return false;
                }
            });
        }
    </script>
    <script>
        let ele = document.getElementById('error-message');

        const html5QrcodeScanner = new Html5QrcodeScanner("reader", {
            fps: 10,
            qrbox: {
                width: 250
            },
            videoConstraints: {
                facingMode: {
                    exact: "environment"
                }
            },
        });

        function onScanSuccess(decodedText, decodedResult) {

            // Handle on success condition with the decoded text or result.
            document.getElementById("voucher_code").value = decodedText;
            ele.style.display = "none";

            alert(`Scan result: ${decodedText}`, decodedResult)
        }

        html5QrcodeScanner.render(onScanSuccess);

        $("button[id=submitVoucher]").on('click', (e) => {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: "https://mahacuan.support/transaction/claimVoucher",
                data: {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                    voucherCode: $("input[id=voucher_code]").val()
                },
                success: function(res) {
                    $("#voucherModal").modal('hide');
                    $("input[id=voucher_code]").val('');
                    Swal.fire({
                        icon: (res.success == true) ? 'success' : 'error',
                        html: res.message,
                        timerProgressBar: true,
                        showButtonConfirm: false,
                        timer: 3000
                    })
                }
            });
        });
    </script>
    <script>
        function maxInputAmount(wallet) {
            const amountWd = $("#withdrawAmount")
            const maxWd = parseFloat(amountWd.attr('max'))
            let walletAvail = parseFloat($(`#${wallet}Desc`).text())
            walletAvail = isNaN(walletAvail) ? 0 : walletAvail;
            if (walletAvail != 0) {
                if (walletAvail < maxWd) {
                    amountWd.attr('max', walletAvail)
                }
            }
        }

        window.showError = (title, message) => {
            return Swal.fire({
                icon: 'info',
                title: title,
                html: message,
                timerProgressBar: true,
                timer: 5000,
            });
        }

        $(".game-search>.form-control-sm").on("focus", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('100%');
                $(".form-control-sm").width('100%');
            }
        })

        $(".game-search>.form-control-sm").on("focusout", function() {
            if ($(this).val().length == 0) {
                $(".game-search").width('');
                $(".form-control-sm").width('');
            }
        })
    </script>





    <custom-script>
        <script>
            function pushStateUrlOnTabShow(elementId) {
                (history.pushState) ? history.pushState(null, null, `#${elementId}`): location.hash = `#${elementId}`;
            }

            $(".button-pills").on('click', function(e) {
                e.preventDefault();
                if (this.id == "nav-claim-tab") {
                    getPromo()
                }
                if (this.id == "nav-cashback-tab") {
                    getCashback()
                }
                pushStateUrlOnTabShow(this.id.split('-')[1]);
                $('.tabs-sidebar').removeClass('active');
                $('#' + this.id.split('-')[1] + 'Sidebar li').addClass('active');
            });

            if (location.hash == "#claim") {
                $('#nav-claim-tab').click()
                $('.tabs-sidebar').removeClass('active');
                $('#claimSidebar li').addClass('active');
            } else if (location.hash == "#withdraw") {
                $('#nav-withdraw-tab').click();
                $('.tabs-sidebar').removeClass('active');
                $('#withdrawSidebar li').addClass('active');
            } else if (location.hash == "#cashback") {
                $('#nav-cashback-tab').click();
                $('.tabs-sidebar').removeClass('active');
                $('#cashbackSidebar li').addClass('active');
            } else {
                (history.pushState) ? history.pushState(null, null, '#deposit'): location.hash = '#deposit';
                $('.tabs-sidebar').removeClass('active');
                $('#depositSidebar li').addClass('active');
            }

            function tableDepoWdHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'CreatedAt',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return new Date(data).toLocaleString('en-GB', {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                })
                            }
                        },
                        {
                            data: 'AmountProcessed',
                            render: $.fn.dataTable.render.number(',', '.', 0, '')
                        },
                        {
                            data: 'Status',
                            render: function(data, type, row, meta) {
                                return `
                    ${ (data === 0) ? '<div class="table-status pending">Pending</div>' : '' }
                    ${ (data === 1) ? '<div class="table-status approved">Approved</div>' : '' }
                    ${ (data === 2) ? '<div class="table-status rejected">Rejected</div>' : '' }
                    ${ (data === 3) ? '<div class="table-status pending">In Progress</div>' : '' }
                    ${ (data === 4) ? '<div class="table-status rejected">Cancelled</div>' : '' }
                `;
                            }
                        },
                    ],
                });
            }

            function tableAdjustmentHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'CreatedAt',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return new Date(data).toLocaleString('en-GB', {
                                    year: 'numeric',
                                    month: 'short',
                                    day: 'numeric',
                                    hour: 'numeric',
                                    minute: 'numeric',
                                    second: 'numeric'
                                })
                            }
                        },
                        {
                            data: 'AmountProcessed'
                        },
                        {
                            data: 'Status',
                            render: function(data, type, row, meta) {
                                return `
                    ${ (data === 0) ? '<div class="table-status pending">Pending</div>' : '' }
                    ${ (data === 1) ? '<div class="table-status approved">Approved</div>' : '' }
                    ${ (data === 2) ? '<div class="table-status rejected">Rejected</div>' : '' }
                    ${ (data === 3) ? '<div class="table-status pending">In Progress</div>' : '' }
                    ${ (data === 4) ? '<div class="table-status rejected">Cancelled</div>' : '' }
                `;
                            }
                        },
                    ],
                });
            }

            function tableCashbackHistory(tableId, dataSource) {
                tableId.DataTable({
                    processing: true,
                    searching: false,
                    responsive: false,
                    paging: true,
                    data: dataSource,
                    columns: [{
                            data: null,
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'end_date',
                            sortable: false,
                            render: function(data, type, row, meta) {
                                return row.start_date + ' - ' + row.end_date;
                            }
                        },
                        {
                            data: 'category'
                        },
                        {
                            data: 'winlose'
                        },
                        {
                            data: 'cashback'
                        },
                    ],
                });
            }

            $(".money").on('keyup change', function() {
                const id = this.id
                const val = $(`#${id}`).val();
                const currency = $(`#${id}Text`).data("currency");
                let result = 0;
                (currency == "IDR" || currency == "VND") ? result += val * 1000: result += val
                $(`#${id}Text`).val(`${currency}: ${result.toLocaleString()}`);
            });

            function allowedKey(event, regex) {
                let reg = new RegExp(regex);
                let k = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!reg.test(k)) {
                    event.preventDefault();
                    return false;
                }
            }

            $('input[name=claimAmount], #depositAmount, #withdrawAmount').bind('keypress', function(event) {
                return allowedKey(event, "^[0-9]+$")
            });

            function getPromo() {
                $.ajax({
                    type: "GET",
                    url: "https://mahacuan.support/transaction/getPromo",
                    beforeSend: () => {
                        $("#promoPage").empty()
                    },
                    success: function(data) {
                        setTimeout(() => {
                            $("#promoPage").empty().append(data);
                            (() => {
                                var swiper = new Swiper('.prog-game-swiper', {
                                    slidesPerView: 3,
                                    slidesPerColumn: 2,
                                    slidesPerColumnFill: 'row',
                                    direction: 'horizontal',
                                    spaceBetween: 10,
                                    observer: true,
                                    observeParents: true,
                                    pagination: {
                                        el: '.swiper-pagination',
                                        clickable: true,
                                    },
                                });
                            })()
                        }, 500);
                    }
                });
            }

            function getCashback() {
                $.ajax({
                    type: "GET",
                    url: "https://mahacuan.support/transaction/getCashback",
                    beforeSend: () => {
                        $("#cashbackPage").empty()
                    },
                    success: function(data) {
                        $("#cashbackPage").empty().append(data);
                        setTimeout(() => {
                            $("[name=registerCashback]").click(function(e) {
                                e.preventDefault();
                                Swal.fire({
                                    title: "Perhatian.",
                                    text: "Apakah anda yakin akan mengambil cashback ini?",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "OK",
                                    cancelButtonText: "Batal",
                                }).then((res) => {
                                    if (res.isConfirmed == true) {
                                        $.ajax({
                                            type: "POST",
                                            url: "https://mahacuan.support/transaction/registerCashback",
                                            data: {
                                                _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                                                uuid: $(this).data('item')
                                            },
                                            success: function(response) {
                                                if (response.success == true) {
                                                    Swal.fire({
                                                        icon: 'info',
                                                        title: "Berhasil.",
                                                        html: response
                                                            .msg,
                                                        timerProgressBar: true,
                                                        showButtonConfirm: false,
                                                        timer: 2000,
                                                    });
                                                } else {
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: "Perhatian.",
                                                        html: response
                                                            .msg,
                                                        timerProgressBar: true,
                                                        showButtonConfirm: false,
                                                        timer: 2000,
                                                    });
                                                }
                                                setTimeout(() => {
                                                    location.reload()
                                                }, 2000);
                                            }
                                        });
                                    }
                                })
                            });
                        });
                    }
                });
            }

            function viewCashbackWl() {
                let dateRange = JSON.parse($("select[name='cashbackRange']").val());
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/bonus/getCashbackTurnOver",
                    data: {
                        _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                        startDate: dateRange.startDate,
                        endDate: dateRange.endDate
                    },
                    success: function(response) {
                        $('#cashbackHistoryTable').DataTable().clear().destroy()
                        tableCashbackHistory($('#cashbackHistoryTable'), response);
                    }
                });
            }
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js">
        </script>
        <script>
            $(document).ready(function() {});

            function checkDepoStatus(trxId) {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/transaction/checkDepositStatus",
                    data: {
                        _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                        trxId: trxId
                    },
                    success: function(response) {
                        if (response.success) {
                            $.showPaydiaQr(null, false)
                            location.reload();
                        }
                    }
                });
            }

            function showBankDetail(val) {
                $(".walletDest").show()
                const cat = $('#bankSelect :selected').parent().attr('label');
                const selected = $('#bankSelect').find('option:selected');
                const min = selected.data('min')
                const max = selected.data('max')
                const rate = selected.data('rate')
                const code = selected.data('code')
                const currency = "IDR"
                $('input[id=depositAmount]').attr('min', min)
                $('input[id=depositAmount]').attr('max', max)
                $('.bankOption').hide();
                $('#' + cat + '-' + val).show();
                if (cat == "phonecredit") {
                    $("#depositAmount").attr("placeholder", "...")
                    $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
                    if (rate == 100) {
                        $(".walletDest").hide()
                        $("select[name=walletDestination]").val("main").trigger('change')
                    }
                    $('label[id=notesLabel]').html("Serial Number / <br/> Nomor pengirim")
                    $('[id=chooseMode]').addClass("input-group")
                    $('[id=chooseMode] > .input-group-prepend').show()
                    $("span[id=chooseModeText]").text("SN")
                    $("#notes").attr("placeholder", "Serial Number")
                    $("span[id=chooseModeSN]").on("click", function(e) {
                        $("span[id=chooseModeText]").text("SN")
                        $("input[name=phoneCreditMode]").val("")
                        $("#notes").attr("placeholder", "Serial Number")
                    })
                    $("span[id=chooseModeHP]").on("click", function(e) {
                        $("span[id=chooseModeText]").text("HP")
                        $("input[name=phoneCreditMode]").val("91dc2695-4dcd-4be2-90dd-e7d8387b3e35")
                        $("#notes").attr("placeholder", "Nomor pengirim")
                    })
                } else if (cat == "crypto") {
                    $("#amountDesc").text("Jumlah deposit Anda akan diproses sesuai dengan rate yang tertera")
                    $("#depositAmount").attr("placeholder", code.toUpperCase())
                } else {
                    $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
                    $("#depositAmount").attr("placeholder", "...")
                    $('label[id=notesLabel]').text("Keterangan")
                    $('[id=chooseMode]').removeClass("input-group")
                    $('[id=chooseMode] > .input-group-prepend').hide()
                    $("#notes").attr("placeholder", "Keterangan")
                }
            }

            $("#depositAmount").on('keyup change', function() {
                const selected = $('#bankSelect').find('option:selected');
                const rate = selected.data('rate')
                const code = selected.data('code')
                amountRealDeposit(code, rate)
            })

            function amountRealDeposit(code, rate) {
                const val = $(`#depositAmount`).val();
                const currency = $(`#depositAmountText`).data("currency");
                let result = 0;
                if ((currency == "IDR" || currency == "VND") && code != "usdt") {
                    result += val * 1000
                } else {
                    result += val * rate
                }
                $(`#depositAmountText`).val(`${currency.toUpperCase()}: ${result.toLocaleString()}`);
            }

            $('#bankSelect').change(function() {
                if ($(this).val() == "") {
                    $('.bankOption').hide()
                    $(".walletDest").hide()
                    return false
                }
                showBankDetail($(this).val());
            });

            function autoChangeBank() {
                let accNumb = $('#memberBankSelect').find('option:selected').data('accountnumber').toString().match(/.{1,4}/g)
                    .join(' ');
                let mbrBank = $('#memberBankSelect').find('option:selected').data('code').toLowerCase()
                let valSelected = $(`#bankSelect option[data-code="${mbrBank}"]`).val();
                (valSelected == "undefined") ? valSelected = "": valSelected = valSelected
                $('#bankSelect').val(valSelected).change()
            }
            autoChangeBank()
            $('#memberBankSelect').change(function() {
                autoChangeBank()
            });

            $("#depositRange").on('apply.daterangepicker', function(ev, picker) {
                const payloads = {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                    startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                    endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                    historyType: $("input[name=historyType]:checked").val(),
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/transaction/getDepositHistory",
                    data: payloads,
                    success: function(response) {
                        $('#depositHistoryTable').DataTable().clear().destroy()
                        tableDepoWdHistory($('#depositHistoryTable'), response.data);
                    }
                });
            });
            $('#proof').bind('change', function() {
                const imgSize = (this.files[0].size);
                if (imgSize > 1048576) {
                    Swal.fire("Perhatian.", "Ukuran gambar harus kurang dari 1Mb", 'error');
                    $(this).val("");
                }
            });

            $("form[id=formDeposit]").validate({
                onkeyup: false,
                rules: {
                    bank: {
                        required: true
                    },
                    amount: {
                        required: true
                    },
                    notes: {
                        maxlength: 100
                    }
                },
                messages: {
                    bank: {
                        required: "Bank wajib diisi."
                    },
                    amount: {
                        required: "Amount wajib diisi.",
                        min: "Deposit tidak boleh kurang dari minimal.",
                        max: "Deposit tidak boleh melebihi maximal."
                    },
                    notes: {
                        maxlength: "Notes maksimal berisi 32 karakter."
                    }
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                },
            });

            function serialNumberValidate() {
                const cat = $('#bankSelect :selected').parent().attr('label');
                if (cat == "phonecredit") {
                    if ($("input[name=notes]").val().length == 0) {
                        $("input[name=notes]").addClass("is-invalid")
                        return false;
                    } else {
                        $("input[name=notes]").addClass("is-valid")
                        return true
                    }
                }
            }

            $.showPaydiaQr = function(data, isPaydia = false) {
                if (data != null) {
                    $("#amountPaydia").text("Rp " + (data.amount * 1000))
                    $("#qrCode").qrcode(data.paydiaQr)
                }
                if (isPaydia) {
                    (() => {
                        $(".transaksi-formulir").addClass("active")
                        $(".flip-front").hide()
                        $(".flip-back").show()
                    })()
                    return true
                } else {
                    (() => {
                        $(".transaksi-formulir").removeClass("active")
                        $(".flip-front").show()
                        $(".flip-back").hide()
                    })()
                    return false
                }
            }

            function downloadQr() {
                let cnvs = document.querySelector("#qrCode canvas");
                let img = cnvs.toDataURL("image/png");
                let dl = document.createElement('a');
                dl.setAttribute('href', img);
                dl.setAttribute('download', 'qrcode.png');
                dl.click();
            }

            $("form[id=formDeposit]").on("submit", function(e) {
                e.preventDefault()
                if (serialNumberValidate() == false) {
                    return false
                }
                const files = $("input[name=proof]")[0].files;
                let formData = new FormData();
                if (files.length > 0) {
                    formData.append('proof', files[0]);
                }
                formData.append('_token', "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o");
                formData.append('bankMember', $("select[name=bankMember]").val());
                formData.append('bank', $("select[name=bank]").val());
                formData.append('walletDestination', $("select[name=walletDestination]").val());
                formData.append('amount', $("input[name=amount]").val());
                formData.append('phoneCreditMode', $("input[name=phoneCreditMode]").val());
                formData.append('notes', $("input[name=notes]").val());
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/transaction/deposit",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                        $("form[id=formDeposit]")[0].reset()
                        $('.bankOption').hide();
                        $(".walletDest").hide()
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'success',
                                title: "Berhasil.",
                                html: response.message,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            }).then(() => {
                                if (response.data.qrcode) {
                                    if (response.data.redirectUrl != null) {
                                        setTimeout(() => {
                                            window.open(response.data.redirectUrl);
                                            return false
                                        });
                                    } else {
                                        setTimeout(() => {
                                            return $.showPaydiaQr(response.data.rawQr, true)
                                        });
                                    }
                                } else {
                                    return false
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'warning',
                                title: "Perhatian.",
                                html: response.message,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000
                            })
                        }
                    },
                    error: (e) => {
                        $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                        $("form[id=formDeposit]")[0].reset()
                        $('.bankOption').hide();
                        $(".walletDest").hide()
                        let msg = '';
                        $.each(e.responseJSON.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            icon: 'error',
                            title: "Perhatian.",
                            html: (msg == '') ?
                                "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                                msg,
                            timerProgressBar: true,
                            showButtonConfirm: false,
                            timer: 2000
                        });
                        if (msg == '') {
                            location.reload();
                        }
                    }
                });
            });

            $("button[id=submitBank]").hide()
            $('.add-bank').click(function() {
                $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                $('input[name="newData"]').val("true")
                $("form[id=addOptBankForm]")[0].reset()
                $('.add-bank-form').slideToggle();
                const $this = $(this);
                $this.toggleClass('add-bank');
                if ($this.hasClass('add-bank')) {
                    $("button[id=submitBank]").hide()
                    $this.text("Tambah Rek.");
                } else {
                    $("button[id=submitBank]").show()
                    $this.text("Batal");
                }
            });

            $("form[id=addOptBankForm]").validate({
                onkeyup: false,
                rules: {
                    chooseOptionalBank: {
                        required: true
                    },
                    optAccountNumber: {
                        required: true,
                        validatePhone: true
                    },
                },
                messages: {
                    chooseOptionalBank: {
                        required: "Bank wajib diisi.",
                    },
                    optAccountNumber: {
                        required: "Account Number wajib diisi.",
                    }
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                }
            });

            $('form[id=addOptBankForm]').on('submit', function(e) {
                e.preventDefault()
                let endpoint = "https://mahacuan.support/profile/optionalBankCreate";
                if ($('input[name="newData"]').val() != "true") {
                    endpoint = "https://mahacuan.support/profile/optionalBankCreate/" + $('input[name="newData"]')
                        .val();
                }
                let sel = document.getElementById('chooseOptionalBank');
                let selected = sel.options[sel.selectedIndex];
                let choosed = selected.getAttribute('data-id');
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                $.ajax({
                    type: "POST",
                    url: endpoint,
                    data: {
                        _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                        accountName: $('input[name=optAccountName]').val(),
                        bank: choosed,
                        accountNumber: (cat == "bank") ? $('input[name=optAccountNumber]').val() : '0' + $(
                            'input[name=optAccountNumber]').val()
                    },
                    success: function(response) {
                        $('input[name="newData"]').val("true")
                        $('.cancel').click();
                        if (response.success == true) {
                            optionalBankList()
                            setTimeout(() => {
                                location.reload()
                            }, 1000);
                        } else {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                icon: 'error',
                                title: response.message
                            });
                        }
                    }
                })
            })

            $('#bankDetail').on('show.bs.modal', () => {
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                $("#phoneInputPrepend").hide()
                optionalBankList()
            })

            $("select[id=chooseOptionalBank]").on("change", function(e) {
                e.preventDefault()
                const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
                if (cat == "bank") {
                    $("#phoneInputPrepend").hide()
                    $("#labelAccNumb").text("Nomor Rek.");
                    const max = $("select[id=chooseOptionalBank]").find(':selected').data('max')
                    const min = $("select[id=chooseOptionalBank]").find(':selected').data('min')
                    if (max == 0) {
                        $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
                        return false
                    }
                    $("input[name=optAccountNumber]").attr("minlength", min).attr("maxlength", max)
                } else {
                    $("#phoneInputPrepend").show()
                    $("#labelAccNumb").text("Nomor Ponsel*");
                    $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
                    $("input[name=optAccountNumber]").on('input propertychange paste', function() {
                        var reg = /^0+/gi;
                        if (this.value.match(reg)) {
                            this.value = this.value.replace(reg, '');
                        }
                    });
                }
            })
            jQuery.validator.addMethod("validatePhone", function(value, element) {
                if ($('select[id=chooseOptionalBank] :selected').parent().attr('label') != "bank" && $(
                        "input[name=optAccountNumber]").val()[0] != 8) {
                    return false;
                } else {
                    return true;
                }
            }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");

            function optionalBankList() {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/profile/optionalBankList",
                    data: {
                        _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o"
                    },
                    success: function(response) {
                        $("#bankButton").show()
                        if (response.data == null) {
                            $("#otherBank").load(location.href + " #otherBank");
                        } else {
                            if (response.data.length == 5) {
                                $("#bankButton").hide()
                            }
                        }
                        if (response.success == true) {
                            let data = response.data
                            let html = ''
                            $.each(data, function(key, value) {
                                html += otherBankTemplate(value);
                            });
                            $("#otherBank").html(html);
                        }
                    }
                });
            }

            function otherBankTemplate(value) {
                return `
<div class="bank-account">
    <div class="acc-details">
        <div class="row">
            <div class="col-lg-12">
                <div class="acc-name">Nama Rek.: <span>${value.accountName}</span></div>
            </div>
            <div class="col-lg-6">
                <div class="bank-name">Nama Bank: <span>${value.bank.toUpperCase()}</span></div>
            </div>
            <div class="col-lg-6">
                <div class="acc-number">Nomor Rek.: <span>${value.accountNumber}</span></div>
            </div>
        </div>
    </div>
</div>
`;
            }

            $('a[name=copyAddress]').on('click', function(e) {
                e.preventDefault();
                const code = this.id;
                const htmlExist = $(this).html();
                const buttonText = $("span[name=buttonCopy]").html()
                const addressText = $(`#addressText-${code}`)[0];
                $("span[name=buttonCopy]").html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="loading"></span>`
                )
                let temp = document.createRange();
                temp.selectNodeContents(addressText)
                let select = window.getSelection();
                select.removeAllRanges();
                select.addRange(temp)
                document.execCommand("copy");
                setTimeout(() => {
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: "Berhasil di copy.."
                    });
                    $(this).html(htmlExist)
                    $("span[name=buttonCopy]").html(buttonText)
                }, 1000)
            });
        </script>
        <script>
            $("#pokerDesc").hide()
            $("#walletSelectWithdraw").on("change", function(e) {
                e.preventDefault()
                $("span[class=originDesc]").hide()
                $(`#${$(this).val()}Desc`).show()
                maxInputAmount($(this).val())
            })
            maxInputAmount($("#walletSelectWithdraw").val())

            $("#withdrawRange").on('apply.daterangepicker', function(ev, picker) {
                const payloads = {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                    startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                    endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                }
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/transaction/getWithdrawHistory",
                    data: payloads,
                    success: function(response) {
                        $('#withdrawHistoryTable').DataTable().clear().destroy()
                        tableDepoWdHistory($('#withdrawHistoryTable'), response.data);
                    }
                });
            });

            function transferToMain(callback) {
                $.post("https://mahacuan.support/transaction/transferToMain", {
                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                    walletOrigin: $("select[name=walletOrigin]").val()
                }, (data) => data.data);
                let timeClose = 5,
                    displayText = "Saldo Anda sedang dikalkulasi dalam #1 detik.",
                    timer;

                Swal.fire({
                    icon: 'info',
                    title: "Mohon tunggu",
                    html: displayText.replace(/#1/, `<strong>${timeClose}</strong>`),
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timerProgressBar: true,
                    timer: 5000,
                });

                timer = setInterval(function() {
                    timeClose--;
                    if (timeClose == 0) {
                        clearInterval(timer);
                        Swal.close()
                    }
                    $('.swal2-html-container').html(displayText.replace(/#1/, `<strong>${timeClose}</strong>`));
                }, 1000);
                setTimeout(() => {
                    callback()
                }, 5000);
            }

            $("form[id=formWithdraw]").validate({
                onkeyup: false,
                rules: {
                    amount: {
                        required: true,
                    },
                },
                messages: {
                    amount: {
                        required: "Amount wajib diisi.",
                        min: "Withdraw tidak boleh kurang dari " + " {0}",
                        max: "Withdraw tidak boleh melebihi " + " {0}"
                    },
                },
                errorPlacement: function(error, element) {
                    let error_id = element.attr("id")
                    error.insertAfter($(`span[id=${error_id}-error]`))
                },
                highlight: function(element, errorClass) {
                    $(element).closest(".form-control").addClass("is-invalid");
                },
                unhighlight: function(element, errorClass) {
                    $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
                },
            });

            $("form[id=formWithdraw]").on("submit", function(e) {
                e.preventDefault()
                if ($("form[id=formWithdraw]").valid()) {
                    transferToMain(() => {
                        const payloads = {
                            _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                            bankDestination: $("select[name=bankDestination]").val(),
                            walletOrigin: $("select[name=walletOrigin]").val(),
                            amount: $("input[id=withdrawAmount]").val()
                        }
                        $.ajax({
                            type: "POST",
                            url: "https://mahacuan.support/transaction/withdraw",
                            data: payloads,
                            success: function(response) {
                                $('.form-control').removeClass('is-valid').removeClass('is-invalid')
                                $("form[id=formWithdraw]")[0].reset()
                                if (response.success == true) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: "Berhasil.",
                                        html: response.message,
                                        timer: 2000
                                    })
                                    $("a[name=refreshWallet]").click()
                                } else {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: "Perhatian.",
                                        html: response.message,
                                        timer: 2000
                                    })
                                }
                            }
                        });
                    })
                }
            })
        </script>
        <!-- Info Claim Bonus -->
        <div class="modal custom-popup fade" id="infoClaimBonus" tabindex="-1" aria-labelledby="infoClaimBonusLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                    </div>
                    <div class="modal-body">
                        <div class="claim-info"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Claim Bonus -->
        <div class="modal custom-popup fade" id="claimBonus" tabindex="-1" aria-labelledby="claimBonusLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <input type="hidden" name="promoId" value="">
                        <div class="popup-claim">
                            <h3>Klaim Promo Anda Sekarang !</h3>
                            <div class="claim-provider">
                                <h6>Pilih Provider</h6>
                                <select class="form-control" name="chooseProvider" id="chooseProvider"></select>
                                <span class="text-danger" id="chooseProvider-error"></span>
                            </div>
                            <div class="claim-counter">
                                <button type="button" class="btn-custom minus">-</button>
                                <input type="text" name="claimAmount" class="claim-bonus-counter form-control"
                                    min="" max="">
                                <button type="button" class="btn-custom add">+</button>
                            </div>
                            <div class="claim-provider">
                                <h6>Bonus Saldo</h6>
                                <input class="claim-bonus-counter form-control" id="claimed" data-currency="IDR"
                                    placeholder="IDR" autocomplete="false" disabled="">
                            </div>
                            <div class="claim-button row justify-content-around">
                                <button type="button" id="joinPromo" class="btn-custom claim">Ambil</button>
                                <button type="button" data-dismiss="modal" class="btn-custom cancel">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const mapping = {
                'givenType': {
                    "1": "Bonus Awal",
                    "2": "Bonus Ekstra"
                },
                'promoType': {
                    "1": "Sekali",
                    "2": "Harian",
                    "3": "Mingguan",
                    "4": "Bulanan",
                    "5": "Setiap saat"
                }
            }

            function buttonInfoBonus(obj) {
                const data = $(obj).data('item');
                $.each(data, function(key, value) {
                    let iconArr = '';
                    $.each(value.gameData, (i, icon) => iconArr += (icon) ? "<img class=p-1 src=" + icon.icon +
                        " title=" + icon.name + " alt=" + icon.name + ">" : "");
                    $("#infoClaimBonus .modal-title").text(value.eventTitle)
                    let body = `
        <div class="claim-info-item">
            <div class="title">Keterangan</div>
            <div class="desc">${value.eventDescription}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Jenis Pemberian</div>
            <div class="desc">${mapping.givenType[value.givenType]}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Jenis Promosi</div>
            <div class="desc">${mapping.promoType[value.promoType]}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Min Deposit</div>
            <div class="desc">${value.minDeposit}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Max Deposit</div>
            <div class="desc">${parseFloat(value.maxDeposit).toFixed(2)}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Tanggal Mulai</div>
            <div class="desc">${value.startDate}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Tanggal Berakhir</div>
            <div class="desc">${value.endDate}</div>
        </div>

        <div class="claim-info-item">
            <div class="title">Provider Support</div>
        </div>

        <div class="claim-info-img d-flex flex-wrap align-items-center justify-content-center">
            ${iconArr}
        </div>
    `;
                    $("#infoClaimBonus .modal-body .claim-info").html(body)
                });
            };

            function buttonClaimBonus(obj) {
                let data = [];
                $.each($(obj).data('item'), function(key, value) {
                    data = value;
                });
                $("#claimBonus").find("input[name=promoId]").val(data.uuid);
                let minDepo = parseInt(data.minDeposit);
                let maxDepo = parseInt(data.maxDeposit);
                const inputAmount = $("input[name=claimAmount]")
                inputAmount.attr('min', minDepo).attr('max', maxDepo);
                inputAmount.val(minDepo);
                if (~~window.mainBalance < minDepo) {
                    Swal.fire({
                        icon: 'info',
                        title: "Perhatian !",
                        html: "Saldo Anda tidak cukup untuk mengambil promo ini.",
                        timerProgressBar: true,
                        timer: 5000,
                    });
                    return false;
                };
                $("#claimBonus").modal('show');
                inputAmount.bind('keypress', function(event) {
                    return allowedKey(event, "^[0-9]+$")
                });
                let claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : inputAmount.val() * parseFloat(data
                    .promoRate);
                let inputClaimed = $("input[id=claimed]");
                inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)

                inputAmount.on("keyup change", function() {
                    let max;
                    if (parseInt(~~window.mainBalance) < $(this).attr('max')) {
                        max = ~~window.mainBalance
                    } else {
                        max = maxDepo;
                    }
                    if (this.value > max) {
                        this.value = max;
                    }
                    claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : this.value * parseFloat(data
                        .promoRate);
                    inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)
                });

                var opt = "<option value=''>-- Pilih Provider --</option>";
                $.each(data.gameData, function(key, value) {
                    opt += (value) ? `<option value="${key}">${value.name}</option>` : ""
                });
                $("#chooseProvider").html(opt);
            };

            $('button[id=joinPromo]').on('click', function(e) {
                e.preventDefault();
                const selProv = $("select[name=chooseProvider]")
                if (selProv.val() == '') {
                    selProv.addClass("is-invalid")
                    $("span[id=chooseProvider-error]").text("Provider wajib diisi.")
                    setTimeout(() => {
                        selProv.removeClass("is-invalid")
                        $("span[id=chooseProvider-error]").text("")
                    }, 2500);
                    return false
                }
                joinPromo(selProv.val(), $("input[name=claimAmount]").val(), $("input[name=promoId]").val())
                return false;
            })

            function joinPromo(providerCode, amount, promoId) {
                $.ajax({
                    type: "POST",
                    url: "https://mahacuan.support/transaction/claimPromo",
                    data: {
                        _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                        providerCode: providerCode,
                        amount: amount,
                        promoId: promoId
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',
                            html: "Mohon tunggu...",
                            allowOutsideClick: false,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
                    },
                    success: function(response) {
                        if (response.success == true) {
                            Swal.fire({
                                icon: 'info',
                                title: "Berhasil.",
                                html: response.data.msg,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            });
                            setTimeout(() => {
                                $('.modal').modal('hide');
                                getPromo();
                            }, 2000)
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: "Perhatian.",
                                html: response.error.msg,
                                timerProgressBar: true,
                                showButtonConfirm: false,
                                timer: 2000,
                            });
                        }
                    }
                });
            };

            $('.claim-counter .btn-custom').on('click', function(e) {
                e.preventDefault();
                let $input = $('.claim-bonus-counter[type="text"]');
                let $val = $input.val();

                if (!isNaN($val)) {
                    if ($(this).hasClass('minus')) {
                        if ($val > $input.attr('min')) {
                            $input.val(parseInt($val) - 1).change();
                        }
                        if (parseInt($input.val()) == $input.attr('min')) {
                            $(this).attr('disabled', true);
                        }
                    } else if ($(this).hasClass('add')) {
                        if ($val < parseInt($input.attr('max'))) {
                            $input.val(parseInt($val) + 1).change();
                        }
                        if (parseInt($input.val()) == parseInt($input.attr('max'))) {
                            $(this).attr('disabled', true);
                        }
                    }
                } else {
                    $input.val(0);
                }
                if (parseInt($val) >= parseInt($input.attr('min'))) {
                    $('.minus').removeAttr('disabled');
                }
                if (parseInt($val) <= parseInt($input.attr('max'))) {
                    $('.add').removeAttr('disabled');
                }
            });
        </script>
        <script>
            function buttonCancelBonus(val) {
                Swal.fire({
                    title: "Perhatian.",
                    text: "Apakah Anda yakin ingin membatalkan promo ini?",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "OK",
                    cancelButtonText: "Batal",
                }).then((res) => {
                    if (res.isConfirmed == true) {
                        setTimeout(() => {
                            const promoId = $(val).data("promo-id");
                            $.ajax({
                                type: "POST",
                                url: "https://mahacuan.support/transaction/deletePromo",
                                data: {
                                    _token: "vr5EdLdEzVEHZ6bTuQQltwEJFvfRQDnEriHxbS4o",
                                    promoId: promoId
                                },
                                success: function(response) {
                                    if (response.success == true) {
                                        Swal.fire({
                                            icon: 'info',
                                            title: "Berhasil.",
                                            html: response.data.msg,
                                            timerProgressBar: true,
                                            showButtonConfirm: false,
                                            timer: 2000,
                                        });
                                        setTimeout(() => {
                                            $(val).text("Pending").attr('disabled', 'true');
                                        }, 0);
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            title: "Perhatian.",
                                            html: response.error.msg,
                                            timerProgressBar: true,
                                            showButtonConfirm: false,
                                            timer: 2000,
                                        });
                                    }
                                }
                            });
                        }, 200);
                    } else {
                        return false;
                    }
                });
            };
        </script>
    </custom-script>

    <script type="text/javascript">
        var swiper = new Swiper('.mobile-category-swiper', {
            slidesPerView: 4,
            spaceBetween: 10,
            slidesPerGroup: 4,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: ".navigation-next--category",
                prevEl: ".navigation-prev--category",
            },
        });
    </script>

@endsection
