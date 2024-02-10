<div class="modal fade custom-popup" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
            </button>

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulir Login Modal</h5>
            </div>

            <div class="modal-body">
                <div class="modal-body-form">
                    <form id="login-form" method="POST" action="{{ route('apps_m.doLoginwithUsername') }}">
                        @csrf
                        <div class="form-item">
                            <div class="item-title">Nama Pengguna*</div>
                            <input value="" minlength="1" maxlength="25" name="username"
                                style="text-transform: lowercase" type="text" placeholder="Nama Pengguna*"
                                autocomplete="off" required="">
                        </div>
                        <div class="form-item">
                            <div class="item-title">Kata Sandi*</div>
                            <input value="" minlength="5" maxlength="50" name="password" type="password"
                                placeholder="Kata Sandi*" autocomplete="off" required="">
                        </div>
                        <div class="form-forgot">
                            <a href="{{ route('apps_m.lupa_sandi') }}">Lupa Kata Sandi ?</a>
                        </div>
                        <div class="form-button">
                            <button name="buttonLogin" type="submit" class="button-login">Masuk</button>
                            <span>Belum punya akun? <a href="{{ route('apps_m.daftar') }}">Daftar</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
