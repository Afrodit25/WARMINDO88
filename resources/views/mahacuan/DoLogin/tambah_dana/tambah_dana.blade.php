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
        $(document).ready(function() {
            //
            // $("#bankButton").show()
        });

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

        function checkDepoStatus(trxId) {
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/checkDepositStatus",
                data: {
                    _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU",
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

        // function showBankDetail(val) {
        //     $(".walletDest").show()
        //     const cat = $('#bankSelect :selected').parent().attr('label');
        //     const selected = $('#bankSelect').find('option:selected');
        //     const min = selected.data('min')
        //     const max = selected.data('max')
        //     const rate = selected.data('rate')
        //     const code = selected.data('code')
        //     const currency = "IDR"
        //     $('input[id=depositAmount]').attr('min', min)
        //     $('input[id=depositAmount]').attr('max', max)
        //     $('.bankOption').hide();
        //     $('#' + cat + '-' + val).show();
        //     if (cat == "phonecredit") {
        //         $("#depositAmount").attr("placeholder", "...")
        //         $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
        //         if (rate == 100) {
        //             $(".walletDest").hide()
        //             $("select[name=walletDestination]").val("main").trigger('change')
        //         }
        //         $('label[id=notesLabel]').html("Serial Number / <br/> Nomor pengirim")
        //         $('[id=chooseMode]').addClass("input-group")
        //         $('[id=chooseMode] > .input-group-prepend').show()
        //         $("span[id=chooseModeText]").text("SN")
        //         $("#notes").attr("placeholder", "Serial Number")
        //         $("span[id=chooseModeSN]").on("click", function(e) {
        //             $("span[id=chooseModeText]").text("SN")
        //             $("input[name=phoneCreditMode]").val("")
        //             $("#notes").attr("placeholder", "Serial Number")
        //         })
        //         $("span[id=chooseModeHP]").on("click", function(e) {
        //             $("span[id=chooseModeText]").text("HP")
        //             $("input[name=phoneCreditMode]").val("91dc2695-4dcd-4be2-90dd-e7d8387b3e35")
        //             $("#notes").attr("placeholder", "Nomor pengirim")
        //         })
        //     } else if (cat == "crypto") {
        //         $("#amountDesc").text("Jumlah deposit Anda akan diproses sesuai dengan rate yang tertera")
        //         $("#depositAmount").attr("placeholder", code.toUpperCase())
        //     } else {
        //         $("#amountDesc").text("Contoh: setoran deposit 50.000, tulis Rp 50 ( 3 digit dihilangkan )")
        //         $("#depositAmount").attr("placeholder", "...")
        //         $('label[id=notesLabel]').text("Keterangan")
        //         $('[id=chooseMode]').removeClass("input-group")
        //         $('[id=chooseMode] > .input-group-prepend').hide()
        //         $("#notes").attr("placeholder", "Keterangan")
        //     }
        // }

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




        $('#proof').bind('change', function() {
            const imgSize = (this.files[0].size);
            if (imgSize > 1048576) {
                Swal.fire("Perhatian.", "Ukuran gambar harus kurang dari 1Mb", 'error');
                $(this).val("");
            }
        });

        $("#formDeposit").validate({
            onkeyup: false,
            rules: {
                bankSelect: {
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
                bankSelect: {
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

        // $("form[id=formDeposit]").on("submit", function(e) {
        //     e.preventDefault()
        //     if (serialNumberValidate() == false) {
        //         return false
        //     }
        //     const files = $("input[name=proof]")[0].files;
        //     let formData = new FormData();
        //     if (files.length > 0) {
        //         formData.append('proof', files[0]);
        //     }
        //     formData.append('_token', "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU");
        //     formData.append('bankMember', $("select[name=bankMember]").val());
        //     formData.append('bank', $("select[name=bank]").val());
        //     formData.append('walletDestination', $("select[name=walletDestination]").val());
        //     formData.append('amount', $("input[name=amount]").val());
        //     formData.append('phoneCreditMode', $("input[name=phoneCreditMode]").val());
        //     formData.append('notes', $("input[name=notes]").val());
        //     $.ajax({
        //         type: "POST",
        //         url: "https://mahacuan.live/transaction/deposit",
        //         data: formData,
        //         processData: false,
        //         contentType: false,
        //         success: function(response) {
        //             $('.form-control').removeClass('is-valid').removeClass('is-invalid')
        //             $("form[id=formDeposit]")[0].reset()
        //             $('.bankOption').hide();
        //             $(".walletDest").hide()
        //             if (response.success == true) {
        //                 Swal.fire({
        //                     icon: 'success',
        //                     title: "Berhasil.",
        //                     html: response.message,
        //                     timerProgressBar: true,
        //                     showButtonConfirm: false,
        //                     timer: 2000,
        //                 }).then(() => {
        //                     if (response.data.qrcode) {
        //                         if (response.data.redirectUrl != null) {
        //                             setTimeout(() => {
        //                                 window.open(response.data.redirectUrl);
        //                                 return false
        //                             });
        //                         } else {
        //                             setTimeout(() => {
        //                                 return $.showPaydiaQr(response.data.rawQr, true)
        //                             });
        //                         }
        //                     } else {
        //                         return false
        //                     }
        //                 });
        //             } else {
        //                 Swal.fire({
        //                     icon: 'warning',
        //                     title: "Perhatian.",
        //                     html: response.message,
        //                     timerProgressBar: true,
        //                     showButtonConfirm: false,
        //                     timer: 2000
        //                 })
        //             }
        //         },
        //         error: (e) => {
        //             $('.form-control').removeClass('is-valid').removeClass('is-invalid')
        //             $("form[id=formDeposit]")[0].reset()
        //             $('.bankOption').hide();
        //             $(".walletDest").hide()
        //             let msg = '';
        //             $.each(e.responseJSON.errors, function(index, valueOfElement) {
        //                 msg += valueOfElement + '<br />'
        //             });
        //             Swal.fire({
        //                 icon: 'error',
        //                 title: "Perhatian.",
        //                 html: (msg == '') ?
        //                     "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
        //                     msg,
        //                 timerProgressBar: true,
        //                 showButtonConfirm: false,
        //                 timer: 2000
        //             });
        //             if (msg == '') {
        //                 location.reload();
        //             }
        //         }
        //     });
        // });

        // $("button[id=submitBank]").hide()
        // $('.add-bank').click(function() {
        //     $('.form-control').removeClass('is-valid').removeClass('is-invalid')
        //     $('input[name="newData"]').val("true")
        //     $("form[id=addOptBankForm]")[0].reset()
        //     $('.add-bank-form').slideToggle();
        //     const $this = $(this);
        //     $this.toggleClass('add-bank');
        //     if ($this.hasClass('add-bank')) {
        //         $("button[id=submitBank]").hide()
        //         $this.text("Tambah Rek.");
        //     } else {
        //         $("button[id=submitBank]").show()
        //         $this.text("Batal");
        //     }
        // });

        // $("form[id=addOptBankForm]").validate({
        //     onkeyup: false,
        //     rules: {
        //         chooseOptionalBank: {
        //             required: true
        //         },
        //         optAccountNumber: {
        //             required: true,
        //             validatePhone: true
        //         },
        //     },
        //     messages: {
        //         chooseOptionalBank: {
        //             required: "Bank wajib diisi.",
        //         },
        //         optAccountNumber: {
        //             required: "Account Number wajib diisi.",
        //         }
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
        //     }
        // });

        // $('form[id=addOptBankForm]').on('submit', function(e) {
        //     e.preventDefault()
        //     let endpoint = "https://mahacuan.live/profile/optionalBankCreate";
        //     if ($('input[name="newData"]').val() != "true") {
        //         endpoint = "https://mahacuan.live/profile/optionalBankCreate/" + $('input[name="newData"]').val();
        //     }
        //     let sel = document.getElementById('chooseOptionalBank');
        //     let selected = sel.options[sel.selectedIndex];
        //     let choosed = selected.getAttribute('data-id');
        //     const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
        //     $.ajax({
        //         type: "POST",
        //         url: endpoint,
        //         data: {
        //             _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU",
        //             accountName: $('input[name=optAccountName]').val(),
        //             bank: choosed,
        //             accountNumber: (cat == "bank") ? $('input[name=optAccountNumber]').val() : '0' + $(
        //                 'input[name=optAccountNumber]').val()
        //         },
        //         success: function(response) {
        //             $('input[name="newData"]').val("true")
        //             $('.cancel').click();
        //             if (response.success == true) {
        //                 optionalBankList()
        //                 setTimeout(() => {
        //                     location.reload()
        //                 }, 1000);
        //             } else {
        //                 Swal.fire({
        //                     toast: true,
        //                     position: 'top-end',
        //                     icon: 'error',
        //                     title: response.message
        //                 });
        //             }
        //         }
        //     })
        // })

        // $('#bankDetail').on('show.bs.modal', () => {
        //     const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
        //     $("#phoneInputPrepend").hide()
        //     optionalBankList()
        // })

        // $("select[id=chooseOptionalBank]").on("change", function(e) {
        //     e.preventDefault()
        //     const cat = $('select[id=chooseOptionalBank] :selected').parent().attr('label');
        //     if (cat == "bank") {
        //         $("#phoneInputPrepend").hide()
        //         $("#labelAccNumb").text("Nomor Rek.");
        //         const max = $("select[id=chooseOptionalBank]").find(':selected').data('max')
        //         const min = $("select[id=chooseOptionalBank]").find(':selected').data('min')
        //         if (max == 0) {
        //             $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
        //             return false
        //         }
        //         $("input[name=optAccountNumber]").attr("minlength", min).attr("maxlength", max)
        //     } else {
        //         $("#phoneInputPrepend").show()
        //         $("#labelAccNumb").text("Nomor Ponsel*");
        //         $("input[name=optAccountNumber]").removeAttr("minlength").removeAttr("maxlength")
        //         $("input[name=optAccountNumber]").on('input propertychange paste', function() {
        //             var reg = /^0+/gi;
        //             if (this.value.match(reg)) {
        //                 this.value = this.value.replace(reg, '');
        //             }
        //         });
        //     }
        // })
        // jQuery.validator.addMethod("validatePhone", function(value, element) {
        //     if ($('select[id=chooseOptionalBank] :selected').parent().attr('label') != "bank" && $(
        //             "input[name=optAccountNumber]").val()[0] != 8) {
        //         return false;
        //     } else {
        //         return true;
        //     }
        // }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");

        // function optionalBankList() {
        //     $.ajax({
        //         type: "POST",
        //         url: "https://mahacuan.live/profile/optionalBankList",
        //         data: {
        //             _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU"
        //         },
        //         success: function(response) {
        //             $("#bankButton").show()
        //             if (response.data == null) {
        //                 $("#otherBank").load(location.href + " #otherBank");
        //             } else {
        //                 if (response.data.length == 5) {
        //                     $("#bankButton").hide()
        //                 }
        //             }
        //             if (response.success == true) {
        //                 let data = response.data
        //                 let html = ''
        //                 $.each(data, function(key, value) {
        //                     html += otherBankTemplate(value);
        //                 });
        //                 $("#otherBank").html(html);
        //             }
        //         }
        //     });
        // }

        // function otherBankTemplate(value) {
        //     return `
    //     <div class="bank-account">
    //     <div class="acc-details">
    //         <div class="row">
    //             <div class="col-lg-12">
    //                 <div class="acc-name">Nama Rek.: <span>${value.accountName}</span></div>
    //             </div>
    //             <div class="col-lg-6">
    //                 <div class="bank-name">Nama Bank: <span>${value.bank.toUpperCase()}</span></div>
    //             </div>
    //             <div class="col-lg-6">
    //                 <div class="acc-number">Nomor Rek.: <span>${value.accountNumber}</span></div>
    //             </div>
    //         </div>
    //     </div>
    //     </div>
    //     `;
        // }

        // $('a[name=copyAddress]').on('click', function(e) {
        //     e.preventDefault();
        //     const code = this.id;
        //     const htmlExist = $(this).html();
        //     const buttonText = $("span[name=buttonCopy]").html()
        //     const addressText = $(`#addressText-${code}`)[0];
        //     $("span[name=buttonCopy]").html(
        //         `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> <span class="loading"></span>`
        //     )
        //     let temp = document.createRange();
        //     temp.selectNodeContents(addressText)
        //     let select = window.getSelection();
        //     select.removeAllRanges();
        //     select.addRange(temp)
        //     document.execCommand("copy");
        //     setTimeout(() => {
        //         Swal.fire({
        //             toast: true,
        //             position: 'top-end',
        //             icon: 'success',
        //             title: "Berhasil di copy.."
        //         });
        //         $(this).html(htmlExist)
        //         $("span[name=buttonCopy]").html(buttonText)
        //     }, 1000)
        // });
    </script>

@endsection
