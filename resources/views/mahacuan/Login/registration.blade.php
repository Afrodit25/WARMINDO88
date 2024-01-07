@extends('mahacuan.Login.layout.main_index')

@section('title', 'Index')

@section('content')

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
                <div class="register-desc">*Nama pengguna harus terdiri dari 6 hingga 15 karakter dan mengunakan
                    alfabet.</div>
                <form id="register-form" method="POST" action="{{ route('apps.register_save') }}"
                    data-parsley-validate>
                    @csrf
                    <div class="register-form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="username_register">Nama Pengguna*</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" value="" name="username"
                                        id="username_register" minlength="6" maxlength="15"
                                        placeholder="Nama Pengguna" data-parsley-trigger="keyup"
                                        style="text-transform: lowercase" autocomplete="off" autofocus>
                                    <span id="username_register-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="password">Kata Sandi*</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control" type="password" name="password"
                                        id="password_register" minlength="8" maxlength="25"
                                        placeholder="Kata Sandi" data-parsley-trigger="keyup" autocomplete="off">
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
                                        id="email" minlength="6" maxlength="50"
                                        placeholder="nama@domain.com" data-parsley-type="email"
                                        data-parsley-trigger="keyup" autocomplete="off">
                                    <span id="email-error"></span>
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
                                            id="phone" minlength="8" maxlength="20"
                                            placeholder="Nomor Ponsel*" data-parsley-type="number"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                            <span id="phone-error"></span>
                                        </div>
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
                                                    <option value="{{ $val->id }}" data-max="10" data-min="10">{{ $val->bank_name }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                    <span id="bank-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="accountName">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="rek_name">Nama Rekening*</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control" value="" type="text" name="rek_name"
                                        id="rek_name" minlength="2" maxlength="100"
                                        placeholder="Nama Sesuai Rekening" data-parsley-type="text"
                                        data-parsley-trigger="keyup" autocomplete="off">
                                    <span id="rek_name-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="accountNumber">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="accNumber">Nomor Rekening*</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control" value="" type="text"
                                        name="accNumber" id="accNumber" minlength="" maxlength=""
                                        placeholder="Nomor Sesuai Rekening" data-parsley-type="number"
                                        data-parsley-trigger="keyup" autocomplete="off">
                                    <span id="accNumber-error"></span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="referral">Referral</label>
                                </div>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="referral"
                                        id="referral" minlength="4" maxlength="12"
                                        placeholder="Kode Referral (Boleh di kosongkan)" value=""
                                        autocomplete="off">
                                    <span id="referral-error"></span>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <div class="row">
                                <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                    <label for="captcha">Captcha*</label>
                                </div>
                                <div class="col-lg-7">
                                    <div class="cap-img">
                                        <div class="cap-content">
                                            <input type="hidden" name="_token"
                                                value="kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL">
                                            <img id="captcha" src="{{ asset('/') }}template_mahacuan/captcha/defaultf9b8.png?mqDuOZFE">
                                            <button id="refreshCaptcha" class="btn btn-sm btn-info mr-4">
                                                <i class="fas fa-sync-alt"></i>
                                            </button>
                                        </div>
                                        <input class="form-control input-code" type="text" name="captcha"
                                            id="captcha" placeholder="Captcha" data-parsley-type="number"
                                            data-parsley-trigger="keyup">
                                    </div>
                                    <span id="captcha-error"></span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="term" class="register-terms">
                                <input type="checkbox" name="term" id="term">
                                <span>Saya telah berusia lebih dari 21 tahun, telah membaca, dan menerima <u><a
                                            href="help.html">syarat dan ketentuan</a></u> yang dipasang di situs
                                    ini, jika Saya melanggar salah satu syarat dan ketentuan, maka situs berhak
                                    untuk menghentikan atau menangguhkan akun Saya.</span>
                            </label>

                        </div>
                        <button id="registerButton" class="daftar btn-custom button-submit" type="submit">
                            Daftar
                            <div id="progressButton" class="progress-line"></div>
                        </button><br><br>
                        <span id="term-error"></span>
                </form>
            </div>
        </div>
        <div class="game__seo">
            <div hidden id="title-seo">Warmindo88 - Register</div>
            <div class="seo-content showFooter">
                <div class="register__container mt-5">
                    <h1>Register</h1>
                    <p>Register</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection


@section('under_body')
<custom-script>
    <script>
        // $(document).ready(function() {
        //     $('#refreshCaptcha').click(function(e) {
        //         e.preventDefault();
        //         $('#captcha').attr('src', window.location.origin + '/captcha/default?' + Math.random())
        //     });
        // });

        // function loadingBar() {
        //     let i = 0;
        //     if (i == 0) {
        //         i = 1;
        //         let elem = document.getElementById("progressButton");
        //         let width = 1;
        //         let id = setInterval(frame, 10);

        //         function frame() {
        //             if (width >= 100) {
        //                 clearInterval(id);
        //                 i = 0;
        //             } else {
        //                 width++;
        //                 elem.style.width = width + "%";
        //             }
        //         }
        //     }
        // }

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

        function userCheck() {
            let username = $('#username_register').val()
            if (username.length < 6) {
                $("#username_register-error").hide();
                return false;
            }
            let url = "{{ route('apps.checkUsername') }}"
            $("#username_register-error").show();
            $.ajax({
                type: 'post',
                url: url,
                data: {
                    // _token: "kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL",
                    username: username
                },
                success: function(data) {
                    if (data.status === false) {
                        $("#username_register").removeClass('is-invalid').addClass('is-valid')
                        $("#username_register-error").text(data.error);
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: ""+val+".",
                        });
                    } else {
                        $("#username_register").removeClass('is-valid').addClass('is-invalid')
                        $("#username_register-error").text(data.error);
                    }
                },
            });
        };

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
        $('#rek_name').bind('keypress', function(event) {
            return allowedKey(event, "^[a-zA-Z ]+$")
        });
        $('#accNumber').bind('keypress', function(event) {
            return allowedKey(event, "^[0-9]+$")
        });



        jQuery.validator.addMethod("validatePhone", function(value, element) {
                if ($("input[name=phone]").val()[0] != 8) {
                    return false;
                } else {
                    return true
                }
        }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");

        // $(document).on("submit", "#register-form", function() {
        //     var e = this;

        //     $(this).find("[type='submit']").html("Register...");

        //     $.ajax({
        //         url: $(this).attr('action'),
        //         data: $(this).serialize(),
        //         type: "POST",
        //         dataType: 'json',
        //         success: function (data) {

        //             $(e).find("[type='submit']").html("Register");

        //             if (data.status) {
        //                 window.location = data.redirect;
        //             }else{

        //                 $(".alert").remove();
        //                 $.each(data.errors, function (key, val) {
        //                     $("#errors-list").append("<div class='alert alert-danger'>" + val + "</div>");
        //                 });
        //             }

        //         }
        //     });

        //     return false;
        // });

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
                rek_name: {
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
                rek_name: {
                    required: "Nama Rekening tidak boleh kosong"
                },
                accNumber: {
                    required: "Nomor Rekening tidak boleh kosong"
                },
                // captcha: {
                //     required: "Captcha tidak boleh kosong"
                // },
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
        // $("select[id=bank]").on("change", function(e) {
        //     e.preventDefault()
        //     const cat = $('select[id=bank] :selected').parent().attr('label');
        //     if (cat == "BANK") {
        //         $("#accountName").show()
        //         $("#accountNumber").show()
        //         $("input[name=phone]").val("");
        //         $("input[name=accNumber]").unbind("keyup");
        //         const max = $("select[id=bank]").find(':selected').data('max')
        //         const min = $("select[id=bank]").find(':selected').data('min')
        //         if (max == 0) {
        //             $("input[name=accNumber]").removeAttr("minlength").removeAttr("maxlength")
        //             return false
        //         }
        //         $("input[name=accNumber]").attr("minlength", min).attr("maxlength", max)
        //     } else if (cat == "E-WALLET") {
        //         $("input[name=accNumber]").attr("minlength", 8).attr("maxlength", 13)
        //         $("#accountNumber").show()
        //         $($("input[name=accNumber]")).on('keyup', function() {
        //             $("input[name=phone]").val(this.value)
        //         });
        //         $("#accountName").show()
        //         $("span[id=rek_name-error]").html("<small>" + "Pastikan nama sesuai dengan bank yang anda pilih." +
        //             "</small>")
        //     } else {
        //         $("#accountName").hide()
        //         $("#accountNumber").hide()
        //         $("#phoneInput").show()
        //         $($("#phone")).on('keyup', function() {
        //             $("#accNumber").val("0" + this.value)
        //         });
        //         $("#accName").val($('#username_register').val())
        //     }
        // })
    </script>
</custom-script>


@endsection
