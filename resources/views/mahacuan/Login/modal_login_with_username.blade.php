<header class="header">
    <div id="login-widget">
        <div class="widget-form">
            <div class="minimize" data-toggle="collapse" href="#collapseheader" role="button" aria-expanded="true"
                aria-controls="collapseheader"><button class="icon-minimize" title="Minimize"></button></div>
            <div class="widget-form__logo">
                <a href="{{ route('apps.index') }}">
                    <img alt="WebsiteLogo"
                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/logo/warmindo88.png">
                </a>
            </div>
            <div class="widget-form__login collapse show" id="collapseheader">
                <div class="login-title">
                    <h4>Login Form</h4>
                </div>
                <div class="login-form-cont">
                    {{-- <form id="login-form" method="POST" action="{{ route('login_apps') }}"> --}}
                    <form id="login-form" method="POST" action="{{ route('apps.doLoginwithUsername') }}">
                        @csrf
                        <input id="username" name="username" type="text" placeholder="Username*" autocomplete="off"
                            style="text-transform: lowercase" required>
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                        <input id="password" name="password" type="password" placeholder="Kata Sandi*"
                            autocomplete="off" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <button class="btn-custom" type="submit" id="btnLogin" class="btn-masuk">Masuk</button>
                    </form>
                    <div class="login-forgot">
                        <a href="{{ route('apps.lupa_sandi') }}"><i class="fas fa-question-circle"></i> Lupa Kata Sandi
                            ?</a>
                    </div>
                </div>
                <div class="login-bottom">
                    <h6>Belum punya akun?</h6>
                    <a id="register" href="{{ route('apps.register') }}"><button class="btn-custom">Daftar</button></a>
                </div>
            </div>
        </div>
    </div>
</header>
