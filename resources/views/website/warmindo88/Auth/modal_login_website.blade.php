<header class="header">
    <div id="login-widget">
        <div class="widget-form">
            <div class="minimize" data-toggle="collapse" href="#collapseheader" role="button"
                aria-expanded="true" aria-controls="collapseheader"><button class="icon-minimize"
                    title="Minimize"></button></div>
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
                    <form id="login-form" name="login-form">
                        <input id="usernameInput" value="" name="usernameLogin" type="text"
                            placeholder="Nama Pengguna*" autocomplete="off" style="text-transform: lowercase"
                            required>
                        <input id="passwordInput" value="" name="passwordLogin" type="password"
                            placeholder="Kata Sandi*" autocomplete="off" required>
                        <button class="btn-custom" name="buttonLogin" type="submit"
                            class="btn-masuk">Masuk</button>
                    </form>
                    <div class="login-forgot">
                        <a href="forgot-password.html"><i class="fas fa-question-circle"></i> Lupa Kata Sandi
                            ?</a>
                    </div>
                </div>
                <div class="login-bottom">
                    <h6>Belum punya akun?</h6>
                    <a id="register" href="register.html"><button class="btn-custom">Daftar</button></a>
                </div>
            </div>
        </div>
    </div>
</header>
