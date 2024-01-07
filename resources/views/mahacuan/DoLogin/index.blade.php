@extends('mahacuan.DoLogin.layout.main_dologin')

@section('title', 'HOME')

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
                                        <img src="https://mahacuan.live/themes/1/img/navigation/popular.svg" width="80">
                                    </div>
                                    <h6>Game Terpopuler</h6>
                                </div>
                                <div class="popular-action">
                                    <div class="action-button">
                                        <a href="javascript:;" onclick="routeNav('/popular')"
                                            class="btn-custom-sm">Tampilkan Lainnya</a>
                                    </div>
                                    <div class="action-navigation">
                                        <button class="btn-custom-sm navigation-prev--popular swiper-button-disabled"
                                            tabindex="-1" aria-label="Previous slide"
                                            aria-controls="swiper-wrapper-65f4566f0e2e38a2" aria-disabled="true"
                                            disabled="">
                                            <i class="fas fa-angle-left"></i>
                                        </button>
                                        <button class="btn-custom-sm navigation-next--popular" tabindex="0"
                                            aria-label="Next slide" aria-controls="swiper-wrapper-65f4566f0e2e38a2"
                                            aria-disabled="false">
                                            <i class="fas fa-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="games-list">
                                <div
                                    class="swiper-container home-popular-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
                                    <div class="swiper-wrapper" id="swiper-wrapper-65f4566f0e2e38a2" aria-live="off"
                                        style="transition-duration: 300ms; width: 1799px; transform: translate3d(0px, 0px, 0px);">
                                        <div class="games-holder swiper-slide swiper-slide-active"
                                            style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames" onclick="isiSaldo()"
                                                    href="javascript:;">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/S-RH02.jpg"
                                                        width="110" height="80" alt="S-RH02">
                                                </a>
                                            </div>
                                            <div class="games-name">Royale House</div>
                                        </div>
                                        <div class="games-holder swiper-slide swiper-slide-next"
                                            style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/popular-games/mahjong-ways.webp"
                                                        width="110" height="80" alt="mahjong-ways">
                                                </a>
                                            </div>
                                            <div class="games-name">Mahjong Ways</div>
                                        </div>
                                        <div class="games-holder swiper-slide" style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/popular-games/mahjong-ways2.webp"
                                                        width="110" height="80" alt="mahjong-ways2">
                                                </a>
                                            </div>
                                            <div class="games-name">Mahjong Ways 2</div>
                                        </div>
                                        <div class="games-holder swiper-slide" style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/pra_promo.webp"
                                                        width="110" height="80" alt="vs20olympx">
                                                </a>
                                            </div>
                                            <div class="games-name">Gates of Olympus 1000</div>
                                        </div>
                                        <div class="games-holder swiper-slide" style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/vs20olympgate.webp"
                                                        width="110" height="80" alt="vs20olympgate">
                                                </a>
                                            </div>
                                            <div class="games-name">Gates of Olympus</div>
                                        </div>
                                        <div class="games-holder swiper-slide" style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00148.png"
                                                        width="110" height="80" alt="PSS-ON-00148">
                                                </a>
                                            </div>
                                            <div class="games-name">Sugar Boom</div>
                                        </div>
                                        <div class="games-holder swiper-slide" style="width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-list/slot/playstar/PSS-ON-00149.png"
                                                        width="110" height="80" alt="PSS-ON-00149">
                                                </a>
                                            </div>
                                            <div class="games-name">Lucky Ace</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/5m6k9j7rwspjs.png"
                                                        width="110" height="80" alt="5m6k9j7rwspjs">
                                                </a>
                                            </div>
                                            <div class="games-name">Roma</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/xq9ohbyf9m79o.png"
                                                        width="110" height="80" alt="xq9ohbyf9m79o">
                                                </a>
                                            </div>
                                            <div class="games-name">Fish Hunter : Bird Hunter</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/S-LK03.jpg"
                                                        width="110" height="80" alt="S-LK03">
                                                </a>
                                            </div>
                                            <div class="games-name">Legacy Of Kong Maxways</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/133.png"
                                                        width="110" height="80" alt="133">
                                                </a>
                                            </div>
                                            <div class="games-name">Good Fortune M</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/three-kings.webp"
                                                        width="110" height="80" alt="43">
                                                </a>
                                            </div>
                                            <div class="games-name">Three Kings</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/mental.webp"
                                                        width="110" height="80" alt="460">
                                                </a>
                                            </div>
                                            <div class="games-name">Mental</div>
                                        </div>
                                        <div class="games-holder swiper-slide"
                                            style="margin-top: 20px; width: 237px; margin-right: 20px;">
                                            <div class="games-img">
                                                <a name="playGames"
                                                    href="javascript:;"
                                                    onclick="isiSaldo()">
                                                    <img src="https://images.linkcdn.cloud/global/game-favorit/populer/BTN_LuckyTwinsWilds.webp"
                                                        width="110" height="80" alt="405">
                                                </a>
                                            </div>
                                            <div class="games-name">Lucky Twins Wilds</div>
                                        </div>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                                                <img src="https://mahacuan.live/themes/1/img/navigation/slot.svg"
                                                    width="80">
                                            </div>
                                            <h6>Slot</h6>
                                        </div>
                                        <div class="header-action">
                                            <div class="action-button">
                                                <a href="javascript:;" onclick="isiSaldo()"
                                                    class="btn-custom-sm">Tampilkan Lainnya</a>
                                            </div>
                                            <div class="action-navigation">
                                                <button class="btn-custom-sm navigation-prev--slot swiper-button-disabled"
                                                    disabled="" tabindex="-1" aria-label="Previous slide"
                                                    aria-controls="swiper-wrapper-caad517605b77ff7" aria-disabled="true">
                                                    <i class="fas fa-angle-left"></i>
                                                </button>
                                                <button class="btn-custom-sm navigation-next--slot" tabindex="0"
                                                    aria-label="Next slide"
                                                    aria-controls="swiper-wrapper-caad517605b77ff7" aria-disabled="false">
                                                    <i class="fas fa-angle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-container slot-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                        <div class="swiper-wrapper" id="swiper-wrapper-caad517605b77ff7"
                                            aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" role="group"
                                                aria-label="1 / 25" style="width: 64.25px; margin-right: 20px;">
                                                <div class="slide-border">
                                                    <div class="slide-item">
                                                        <a onclick="isiSaldo()" href="javascript:;">
                                                            <div class="slide-img">
                                                                <img title="FASTSPIN" alt="FASTSPIN"
                                                                    src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/fastspin.webp">
                                                            </div>
                                                            <div class="slide-title">FASTSPIN</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group"
                                                aria-label="2 / 25" style="width: 64.25px; margin-right: 20px;">
                                                <div class="slide-border">
                                                    <div class="slide-item">
                                                        <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                                                            <div class="slide-img">
                                                                <img title="Pragmatic Play" alt="Pragmatic Play"
                                                                    src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/pra.webp">
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
                                                                    src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/spd.webp">
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
                                                        <a href="javascript:;"
                                                            onclick="isiSaldo()">
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
                                                                    src="https://images.linkcdn.cloud/global/game-skin1/banner/slot/pgs.webp">
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
                                                                    src=" https://images.linkcdn.cloud/global/game-skin1/banner/slot/fac.webp ">
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
                                                                    src=" https://images.linkcdn.cloud/global/game-skin1/banner/slot/jli.webp ">
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
                                                                    src=" https://images.linkcdn.cloud/global/game-skin1/banner/slot/rtr.webp ">
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
                                                <img src="https://mahacuan.live/themes/1/img/navigation/sport.svg"
                                                    width="80">
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
                                        <div class="swiper-wrapper" id="swiper-wrapper-c920e58d1047e2192"
                                            aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide swiper-slide-active" role="group"
                                                aria-label="1 / 4" style="width: 64.25px; margin-right: 20px;">
                                                <div class="slide-border">
                                                    <div class="slide-item">
                                                        <a href="javascript:;"
                                                            onclick="isiSaldo()">
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
                                                        <a href="javascript:;"
                                                            onclick="isiSaldo()">
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
                                                        <a href="javascript:;"
                                                            onclick="isiSaldo()">
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
                                                        <a href="javascript:;"
                                                            onclick="isiSaldo()">
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
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
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
                                                        <img src="https://mahacuan.live/themes/1/img/navigation/casino.svg"
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
                                                        <button class="btn-custom-sm navigation-next--casino"
                                                            tabindex="0" aria-label="Next slide"
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
                                                                    <div class="slide-img">
                                                                        <img title="Pragmatic Play LC"
                                                                            alt="Pragmatic Play LC"
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
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
                                                        <img src="https://mahacuan.live/themes/1/img/navigation/arcade.svg"
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
                                                        <button class="btn-custom-sm navigation-next--fishing"
                                                            tabindex="0" aria-label="Next slide"
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
                                                                <a href="javascript:;"
                                                                    onclick="isiSaldo()">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide swiper-slide-next" role="group"
                                                        aria-label="2 / 5" style="width: 92.3333px; margin-right: 20px;">
                                                        <div class="slide-border">
                                                            <div class="slide-item">
                                                                <a onclick="routeNav('/arcade/joker')"
                                                                    href="javascript:;">
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
                                                                <a onclick="routeNav('/arcade/spade')"
                                                                    href="javascript:;">
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
                                                                <a onclick="routeNav('/arcade/playstar')"
                                                                    href="javascript:;">
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
                                                <img src="https://mahacuan.live/themes/1/img/navigation/download-apps.svg"
                                                    width="80">
                                            </div>
                                            <h6>Download Apps</h6>
                                        </div>
                                    </div>
                                    <div class="holder-download">
                                        <div class="download-mobile">
                                            <img id="template-download"
                                                src="https://mahacuan.live/../../custom/img/header/gameapp.png"
                                                alt="game app">
                                        </div>
                                        <div class="download-item">
                                            <a href="/download/app-9d31f8e2973dcb6969795466294bad1bb9b014d0">
                                                <img src="https://mahacuan.live/../../custom/img/header/playstore.png"
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
                <div class="container">
                    <nav class="breadcrumb-container">
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item" text="MAHACUAN" url="https://mahacuan.live">
                                <a href="https://mahacuan.live" class="breadcrumb-link" target="_self">MAHACUAN</a>
                            </li>
                            <li class="breadcrumb-item" text="" url="https://mahacuan.live">
                                <a href="https://mahacuan.live" class="breadcrumb-link" target="_self"></a>
                            </li>
                            <li class="breadcrumb-item" text="" url="//">
                                <a href="//" class="breadcrumb-link" target="_self"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="container-fluid">
                    <div
                        class="swiper-container lotto-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-d5e7aaf4e107c39b4" aria-live="off"
                            style="transition-duration: 0ms; transform: translate3d(-4644px, 0px, 0px);">
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                role="group" aria-label="20 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="16">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Magnum4D</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">9736</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                role="group" aria-label="21 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="17">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Seoul</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">4654</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate" role="group"
                                aria-label="22 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="18">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Hongkong</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">5748</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="4 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="0">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Beijing</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">6747</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="5 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="1">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Timor</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">6173</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="6 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="2">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Barcelona</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">8240</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="7 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="3">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">4DRome</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">4842</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="8 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="4">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Singapore</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">6357</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="9 / 25"
                                data-swiper-slide-index="5" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Manila</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">4896</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="10 / 25"
                                data-swiper-slide-index="6" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">SydneyPools</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">7808</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="11 / 25"
                                data-swiper-slide-index="7" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Bullseye</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">9503</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="12 / 25"
                                data-swiper-slide-index="8" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Tokyo</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">7893</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="13 / 25"
                                data-swiper-slide-index="9" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Amsterdam</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">0234</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="14 / 25"
                                data-swiper-slide-index="10" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Hongkong47</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">9015</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="15 / 25"
                                data-swiper-slide-index="11" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Berlin</h4>
                                            <h6 class="lotto-date">Jumat, 2023-12-29</h6>
                                            <div class="lotto-number">3040</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="16 / 25"
                                data-swiper-slide-index="12" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">SiberiaPools</h4>
                                            <h6 class="lotto-date">Jumat, 2023-12-29</h6>
                                            <div class="lotto-number">5963</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="17 / 25"
                                data-swiper-slide-index="13" style="width: 248px; margin-right: 10px;">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">PCSO</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">8029</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="18 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="14">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Bangkok</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">9519</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-prev" role="group"
                                aria-label="19 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="15">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Hongkong49</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">2195</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-active" role="group"
                                aria-label="20 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="16">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Magnum4D</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">9736</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-next" role="group"
                                aria-label="21 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="17">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Seoul</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">4654</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide" role="group" aria-label="22 / 25"
                                style="width: 248px; margin-right: 10px;" data-swiper-slide-index="18">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Hongkong</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">5748</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate" role="group"
                                aria-label="4 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="0">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Beijing</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">6747</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate" role="group"
                                aria-label="5 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="1">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Timor</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">6173</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide lotto-slide swiper-slide-duplicate" role="group"
                                aria-label="6 / 25" style="width: 248px; margin-right: 10px;"
                                data-swiper-slide-index="2">
                                <div class="lotto-border">
                                    <a href="javascript:;" onclick="routeNav('/lottery/4d')">
                                        <div class="lotto-item">
                                            <h4 class="lotto-country">Barcelona</h4>
                                            <h6 class="lotto-date">Sabtu, 2023-12-30</h6>
                                            <div class="lotto-number">8240</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                                                    aria-valuenow="3" aria-valuemin="0" aria-valuemax="15"
                                                    style="width: 20%;"></div>
                                            </div>
                                        </div>
                                        <div class="service-time">
                                            <div class="time-number" id="depositTime">3</div>
                                            <div class="time-title">Menit</div>
                                        </div>
                                    </div>
                                    <div class="payment-service">
                                        <div class="service-average">
                                            <div class="service-title">WITHDRAW</div>
                                            <div class="service-subtitle">Waktu</div>
                                            <div class="progress">
                                                <div id="withdrawTimeBar" class="progress-bar" role="progressbar"
                                                    aria-valuenow="4" aria-valuemin="0" aria-valuemax="15"
                                                    style="width: 26.6667%;"></div>
                                            </div>
                                        </div>
                                        <div class="service-time">
                                            <div class="time-number" id="withdrawTime">4</div>
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
                                    <div
                                        class="swiper-container pembarayan-swiper swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-multirow">
                                        <div class="swiper-wrapper" id="swiper-wrapper-798504d8b7744686"
                                            aria-live="off"
                                            style="width: 1598px; transform: translate3d(-355px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="swiper-slide" role="group" aria-label="1 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bca.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-prev" role="group"
                                                aria-label="2 / 18" style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/mandiri_color.webp">
                                                    </div>
                                                    <div class="bank-status offline">OFFLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-active" role="group"
                                                aria-label="3 / 18" style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bni.webp">
                                                    </div>
                                                    <div class="bank-status offline">OFFLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-next" role="group"
                                                aria-label="4 / 18" style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bri.png">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="5 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/cimb.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="6 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/qris.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="7 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/BNC.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="8 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/ovo.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="9 / 18"
                                                style="width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/jago.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="10 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bsi.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="11 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/gopay_color.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="12 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/linkaja.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="13 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/jatim.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="14 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/epayment/dana.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="15 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/bjb.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="16 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/ocbc.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="17 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
                                                <div class="bank-content">
                                                    <div class="bank-logo">
                                                        <img
                                                            src="https://images.linkcdn.cloud/global/payment/V2/IDR/bank/permata.webp">
                                                    </div>
                                                    <div class="bank-status online">ONLINE</div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" role="group" aria-label="18 / 18"
                                                style="margin-top: 10px; width: 167.5px; margin-right: 10px;">
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
                                        <div
                                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                            <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                                aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                                tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                                class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                                aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                                tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                                aria-label="Go to slide 6"></span>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="payment-border">
                                <div class="payment-content">
                                    <div class="payment-header">
                                        <img src="https://mahacuan.live/themes/1/img/header/support.svg" width="50"
                                            height="50">
                                        <div class="payment-title">Bantuan &amp; Dukungan</div>
                                    </div>
                                    <div class="payment-support">
                                        <div class="support-item mb-0">
                                            <img src="https://images.linkcdn.cloud/global/default/contact/vider2.png"
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
                        <div hidden="" id="title-seo">MAHACUAN: Home</div>
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

        function isiSaldo() {
                Swal.fire({
                    icon: 'info',
                    title: "Perhatian !",
                    html: "Saldo Anda tidak cukup untuk bermain game ini.",
                    timerProgressBar: true,
                    timer: 5000,
                });
        }

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/locale",
                data: {
                    _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU",
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
            // $.ajax({
            //     type: "POST",
            //     url: "https://mahacuan.live/paymentService",
            //     data: {
            //         _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU"
            //     },
            //     success: function(response) {
            //         let wdTime = response.data.wd
            //         let depoTime = response.data.depo
            //         $("[id=withdrawTime]").text(wdTime)
            //         $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 +
            //             "%")
            //         $("[id=depositTime]").text(depoTime)
            //         $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) *
            //             100 + "%")
            //     }
            // });

            $(".routeTo").on("click", function() {
                const url = $(this).data("route")
                window.location.replace(url)
            });

            // function getBalance() {
            //     $.post("https://mahacuan.live/transaction/checkBalance", {
            //         _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU"
            //     }, (data) => {
            //         let main = 0;
            //         let prov = 0;
            //         let mainWd = 0;
            //         let pokerWd = 0;
            //         $('span[name=provBalance]').text(prov.toFixed(2));
            //         if ((data.success == true)) {
            //             main += data.balance
            //             window.mainBalance = data.commonWd
            //             $.each(data.data, function(index, value) {
            //                 $('span[id=balance-' + index + ']').text(value.credit.toFixed(2));
            //                 if (value.lockedIn == true) {
            //                     $('#lockedIn' + index).show()
            //                     $('#lockedOut' + index).hide()
            //                     $('#locked' + index).hide()
            //                 }
            //                 if (value.lockedOut == true) {
            //                     $('#lockedOut' + index).show()
            //                     $('#lockedIn' + index).hide()
            //                     $('#locked' + index).hide()
            //                 }
            //                 if (value.lockedIn == true && value.lockedOut === true) {
            //                     $('#locked' + index).show()
            //                     $('#lockedIn' + index).hide()
            //                     $('#lockedOut' + index).hide()
            //                 }
            //             });
            //             mainWd += parseFloat(data.commonWd);
            //             pokerWd += parseFloat(data.pokerWd);
            //         }
            //         $('span[id=balance-common-total]').text(data.common.toFixed(2));
            //         $('span[id=balance-poker-total]').text(data.poker.toFixed(2));
            //         $('span[name*=mainBalance]').text(main.toFixed(2));
            //         $('span[id=mainDesc]').text(mainWd.toFixed(2));
            //         $('span[id=pokerDesc]').text(pokerWd.toFixed(2));
            //     });
            // }
            // getBalance();
            // $("a[name=refreshWallet]").on("click", function(e) {
            //     e.preventDefault();
            //     $('span[name*=mainBalance]').html(
            //         '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
            //         );
            //     getBalance();
            // })
        });

        $('#pageLoadingBar').hide()
        window.onpopstate = function() {
            let path = window.location.pathname;
            routeNav(path);
        }

        function routeNav(path) {
            if (path == window.location.pathname) return;
            history.pushState(null, null, path);
            let url = "https://mahacuan.live" + window.location.pathname;
            if (path == '/') {
                window.location.replace("https://mahacuan.live")
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
                success: function(page) {
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
                        $('#pageLoadingBar').hide()
                        elem.style.width = '1%';
                        $("custom-script").empty().append(script);
                        filterGameSelection('all')
                    }, 500);
                    let checkPath = path.split('/')
                    fbq('track', 'ViewContent', {
                        content_name: (checkPath[2] == "undefined") ? checkPath[1] : checkPath[2],
                        content_category: checkPath[1],
                        content_type: 'games',
                    });
                }
            });
        }
    </script>
    <script>
        const html5QrCode = new Html5Qrcode( /* element id */ "reader");

        // File based scanning
        const fileinput = document.getElementById('qr-input-file');
        fileinput.addEventListener('change', e => {
            if (e.target.files.length == 0) {

                // No file selected, ignore
                return;
            }

            const imageFile = e.target.files[0];

            let ele = document.getElementById('error-message');

            // Scan QR Code
            html5QrCode.scanFile(imageFile, true)
                .then(qrCodeMessage => {

                    // success, use qrCodeMessage
                    document.getElementById("voucher_code").value = qrCodeMessage;
                    ele.style.display = "none";
                })
                .catch(err => {

                    // failure, handle it.
                    document.getElementById("voucher_code").value = "";
                    ele.innerHTML = `Error scanning file. Reason: ${err}`;
                    ele.style.display = "block";
                });
        });

        $("button[id=submitVoucher]").on('click', (e) => {
            e.preventDefault()
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/transaction/claimVoucher",
                data: {
                    _token: "OqCxigToSeffu9JD3DR3P1jxI5vf5USSUwFT9cNU",
                    voucherCode: $("input[id=voucher_code]").val()
                },
                success: function(res) {
                    $("#voucherModal").modal('hide');
                    $("input[id=voucher_code]").val('');
                    Swal.fire({
                        icon: (res.success == true) ? 'success' : 'error',
                        html: res.message,
                        timerProgressBar: true,
                        showButtonConfirm: false,
                        timer: 3000
                    })
                }
            });
        });
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
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    {{-- <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 15301668;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                        t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script> --}}
    <noscript><a href="https://www.livechat.com/chat-with/15301668/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->








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


@endsection
