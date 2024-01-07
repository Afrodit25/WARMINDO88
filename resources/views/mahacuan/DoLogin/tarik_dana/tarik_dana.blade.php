@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Deposit')

@section('content')

    <main id="main-route">
        <div class="main-content transaksi">
            <div class="container">
                <ul class="component-tabs nav nav-tabs" id="transactionTabs">
                    <li class="nav-item">
                        <a class="button-pills nav-link {{ request()->is('apps/tambah_dana') ? 'active' : '' }}" id="nav-deposit-tab" href="{{ route('apps.tambah_dana') }}"
                            role="tab" aria-controls="nav-deposit" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/deposit1.svg"
                                width="40" height="40">
                            <span>Tambah Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link {{ request()->is('apps/tarik_dana') ? 'active' : '' }}" id="nav-withdraw-tab" href="{{ route('apps.tarik_dana') }}"
                            role="tab" aria-controls="nav-withdraw" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/withdraw.svg"
                                width="40" height="40">
                            <i class="fas fa-coins"></i>
                            <span>Tarik Dana</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-claim-tab" data-toggle="tab" href="#nav-claim"
                            role="tab" aria-controls="nav-claim" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/claim-bonus.svg"
                                width="40" height="40">
                            <span>Klaim Promo</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-pills nav-link" id="nav-cashback-tab" data-toggle="tab" href="#nav-cashback"
                            role="tab" aria-controls="nav-cashback" aria-expanded="false">
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/cashback.svg"
                                width="40" height="40">
                            <span>Cashback</span>
                        </a>
                    </li>
                </ul>
                <div class="component-tab-content tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show {{ request()->is('apps/tambah_dana') ? 'active' : '' }}" id="nav-deposit" role="tabpanel"
                        aria-labelledby="nav-deposit-tab">
                        <!-- Add form_deposit -->
                        @include('mahacuan.DoLogin.form_deposit')
                        <!-- /Add form_deposit -->
                    </div>
                    <div class="tab-pane fade show {{ request()->is('apps/tarik_dana') ? 'active' : '' }}" id="nav-withdraw" role="tabpanel" aria-labelledby="nav-withdraw-tab">
                        <!-- Add form_penarikan -->
                        @include('mahacuan.DoLogin.form_penarikan')
                        <!-- /Add form_penarikan -->
                    </div>
                    <div class="tab-pane fade" id="nav-claim" role="tabpanel" aria-labelledby="nav-claim-tab">
                        <!-- Add form_klaimPromo -->
                        @include('mahacuan.DoLogin.form_klaimPromo')
                        <!-- /Add form_klaimPromo -->
                    </div>
                    <div class="tab-pane fade" id="nav-cashback" role="tabpanel" aria-labelledby="nav-cashback-tab">
                        <!-- Add form_cashback -->
                        @include('mahacuan.DoLogin.form_cashback')
                        <!-- /Add form_cashback -->
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection


@section('under_body')

<script>
        function buttonClaimBonus(obj) {
            let data = [];
            $.each($(obj).data('item'), function (key, value) {
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
            let claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : inputAmount.val() * parseFloat(data.promoRate);
            let inputClaimed = $("input[id=claimed]");
            inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)

            inputAmount.on("keyup change", function () {
                let max;
                if (parseInt(~~window.mainBalance) < $(this).attr('max')) {
                    max = ~~window.mainBalance
                } else {
                    max = maxDepo;
                }
                if (this.value > max) {
                    this.value = max;
                }
                claimed = (parseFloat(data.promoRate) == 0) ? data.fixBonus : this.value * parseFloat(data.promoRate);
                inputClaimed.val(`${inputClaimed.data("currency")}  ${claimed.toFixed(2)}`)
            });

            var opt = "<option value=''>-- Pilih Provider --</option>";
            $.each(data.gameData, function (key, value) {
                opt += (value) ? `<option value="${key}">${value.name}</option>` : ""
            });
            $("#chooseProvider").html(opt);
        };

        function buttonInfoBonus(obj) {
            const data = $(obj).data("item");
            $.each(data, function (key, value) {
                let iconArr = "";
                $.each(
                value.gameData,
                (i, icon) =>
                    (iconArr += icon
                    ? "<img class=p-1 src=" +
                        icon.icon +
                        " title=" +
                        icon.name +
                        " alt=" +
                        icon.name +
                        ">"
                    : "")
                );
                $("#infoClaimBonus .modal-title").text(value.eventTitle);
                let body = `
                <div class="claim-info-item">
                    <div class="title">Keterangan</div>
                    <div class="desc">BONUS NEW MEMBER SLOT 200%</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Jenis Pemberian</div>
                    <div class="desc">Bonus Awal</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Jenis Promosi</div>
                    <div class="desc">Sekali</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Min Deposit</div>
                    <div class="desc">50</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Max Deposit</div>
                    <div class="desc">100.00</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Tanggal Mulai</div>
                    <div class="desc">2023-11-08 00:00:00</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Tanggal Berakhir</div>
                    <div class="desc">2024-12-31 23:59:59</div>
                </div>

                <div class="claim-info-item">
                    <div class="title">Provider Support</div>
                </div>

                <div class="claim-info-img d-flex flex-wrap align-items-center justify-content-center">
                    ${iconArr}
                </div>
            `;
                $("#infoClaimBonus .modal-body .claim-info").html(body);
            });
        }
</script>

@endsection
