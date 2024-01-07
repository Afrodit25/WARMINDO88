@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Profile')

@section('content')

    <main id="main-route">
        <div class="main-content profile">
            <div class="container">
                <ul class="component-tabs nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-item nav-link active mr-0" id="nav-profile-tab" href="javascript:;">
                            <i class="fas fa-user-circle"></i>
                            <span> Profil</span>
                        </a>
                    </li>
                </ul>
                <div class="component-tab-content tab-content">
                    <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                        aria-labelledby="nav-profile-tab">
                        <div class="profile-content">
                            <h3>Profil</h3>
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">Nama Pengguna</div>
                                        <h5>david121</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-status">
                                        <div class="status-content">
                                            <div class="content-title">Status Anggota</div>
                                            <h5>NEW PLAYER</h5>
                                        </div>
                                        <div class="status-medal">
                                            <img src="https://mahacuan.live/themes/1/img/user-status/New Player.svg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">E-mail</div>
                                        <h5>david121@gmail.com</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">Nomor Kontak</div>
                                        <h5>+6281 2991 2883 3</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">Tanggal Lahir</div>
                                        <div id="dateOfBirth">
                                            <button class="btn-custom-sm" href="#" id="showFormDateOfBirth">
                                                Tanggal Lahir Belum diatur.
                                            </button>
                                            <input width="300" class="form-control-sm" name="formDateOfBirth"
                                                id="formDateOfBirth" readonly="readonly" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">Refferal ID</div>
                                        <div>
                                            <span id="refferalCode">WP5K7J96</span>
                                            <a href="#" id="copyReff" class="btn-custom-sm ml-2">
                                                Not Active
                                            </a>
                                            <a href="#" class="btn-custom btn-custom-sm ml-2" data-toggle="modal"
                                                data-target="#kyc-syarat">
                                                Aktivasi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">Rincian Bank</div>
                                        <div>
                                            <a class="btn-custom-sm" href="#" data-toggle="modal"
                                                data-target="#bankDetail">Perlihatkan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-4">
                                    <div class="profile-item">
                                        <div class="item-title">User Game</div>
                                        <div>
                                            <a class="btn-custom-sm" href="#" data-toggle="modal"
                                                data-target="#gameID">Lihat ID</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form id="change-password-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div class="profile-item">
                                            <div class="item-title">Kata Sandi Lama</div>
                                            <input type="password" autocomplete="false" id="oldPassword" name="oldPassword"
                                                class="form-control form-control-sm" placeholder="Kata Sandi Lama">
                                            <label style="font-size: 13px;" class="error" for="oldPassword"
                                                id="oldPassword-error"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="profile-item">
                                            <div class="item-title">Kata Sandi Baru</div>
                                            <input type="password" autocomplete="false" id="password" name="password"
                                                class="form-control form-control-sm" placeholder="Kata Sandi Baru"
                                                aria-autocomplete="list">
                                            <label style="font-size: 13px;" class="error" for="password"
                                                id="password-error"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="profile-item">
                                            <div class="item-title">Konfirmasi Kata Sandi</div>
                                            <input type="password" autocomplete="false" id="passwordConfirmation"
                                                name="passwordConfirmation" class="form-control form-control-sm"
                                                placeholder="Konfirmasi Kata Sandi">
                                            <label style="font-size: 13px;" class="error" for="passwordConfirmation"
                                                id="passwordConfirmation-error"></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="changePassword"
                                    class="btn-submit btn-custom-sm">Kirim</button>
                            </form>
                        </div>
                        <div class="profile-content">
                            <h3>Informasi</h3>
                            <div class="info-content text-center"></div>
                        </div>
                        <div class="profile-content">
                            <div class="my-account__content my-account__holder">
                                <div class="info-content text-center">
                                    <p>Sistem referral yang lama akan diganti dengan sistem referral yang baru bernama
                                        sistem KYC (Know Your Customer). Setiap member yang ingin menjadi referral wajib
                                        memberikan data diri asli melalui form KYC yang tersedia. Member yang baru mendaftar
                                        tidak akan langsung mendapatkan link referral.</p>
                                    <p>Bergabung menjadi referral, klik link dibawah ini.</p>
                                    <a href="#" class="btn-custom btn-custom-sm text-center" data-toggle="modal"
                                        data-target="#kyc-syarat">
                                        Aktivasi
                                    </a>
                                    <div class="col-lg-12">
                                        <img src="https://images.linkcdn.cloud/global/payment/asf.webp"
                                            style="width: 100px !important; margin-top:7px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bank Details -->
        <div class="modal custom-popup fade" id="bankDetail" tabindex="-1" aria-labelledby="bankDetailLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <div class="popup-bank-detail">
                            <div class="bank-detail-header">
                                <h4>Rekening Saya</h4>
                            </div>
                            <div class="bank-detail-info">
                                <h6 class="info-header">Rekening Utama</h6>
                                <div class="bank-account">
                                    <div class="acc-details">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="acc-name">Nama Rek.: <span>david agustian</span></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bank-name">Nama Bank: <span>bca</span></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="acc-number">Nomor Rek.: <span>9128402212</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bank-detail-info">
                                <h6 class="info-header">Rekening Lainnya</h6>
                                <div id="otherBank"></div>
                            </div>
                            <form id="addOptBankForm" novalidate="novalidate">
                                <input type="hidden" name="newData" value="true">
                                <div class="add-bank-form" style="display: block;">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title">Nama Rek.</div>
                                                <input name="optAccountName" class="form-control-sm" type="text"
                                                    value="david agustian" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title">Pilih Bank</div>
                                                <select class="form-control form-control-sm" name="chooseOptionalBank"
                                                    id="chooseOptionalBank">
                                                    <option value="">--- Pilih Bank ---</option>
                                                    <optgroup label="bank">
                                                        <option value="bca" data-id="10487" data-max="10"
                                                            data-min="10">
                                                            BCA
                                                        </option>
                                                        <option value="mandiri" data-id="10566" data-max="13"
                                                            data-min="13">
                                                            MANDIRI
                                                        </option>
                                                        <option value="bni" data-id="10567" data-max="10"
                                                            data-min="10">
                                                            BNI
                                                        </option>
                                                        <option value="bri" data-id="10565" data-max="15"
                                                            data-min="15">
                                                            BRI
                                                        </option>
                                                        <option value="cimb" data-id="10568" data-max="13"
                                                            data-min="12">
                                                            CIMB
                                                        </option>
                                                        <option value="bnc" data-id="16584" data-max="0"
                                                            data-min="0">
                                                            BANK NEO COMMERCE
                                                        </option>
                                                        <option value="jago" data-id="16585" data-max="0"
                                                            data-min="0">
                                                            BANK JAGO
                                                        </option>
                                                        <option value="bsi" data-id="16586" data-max="0"
                                                            data-min="0">
                                                            BSI
                                                        </option>
                                                        <option value="jatim" data-id="16587" data-max="0"
                                                            data-min="0">
                                                            BANK JATIM
                                                        </option>
                                                        <option value="bjb" data-id="16304" data-max="0"
                                                            data-min="0">
                                                            BANK BJB
                                                        </option>
                                                        <option value="ocbc" data-id="16588" data-max="12"
                                                            data-min="12">
                                                            OCBC
                                                        </option>
                                                        <option value="permata" data-id="16589" data-max="0"
                                                            data-min="0">
                                                            PERMATA
                                                        </option>
                                                        <option value="btn" data-id="16590" data-max="0"
                                                            data-min="0">
                                                            BTN
                                                        </option>
                                                    </optgroup>
                                                    <optgroup label="epayment">
                                                        <option value="ovo" data-id="10580" data-max="0"
                                                            data-min="0">
                                                            OVO
                                                        </option>
                                                        <option value="gopay" data-id="10581" data-max="0"
                                                            data-min="0">
                                                            GOPAY
                                                        </option>
                                                        <option value="linkaja" data-id="10582" data-max="0"
                                                            data-min="0">
                                                            LINKAJA
                                                        </option>
                                                        <option value="dana" data-id="10583" data-max="0"
                                                            data-min="0">
                                                            DANA
                                                        </option>
                                                    </optgroup>
                                                </select>
                                                <span id="chooseOptionalBank-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="add-bank-cont">
                                                <div class="title" id="labelAccNumb">Nomor Rek.</div>
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-prepend" id="phoneInputPrepend"
                                                        style="display: none;">
                                                        <span class="input-group-text">+62</span>
                                                    </div>
                                                    <input class="form-control" type="text" name="optAccountNumber"
                                                        id="optAccountNumber" minlength="8" maxlength="20"
                                                        autocomplete="off">
                                                </div>
                                                <span id="optAccountNumber-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bank-button" id="bankButton">
                                    <a class="btn-custom-sm cancel">Batal</a>
                                    <button id="submitBank" class="btn-custom-sm" style="">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Game ID -->
        <div class="modal custom-popup fade" id="gameID" tabindex="-1" aria-labelledby="gameIDLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <div class="modal-body">
                        <div class="popup-game-id">
                            <div class="game-id-header">
                                <h4>User ID Provider</h4>
                            </div>
                            <div class="game-id-details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="game-details-cont">
                                            <div class="title">Pilih Provider</div>
                                            <select id="chooseProvider" class="form-control form-control-sm">
                                                <option value="">--- Pilih Provider ---</option>
                                                <option value="JOK">JOKER</option>
                                            </select>
                                            <span id="chooseProvider-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="game-details-cont">
                                            <div class="title">Nama Pengguna</div>
                                            <input id="usernameProvider" class="form-control form-control-sm"
                                                type="text" value="" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="game-details-cont">
                                            <div class="title">Kata Sandi</div>
                                            <input id="passwordProvider" class="form-control form-control-sm"
                                                type="password">
                                        </div>
                                    </div>
                                </div>
                                <div class="game-id-button">
                                    <div class="container">
                                        <div class="row d-flex justify-content-between">
                                            <button id="setPasswordProvider" class="btn-custom-sm">Ubah Kata
                                                Sandi</button>
                                            <button id="transferProvider" class="btn-custom-sm">Transfer Saldo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal KYC -->
        <div class="modal custom-popup fade" id="kyc-syarat" tabindex="-1" aria-labelledby="modalLabel"
            aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <p>Syarat dan Ketentuan</p>
                        <p>Harap baca syarat dan ketentuan dengan seksama sebelum mengikuti program baru referral kami.</p>
                        <p>1. Saya memberikan informasi pribadi yang akurat dan benar. Saya bertanggungjawab atas
                            ketidakbenaran data yang saya berikan</p>
                        <p>2. Saya menyadari bahwa selama proses pendaftaran afiliasi, saya tidak dapat melakukan pergantian
                            nomor handphone, bank, dan nomor rekening, dan melakukan transaksi withdrawal.</p>
                        <p>3. Saya berkomitmen untuk tidak melakukan tindakan phising (menggunnakan salah satu website untuk
                            mempromosikan website lain)</p>
                        <p>4. Saya berkomitmen untuk tidak melakukan promosi menggunakan link pemerintah atau metode apapun
                            yang tidak berkaitan dan aktivitas yang merugikan.</p>
                        <p>5. Saya menyadari bahwa melanggar syarat dan ketentuan dapat mengakibatkan penutupan akun dan
                            pemblokiran data, serta saya bersedia menerima segala konsekuensi yang timbul akibat pelanggaran
                            tersebut.</p>
                        <p>6. Semua keputusan kami adalah mutlak dan kami berhak melakukan perubahan syarat dan ketentuan
                            ini sewaktu-waktu, harap membaca syarat dan ketentuan ini dengan seksama dari waktu ke waktu</p>
                        <div class="form-group">
                            <label for="term" class="kyc-term" style="cursor: pointer;">
                                <input type="checkbox" name="term" id="term">
                                <span class="text-justify">Saya Setuju</span>
                            </label>
                            <span id="term-error"></span>
                        </div>
                        <a href="#" class="btn btn-block btn-custom-sm" data-dismiss="modal" data-toggle="modal"
                            data-target="#kyc">
                            Aktivasi
                        </a>
                        <div class="col-lg-12" style="text-align: center">
                            <img src="https://images.linkcdn.cloud/global/payment/asf.webp"
                                style="width: 100px !important; margin-top:7px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal custom-popup fade" id="kyc" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>

                    <form name="addKycForm">
                        <div class="modal-body">
                            <h5 class="modal-title">Verifikasi Identitas</h5>
                            <label class="note_addbank">Mohon lengkapi data diri untuk mengaktifkan kode referral, Pastikan
                                data yang di isi valid untuk kebutuhan verifikasi</label>
                            <div class="form-group">
                                <label for="fullName">Nama Lengkap</label>
                                <input type="text" class="form-control" id="fullName" name="fullName"
                                    placeholder="Nama Lengkap" required="">
                                <span id="fullName-error" class="invalidField text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="idType">ID Type</label>
                                <select class="form-control" name="idType" id="idType">
                                    <option value="ktp">KTP</option>
                                </select>
                                <span id="idType-error" class="invalidField text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="idNumber">No. KTP</label>
                                <input type="text" class="form-control" id="idNumber" name="idNumber"
                                    placeholder="No. KTP" required="">
                                <span id="idNumber-error" class="invalidField text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat Sesuai KTP</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Alamat Sesuai KTP" required="">
                                <span id="address-error" class="invalidField text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone">No. HP yang dapat dihubungi</label>
                                <input type="text" class="form-control" id="phone" name="phone" minlength="8"
                                    maxlength="13" placeholder="No. HP yang dapat dihubungi" required="">
                                <span id="phone-error" class="invalidField text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="proof">Upload KTP</label>
                                <input type="file" class="form-control-file" id="proof" name="proof"
                                    placeholder="Upload KTP" required="">
                            </div>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-block btn-custom-sm">Submit</button>
                        </div>
                        <div class="col-lg-12" style="text-align: center">
                            <img src="https://images.linkcdn.cloud/global/payment/asf.webp"
                                style="width: 100px !important;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>



@endsection


@section('under_body')

@endsection
