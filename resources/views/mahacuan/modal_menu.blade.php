@foreach ($data as $val)
    <header class="header" data-playid="8yyj39gl8u779" data-username="{{ Auth::user()->name }}" data-currency="IDR"
        data-wslink="wss://socket-fe.linkcdn.cloud/wsfev2">
        <div id="login-widget" class="">
            <div class="widget-form">
                <div class="minimize collapsed" data-toggle="collapse" href="#collapseheader" role="button"
                    aria-expanded="false" aria-controls="collapseheader"><button class="icon-minimize"
                        title="Minimize"></button></div>
                <div class="widget-form__logo">
                    <a href="{{ route('apps.index') }}">
                        <img alt="WebsiteLogo"
                            src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/logo/warmindo88.png">
                    </a>
                </div>
                <div class="widget-form__member collapse" id="collapseheader" style="">
                    <div class="member-title">
                        <h6>Hi, <span><a href="{{ route('apps.profile') }}">{{ Auth::user()->name }}</a></span>
                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/user-status/New Player.svg"
                                alt="">
                        </h6>
                    </div>
                    <div class="member-balance">
                        <h6>TOTAL SALDO :
                            <a data-toggle="modal" data-target="#accountBalance">
                                <span class="mr-1">IDR</span><span id="mainBalance"
                                    name="mainBalance">{{ $val->saldo_deposit }}.00</span>
                            </a>
                        </h6>
                    </div>
                    <div class="member-menu">
                        <div class="menu-item">
                            <a href="{{ route('apps.tambah_dana') }}">
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/deposit.svg"
                                        alt="">
                                </div>
                                <div class="name">Tambah Dana</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('apps.tarik_dana') }}">
                            {{-- <a href="#"> --}}
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/withdraw.svg"
                                        alt="">
                                </div>
                                <div class="name">Tarik Dana</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('apps.bonus') }}">
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/history.svg"
                                        alt="">
                                </div>
                                <div class="name">Bonus</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('apps.memo') }}">
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/memo.svg"
                                        alt="">
                                    <div class="unread-notif"><span>0</span></div>
                                </div>
                                <div class="name">Memo</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('apps.profile') }}">
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/profile.svg"
                                        alt="">
                                </div>
                                <div class="name">Profil</div>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a href="{{ route('logout_mahacuan') }}">
                                <div class="icon">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/login-widget/logout.svg"
                                        alt="">
                                </div>
                                <div class="name">Keluar</div>
                            </a>
                        </div>
                    </div>
                    <div class="member-bottom">
                        <a href="{{ route('apps.feedback') }}">
                            <div class="btm-icon">
                                <i class="fas fa-comments" title="Laporan ke Pusat"></i>
                            </div>
                        </a>
                        <a href="{{ route('apps.help') }}">
                            <div class="btm-icon">
                                <i class="fas fa-file-alt" title="Bantuan"></i>
                            </div>
                        </a>
                        <a data-toggle="modal" data-target="#voucherModal">
                            <div class="btm-icon">
                                <i class="fas fa-ticket-alt" title="Voucher"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endforeach
