@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Bonus')

@section('content')
    <main id="main-route">
        <div class="main-content bonus">
            <div class="container">
                <ul class="component-tabs nav nav-tabs" role="tablist" id="bonusTabs">
                    <li class="nav-item">
                        <a class="button-pills nav-item nav-link active" id="nav-promo-tab" href="#nav-promo" data-toggle="tab"
                            role="tab" aria-controls="nav-promo" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/promotion.svg" width="40"
                                height="40">
                            <span>Promo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-item nav-link" id="nav-referral-tab" href="#nav-referral"
                            data-toggle="tab" role="tab" aria-controls="nav-referral" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/referal.svg" width="40"
                                height="40">
                            <span>Referral</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-item nav-link" id="nav-turnover-tab" href="#nav-turnover"
                            data-toggle="tab" role="tab" aria-controls="nav-turnover" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/rebate.svg" width="40"
                                height="40">
                            <span>Turnover &amp; Rebate</span>
                        </a>
                    </li>
                </ul>
                <div class="component-tab-content tab-content">
                    <div class="tab-pane fade show active" id="nav-promo" role="tabpanel" aria-labelledby="nav-promo-tab">
                        <div class="bonus-content">
                            <div class="bonus-header">Daftar Promo</div>
                            <div class="container-fluid table-dataTable">
                                <div id="promoHistory_wrapper" class="dataTables_wrapper no-footer">
                                    <div id="promoHistory_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="" placeholder=""
                                                aria-controls="promoHistory"></label></div>
                                    <table class="table table-bordered dataTable no-footer dtr-" id="promoHistory"
                                        role="grid" aria-describedby="promoHistory_info" style="width: 1044px;">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col" class="sorting_asc" rowspan="1" colspan="1"
                                                    style="width: 30px;" aria-label="No">No</th>
                                                <th scope="col" class="sorting" tabindex="0"
                                                    aria-controls="promoHistory" rowspan="1" colspan="1"
                                                    style="width: 155px;"
                                                    aria-label="Nama Permainan: activate to sort column ascending">Nama
                                                    Permainan</th>
                                                <th scope="col" class="sorting" tabindex="0"
                                                    aria-controls="promoHistory" rowspan="1" colspan="1"
                                                    style="width: 133px;"
                                                    aria-label="Nama Promosi: activate to sort column ascending">Nama
                                                    Promosi</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1" colspan="1"
                                                    style="width: 125px;" aria-label="Tanggal Mulai">Tanggal Mulai</th>
                                                <th scope="col" class="sorting" tabindex="0"
                                                    aria-controls="promoHistory" rowspan="1" colspan="1"
                                                    style="width: 137px;"
                                                    aria-label="Target Putaran: activate to sort column ascending">Target
                                                    Putaran</th>
                                                <th scope="col" class="sorting" tabindex="0"
                                                    aria-controls="promoHistory" rowspan="1" colspan="1"
                                                    style="width: 152px;"
                                                    aria-label="Putaran Terakhir: activate to sort column ascending">
                                                    Putaran Terakhir</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 104px;" aria-label="Kadaluarsa">
                                                    Kadaluarsa</th>
                                                <th scope="col" class="sorting" tabindex="0"
                                                    aria-controls="promoHistory" rowspan="1" colspan="1"
                                                    style="width: 64px;"
                                                    aria-label="Status: activate to sort column ascending">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td valign="top" colspan="8" class="dataTables_empty">No data
                                                    available in table</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="promoHistory_info" role="status"
                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-referral" role="tabpanel" aria-labelledby="nav-referral-tab">
                        <div class="bonus-referral">
                            <div class="bonus-header">Referal Rilis</div>
                            <div class="referral-link d-flex align-items-center">Kode referal Anda :
                                <span id="refferalCode">WP5K7J96</span>
                                <a href="#" id="copyReff" class="btn-custom-sm ml-2">Salin</a>
                            </div>
                            <div class="bonus-form">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Pilih Tanggal</label>
                                            <input type="text" id="refferalRange" readonly="readonly">
                                            <input type="hidden" name="to" id="to" value="2024-01-07">
                                            <input type="hidden" name="from" id="from" value="2024-01-07">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Lihat laporan Refferal</label>
                                            <button type="button" class="btn-see-report btn-custom"
                                                onclick="ViewReff(this)">Lihat laporan Refferal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid table-dataTable">
                                <table class="table table-bordered" id="referralTable">
                                    <thead>
                                        <tr>
                                            <th scope="col"> No</th>
                                            <th scope="col"> Pengguna</th>
                                            <th scope="col"> Tanggal register</th>
                                            <th scope="col"> Periode </th>
                                            <th scope="col"> Total Bonus </th>
                                            <th scope="col"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>

                        <div class="bonus-referral mt-3">
                            <div class="bonus-header">Daftar Downline</div>
                            <div class="bonus-form">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Pilih Tanggal</label>
                                            <input type="text" id="downlineRange" readonly="readonly">
                                            <input type="hidden" name="toDown" id="toDown">
                                            <input type="hidden" name="fromDown" id="fromDown">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Cari</label>
                                            <button type="button" class="btn-see-report btn-custom"
                                                onclick="ViewDownline(this)">Cari</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Total Downline</label>
                                            <div type="text" readonly="readonly">
                                                <h3 id="totalDownline" class="text-white">0</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid table-dataTable">
                                <div id="downlineTable_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="downlineTable_length"><label>Show <select
                                                name="downlineTable_length" aria-controls="downlineTable" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <table class="table table-bordered dataTable no-footer dtr-" id="downlineTable"
                                        style="width: 100%;" role="grid" aria-describedby="downlineTable_info">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col" class="sorting_asc" rowspan="1" colspan="1"
                                                    style="width: 0px;" aria-label=" No"> No</th>
                                                <th scope="col" class="sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 0px;" aria-label=" Pengguna"> Pengguna
                                                </th>
                                                <th scope="col" class="sorting_disabled" rowspan="1"
                                                    colspan="1" style="width: 0px;" aria-label=" Tanggal register">
                                                    Tanggal register</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd">
                                                <td valign="top" colspan="3" class="dataTables_empty">No data
                                                    available in table</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="dataTables_info" id="downlineTable_info" role="status"
                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                    <div class="dataTables_paginate paging_simple_numbers" id="downlineTable_paginate"><a
                                            class="paginate_button previous disabled" aria-controls="downlineTable"
                                            data-dt-idx="0" tabindex="-1"
                                            id="downlineTable_previous">Previous</a><span></span><a
                                            class="paginate_button next disabled" aria-controls="downlineTable"
                                            data-dt-idx="1" tabindex="-1" id="downlineTable_next">Next</a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-turnover" role="tabpanel" aria-labelledby="nav-turnover-tab">
                        <div class="bonus-turnover">
                            <div class="bonus-header mb-3">Total Turn Over</div>
                            <div class="bonus-form">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Pilih Tanggal</label>
                                            <input type="text" id="turnoverRange" readonly="readonly">
                                            <input type="hidden" name="to" id="to">
                                            <input type="hidden" name="from" id="from">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>Pilih semua game</label>
                                            <div class="dropdown bootstrap-select show-tick multi-select-game"
                                                style="width: 100%;"><select class="multi-select-game" name="provider[]"
                                                    multiple="" data-selected-text-format="count > 4" tabindex="-98">
                                                    <option value="AFB">AFB</option>
                                                    <option value="SBO">SBO</option>
                                                    <option value="CMD">CMD368</option>
                                                    <option value="IAE">IA ESPORT</option>
                                                    <option value="AFG">AFB GAMING</option>
                                                    <option value="PGS">PG SOFT</option>
                                                    <option value="HYD">HYDAKO</option>
                                                    <option value="AMB">AMEBA</option>
                                                    <option value="PLS">PLAYSTAR</option>
                                                    <option value="CQ9">CQ9</option>
                                                    <option value="VRT">VIRTUALTECH</option>
                                                    <option value="PNG">PLAYNGO</option>
                                                    <option value="ISO">iSOFTBET</option>
                                                    <option value="MIC">MICROGAMING</option>
                                                    <option value="PRA">PRAGMATIC PLAY</option>
                                                    <option value="AIS">AIS GAMING</option>
                                                    <option value="HCG">HC GAME</option>
                                                    <option value="ADV">ADVANTPLAY</option>
                                                    <option value="NLS">N2LIVE SLOT</option>
                                                    <option value="NLC">NoLimit City</option>
                                                    <option value="SPR">SPRIBE</option>
                                                    <option value="FAC">FA CHAI</option>
                                                    <option value="JDB">JDB</option>
                                                    <option value="FSP">FASTSPIN</option>
                                                    <option value="JLI">JILI</option>
                                                    <option value="SPD">SPADE GAMING</option>
                                                    <option value="RED">RED TIGER</option>
                                                    <option value="HBN">HABANERO</option>
                                                    <option value="TTG">TOP TREND GAMING</option>
                                                    <option value="JOK">JOKER GAMING</option>
                                                    <option value="PLA">PLAYTECH SLOT</option>
                                                    <option value="TOG">4D</option>
                                                    <option value="AFC">AFB CASINO</option>
                                                    <option value="NLI">N2LIVE</option>
                                                    <option value="EVO">EVOLUTION</option>
                                                    <option value="ALB">ALLBET CASINO</option>
                                                    <option value="LG8">LG88</option>
                                                    <option value="WEC">WE CASINO</option>
                                                    <option value="WMC">WMCASINO</option>
                                                    <option value="PLC">PRAGMATIC PLAY LC</option>
                                                    <option value="ORI">ORIENTAL GAMING</option>
                                                    <option value="GD8">GD88</option>
                                                    <option value="AGC">AG CASINO</option>
                                                    <option value="SEG">SEXY GAMING</option>
                                                    <option value="DRG">DG CASINO</option>
                                                    <option value="SV3">SV388</option>
                                                    <option value="MKI">MIKI</option>
                                                    <option value="LVG">LIVE GAMES</option>
                                                    <option value="WS1">WS168</option>
                                                </select><button type="button"
                                                    class="btn dropdown-toggle btn-light bs-placeholder"
                                                    data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                                    aria-haspopup="listbox" aria-expanded="false"
                                                    title="Nothing selected">
                                                    <div class="filter-option">
                                                        <div class="filter-option-inner">
                                                            <div class="filter-option-inner-inner">Nothing selected</div>
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="dropdown-menu ">
                                                    <div class="bs-searchbox"><input type="search" class="form-control"
                                                            autocomplete="off" role="combobox" aria-label="Search"
                                                            aria-controls="bs-select-1" aria-autocomplete="list"></div>
                                                    <div class="bs-actionsbox">
                                                        <div class="btn-group btn-group-sm btn-block"><button
                                                                type="button"
                                                                class="actions-btn bs-select-all btn btn-light">Select
                                                                All</button><button type="button"
                                                                class="actions-btn bs-deselect-all btn btn-light">Deselect
                                                                All</button></div>
                                                    </div>
                                                    <div class="inner show" role="listbox" id="bs-select-1"
                                                        tabindex="-1" aria-multiselectable="true">
                                                        <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-2">
                                            <label>LIHAT LAPORAN TO</label>
                                            <button type="button" class="btn-see-report btn-custom"
                                                onclick="ViewTo(this)">LIHAT LAPORAN TO</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid table-dataTable">
                                <table class="table table-bordered" id="turnoverTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal TO</th>
                                            <th scope="col">Provider</th>
                                            <th scope="col">Turnover</th>
                                            <th scope="col">Bet</th>
                                            <th scope="col">Win / Lose</th>
                                            <th scope="col">Progresive</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="mt-3">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-point" role="tabpanel" aria-labelledby="nav-point-tab">
                        <div class="bonus-point">
                            <div class="point-top">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6 col-sm-12">
                                        <div class="point-img">
                                            <img id="event-banner_url" src="point-banner">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="point-form">
                                            <div id="event-title" class="point-form__title"></div>
                                            <div class="row point-form__holder">
                                                <div class="col-lg-5">
                                                    <div class="point-form__item">Periode</div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div id="event-periode" class="point-form__item"></div>
                                                </div>
                                            </div>
                                            <div class="row point-form__holder">
                                                <div class="col-lg-5">
                                                    <div class="point-form__item">Akumulasi
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div id="event-accumulation" class="point-form__item"></div>
                                                </div>
                                            </div>
                                            <div class="row point-form__holder">
                                                <div class="col-lg-5">
                                                    <div class="point-form__item">Total Deposit</div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div id="player-current_accumulation" class="point-form__item"></div>
                                                </div>
                                            </div>
                                            <div class="row point-form__holder">
                                                <div class="col-lg-5">
                                                    <div class="point-form__item">Total Point
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div id="player-point" class="point-form__item"></div>
                                                </div>
                                            </div>
                                            <div class="row point-form__holder">
                                                <div class="col-lg-5 d-flex align-items-center">
                                                    <div class="point-form__item">Jumlah Point Ditukar
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="point-form__item">
                                                        <input type="number" placeholder="0.00" min="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="point-form__button btn-custom" onclick="tukarPoint(this)"
                                                disabled="">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="point-terms">
                                <div class="terms-header">Syarat &amp; Ketentuan</div>
                                <div id="event-description" class="terms-content"></div>
                            </div>
                            <div class="point-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="point-bottom__title">Point Release Status</div>
                                        <div class="table-responsive table-transaksi">
                                            <table class="table table-hover table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">
                                                            Tanggal Permintaan <br> Tanggal Rilis</th>
                                                        <th scope="col" class="text-center">Jumlah
                                                        </th>
                                                        <th scope="col" class="text-center">Status
                                                        </th>
                                                        <th scope="col" class="text-center">Keterangan
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody-getReleasePoint"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('under_body')



@endsection
