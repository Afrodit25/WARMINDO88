@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Withdraw')

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
    window.addEventListener("popstate", (event) => {
        location.reload();
    });

    $("a[name=locale-switch]").on("click", function() {
        const locale = $(this).attr('data-locale')
        $.ajax({
            type: "POST",
            url: "https://mahacuan.live/locale",
            data: {
                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
        $('#withdrawHistoryTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('apps.tarik_dana') }}",
                    data: function (d) {
                        // d.name = $('#name').val();
                        // d.category = $('#category').val();
                    }
                },
                columns: [
                    {
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'nominal_withdraw', name: 'nominal_withdraw' },
                    { data: 'status_withdraw', name: 'status_withdraw' },
                    // { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });


        $(".routeTo").on("click", function() {
            const url = $(this).data("route")
            window.location.replace(url)
        });

        function getBalance() {
            $.post("https://mahacuan.live/transaction/checkBalance", {
                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
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
    });

    $('#pageLoadingBar').hide()
    window.onpopstate = function() {
        let path = window.location.pathname;
        routeNav(path);
    }

    function routeNav(path) {
        if (path == window.location.pathname) return;
        history.pushState(null, null, path);
        let url = "https://mahacuan.live" + window.location.pathname;
        if (path == '/') {
            window.location.replace("https://mahacuan.live")
            return false;
        }
        $(".header-form>a").removeClass('active')
        let elem = document.getElementById("pageLoadingBar");
        let width = 1;
        $.ajax({
            type: "GET",
            url: url,
            beforeSend: () => {
                $('#pageLoadingBar').show()
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
                    $('#pageLoadingBar').hide()
                    elem.style.width = '1%';
                    $("custom-script").empty().append(script);
                    filterGameSelection('all')
                }, 500);
                let checkPath = path.split('/')
            }
        });
    }
</script>
<script>
    const html5QrCode = new Html5Qrcode( /* element id */ "reader");

    // File based scanning
    const fileinput = document.getElementById('qr-input-file');
    fileinput.addEventListener('change', e => {
        if (e.target.files.length == 0) {

            // No file selected, ignore
            return;
        }

        const imageFile = e.target.files[0];

        let ele = document.getElementById('error-message');

        // Scan QR Code
        html5QrCode.scanFile(imageFile, true)
            .then(qrCodeMessage => {

                // success, use qrCodeMessage
                document.getElementById("voucher_code").value = qrCodeMessage;
                ele.style.display = "none";
            })
            .catch(err => {

                // failure, handle it.
                document.getElementById("voucher_code").value = "";
                ele.innerHTML = `Error scanning file. Reason: ${err}`;
                ele.style.display = "block";
            });
    });

    $("button[id=submitVoucher]").on('click', (e) => {
        e.preventDefault()
        $.ajax({
            type: "POST",
            url: "https://mahacuan.live/transaction/claimVoucher",
            data: {
                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
<script type="text/javascript">
    var swiperSport = new Swiper('.sport-swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--sport",
            prevEl: ".navigation-prev--sport",
        },
    });
    var swiperSlot = new Swiper('.slot-swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--slot",
            prevEl: ".navigation-prev--slot",
        },
    });
    var swiperFishing = new Swiper('.fishing-swiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--fishing",
            prevEl: ".navigation-prev--fishing",
        },
    });
    var swiperCasino = new Swiper('.casino-swiper', {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            1920: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 10,
            }
        },
        navigation: {
            nextEl: ".navigation-next--casino",
            prevEl: ".navigation-prev--casino",
        },
    });
    var swiperLottery = new Swiper('.lottery-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".navigation-next--lottery",
            prevEl: ".navigation-prev--lottery",
        },
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

        // $(".button-pills").on('click', function(e) {
        //     e.preventDefault();
        //     if (this.id == "nav-claim-tab") {
        //         getPromo()
        //     }
        //     if (this.id == "nav-cashback-tab") {
        //         getCashback()
        //     }
        //     pushStateUrlOnTabShow(this.id.split('-')[1]);
        //     $('.tabs-sidebar').removeClass('active');
        //     $('#' + this.id.split('-')[1] + 'Sidebar li').addClass('active');
        // });

        // if (location.hash == "#claim") {
        //     $('#nav-claim-tab').click()
        //     $('.tabs-sidebar').removeClass('active');
        //     $('#claimSidebar li').addClass('active');
        // } else if (location.hash == "#withdraw") {
        //     $('#nav-withdraw-tab').click();
        //     $('.tabs-sidebar').removeClass('active');
        //     $('#withdrawSidebar li').addClass('active');
        // } else if (location.hash == "#cashback") {
        //     $('#nav-cashback-tab').click();
        //     $('.tabs-sidebar').removeClass('active');
        //     $('#cashbackSidebar li').addClass('active');
        // } else {
        //     (history.pushState) ? history.pushState(null, null, '#deposit'): location.hash = '#deposit';
        //     $('.tabs-sidebar').removeClass('active');
        //     $('#depositSidebar li').addClass('active');
        // }

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
                url: "https://mahacuan.live/transaction/getPromo",
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
                url: "https://mahacuan.live/transaction/getCashback",
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
                                        url: "https://mahacuan.live/transaction/registerCashback",
                                        data: {
                                            _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
                url: "https://mahacuan.live/bonus/getCashbackTurnOver",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
                url: "https://mahacuan.live/transaction/checkDepositStatus",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
                startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
                endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
                historyType: $("input[name=historyType]:checked").val(),
            }
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/getDepositHistory",
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
            formData.append('_token', "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti");
            formData.append('bankMember', $("select[name=bankMember]").val());
            formData.append('bank', $("select[name=bank]").val());
            formData.append('walletDestination', $("select[name=walletDestination]").val());
            formData.append('amount', $("input[name=amount]").val());
            formData.append('phoneCreditMode', $("input[name=phoneCreditMode]").val());
            formData.append('notes', $("input[name=notes]").val());
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/deposit",
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
            let endpoint = "https://mahacuan.live/profile/optionalBankCreate";
            if ($('input[name="newData"]').val() != "true") {
                endpoint = "https://mahacuan.live/profile/optionalBankCreate/" + $('input[name="newData"]').val();
            }
            let sel = document.getElementById('chooseOptionalBank');
            let selected = sel.options[sel.selectedIndex];
            let choosed = selected.getAttribute('data-id');
            const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
            $.ajax({
                type: "POST",
                url: endpoint,
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
                url: "https://mahacuan.live/profile/optionalBankList",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti"
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

        // $("#withdrawRange").on('apply.daterangepicker', function(ev, picker) {
        //     const payloads = {
        //         _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
        //         startDate: picker.startDate.format('YYYY-MM-DD') + ' 00:00:00',
        //         endDate: picker.endDate.format('YYYY-MM-DD') + ' 23:59:59',
        //     }
        //     $.ajax({
        //         type: "POST",
        //         url: "https://mahacuan.live/transaction/getWithdrawHistory",
        //         data: payloads,
        //         success: function(response) {
        //             $('#withdrawHistoryTable').DataTable().clear().destroy()
        //             tableDepoWdHistory($('#withdrawHistoryTable'), response.data);
        //         }
        //     });
        // });

        // function transferToMain(callback) {
        //     $.post("https://mahacuan.live/transaction/transferToMain", {
        //         _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
        //         walletOrigin: $("select[name=walletOrigin]").val()
        //     }, (data) => data.data);
        //     let timeClose = 5,
        //         displayText = "Saldo Anda sedang dikalkulasi dalam #1 detik.",
        //         timer;

        //     Swal.fire({
        //         icon: 'info',
        //         title: "Mohon tunggu",
        //         html: displayText.replace(/#1/, `<strong>${timeClose}</strong>`),
        //         allowOutsideClick: false,
        //         showConfirmButton: false,
        //         timerProgressBar: true,
        //         timer: 5000,
        //     });

        //     timer = setInterval(function() {
        //         timeClose--;
        //         if (timeClose == 0) {
        //             clearInterval(timer);
        //             Swal.close()
        //         }
        //         $('.swal2-html-container').html(displayText.replace(/#1/, `<strong>${timeClose}</strong>`));
        //     }, 1000);
        //     setTimeout(() => {
        //         callback()
        //     }, 5000);
        // }

        // $("form[id=formWithdraw]").validate({
        //     onkeyup: false,
        //     rules: {
        //         amount: {
        //             required: true,
        //         },
        //     },
        //     messages: {
        //         amount: {
        //             required: "Amount wajib diisi.",
        //             min: "Withdraw tidak boleh kurang dari " + " {0}",
        //             max: "Withdraw tidak boleh melebihi " + " {0}"
        //         },
        //     },
        //     errorPlacement: function(error, element) {
        //         let error_id = element.attr("id")
        //         error.insertAfter($(`span[id=${error_id}-error]`))
        //     },
        //     highlight: function(element, errorClass) {
        //         $(element).closest(".form-control").addClass("is-invalid");
        //     },
        //     unhighlight: function(element, errorClass) {
        //         $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
        //     },
        // });

        // $("form[id=formWithdraw]").on("submit", function(e) {
        //     e.preventDefault()
        //     if ($("form[id=formWithdraw]").valid()) {
        //         transferToMain(() => {
        //             const payloads = {
        //                 _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
        //                 bankDestination: $("select[name=bankDestination]").val(),
        //                 walletOrigin: $("select[name=walletOrigin]").val(),
        //                 amount: $("input[id=withdrawAmount]").val()
        //             }
        //             $.ajax({
        //                 type: "POST",
        //                 url: "https://mahacuan.live/transaction/withdraw",
        //                 data: payloads,
        //                 success: function(response) {
        //                     $('.form-control').removeClass('is-valid').removeClass('is-invalid')
        //                     $("form[id=formWithdraw]")[0].reset()
        //                     if (response.success == true) {
        //                         Swal.fire({
        //                             icon: 'success',
        //                             title: "Berhasil.",
        //                             html: response.message,
        //                             timer: 2000
        //                         })
        //                         $("a[name=refreshWallet]").click()
        //                     } else {
        //                         Swal.fire({
        //                             icon: 'warning',
        //                             title: "Perhatian.",
        //                             html: response.message,
        //                             timer: 2000
        //                         })
        //                     }
        //                 }
        //             });
        //         })
        //     }
        // })
    </script>
    <!-- Info Claim Bonus -->
    <div class="modal custom-popup fade" id="infoClaimBonus" tabindex="-1"
        aria-labelledby="infoClaimBonusLabel" aria-hidden="true">
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
                            <button type="button" data-dismiss="modal"
                                class="btn-custom cancel">Batal</button>
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
                url: "https://mahacuan.live/transaction/claimPromo",
                data: {
                    _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
                            url: "https://mahacuan.live/transaction/deletePromo",
                            data: {
                                _token: "yxHv1nVEH7HaN6cMoKXmi6KLAPk5CYabMFGrelti",
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
