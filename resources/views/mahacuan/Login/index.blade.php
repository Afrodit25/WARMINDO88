@extends('mahacuan.Login.layout.main_index')

@section('title', 'Index')

@section('content')

    <main id="main-route">
        <div class="main-content home">
            <section class="home__popular">
                <div class="container-fluid">
                    <div class="popular-container-border">
                        <div class="popular-container">
                            <div class="popular-header">
                                <div class="popular-title">
                                    <div class="icon">
                                        <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/popular.svg"
                                            width="80">
                                    </div>
                                    <h6>Game Terpopuler</h6>
                                </div>
                                <div class="popular-action">
                                    <div class="action-button">
                                        <a href="javascript:;" onclick="routeNav('/popular')"
                                            class="btn-custom-sm">Tampilkan Lainnya</a>
                                    </div>
                                    <div class="action-navigation">
                                        <button class="btn-custom-sm navigation-prev--popular">
                                            <i class="fas fa-angle-left"></i>
                                        </button>
                                        <button class="btn-custom-sm navigation-next--popular">
                                            <i class="fas fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="games-list">
                                <div class="swiper-container home-popular-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/S-RH02.jpg"
                                                        width="110" height="80" alt="S-RH02">
                                                </a>
                                            </div>
                                            <div class="games-name">Royale House</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/popular-games/mahjong-ways.webp"
                                                        width="110" height="80" alt="mahjong-ways">
                                                </a>
                                            </div>
                                            <div class="games-name">Mahjong Ways</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/popular-games/mahjong-ways2.webp"
                                                        width="110" height="80" alt="mahjong-ways2">
                                                </a>
                                            </div>
                                            <div class="games-name">Mahjong Ways 2</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/pra_promo.webp"
                                                        width="110" height="80" alt="vs20olympx">
                                                </a>
                                            </div>
                                            <div class="games-name">Gates of Olympus 1000</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/vs20olympgate.webp"
                                                        width="110" height="80" alt="vs20olympgate">
                                                </a>
                                            </div>
                                            <div class="games-name">Gates of Olympus</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00148.png"
                                                        width="110" height="80" alt="PSS-ON-00148">
                                                </a>
                                            </div>
                                            <div class="games-name">Sugar Boom</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00149.png"
                                                        width="110" height="80" alt="PSS-ON-00149">
                                                </a>
                                            </div>
                                            <div class="games-name">Lucky Ace</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/5m6k9j7rwspjs.png"
                                                        width="110" height="80" alt="5m6k9j7rwspjs">
                                                </a>
                                            </div>
                                            <div class="games-name">Roma</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/xq9ohbyf9m79o.png"
                                                        width="110" height="80" alt="xq9ohbyf9m79o">
                                                </a>
                                            </div>
                                            <div class="games-name">Fish Hunter : Bird Hunter</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/S-LK03.jpg"
                                                        width="110" height="80" alt="S-LK03">
                                                </a>
                                            </div>
                                            <div class="games-name">Legacy Of Kong Maxways</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-favorit/populer/133.png"
                                                        width="110" height="80" alt="133">
                                                </a>
                                            </div>
                                            <div class="games-name">Good Fortune M</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/three-kings.webp"
                                                        width="110" height="80" alt="43">
                                                </a>
                                            </div>
                                            <div class="games-name">Three Kings</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/mental.webp"
                                                        width="110" height="80" alt="460">
                                                </a>
                                            </div>
                                            <div class="games-name">Mental</div>
                                        </div>
                                        <div class="games-holder swiper-slide">
                                            <div class="games-img">
                                                <a class="main sekarang main-sekarang-alert" href="javascript:;"
                                                    onclick="gameAlert()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/BTN_LuckyTwinsWilds.webp"
                                                        width="110" height="80" alt="405">
                                                </a>
                                            </div>
                                            <div class="games-name">Lucky Twins Wilds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="home__provider-slider">
            <div class="container-fluid">
                <div class="provider-slider__grid">
                    <div class="provider-slider__grid-item">
                        <div class="provider-slider__border">
                            <div class="provider-slider__holder">
                                <div class="holder-header">
                                    <div class="header-title">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/slot.svg"
                                                width="80">
                                        </div>
                                        <h6>Slot</h6>
                                    </div>
                                    <div class="header-action">
                                        <div class="action-button">
                                            <a href="javascript:;" onclick="isiSaldo()" class="btn-custom-sm">Tampilkan
                                                Lainnya</a>
                                        </div>
                                        <div class="action-navigation">
                                            <button class="btn-custom-sm navigation-prev--slot swiper-button-disabled"
                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-caad517605b77ff7" aria-disabled="true">
                                                <i class="fas fa-angle-left"></i>
                                            </button>
                                            <button class="btn-custom-sm navigation-next--slot" tabindex="0"
                                                aria-label="Next slide" aria-controls="swiper-wrapper-caad517605b77ff7"
                                                aria-disabled="false">
                                                <i class="fas fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-container slot-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-caad517605b77ff7" aria-live="polite"
                                        style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="isiSaldo()" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="FASTSPIN" alt="FASTSPIN"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/fastspin.webp">
                                                        </div>
                                                        <div class="slide-title">FASTSPIN</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Pragmatic Play" alt="Pragmatic Play"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/pra.webp">
                                                        </div>
                                                        <div class="slide-title">Pragmatic Play</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="3 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/spadegaming')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/spd.webp">
                                                        </div>
                                                        <div class="slide-title">Spade Gaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="4 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;" onclick="isiSaldo()">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="5 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/pgsoft')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="PG Soft" alt="PG Soft"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/pgs.webp">
                                                        </div>
                                                        <div class="slide-title">PG Soft</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="6 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/fachai')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Fa Chai" alt="Fa Chai"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/fac.webp ">
                                                        </div>
                                                        <div class="slide-title">Fa Chai</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="7 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/jili')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="JILI" alt="JILI"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/jli.webp">
                                                        </div>
                                                        <div class="slide-title">JILI</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="8 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/redtiger')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="RED TIGER" alt="RED TIGER"
                                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/game-skin1/banner/slot/rtr.webp ">
                                                        </div>
                                                        <div class="slide-title">RED TIGER</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="9 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/afbgaming')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Afb Gaming" alt="Afb Gaming"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/afg.webp">
                                                        </div>
                                                        <div class="slide-title">Afb Gaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="10 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="AIS GAMING" alt="AIS GAMING"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/aisg.webp">
                                                        </div>
                                                        <div class="slide-title"><i class="fas fa-tools mr-1"></i>
                                                            Game Maintenance
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="11 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/hcgaming')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="HC Game" alt="HC Game"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/hcg.webp">
                                                        </div>
                                                        <div class="slide-title">HC Game</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="12 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/advantplay')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Advantplay" alt="Advantplay"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/adv.webp">
                                                        </div>
                                                        <div class="slide-title">Advantplay</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="13 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/jdb')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="JDB" alt="JDB"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/jdb.webp">
                                                        </div>
                                                        <div class="slide-title">JDB</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="14 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/nolimitcity')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="NoLimit City" alt="NoLimit City"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/nlc.webp">
                                                        </div>
                                                        <div class="slide-title">NoLimit City</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="15 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/playstar')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Playstar" alt="Playstar"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/pls.webp">
                                                        </div>
                                                        <div class="slide-title">Playstar</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="16 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/joker')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/jok.webp">
                                                        </div>
                                                        <div class="slide-title">Joker Gaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="17 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/habanero')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Habanero" alt="Habanero"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/hbn.webp">
                                                        </div>
                                                        <div class="slide-title">Habanero</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="18 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/cq9')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="CQ9 Gaming" alt="CQ9 Gaming"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/cq9.webp">
                                                        </div>
                                                        <div class="slide-title">CQ9 Gaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="19 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/virtualtech')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Virtual Tech" alt="Virtual Tech"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/vrt.webp">
                                                        </div>
                                                        <div class="slide-title">Virtual Tech</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="20 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/ameba')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Ameba" alt="Ameba"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/amb.webp">
                                                        </div>
                                                        <div class="slide-title">Ameba</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="21 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/ttg')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Top Trend Gaming" alt="Top Trend Gaming"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/ttg.webp">
                                                        </div>
                                                        <div class="slide-title">Top Trend Gaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="22 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/microgaming')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Microgaming" alt="Microgaming"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/mic.webp">
                                                        </div>
                                                        <div class="slide-title">Microgaming</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="23 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Playtech Slot" alt="Playtech Slot"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/pla.webp">
                                                        </div>
                                                        <div class="slide-title"><i class="fas fa-tools mr-1"></i>
                                                            Game Maintenance
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="24 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/playngo')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Play N Go" alt="Play N Go"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/png.webp">
                                                        </div>
                                                        <div class="slide-title">Play N Go</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="25 / 25"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a onclick="routeNav('/slot/hydako')" href="javascript:;">
                                                        <div class="slide-img">
                                                            <img title="Hydako" alt="Hydako"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/hyd.webp">
                                                        </div>
                                                        <div class="slide-title">Hydako</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="provider-slider__grid-item">
                        <div class="provider-slider__border">
                            <div class="provider-slider__holder">
                                <div class="holder-header">
                                    <div class="header-title">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/sport.svg" width="80">
                                        </div>
                                        <h6>Sportsbook</h6>
                                    </div>
                                    <div class="header-action">
                                        <div class="action-button">
                                            <a href="javascript:;" onclick="routeNav('/sportsbook')"
                                                class="btn-custom-sm">Tampilkan Lainnya</a>
                                        </div>
                                        <div class="action-navigation">
                                            <button class="btn-custom-sm navigation-prev--sport swiper-button-disabled"
                                                disabled="" tabindex="-1" aria-label="Previous slide"
                                                aria-controls="swiper-wrapper-c920e58d1047e2192" aria-disabled="true">
                                                <i class="fas fa-angle-left"></i>
                                            </button>
                                            <button class="btn-custom-sm navigation-next--sport swiper-button-disabled"
                                                tabindex="-1" aria-label="Next slide"
                                                aria-controls="swiper-wrapper-c920e58d1047e2192" aria-disabled="true"
                                                disabled="">
                                                <i class="fas fa-angle-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-container sport-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-c920e58d1047e2192" aria-live="polite"
                                        style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;" onclick="isiSaldo()">
                                                        <div class="slide-img">
                                                            <img title="AFB88" alt="AFB88"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/sportbook/afb.webp">
                                                        </div>
                                                        <div class="slide-title">AFB88</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;" onclick="isiSaldo()">
                                                        <div class="slide-img">
                                                            <img title="IA E-SPORT" alt="IA E-SPORT"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/sportbook/iae.webp">
                                                        </div>
                                                        <div class="slide-title">IA E-SPORT</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="3 / 4"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;" onclick="isiSaldo()">
                                                        <div class="slide-img">
                                                            <img title="SBO SPORT" alt="SBO SPORT"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/sportbook/sbo.webp">
                                                        </div>
                                                        <div class="slide-title">SBO SPORT</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide" role="group" aria-label="4 / 4"
                                            style="width: 64.25px; margin-right: 20px;">
                                            <div class="slide-border">
                                                <div class="slide-item">
                                                    <a href="javascript:;" onclick="isiSaldo()">
                                                        <div class="slide-img">
                                                            <img title="CMD368" alt="CMD368"
                                                                src="https://images.linkcdn.cloud/global/game-skin1/banner/sportbook/cmd.webp">
                                                        </div>
                                                        <div class="slide-title">CMD368</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10">
                        <div class="provider-slider__grid">
                            <div class="provider-slider__grid-item">
                                <div class="provider-slider__border">
                                    <div class="provider-slider__holder">
                                        <div class="holder-header">
                                            <div class="header-title">
                                                <div class="icon">
                                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/casino.svg"
                                                        width="80">
                                                </div>
                                                <h6>Casino</h6>
                                            </div>
                                            <div class="header-action">
                                                <div class="action-button">
                                                    <a href="javascript:;" onclick="routeNav('/casino')"
                                                        class="btn-custom-sm">Tampilkan Lainnya</a>
                                                </div>
                                                <div class="action-navigation">
                                                    <button
                                                        class="btn-custom-sm navigation-prev--casino swiper-button-disabled"
                                                        disabled="" tabindex="-1" aria-label="Previous slide"
                                                        aria-controls="swiper-wrapper-c98b663f3649423d"
                                                        aria-disabled="true">
                                                        <i class="fas fa-angle-left"></i>
                                                    </button>
                                                    <button class="btn-custom-sm navigation-next--casino" tabindex="0"
                                                        aria-label="Next slide"
                                                        aria-controls="swiper-wrapper-c98b663f3649423d"
                                                        aria-disabled="false">
                                                        <i class="fas fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="swiper-container casino-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-c98b663f3649423d"
                                                aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-active" role="group"
                                                    aria-label="1 / 13" style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="AFB CASINO" alt="AFB CASINO"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/afc.webp">
                                                                </div>
                                                                <div class="slide-title">AFB CASINO</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" role="group"
                                                    aria-label="2 / 13" style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="Pragmatic Play LC" alt="Pragmatic Play LC"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/plc.webp">
                                                                </div>
                                                                <div class="slide-title">Pragmatic Play LC</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="3 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="WE CASINO" alt="WE CASINO"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/wec.webp">
                                                                </div>
                                                                <div class="slide-title">WE CASINO</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="4 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="GD88" alt="GD88"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/gd8.webp">
                                                                </div>
                                                                <div class="slide-title">GD88</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="5 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="WM Casino" alt="WM Casino"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/wmc.webp">
                                                                </div>
                                                                <div class="slide-title">WM Casino</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="6 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="OG Casino" alt="OG Casino"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/ogs.webp">
                                                                </div>
                                                                <div class="slide-title">OG Casino</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="7 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="Evolution" alt="Evolution"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/evo.webp">
                                                                </div>
                                                                <div class="slide-title">Evolution</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="8 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="ALLBET" alt="ALLBET"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/alb.webp">
                                                                </div>
                                                                <div class="slide-title">ALLBET</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="9 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="Dream Gaming" alt="Dream Gaming"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/drg.webp">
                                                                </div>
                                                                <div class="slide-title">Dream Gaming</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="10 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="Asia Gaming" alt="Asia Gaming"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/agc.webp">
                                                                </div>
                                                                <div class="slide-title">Asia Gaming</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="11 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="Sexy Gaming" alt="Sexy Gaming"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/seg.webp">
                                                                </div>
                                                                <div class="slide-title">Sexy Gaming</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="12 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="LG88" alt="LG88"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/lg8.webp">
                                                                </div>
                                                                <div class="slide-title">LG88</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="13 / 13"
                                                    style="width: 71.75px; margin-right: 10px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                                <div class="slide-img">
                                                                    <img title="N2Live" alt="N2Live"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/casino/nli.webp">
                                                                </div>
                                                                <div class="slide-title">N2Live</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                aria-atomic="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="provider-slider__grid-item">
                                <div class="provider-slider__border">
                                    <div class="provider-slider__holder">
                                        <div class="holder-header">
                                            <div class="header-title">
                                                <div class="icon">
                                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/arcade.svg"
                                                        width="80">
                                                </div>
                                                <h6>Arcade</h6>
                                            </div>
                                            <div class="header-action">
                                                <div class="action-button">
                                                    <a href="javascript:;" onclick="routeNav('/arcade')"
                                                        class="btn-custom-sm">Tampilkan Lainnya</a>
                                                </div>
                                                <div class="action-navigation">
                                                    <button
                                                        class="btn-custom-sm navigation-prev--fishing swiper-button-disabled"
                                                        disabled="" tabindex="-1" aria-label="Previous slide"
                                                        aria-controls="swiper-wrapper-2d55bb2bea88c136"
                                                        aria-disabled="true">
                                                        <i class="fas fa-angle-left"></i>
                                                    </button>
                                                    <button class="btn-custom-sm navigation-next--fishing" tabindex="0"
                                                        aria-label="Next slide"
                                                        aria-controls="swiper-wrapper-2d55bb2bea88c136"
                                                        aria-disabled="false">
                                                        <i class="fas fa-angle-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="swiper-container fishing-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-2d55bb2bea88c136"
                                                aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide swiper-slide-active" role="group"
                                                    aria-label="1 / 5" style="width: 92.3333px; margin-right: 20px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a href="javascript:;" onclick="isiSaldo()">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide swiper-slide-next" role="group"
                                                    aria-label="2 / 5" style="width: 92.3333px; margin-right: 20px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a onclick="routeNav('/arcade/joker')" href="javascript:;">
                                                                <div class="slide-img">
                                                                    <img title="Joker Gaming" alt="Joker Gaming"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/fishing/jok.webp">
                                                                </div>
                                                                <div class="slide-title">Joker Gaming</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="3 / 5"
                                                    style="width: 92.3333px; margin-right: 20px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a onclick="routeNav('/arcade/spade')" href="javascript:;">
                                                                <div class="slide-img">
                                                                    <img title="Spade Gaming" alt="Spade Gaming"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/fishing/spd.webp">
                                                                </div>
                                                                <div class="slide-title">Spade Gaming</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="4 / 5"
                                                    style="width: 92.3333px; margin-right: 20px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a onclick="routeNav('/arcade/playstar')" href="javascript:;">
                                                                <div class="slide-img">
                                                                    <img title="Playstar" alt="Playstar"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/fishing/pls.webp">
                                                                </div>
                                                                <div class="slide-title">Playstar</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" role="group" aria-label="5 / 5"
                                                    style="width: 92.3333px; margin-right: 20px;">
                                                    <div class="slide-border">
                                                        <div class="slide-item">
                                                            <a onclick="routeNav('/arcade/cq9')" href="javascript:;">
                                                                <div class="slide-img">
                                                                    <img title="CQ9" alt="CQ9"
                                                                        src="https://images.linkcdn.cloud/global/game-skin1/banner/fishing/cq9.webp">
                                                                </div>
                                                                <div class="slide-title">CQ9</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                aria-atomic="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="provider-slider__border">
                            <div class="provider-slider__holder">
                                <div class="holder-header">
                                    <div class="header-title">
                                        <div class="icon">
                                            <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/download-apps.svg"
                                                width="80">
                                        </div>
                                        <h6>Download Apps</h6>
                                    </div>
                                </div>
                                <div class="holder-download">
                                    <div class="download-mobile">
                                        <img id="template-download"
                                            src="{{ asset('/') }}template_mahacuan/custom/img/header/gameapp.png"
                                            alt="game app">
                                    </div>
                                    <div class="download-item">
                                        <a href="/download/app-9d31f8e2973dcb6969795466294bad1bb9b014d0">
                                            <img src="{{ asset('/') }}template_mahacuan/custom/img/header/playstore.png"
                                                width="130" height="39" alt="playstore">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="home__lotto">
            <div class="container-fluid">
                <div class="swiper-container lotto-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Beijing</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">9414</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Timor</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">2367</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Barcelona</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">1780</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">4DRome</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">2673</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Singapore</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">1857</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Manila</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">7503</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">SydneyPools</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">5238</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Bullseye</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">8312</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Tokyo</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">1980</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Amsterdam</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">7052</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Hongkong47</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">7589</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Berlin</h4>
                                        <h6 class="lotto-date">Minggu, 2023-12-24</h6>
                                        <div class="lotto-number">7990</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">SiberiaPools</h4>
                                        <h6 class="lotto-date">Minggu, 2023-12-24</h6>
                                        <div class="lotto-number">4363</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">PCSO</h4>
                                        <h6 class="lotto-date">Sabtu, 2023-12-23</h6>
                                        <div class="lotto-number">5044</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Bangkok</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">3184</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Hongkong49</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">6421</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Magnum4D</h4>
                                        <h6 class="lotto-date">Minggu, 2023-12-24</h6>
                                        <div class="lotto-number">2424</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Seoul</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">5309</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide lotto-slide">
                            <div class="lotto-border">
                                <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                    <div class="lotto-item">
                                        <h4 class="lotto-country">Hongkong</h4>
                                        <h6 class="lotto-date">Senin, 2023-12-25</h6>
                                        <div class="lotto-number">0275</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__payment">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="payment-border">
                            <div class="payment-content">
                                <div class="payment-header">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/servicemeter.svg"
                                        width="50" height="50">
                                    <div class="payment-title">Layanan Member</div>
                                </div>
                                <div class="payment-service">
                                    <div class="service-average">
                                        <div class="service-title">Tambah Dana</div>
                                        <div class="service-subtitle">Waktu</div>
                                        <div class="progress">
                                            <div id="depositTimeBar" class="progress-bar" role="progressbar"
                                                aria-valuenow="" aria-valuemin="0" aria-valuemax="15"></div>
                                        </div>
                                    </div>
                                    <div class="service-time">
                                        <div class="time-number" id="depositTime"></div>
                                        <div class="time-title">Menit</div>
                                    </div>
                                </div>
                                <div class="payment-service">
                                    <div class="service-average">
                                        <div class="service-title">WITHDRAW</div>
                                        <div class="service-subtitle">Waktu</div>
                                        <div class="progress">
                                            <div id="withdrawTimeBar" class="progress-bar" role="progressbar"
                                                aria-valuenow="" aria-valuemin="0" aria-valuemax="15"></div>
                                        </div>
                                    </div>
                                    <div class="service-time">
                                        <div class="time-number" id="withdrawTime"></div>
                                        <div class="time-title">Menit</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="payment-border">
                            <div class="payment-content">
                                <div class="payment-header">
                                    <img src="https://images.linkcdn.cloud/global/default/icon/payment.svg"
                                        width="50" height="50">
                                    <div class="payment-title">Sistem Pembayaran</div>
                                </div>
                                <div class="swiper-container pembarayan-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bca.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/mandiri_color.webp">
                                                </div>
                                                <div class="bank-status offline">OFFLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bni.webp">
                                                </div>
                                                <div class="bank-status offline">OFFLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/payment/V2/IDR/bank/bri.png">
                                                </div>
                                                <div class="bank-status offline">OFFLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/cimb.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/qris.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/BNC.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/ovo.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/jago.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bsi.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/gopay_color.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/linkaja.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/jatim.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/dana.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bjb.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/ocbc.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/permata.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="bank-content">
                                                <div class="bank-logo">
                                                    <img
                                                        src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/btn.webp">
                                                </div>
                                                <div class="bank-status online">ONLINE</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="payment-border">
                            <div class="payment-content">
                                <div class="payment-header">
                                    <img src="{{ asset('/') }}template_mahacuan/themes/1/img/header/support.svg"
                                        width="50" height="50">
                                    <div class="payment-title">Bantuan &amp; Dukungan</div>
                                </div>
                                <div class="payment-support">
                                    <div class="support-item mb-0">
                                        <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/contact/vider2.png"
                                            alt="whatsapp" width="31" height="31">
                                        <div class="support-content">lisensi Resmi &amp; Aman oleh PAGCOR</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home__seo">
            <div class="container-fluid">
                <div class="game__seo">
                    <div hidden id="title-seo">MAHACUAN: Home</div>
                    <div class="seo-content showFooter">
                        <h1>Home</h1>
                        <p>Home</p>
                    </div>
                </div>
            </div>
        </section>
        </div>


    </main>

@endsection


@section('under_body')

<script>
    window.addEventListener("popstate", (event) => {
        location.reload();
    });

    $("a[name=locale-switch]").on("click", function () {
        const locale = $(this).attr('data-locale')
        $.ajax({
            type: "POST",
            url: "https://mahacuan.lol/locale",
            data: {
                _token: "H70Ji0sMr3WqwcVdM9rtYysrRizX16tAQlO7v40x",
                locale: locale,
            },
            success: function (res) {
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
    $.ajax({
        type: "POST",
        url: "https://mahacuan.lol/paymentService",
        data: { _token: "H70Ji0sMr3WqwcVdM9rtYysrRizX16tAQlO7v40x"},
        success: function (response) {
            let wdTime = response.data.wd
            let depoTime = response.data.depo
            $("[id=withdrawTime]").text(wdTime)
            $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 + "%")
            $("[id=depositTime]").text(depoTime)
            $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) * 100 + "%")
        }
    });


                                    $('#homePopup').modal('show');

                    });

    $('#pageLoadingBar').hide()
    window.onpopstate = function() {
        let path = window.location.pathname;
        routeNav(path);
    }

    function routeNav(path) {
        if (path == window.location.pathname) return;
        history.pushState(null, null, path);
        let url = "https://mahacuan.lol" + window.location.pathname;
        if (path == 'apps.index') {
            window.location.replace("apps.index")
            return false;
        }
        $(".header-form>a").removeClass('active')
		let elem = document.getElementById("pageLoadingBar");
		let width = 1;
        $.ajax({
            type: "GET",
            url: url,
			beforeSend: () => {
				$('#pageLoadingBar').show()
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
            success: function (page) {
				width = 100;
				elem.style.width = width + '%';
                $("main[id=main-route]").empty().append(page);
                $("title").text($("#title-seo").text());
                const script = $("scope-script").html()
                $("scope-script").remove()
                setTimeout(() => {
                    $("html, body").animate({ scrollTop: "0" }, 1000);
				    $('#pageLoadingBar').hide()
				    elem.style.width = '1%';
                    $("custom-script").empty().append(script);
                    filterGameSelection('all')
                }, 500);
                let checkPath = path.split('apps.index')
                            }
        });
    }

</script>
<script type="text/javascript">
    var swiperSport = new Swiper('.sport-swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--sport",
            prevEl: ".navigation-prev--sport",
        },
    });
    var swiperSlot = new Swiper('.slot-swiper', {
        slidesPerView: 4,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--slot",
            prevEl: ".navigation-prev--slot",
        },
    });
    var swiperFishing = new Swiper('.fishing-swiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        breakpoints: {
            1600: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 20,
            }
        },
        navigation: {
            nextEl: ".navigation-next--fishing",
            prevEl: ".navigation-prev--fishing",
        },
    });
    var swiperCasino = new Swiper('.casino-swiper', {
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            1920: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1600: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
            1280: {
                slidesPerView: 2,
                spaceBetween: 10,
            }
        },
        navigation: {
            nextEl: ".navigation-next--casino",
            prevEl: ".navigation-prev--casino",
        },
    });
    var swiperLottery = new Swiper('.lottery-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".navigation-next--lottery",
            prevEl: ".navigation-prev--lottery",
        },
    });
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

    $(".game-search>.form-control-sm").on("focus", function () {
        if ($(this).val().length == 0) {
            $(".game-search").width('100%');
            $(".form-control-sm").width('100%');
        }
    })

    $(".game-search>.form-control-sm").on("focusout", function () {
        if ($(this).val().length == 0) {
            $(".game-search").width('');
            $(".form-control-sm").width('');
        }
    })


    $("form[name=login-form]").on('submit', function(e) {
        e.preventDefault();
        let formData = {};
        $.each($(this).serializeArray(), function (i, val) {
             formData[val.name] = val.value
        });
        formData.usernameLogin = formData.usernameLogin.replace(/\s/g, '');
        let btnTxt = $("button[name=buttonLogin]").html()
        $.ajax({
            url: "https://mahacuan.lol/doLogin",
            type: 'POST',
            data: {
                _token: "H70Ji0sMr3WqwcVdM9rtYysrRizX16tAQlO7v40x",
                username: formData.usernameLogin,
                password: formData.passwordLogin
            },
            beforeSend: function() {
                $("input[name='usernameLogin']").attr('readonly', true)
                $("input[name='passwordLogin']").attr('readonly', true)
                $("button[name=buttonLogin]").attr('disabled', true)
                $("button[name=buttonLogin]").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
            },
            success: function (data) {
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
                    $.each(data.errors, function (index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                    });
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: (msg == '') ? "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" : msg
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
            error: function (data) {
                let msg = '';
                $.each(data.responseJSON.errors, function (index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                });
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: (msg == '') ? "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" : msg
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
    <script type="text/javascript">
        var swiper = new Swiper('.home-popular-swiper', {
            slidesPerView: 7,
            slidesPerColumn: 2,
            slidesPerColumnFill: 'row',
            direction: 'horizontal',
            spaceBetween: 20,
            breakpoints: {
                1600: {
                    slidesPerView: 7,
                    spaceBetween: 20,
                    slidesPerColumn: 2,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    slidesPerColumn: 2,
                }
            },
            autoplay: {
                delay: 2000,
            },
            navigation: {
                nextEl: ".navigation-next--popular",
                prevEl: ".navigation-prev--popular",
            },
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

<script type="text/javascript">
    $(function() {

        // $(document).on("submit", "#login-form", function() {
        //     var e = this;

        //     $(this).find("[type='submit']").html("Login...");

        //     $.ajax({
        //         url: $(this).attr('action'),
        //         data: $(this).serialize(),
        //         type: "POST",
        //         dataType: 'json',
        //         success: function(data) {

        //             $(e).find("[type='submit']").html("Login");

        //             if (data.status) {
        //                 window.location = data.redirect;
        //                 Swal.fire({
        //                     title: "Good job!",
        //                     text: "Anda Berhasil Login !",
        //                     icon: "success"
        //                 });
        //             } else {
        //                 $(".alert").remove();
        //                 $.each(data.errors, function(key, val) {
        //                     $("#errors-list").append(
        //                         "<div class='alert alert-danger'>" + val +
        //                         "</div>");
        //                     Swal.fire({
        //                         icon: "error",
        //                         title: "Oops...",
        //                         text: "" + val + ".",
        //                     });
        //                 });

        //             }

        //         }
        //     });

        //     return false;
        // });


    });
</script>




@endsection
