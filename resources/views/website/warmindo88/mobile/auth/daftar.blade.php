@extends('website.warmindo88.mobile.auth.layout.main')

@section('title', 'Daftar')

@section('content_mobile')

    <main id="main-route">
        <div class="main-content register">
            <div class="container">
                <div class="register__container mb-4">
                    <div class="page-header">Formulir Pendaftaran</div>
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
                    <div class="register-desc">*Nama pengguna harus terdiri dari 6 hingga 15 karakter dan mengunakan alfabet.
                    </div>
                    <form id="register-form" method="POST" action="{{ route('apps_m.daftar_save') }}" data-parsley-validate=""
                        novalidate="novalidate">
                        @csrf
                        <div class="register-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="username_register">Nama Pengguna*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="text" value="" name="username"
                                            id="username_register" name="username" minlength="6" maxlength="15"
                                            placeholder="Nama Pengguna" data-parsley-trigger="keyup"
                                            style="text-transform: lowercase" autocomplete="off" autofocus="">
                                        <span id="username_register-error" style="display: none;"><span
                                                class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="password">Kata Sandi*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="password" name="password" id="password_register"
                                            minlength="8" maxlength="25" placeholder="Kata Sandi"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="password_register-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="rePassword">Konfirmasi Kata Sandi*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            id="password_confirmation" minlength="8" maxlength="25"
                                            placeholder="Konfirmasi Kata Sandi" data-parsley-equalto="#password"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="password_confirmation-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="email">Email*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="email" name="email"
                                            id="email" minlength="6" maxlength="50" placeholder="nama@domain.com"
                                            data-parsley-type="email" data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="email-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="bank">Bank*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select class="form-control" name="bank" id="bank">
                                            <option value="">--- Pilih Bank ---</option>
                                            @foreach ($bankGroup as $model => $banks)
                                                <optgroup label="{{ $model }}">
                                                    @foreach ($banks as $val)
                                                        <option value="{{ $val->id }}" data-max="10" data-min="10">
                                                            {{ $val->bank_name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        <span id="bank-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="phoneInput">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="phone">Nomor Ponsel*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+62</span>
                                            </div>
                                            <input class="form-control" value="" type="text" name="phone"
                                                id="phone" minlength="8" maxlength="20" placeholder="Nomor Ponsel*"
                                                data-parsley-type="number" data-parsley-trigger="keyup"
                                                autocomplete="off">
                                        </div>
                                        <span id="phone-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="accountName">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="accName">Nama Rekening*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="text" name="accName"
                                            id="accName" minlength="2" maxlength="100"
                                            placeholder="Nama Sesuai Rekening" data-parsley-type="text"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="accName-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="accountNumber">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="accNumber">Nomor Rekening*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="text" name="accNumber"
                                            id="accNumber" minlength="" maxlength="99"
                                            placeholder="Nomor Sesuai Rekening" data-parsley-type="number"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="accNumber-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="referral">Referral</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="text" name="referral" id="referral"
                                            minlength="4" maxlength="12"
                                            placeholder="Kode Referral (Boleh di kosongkan)" value=""
                                            autocomplete="off">
                                        <span id="referral-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="term" class="register-terms">
                                    <input type="checkbox" name="term" id="term">
                                    <span>Saya telah berusia lebih dari 21 tahun, telah membaca, dan menerima <u><a
                                                href="/help">syarat dan ketentuan</a></u> yang dipasang di situs ini,
                                        jika Saya melanggar salah satu syarat dan ketentuan, maka situs berhak untuk
                                        menghentikan atau menangguhkan akun Saya.</span>
                                </label>
                                <span id="term-error"></span>
                            </div>
                            <button id="registerButton" class="daftar btn-custom button-submit" type="submit">
                                Daftar
                                <div id="progressButton" class="progress-line"></div>
                            </button>

                        </div>
                    </form>
                </div>
                <div class="game__seo">
                    <div hidden="" id="title-seo">WARMINDO88: Register</div>
                    <div class="seo-mobile showFooter">
                        <div class="register__container mt-5">
                            <div class="seo-mob-content">
                                <h1>Register</h1>
                                <p>Register</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('under_body_mobile')

    <script src="https://mahacuan.support/themes/1/vendor/jquery-validate/jquery.validate.min.js"></script>

    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.support/locale",
                data: {
                    _token: "RtwDyTFSz6HYJLcll4mfFseKTgjOImGGCPvoATTO",
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

            $('#homePopup').modal('hide');


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


        $("form[name=login-form]").on('submit', function(e) {
            e.preventDefault();
            let formData = {};
            $.each($(this).serializeArray(), function(i, val) {
                formData[val.name] = val.value
            });
            formData.usernameLogin = formData.usernameLogin.replace(/\s/g, '');
            let btnTxt = $("button[name=buttonLogin]").html()
            $.ajax({
                url: "https://mahacuan.support/doLogin",
                type: 'POST',
                data: {
                    _token: "RtwDyTFSz6HYJLcll4mfFseKTgjOImGGCPvoATTO",
                    username: formData.usernameLogin,
                    password: formData.passwordLogin
                },
                beforeSend: function() {
                    $("input[name='usernameLogin']").attr('readonly', true)
                    $("input[name='passwordLogin']").attr('readonly', true)
                    $("button[name=buttonLogin]").attr('disabled', true)
                    $("button[name=buttonLogin]").html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                    );
                },
                success: function(data) {
                    window.history.replaceState(null, null, window.location.href);
                    if (data.code == 200) {
                        const alert = {
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            timer: 3000,
                            title: data.message
                        }
                        localStorage.setItem("loginAlert", JSON.stringify(alert));
                        location.reload();
                    } else {
                        let msg = '';
                        $.each(data.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: (msg == '') ?
                                "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                                msg
                        });
                        if (msg == '') {
                            location.reload();
                        }
                        $("input[name='usernameLogin']").removeAttr('readonly')
                        $("input[name='passwordLogin']").removeAttr('readonly')
                        $("input[name='passwordLogin']").val('')
                        $("button[name=buttonLogin]").removeAttr('disabled')
                        $("button[name=buttonLogin]").html(btnTxt)
                    }
                },
                error: function(data) {
                    let msg = '';
                    $.each(data.responseJSON.errors, function(index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                    });
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: (msg == '') ?
                            "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                            msg
                    });
                    if (msg == '') {
                        location.reload();
                    }
                    $("input[name='usernameLogin']").removeAttr('readonly')
                    $("input[name='passwordLogin']").removeAttr('readonly')
                    $("input[name='usernameLogin']").val('')
                    $("input[name='passwordLogin']").val('')
                    $("button[name=buttonLogin]").removeAttr('disabled')
                    $("button[name=buttonLogin]").html(btnTxt)
                }
            });
        });

        function gameAlert() {
            return Swal.fire({
                icon: 'info',
                title: "Perhatian.",
                html: "Silakan login untuk bermain!",
                timerProgressBar: true,
                timer: 5000,
            });
        }
    </script>





    <custom-script>
        <script>
            $(document).ready(function() {

            });

            function loadingBar() {
                let i = 0;
                if (i == 0) {
                    i = 1;
                    let elem = document.getElementById("progressButton");
                    let width = 1;
                    let id = setInterval(frame, 10);

                    function frame() {
                        if (width >= 100) {
                            clearInterval(id);
                            i = 0;
                        } else {
                            width++;
                            elem.style.width = width + "%";
                        }
                    }
                }
            }

            // var timer;
            // $('#username_register').on('focusout', function() {
            //     $("#username_register-error").html(
            //         `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`);
            //     let username = $('#username_register').val()
            //     if (username.length > 6) {
            //         clearTimeout(timer);
            //         timer = setTimeout(userCheck, 2000);
            //     } else {
            //         $("#username_register-error").hide()
            //     }
            // });

            // function userCheck() {
            //     let username = $('#username_register').val()
            //     if (username.length < 6) {
            //         $("#username_register-error").hide();
            //         return false;
            //     }
            //     let url = "{{ route('userCheck') }}"
            //     $("#username_register-error").show();
            //     $.ajax({
            //         type: 'post',
            //         url: url,
            //         dataType: 'json',
            //         data: {
            //             username: username
            //         },
            //         success: function(data) {
            //             if (data.success === false) {
            //                 console.log(data.username)
            //                 $("#username_register").removeClass('is-invalid').addClass('is-valid')
            //                 $("#username_register-error").text(data.error);
            //             } else {
            //                 $("#username_register").removeClass('is-valid').addClass('is-invalid')
            //                 $("#username_register-error").text(data.error);
            //             }
            //         },
            //     });
            // };

            $("#phone").on('input propertychange paste', function() {
                var reg = /^0+/gi;
                if (this.value.match(reg)) {
                    this.value = this.value.replace(reg, '');
                }
            });

            function allowedKey(event, regex) {
                let reg = new RegExp(regex);
                let k = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                if (!reg.test(k)) {
                    event.preventDefault();
                    return false;
                }
            }

            $('#username_register').bind('keypress', function(event) {
                return allowedKey(event, "^[a-zA-Z0-9]+$")
            });
            $('#phone').bind('keypress', function(event) {
                return allowedKey(event, "^[0-9]+$")
            });
            $('#accName').bind('keypress', function(event) {
                return allowedKey(event, "^[a-zA-Z ]+$")
            });
            $('#accNumber').bind('keypress', function(event) {
                return allowedKey(event, "^[0-9]+$")
            });

            jQuery.validator.addMethod("validatePhone", function(value, element) {
                let currency = "IDR"
                if ($('select[id=bank] :selected').parent().attr('label') != "bank") {
                    if (currency == "IDR" && $("input[name=phone]").val()[0] != 8) {
                        return false;
                    } else {
                        return true
                    }
                } else {
                    return true;
                }
            }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");

            $("#register-form").validate({
                onkeyup: false,
                rules: {
                    username: {
                        required: true,
                        minlength: 6
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 8,
                        equalTo: '#password_register'
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    bank: {
                        required: true
                    },
                    phone: {
                        required: true,
                        validatePhone: true
                    },
                    accName: {
                        required: true
                    },
                    accNumber: {
                        required: true
                    },
                    captcha: {
                        required: true
                    },
                    term: {
                        required: true
                    }
                },
                messages: {
                    username: {
                        required: "Nama Pengguna Tidak Boleh Kosong",
                        minlength: "Panjang nama pengguna valid adalah 6 hingga 15"
                    },
                    password: {
                        required: "Kata Sandi tidak boleh kosong",
                        minlength: "Harap masukkan minimal 8 karakter."
                    },
                    password_confirmation: {
                        required: "Kata Sandi tidak boleh kosong",
                        minlength: "Harap masukkan minimal 8 karakter.",
                        equalTo: "Kata Sandi Konfirmasi Harus Sama."
                    },
                    email: {
                        required: "Alamat Email tidak boleh kosong.",
                        email: "Alamat Email tidak sesuai. contoh: john@doe.com"
                    },
                    bank: {
                        required: "Silahkan pilih bank anda.",
                    },
                    phone: {
                        required: "Nomor Telepon tidak boleh kosong.",
                    },
                    accName: {
                        required: "Nama Rekening tidak boleh kosong"
                    },
                    accNumber: {
                        required: "Nomor Rekening tidak boleh kosong"
                    },
                    captcha: {
                        required: "Captcha tidak boleh kosong"
                    },
                    term: {
                        required: "Silahkan centang syarat dan ketentuan."
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

            $("input[id=accNumber]").attr("maxlength", 99)
            $("select[id=bank]").on("change", function(e) {
                e.preventDefault()
                const cat = $('select[id=bank] :selected').parent().attr('label');
                console.log(cat);
                if (cat == "BANK") {
                    $("#accountName").show()
                    $("#accountNumber").show()
                    $("#phoneInput").show()
                    $("input[name=phone]").val("");
                    $("input[name=accNumber]").unbind("keyup");
                    const max = $("select[id=bank]").find(':selected').data('max')
                    const min = $("select[id=bank]").find(':selected').data('min')
                    if (max == 0) {
                        $("input[name=accNumber]").removeAttr("minlength").removeAttr("maxlength")
                        return false
                    }
                    $("input[name=accNumber]").attr("minlength", min).attr("maxlength", max)
                } else if (cat == "TEST") {
                    $("#phoneInput").hide()
                    $("input[name=accNumber]").attr("minlength", 8).attr("maxlength", 13)
                    $("#accountNumber").show()
                    $($("input[name=accNumber]")).on('keyup', function() {
                        $("input[name=phone]").val(this.value)
                    });
                    $("#accountName").show()
                    $("span[id=accName-error]").html("<small>" + "Pastikan nama sesuai dengan bank yang anda pilih." +
                        "</small>")
                    $("span[id=phone-error]").html("<small>" + "Pastikan nomor sesuai dengan bank yang anda pilih." +
                        "</small>")
                } else {
                    $("#accountName").hide()
                    $("#accountNumber").hide()
                    $("#phoneInput").show()
                    $($("#phone")).on('keyup', function() {
                        $("#accNumber").val("0" + this.value)
                    });
                    $("#accName").val($('#username_register').val())
                }
            })
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
