@extends('mahacuan.Login.layout.main_index')

@section('title', 'Lupa Password')

@section('content')

    <main id="main-route">
        <div class="main-content forgot-password">
            <div class="container">
                <div class="forgot-password__container">
                    <div class="page-header">Lupa Password</div>
                    <form id="forgot-form" action="{{ route('apps.lupa_sandi_save') }}" method="POST">
                        @csrf
                        <div class="password-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email**</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="email" name="email" type="email" placeholder="Email*"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nama Pengguna**</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="username" style="text-transform: lowercase" name="username" type="text"
                                            placeholder="Nama Pengguna*" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="old_password" name="old_password" type="password" placeholder="Old Password*"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input class="form-control " value="" minlength="5" maxlength="100"
                                            id="new_password" style="text-transform: lowercase" name="new_password" type="password"
                                            placeholder="New Password" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="password-button">
                                <button name="cancel" class="btn btn-danger batal" type="reset">Batal</button>
                                <button name="reset" class="btn btn-primary reset" type="submit">Atur
                                    Ulang</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>


@endsection

@section('under_body')


@endsection
