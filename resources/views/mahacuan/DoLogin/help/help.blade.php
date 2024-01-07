@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'Help')

@section('content')

    <main id="main-route">
        <div class="main-content help">
            <div class="container">
                <div class="page-header">Bantuan</div>
                <div class="help__content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" name="helpType" id="v-pills-cara-bermain-tab" data-toggle="pill"
                                    href="#v-pills-cara-bermain" role="tab" aria-controls="v-pills-cara-bermain"
                                    aria-selected="true">Cara Bermain</a>
                                <a class="nav-link" name="helpType" id="v-pills-faq-tab" data-toggle="pill"
                                    href="#v-pills-faq" role="tab" aria-controls="v-pills-faq"
                                    aria-selected="true">FAQ</a>
                                <a class="nav-link" name="helpType" id="v-pills-info-khusus-tab" data-toggle="pill"
                                    href="#v-pills-info-khusus" role="tab" aria-controls="v-pills-info-khusus"
                                    aria-selected="true">Info Khusus</a>
                                <a class="nav-link active" name="helpType" id="v-pills-info-umum-tab" data-toggle="pill"
                                    href="#v-pills-info-umum" role="tab" aria-controls="v-pills-info-umum"
                                    aria-selected="true">Info Umum</a>
                                <a class="nav-link" name="helpType" id="v-pills-regulation-tab" data-toggle="pill"
                                    href="#v-pills-regulation" role="tab" aria-controls="v-pills-regulation"
                                    aria-selected="true">Regulation</a>
                                <a class="nav-link" name="helpType" id="v-pills-tentang-kami-tab" data-toggle="pill"
                                    href="#v-pills-tentang-kami" role="tab" aria-controls="v-pills-tentang-kami"
                                    aria-selected="true">Tentang Kami</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade" name="helpDesc" id="v-pills-cara-bermain" role="tabpanel"
                                    aria-labelledby="v-pills-cara-bermain-tab">
                                    <div class="help-header">Cara Bermain</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse" data-target="#cara-bermain"
                                                    aria-expanded="true" aria-controls="collapseOne">Cara Bermain</div>
                                            </div>
                                            <div id="cara-bermain" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" name="helpDesc" id="v-pills-faq" role="tabpanel"
                                    aria-labelledby="v-pills-faq-tab">
                                    <div class="help-header">FAQ</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse" data-target="#faq"
                                                    aria-expanded="true" aria-controls="collapseOne">FAQ</div>
                                            </div>
                                            <div id="faq" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" name="helpDesc" id="v-pills-info-khusus" role="tabpanel"
                                    aria-labelledby="v-pills-info-khusus-tab">
                                    <div class="help-header">Info Khusus</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#info-khusus" aria-expanded="true"
                                                    aria-controls="collapseOne">Info Khusus</div>
                                            </div>
                                            <div id="info-khusus" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" name="helpDesc" id="v-pills-info-umum"
                                    role="tabpanel" aria-labelledby="v-pills-info-umum-tab">
                                    <div class="help-header">Info Umum</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#cara-dapatkan-bonus" aria-expanded="true"
                                                    aria-controls="collapseOne">Cara Dapatkan Bonus</div>
                                            </div>
                                            <div id="cara-dapatkan-bonus" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#cara-deposit" aria-expanded="true"
                                                    aria-controls="collapseOne">Cara Deposit</div>
                                            </div>
                                            <div id="cara-deposit" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#cara-transfer-ke-bank-lain" aria-expanded="true"
                                                    aria-controls="collapseOne">Cara Transfer ke Bank Lain</div>
                                            </div>
                                            <div id="cara-transfer-ke-bank-lain" class="collapse"
                                                aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#cara-withdraw" aria-expanded="true"
                                                    aria-controls="collapseOne">Cara Withdraw</div>
                                            </div>
                                            <div id="cara-withdraw" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" name="helpDesc" id="v-pills-regulation" role="tabpanel"
                                    aria-labelledby="v-pills-regulation-tab">
                                    <div class="help-header">Regulation</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse" data-target="#peraturan"
                                                    aria-expanded="true" aria-controls="collapseOne">Peraturan</div>
                                            </div>
                                            <div id="peraturan" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" name="helpDesc" id="v-pills-tentang-kami" role="tabpanel"
                                    aria-labelledby="v-pills-tentang-kami-tab">
                                    <div class="help-header">Tentang Kami</div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#cara-pembayaran" aria-expanded="true"
                                                    aria-controls="collapseOne">Cara Pembayaran</div>
                                            </div>
                                            <div id="cara-pembayaran" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#hubungi-kami" aria-expanded="true"
                                                    aria-controls="collapseOne">Hubungi Kami</div>
                                            </div>
                                            <div id="hubungi-kami" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse" data-target="#keamanan"
                                                    aria-expanded="true" aria-controls="collapseOne">Keamanan</div>
                                            </div>
                                            <div id="keamanan" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse" data-target="#penolakan"
                                                    aria-expanded="true" aria-controls="collapseOne">Penolakan</div>
                                            </div>
                                            <div id="penolakan" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion help-accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <div class="help-toggle" data-toggle="collapse"
                                                    data-target="#syarat-dan-ketentuan" aria-expanded="true"
                                                    aria-controls="collapseOne">Syarat Dan Ketentuan</div>
                                            </div>
                                            <div id="syarat-dan-ketentuan" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">

                                                    <p class="last-update"><em>Terakhir di Update : </em>
                                                        2023-01-01 00:00:00
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content game">
            <div class="container">
                <div class="game__seo">
                    <div hidden="" id="title-seo">WARMINDO88: Help</div>
                    <div class="seo-content showFooter">
                        <h1>Help</h1>
                        <p>Help</p>
                    </div>
                </div>
            </div>
        </div>
    </main>



@endsection

@section('under_body')



@endsection
