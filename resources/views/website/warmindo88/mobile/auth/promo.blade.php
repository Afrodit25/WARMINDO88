@extends('website.warmindo88.mobile.auth.layout.main')

@section('title', 'Promo')

@section('content_mobile')
    <main id="main-route">
        <div class="main-content promo">
            <div class="container">
                <nav class="breadcrumb-container">
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item" text="MAHACUAN" url="https://mahacuan.support">
                            <a href="https://mahacuan.support" class="breadcrumb-link" target="_self">WARMINDO88</a>
                        </li>
                        <li class="breadcrumb-item" text="Promotion" url="https://mahacuan.support/promotion">
                            <a href="https://mahacuan.support/promotion" class="breadcrumb-link"
                                target="_self">Promotion</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="container">
                <div class="promo__container">
                    <div class="page-header">Promosi Terbaru</div>
                    <div class="promo__filter" id="promo-filter">
                        <div class="filter-promo active" onclick="filterPromoSelection('all')">All Promo</div>
                    </div>
                    <div class="promo__list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/cashback-mingguan-5-650eb6e54ec7b.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">CASHBACK MINGGUAN 5% </div>
                                        <a href="https://mahacuan.support/promotion/cashback-mingguan-5"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/bonus-rollingan-0-5-650eb6fca16ad.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">BONUS ROLLINGAN 0.5% </div>
                                        <a href="https://mahacuan.support/promotion/bonus-rollingan-0-5"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/lucky-spin-antizonk-650eb655d4919.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">LUCKY SPIN ANTIZONK </div>
                                        <a href="https://mahacuan.support/promotion/lucky-spin-antizonk"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/bonus-new-member-200-654b25155b8e4.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">BONUS NEW MEMBER 200% </div>
                                        <a href="https://mahacuan.support/promotion/bonus-new-member-50"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/bonus-deposit-10-650eb6d3858f0.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">BONUS DEPOSIT 10% </div>
                                        <a href="https://mahacuan.support/promotion/bonus-deposit-10"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 promo-item-holder promo- show">
                                <div class="promo-item">
                                    <div class="promo-img">
                                        <img src="https://images.linkcdn.cloud/V2/00779/promotion/id/garansi-kekalahan-100-650db4364d3e3.webp"
                                            alt="">
                                    </div>
                                    <div class="promo-info">
                                        <div class="info-title">GARANSI KEKALAHAN 100% </div>
                                        <a href="https://mahacuan.support/promotion/garansi-kekalahan-100"
                                            class="info-read btn-custom-sm">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="game">
                    <div class="game__seo">
                        <div hidden="" id="title-seo">WARMINDO88: Promosi</div>
                        <div class="seo-mobile showFooter">
                            <div class="seo-mob-content">
                                <h1>Promosi</h1>
                                <p>Promosi</p>
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





    <custom-script></custom-script>

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
