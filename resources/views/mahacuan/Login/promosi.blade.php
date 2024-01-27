@extends('mahacuan.Login.layout.main_index')

@section('title', 'Promo')

@section('content')
<main id="main-route">
    <div class="main-content promo">
        <div class="container">
            <nav class="breadcrumb-container">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item" text="MAHACUAN" url="{{ route('apps.index') }}">
                        <a href="{{ route('apps.index') }}" class="breadcrumb-link" target="_self">MAHACUAN</a>
                    </li>
                    <li class="breadcrumb-item" text="Promotion" url="{{ route('apps.promo') }}">
                        <a href="{{ route('apps.promo') }}" class="breadcrumb-link" target="_self">Promotion</a>
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
                                    <a href="#"
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
                                    <a href="#"
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
                                    <a href="#"
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
                                    <a href="#"
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
                                    <a href="#"
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
                                    <a href="#"
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
                    <div class="seo-content showFooter">
                        <h1>Promosi</h1>
                        <p>Promosi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection


@section('under_body')


@endsection
