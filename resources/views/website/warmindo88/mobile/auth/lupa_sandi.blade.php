@extends('website.warmindo88.mobile.auth.layout.main')

@section('title', 'Forgot Password')

@section('content_mobile')

    <main id="main-route">
        <div class="main-content forgot-password">
            <div class="container">
                <div class="forgot-password__container">
                    <div class="page-header">Lupa Password</div>
                    <form id="forgot-form" action="{{ route('apps_m.lupa_sandi_save') }}" method="POST">
                        @csrf
                        <div class="password-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email**</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="email" name="email" type="email" placeholder="Email*"
                                            autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Pengguna**</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="username" style="text-transform: lowercase" name="username" type="text"
                                            placeholder="Nama Pengguna*" autocomplete="off" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="password-button">
                                <button name="cancel" class="btn btn-danger batal" type="reset">Batal</button>
                                <button name="reset" class="btn btn-primary reset" type="submit">Atur Ulang</button>
                            </div>
                        </div>
                    </form>
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

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.support/locale",
                data: {
                    _token: "uiETyruejIcz8sKxD4HQqNTLv2xLAAKEt0zSYvAq",
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
                    _token: "uiETyruejIcz8sKxD4HQqNTLv2xLAAKEt0zSYvAq",
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
                $('#refreshCaptchaForgot').click(function(e) {
                    e.preventDefault();
                    $('#captchaForgot').attr('src', 'captcha/default?' + Math.random())
                });
            });
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
