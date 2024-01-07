<!DOCTYPE html>
<html lang="id">


<!-- Mirrored from mahacuan.live/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 16:37:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes'>
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/favicon/favicon-1933674734.png">
    <!-- Canonical -->
    <link rel="canonical" href="register.html" />
    <!-- End Canonical -->
    <meta name="description" itemprop="description" content="Register" />
    <meta name="keywords" content="Register" />
    <title>MAHACUAN: Register</title>
    <!-- Custom Tags -->

    <!-- End Custom Tags -->
    <link rel="preload" as="font" href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/webfonts/fa-solid-900.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/webfonts/fa-brands-400.woff2" type="font/woff2"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/css/global.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/font/font-awesome/css/all.min.css">
    <link rel="stylesheet" id="templateStyle" type="text/css" href="{{ asset('/') }}template_mahacuan/custom/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}template_mahacuan/themes/1/sass/custom65a9.css?v=2.0.1511">
</head>

<body>

    <style>
        .progress-line {
            width: 0%;
            height: 2px;
            align-content: center;
            background-color: green;
        }
    </style>

    <section class="home__slider" style="overflow:visible">
        <div class="swiper-container main-slider" style="min-height:60px;">
        </div>
        <div class="slider-marquee">
            <div class="header-merque">
                <div class="marquee-cont">
                    <div class="marquee-desc">
                        <i aria-hidden="true" class="v-icon notranslate fa fa-solid fa-bullhorn theme--dark"
                            style="font-size: 16px;"></i>
                        <marquee></marquee>
                    </div>
                    <div class="marquee-content">
                        <div class="marquee-date">
                            <div class="header-time" id="headerTime"></div>
                        </div>
                    </div>
                    <div id="header-currency" class="header-flag mr-2">
                        <span>Rupiah</span>
                    </div>
                    <div id="header-lang" class="header-flag">
                        <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <i class="fas fa-caret-down"></i>

                        <div id="lang-dropdown" class="flag-dropdown">
                            <a href="javascript:;" data-locale="en" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                    <span>English</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="id" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                    <span>Indonesia</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="th" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/thai.png" alt="th">
                                    <span>Thailand</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="vn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                    <span>Viet</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="kh" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                    <span>Khmer</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="cn" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                    <span>Chinese</span>
                                </div>
                            </a>
                            <a href="javascript:;" data-locale="tl" name="locale-switch">
                                <div class="flag-item">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                    <span>Tagalog</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- //modal_login --}}
    <!-- Add LOGIN Modal -->
    @include('mahacuan.modal_login')
    <!-- /Add LOGIN Modal -->

    <div class="header-nav">
        <div id="pageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height:4px;width:1%;position:absolute;z-index:999;"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('index.html')">
                                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/home.svg" width="80">
                                <span class="nav-link-name">
                                    Home
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/slot')"
                                style="cursor: pointer;">
                                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/slot.svg" width="80" alt="slot">
                                <span class="nav-link-name">
                                    Slot
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fastspin')" href="javascript:;">
                                            <img title="FASTSPIN" alt="FASTSPIN"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fsp.webp">
                                            <div class="game-name">FASTSPIN</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pragmaticplay')" href="javascript:;">
                                            <img title="Pragmatic Play" alt="Pragmatic Play"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pra.webp">
                                            <div class="game-name">Pragmatic Play</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/spadegaming')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="N2Live Slot" alt="N2Live Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nli.webp">
                                            <div class="game-name">N2Live Slot</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/pgsoft')" href="javascript:;">
                                            <img title="PG Soft" alt="PG Soft"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pgs.webp">
                                            <div class="game-name">PG Soft</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/fachai')" href="javascript:;">
                                            <img title="Fa Chai" alt="Fa Chai"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/fac.webp">
                                            <div class="game-name">Fa Chai</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jili')" href="javascript:;">
                                            <img title="JILI" alt="JILI"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jli.webp">
                                            <div class="game-name">JILI</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/redtiger')" href="javascript:;">
                                            <img title="RED TIGER" alt="RED TIGER"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/rtr.webp">
                                            <div class="game-name">RED TIGER</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/afbgaming')" href="javascript:;">
                                            <img title="Afb Gaming" alt="Afb Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/afg.webp">
                                            <div class="game-name">Afb Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="AIS GAMING" alt="AIS GAMING"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/aisg.webp">
                                            <div class="game-name">AIS GAMING</div>
                                            <img title="AIS GAMING" alt="AIS GAMING" class="game-maintenance"
                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hcgaming')" href="javascript:;">
                                            <img title="HC Game" alt="HC Game"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hcg.webp">
                                            <div class="game-name">HC Game</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/advantplay')" href="javascript:;">
                                            <img title="Advantplay" alt="Advantplay"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/adv.webp">
                                            <div class="game-name">Advantplay</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/jdb')" href="javascript:;">
                                            <img title="JDB" alt="JDB"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jdb.webp">
                                            <div class="game-name">JDB</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/nolimitcity')" href="javascript:;">
                                            <img title="NoLimit City" alt="NoLimit City"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/nlc.webp">
                                            <div class="game-name">NoLimit City</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/habanero')" href="javascript:;">
                                            <img title="Habanero" alt="Habanero"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hbn.webp">
                                            <div class="game-name">Habanero</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/cq9')" href="javascript:;">
                                            <img title="CQ9 Gaming" alt="CQ9 Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/cq9.webp">
                                            <div class="game-name">CQ9 Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/virtualtech')" href="javascript:;">
                                            <img title="Virtual Tech" alt="Virtual Tech"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/vrt.webp">
                                            <div class="game-name">Virtual Tech</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ameba')" href="javascript:;">
                                            <img title="Ameba" alt="Ameba"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/amb.webp">
                                            <div class="game-name">Ameba</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/ttg')" href="javascript:;">
                                            <img title="Top Trend Gaming" alt="Top Trend Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/ttg.webp">
                                            <div class="game-name">Top Trend Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/microgaming')" href="javascript:;">
                                            <img title="Microgaming" alt="Microgaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/mic.webp">
                                            <div class="game-name">Microgaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item">
                                        <a href="javascript:;">
                                            <img title="Playtech Slot" alt="Playtech Slot"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/pla.webp">
                                            <div class="game-name">Playtech Slot</div>
                                            <img title="Playtech Slot" alt="Playtech Slot" class="game-maintenance"
                                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/nav-addons/maintenance_logo.png">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/playngo')" href="javascript:;">
                                            <img title="Play N Go" alt="Play N Go"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/png.webp">
                                            <div class="game-name">Play N Go</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/slot/hydako')" href="javascript:;">
                                            <img title="Hydako" alt="Hydako"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/slot/hyd.webp">
                                            <div class="game-name">Hydako</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/livegames')"
                                style="cursor: pointer;">
                                <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/nav-addons/hot_category.png" width="30"
                                    height="12" class="hot-tag">
                                <img src="themes/1/img/navigation/livegames.svg" width="80" alt="livegames">
                                <span class="nav-link-name">
                                    Live Game
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item game-item-new">
                                        <a onclick="routeNav('/livegames/livegame')" href="javascript:;">
                                            <img class="logolivegame" alt="WebsiteLogo"
                                                src={{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/logo/logo-1933674734.png>
                                            <img title="LIVE GAME" alt="LIVE GAME"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/lvg.webp">
                                            <div class="game-name">MAHACUAN LIVE</div>

                                            <img title="LIVE GAME" alt="LIVE GAME" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="WS168" alt="WS168"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/ws1.webp">
                                            <div class="game-name">WS168</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="MIKI Gaming" alt="MIKI Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/mki.webp">
                                            <div class="game-name">MIKI Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="SV388 Cockfight" alt="SV388 Cockfight"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/sv3.webp">
                                            <div class="game-name">SV388 Cockfight</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/casino')"
                                style="cursor: pointer;">
                                <img src="themes/1/img/navigation/casino.svg" width="80" alt="casino">
                                <span class="nav-link-name">
                                    Casino
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="AFB CASINO" alt="AFB CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/afc.webp">
                                            <div class="game-name">AFB CASINO</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Pragmatic Play LC" alt="Pragmatic Play LC"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/plc.webp">
                                            <div class="game-name">Pragmatic Play LC</div>

                                        </a>
                                    </div>
                                    <div class="game-item game-item-new">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="WE CASINO" alt="WE CASINO"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wec.webp">
                                            <div class="game-name">WE CASINO</div>

                                            <img title="WE CASINO" alt="WE CASINO" class="game-new"
                                                src="https://images.linkcdn.cloud/global/nav-addons/new_icon.webp">
                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="GD88" alt="GD88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/gd8.webp">
                                            <div class="game-name">GD88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="WM Casino" alt="WM Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/wmc.webp">
                                            <div class="game-name">WM Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="OG Casino" alt="OG Casino"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/ogs.webp">
                                            <div class="game-name">OG Casino</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Evolution" alt="Evolution"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/evo.webp">
                                            <div class="game-name">Evolution</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="ALLBET" alt="ALLBET"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/alb.webp">
                                            <div class="game-name">ALLBET</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Dream Gaming" alt="Dream Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/drg.webp">
                                            <div class="game-name">Dream Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Asia Gaming" alt="Asia Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/agc.webp">
                                            <div class="game-name">Asia Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Sexy Gaming" alt="Sexy Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/seg.webp">
                                            <div class="game-name">Sexy Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="LG88" alt="LG88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/lg8.webp">
                                            <div class="game-name">LG88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="N2Live" alt="N2Live"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/casino/nli.webp">
                                            <div class="game-name">N2Live</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/sportsbook')"
                                style="cursor: pointer;">
                                <img src="themes/1/img/navigation/sport.svg" width="80" alt="sport">
                                <span class="nav-link-name">
                                    Sportsbook
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="AFB88" alt="AFB88"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/afb88.webp">
                                            <div class="game-name">AFB88</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="IA E-SPORT" alt="IA E-SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/iae.webp">
                                            <div class="game-name">IA E-SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="SBO SPORT" alt="SBO SPORT"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/sbobet.webp">
                                            <div class="game-name">SBO SPORT</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="CMD368" alt="CMD368"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/sportbook/cmd368.webp">
                                            <div class="game-name">CMD368</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/lottery')"
                                style="cursor: pointer;">
                                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/lottery.svg" width="80" alt="lottery">
                                <span class="nav-link-name">
                                    Lottery
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a onclick="routeNav('/lottery/4d')" href="javascript:;">
                                            <img title="4D" alt="4D"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/lottery/tog.webp">
                                            <div class="game-name">4D</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a href="javascript:;" class="nav-link" onclick="routeNav('/arcade')"
                                style="cursor: pointer;">
                                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/arcade.svg" width="80" alt="arcade">
                                <span class="nav-link-name">
                                    Arcade
                                </span>
                            </a>
                            <div class="nav-item__game">
                                <div class="container-fluid text-center justify-content-center">
                                    <div class="game-item ">
                                        <a href="javascript:;" onclick="gameAlert()">
                                            <img title="Spaceman" alt="Spaceman"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/other/spa.webp">
                                            <div class="game-name">Spaceman</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/joker')" href="javascript:;">
                                            <img title="Joker Gaming" alt="Joker Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/jok.webp">
                                            <div class="game-name">Joker Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/spade')" href="javascript:;">
                                            <img title="Spade Gaming" alt="Spade Gaming"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/spd.webp">
                                            <div class="game-name">Spade Gaming</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/playstar')" href="javascript:;">
                                            <img title="Playstar" alt="Playstar"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/pls.webp">
                                            <div class="game-name">Playstar</div>

                                        </a>
                                    </div>
                                    <div class="game-item ">
                                        <a onclick="routeNav('/arcade/cq9')" href="javascript:;">
                                            <img title="CQ9" alt="CQ9"
                                                src="https://images.linkcdn.cloud/global/game-skin1/navbar/fishing/cq9.webp">
                                            <div class="game-name">CQ9</div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/news')">
                                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/news.svg" width="80">
                                <span class="nav-link-name">
                                    Berita
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="javascript:;" onclick="routeNav('/promotion')">
                                <img src="themes/1/img/navigation/promotion.svg" width="80">
                                <span class="nav-link-name">
                                    Promosi
                                </span>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="event.html">
                                <img src="themes/1/img/navigation/event.svg" width="80">
                                <span class="nav-link-name">
                                    Event
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="header-mobile">
        <div class="header-mobile__top">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/logo/logo-1933674734.png" alt="WebsiteLogo"
                        width="125" height="27">
                </a>
            </div>
            <div class="mobile-button">

                <div data-target="slide-out" class="mobile-button--menu sidenav-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
        <div class="header-mobile__marquee">
            <i class="fas fa-bullhorn"></i>
            <marquee class="marquee"></marquee>
        </div>
        <div id="mobilePageLoadingBar" class="progress-bar progress-bar-success" role="progressbar"
            style="height:4px;width:1%;position:absolute;z-index:999;display:none;"></div>
    </div>
    <div id="overlay"></div>
    <div class="sidenav">
        <div class="sidenav__header">
            <div class="header-top">
                <div class="header-time" id="headerTime"></div>
                <div class="flags show-popup-language" data-toggle="modal" data-target="#languageModal">
                    <span>Indonesia</span>
                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                </div>
            </div>
            <div class="header-user">
                <span>Selamat Datang</span>
            </div>
            <div class="header-logo">
                <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/V2/779/logo/logo-1933674734.png" alt="WebsiteLogo" width="180"
                    height="39">
            </div>
            <div class="header-desc">Silakan Login atau Mendaftar</div>
        </div>
        <div class="sidenav__form">
            <div class="form-button">
                <button class="btn-login sidenav-login" type="button" type="button" data-toggle="modal"
                    data-target="#loginModal">Masuk</button>
                <button class="btn-register" onclick="window.location.href = 'register.html'">Daftar</button>
            </div>
            <div class="form-forgot">
                <a class="" href="forgot-password.html">Lupa Password?</a>
            </div>
        </div>


        <div class="sidenav__menu">
            <div class="menu-list">
                <a href="index.html">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/home.svg" width="60" height="60">
                        <div class="menu-title">Home</div>
                    </div>
                </a>
                <a href="javascript:;" onclick="routeNav('/promotion')">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/promo.svg" width="60" height="60">
                        <div class="menu-title">Promosi</div>
                    </div>
                </a>
                <a href="download/MAHACUAN.apk">
                    <div class="list-item">
                        <img src="themes/1/img/navigation/download-apps.svg" width="60" height="60">
                        <div class="menu-title">Apps</div>
                    </div>
                </a>
                <a href="javascript:;" onclick="routeNav('/news')">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/news.svg" width="60" height="60">
                        <div class="menu-title">Berita</div>
                    </div>
                </a>
                <a href="help.html">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/help.svg" width="60" height="60">
                        <div class="menu-title">Bantuan</div>
                    </div>
                </a>
                <a href="contact.html">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/contactus.svg" width="60" height="60">
                        <div class="menu-title">Kontak Kami</div>
                    </div>
                </a>
                <a href="event.html">
                    <div class="list-item ">
                        <img src="themes/1/img/navigation/event.svg" width="60" height="60">
                        <div class="menu-title"> Event</div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="modal fade custom-popup" id="languageModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="language-header">
                    <h3>Region and Language</h3>
                    <div class="header-flag">
                        <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/indonesia.png" alt="id">
                        <h6>Indonesia</h6>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="language-list">
                        <a href="javascript:;" data-locale="en" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/english.png"
                                        alt="en">
                                </div>
                                <div class="item-content">
                                    <h6><small>en</small></h6>
                                    <h5>English</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="id" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/indonesia.png"
                                        alt="id">
                                </div>
                                <div class="item-content">
                                    <h6><small>id</small></h6>
                                    <h5>Indonesia</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="th" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/thai.png"
                                        alt="th">
                                </div>
                                <div class="item-content">
                                    <h6><small>th</small></h6>
                                    <h5>Thailand</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="vn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/vietnam.png"
                                        alt="vn">
                                </div>
                                <div class="item-content">
                                    <h6><small>vn</small></h6>
                                    <h5>Viet</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="kh" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/cambodia.png"
                                        alt="kh">
                                </div>
                                <div class="item-content">
                                    <h6><small>kh</small></h6>
                                    <h5>Khmer</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="cn" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/chinese.png"
                                        alt="cn">
                                </div>
                                <div class="item-content">
                                    <h6><small>cn</small></h6>
                                    <h5>Chinese</h5>
                                </div>
                            </div>
                        </a>
                        <a href="javascript:;" data-locale="tl" name="locale-switch">
                            <div class="list-item">
                                <div class="item-flag">
                                    <img src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/default/icon/lang/philippines.png"
                                        alt="tl">
                                </div>
                                <div class="item-content">
                                    <h6><small>tl</small></h6>
                                    <h5>Tagalog</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="themes/1/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        let loginEl = document.getElementById('login-widget');

        window.addEventListener('scroll', (event) => {
            var currentScroll = document.documentElement.scrollTop;

            // let loginEl = document.getElementById('login-widget');

            if (currentScroll >= 150) {
                loginEl.classList.add('minimized');
            } else if (currentScroll <= 100) {
                $('#login-widget').removeClass('minimized');
                $(".icon-minimize").click()
            }
        });

        var inputUsername = document.getElementById('username')

        $('#usernameInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('#passwordInput').on('focus', function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__member').hover(function() {
            $('#login-widget').removeClass('minimized')
        })

        $('.widget-form__logo').hover(function() {
            $('#login-widget').removeClass('minimized')
        })
    </script>


    <!-- Account Balance -->
    <main id="main-route">
        <div class="main-content register">
            <div class="container">
                <div class="register__container mb-4">
                    <div class="page-header">Formulir Pendaftaran</div>
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="register-desc">*Nama pengguna harus terdiri dari 6 hingga 15 karakter dan mengunakan
                        alfabet.</div>
                    <form id="register-form" method="POST" action="{{ route('register_save') }}"
                        data-parsley-validate>
                        @csrf
                        <div class="register-form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="username_register">Nama Pengguna*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="text" value="" name="username"
                                            id="username_register" minlength="6" maxlength="15"
                                            placeholder="Nama Pengguna" data-parsley-trigger="keyup"
                                            style="text-transform: lowercase" autocomplete="off" autofocus>
                                        <span id="username_register-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="password">Kata Sandi*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="password" name="password"
                                            id="password_register" minlength="8" maxlength="25"
                                            placeholder="Kata Sandi" data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="password_register-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="rePassword">Konfirmasi Kata Sandi*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            id="password_confirmation" minlength="8" maxlength="25"
                                            placeholder="Konfirmasi Kata Sandi" data-parsley-equalto="#password"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="password_confirmation-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="email">Email*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="email" name="email"
                                            id="email" minlength="6" maxlength="50"
                                            placeholder="nama@domain.com" data-parsley-type="email"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="email-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="phoneInput">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="phone">Nomor Ponsel*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">+62</span>
                                            </div>
                                            <input class="form-control" value="" type="text" name="phone"
                                                id="phone" minlength="8" maxlength="20"
                                                placeholder="Nomor Ponsel*" data-parsley-type="number"
                                                data-parsley-trigger="keyup" autocomplete="off">
                                        </div>
                                        <span id="phone-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="bank">Bank*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <select class="form-control" name="bank" id="bank">
                                            <option value="">--- Pilih Bank ---</option>
                                            @foreach ($bankGroup as $model => $banks)
                                                <optgroup label="{{ $model }}">
                                                    @foreach ($banks as $val)
                                                        <option value="{{ $val->id }}" data-max="10" data-min="10">{{ $val->bank_name }}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        <span id="bank-error"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="accountName">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="rek_name">Nama Rekening*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="text" name="rek_name"
                                            id="rek_name" minlength="2" maxlength="100"
                                            placeholder="Nama Sesuai Rekening" data-parsley-type="text"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="rek_name-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="accountNumber">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="accNumber">Nomor Rekening*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" value="" type="text"
                                            name="accNumber" id="accNumber" minlength="" maxlength=""
                                            placeholder="Nomor Sesuai Rekening" data-parsley-type="number"
                                            data-parsley-trigger="keyup" autocomplete="off">
                                        <span id="accNumber-error"></span>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="referral">Referral</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <input class="form-control" type="text" name="referral"
                                            id="referral" minlength="4" maxlength="12"
                                            placeholder="Kode Referral (Boleh di kosongkan)" value=""
                                            autocomplete="off">
                                        <span id="referral-error"></span>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 d-flex align-items-center justify-content-start">
                                        <label for="captcha">Captcha*</label>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="cap-img">
                                            <div class="cap-content">
                                                <input type="hidden" name="_token"
                                                    value="kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL">
                                                <img id="captcha" src="{{ asset('/') }}template_mahacuan/captcha/defaultf9b8.png?mqDuOZFE">
                                                <button id="refreshCaptcha" class="btn btn-sm btn-info mr-4">
                                                    <i class="fas fa-sync-alt"></i>
                                                </button>
                                            </div>
                                            <input class="form-control input-code" type="text" name="captcha"
                                                id="captcha" placeholder="Captcha" data-parsley-type="number"
                                                data-parsley-trigger="keyup">
                                        </div>
                                        <span id="captcha-error"></span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label for="term" class="register-terms">
                                    <input type="checkbox" name="term" id="term">
                                    <span>Saya telah berusia lebih dari 21 tahun, telah membaca, dan menerima <u><a
                                                href="help.html">syarat dan ketentuan</a></u> yang dipasang di situs
                                        ini, jika Saya melanggar salah satu syarat dan ketentuan, maka situs berhak
                                        untuk menghentikan atau menangguhkan akun Saya.</span>
                                </label>

                            </div>
                            <button id="registerButton" class="daftar btn-custom button-submit" type="submit">
                                Daftar
                                <div id="progressButton" class="progress-line"></div>
                            </button><br><br>
                            <span id="term-error"></span>
                    </form>
                </div>
            </div>
            <div class="game__seo">
                <div hidden id="title-seo">MAHACUAN: Register</div>
                <div class="seo-content showFooter">
                    <div class="register__container mt-5">
                        <h1>Register</h1>
                        <p>Register</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__provider">
            <div class="container-fluid">
                <div class="provider-header">PROVIDER</div>
                <div class="provider-holder">
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Slot" alt="Slot"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Slot.png" width="20"
                                height="20">
                            <span>SLOT</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="FASTSPIN" title="FASTSPIN"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/fastspin_footer.png"
                                width="100" height="50">
                            <img alt="Pragmatic Play" title="Pragmatic Play"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="Spade Gaming" title="Spade Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png" width="100"
                                height="50">
                            <img alt="N2Live Slot" title="N2Live Slot"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                            <img alt="PG Soft" title="PG Soft"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/pgs_footer.png" width="100"
                                height="50">
                            <img alt="Fa Chai" title="Fa Chai"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/fac_footer.webp"
                                width="100" height="50">
                            <img alt="JILI" title="JILI"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/jli_footer.webp"
                                width="100" height="50">
                            <img alt="RED TIGER" title="RED TIGER"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/rtr_footer.webp"
                                width="100" height="50">
                            <img alt="Afb Gaming" title="Afb Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/afg_footer.png" width="100"
                                height="50">
                            <img alt="AIS GAMING" title="AIS GAMING"
                                src="https://images.linkcdn.cloud/global/logo-footer/slot/aisg_footer.webp"
                                width="100" height="50">
                            <img alt="HC Game" title="HC Game"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/hcg_footer.png" width="100"
                                height="50">
                            <img alt="Advantplay" title="Advantplay"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/adv_footer.png" width="100"
                                height="50">
                            <img alt="JDB" title="JDB"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/jdb_footer.png"
                                width="100" height="50">
                            <img alt="NoLimit City" title="NoLimit City"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/nlc_footer.png" width="100"
                                height="50">
                            <img alt="Playstar" title="Playstar"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png" width="100"
                                height="50">
                            <img alt="Joker Gaming" title="Joker Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png" width="100"
                                height="50">
                            <img alt="Habanero" title="Habanero"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/hbn_footer.png" width="100"
                                height="50">
                            <img alt="CQ9 Gaming" title="CQ9 Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png" width="100"
                                height="50">
                            <img alt="Virtual Tech" title="Virtual Tech"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/vrt_footer.png" width="100"
                                height="50">
                            <img alt="Ameba" title="Ameba"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/amb_footer.png" width="100"
                                height="50">
                            <img alt="Top Trend Gaming" title="Top Trend Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/ttg_footer.png" width="100"
                                height="50">
                            <img alt="Microgaming" title="Microgaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/micro_logo.png" width="100"
                                height="50">
                            <img alt="Playtech Slot" title="Playtech Slot"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/pla_footer.png" width="100"
                                height="50">
                            <img alt="Play N Go" title="Play N Go"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/png_footer.png" width="100"
                                height="50">
                            <img alt="Hydako" title="Hydako"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/hyd_footer.png" width="100"
                                height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="provider-title">
                            <img title="Casino" alt="Casino"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Casino.png" width="20"
                                height="20">
                            <span>CASINO</span>
                        </div>
                        <div class="provider-logo">
                            <img alt="AFB CASINO" title="AFB CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/afc_footer.webp"
                                width="100" height="50">
                            <img alt="Pragmatic Play LC" title="Pragmatic Play LC"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/plc_footer.png"
                                width="100" height="50">
                            <img alt="WE CASINO" title="WE CASINO"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/wec_footer.webp"
                                width="100" height="50">
                            <img alt="GD88" title="GD88"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/gd8_footer.png"
                                width="100" height="50">
                            <img alt="WM Casino" title="WM Casino"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/wmc_footer.png"
                                width="100" height="50">
                            <img alt="OG Casino" title="OG Casino"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/ogs_footer.png"
                                width="100" height="50">
                            <img alt="Evolution" title="Evolution"
                                src="https://images.linkcdn.cloud/global/logo-footer/casino/evolution_footer.webp"
                                width="100" height="50">
                            <img alt="ALLBET" title="ALLBET"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/alb_footer.png"
                                width="100" height="50">
                            <img alt="Dream Gaming" title="Dream Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/drg_footer.png"
                                width="100" height="50">
                            <img alt="Asia Gaming" title="Asia Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/agc_footer.png"
                                width="100" height="50">
                            <img alt="Sexy Gaming" title="Sexy Gaming"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/seg_footer.png"
                                width="100" height="50">
                            <img alt="LG88" title="LG88"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/lg8_footer.png"
                                width="100" height="50">
                            <img alt="N2Live" title="N2Live"
                                src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/casino/nli_footer.png"
                                width="100" height="50">
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Sportsbook" alt="Sportsbook"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Sport.png" width="20"
                                        height="20">
                                    <span>SPORTSBOOK</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="AFB88" title="AFB88"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/sports/afb_footer.png"
                                        width="100" height="50">
                                    <img alt="IA E-SPORT" title="IA E-SPORT"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/sports/iae_footer.png"
                                        width="100" height="50">
                                    <img alt="SBO SPORT" title="SBO SPORT"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/sports/sbo_footer.png"
                                        width="100" height="50">
                                    <img alt="CMD368" title="CMD368"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/sports/cmd_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="provider-title">
                                    <img title="Arcade" alt="Arcade"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Arcade.png" width="20"
                                        height="20">
                                    <span>ARCADE</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="Spaceman" title="Spaceman"
                                        src="https://images.linkcdn.cloud/global/logo-footer/casino/spaceman_footer.webp"
                                        width="100" height="50">
                                    <img alt="Joker Gaming" title="Joker Gaming"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/jok_footer.png"
                                        width="100" height="50">
                                    <img alt="Spade Gaming" title="Spade Gaming"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/spd_footer.png"
                                        width="100" height="50">
                                    <img alt="Playstar" title="Playstar"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/pls_footer.png"
                                        width="100" height="50">
                                    <img alt="CQ9" title="CQ9"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/slot/cq9_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="provider-content">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Live Game" alt="Live Game"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Game%20Lain.png"
                                        width="20" height="20">
                                    <span>LIVE GAME</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="LIVE GAME" title="LIVE GAME"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/others/lvg_footer.png"
                                        width="100" height="50">
                                    <img alt="WS168" title="WS168"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/others/ws1_footer.png"
                                        width="100" height="50">
                                    <img alt="MIKI Gaming" title="MIKI Gaming"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/others/miki_footer.png"
                                        width="100" height="50">
                                    <img alt="SV388 Cockfight" title="SV388 Cockfight"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/others/sv3_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="provider-title">
                                    <img title="Lottery" alt="Lottery"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/icon-footer/Lottery.png" width="20"
                                        height="20">
                                    <span>LOTTERY</span>
                                </div>
                                <div class="provider-logo">
                                    <img alt="4D" title="4D"
                                        src="{{ asset('/') }}template_mahacuan/images.linkcdn.cloud/global/logo-footer/lottery/tog_footer.png"
                                        width="100" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="provider-nav">
                    <a href="#" class="provider-link">+21</a>
                    <a href="news.html" class="provider-link">Berita</a>
                    <a href="promotion.html" class="provider-link">Promosi</a>
                    <a href="help.html#About" class="provider-link">Tentang Kami</a>
                    <a href="contact.html" class="provider-link">Kontak Kami</a>
                    <a href="help.html" class="provider-link">Persyaratan &amp; Ketentuan</a>
                    <a href="help.html#FAQ" class="provider-link">FAQ</a>
                </div>
            </div>
        </div>
        <div class="footer__trademark">Copyright &copy; 2021 - 2023
            mahacuan is an international registered trademark. All rights reserved.</div>
    </footer>


    <div class="footer-mobile">
        <a class="footer-item " href="index.html">
            <div class="footer-icon">
                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/home.svg" width="60">
            </div>
            <div class="footer-title">Home</div>
        </a>
        <a class="footer-item" href="download/MAHACUAN.apk">
            <div class="footer-icon">
                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/download-apps.svg" width="60">
            </div>
            <div class="footer-title">Apps</div>
        </a>
        <a class="footer-item footer-login" href="#" data-toggle="modal" data-target="#loginModal">
            <div class="footer-icon">
                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/loginbtn.svg" width="60">
            </div>
            <div class="footer-title">Masuk</div>
        </a>
        <a class="footer-item " href="javascript:;" onclick="routeNav('/promotion')">
            <div class="footer-icon">
                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/promo.svg" width="60">
            </div>
            <div class="footer-title">Promosi</div>
        </a>
        <a class="footer-item" target="_blank" rel="noreferrer" href="https://direct.lc.chat/15301668/">
            <div class="footer-icon">
                <img src="{{ asset('/') }}template_mahacuan/themes/1/img/navigation/livechat.svg" width="60">
            </div>
            <div class="footer-title">Live Chat</div>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade custom-popup" id="loginModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulir Login</h5>
                </div>

                <div class="modal-body">
                    <div class="modal-body-form">
                        <form name="login-form">
                            <div class="form-item">
                                <div class="item-title">Nama Pengguna*</div>
                                <input value="" minlength="1" maxlength="25" name="usernameLogin"
                                    style="text-transform: lowercase" type="text" placeholder="Nama Pengguna*"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-item">
                                <div class="item-title">Kata Sandi*</div>
                                <input value="" minlength="5" maxlength="50" name="passwordLogin"
                                    type="password" placeholder="Kata Sandi*" autocomplete="off" required>
                            </div>
                            <div class="form-forgot">
                                <a href="forgot-password.html">Lupa Kata Sandi ?</a>
                            </div>
                            <div class="form-button">
                                <button name="buttonLogin" type="submit" class="button-login">Masuk</button>
                                <span>Belum punya akun? <a href="register.html">Daftar</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/') }}template_mahacuan/themes/1/js/vendor.js"></script>
    <script src="{{ asset('/') }}template_mahacuan/themes/1/js/global65a9.js?v=2.0.1511"></script>


    <script src="{{ asset('/') }}template_mahacuan/themes/1/js/index65a9.js?v=2.0.1511"></script>
    <script src="{{ asset('/') }}template_mahacuan/themes/1/vendor/jquery-validate/jquery.validate.min.js"></script>
    <script>
        window.addEventListener("popstate", (event) => {
            location.reload();
        });

        $("a[name=locale-switch]").on("click", function() {
            const locale = $(this).attr('data-locale')
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/locale",
                data: {
                    _token: "kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL",
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
            $.ajax({
                type: "POST",
                url: "https://mahacuan.live/paymentService",
                data: {
                    _token: "kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL"
                },
                success: function(response) {
                    let wdTime = response.data.wd
                    let depoTime = response.data.depo
                    $("[id=withdrawTime]").text(wdTime)
                    $("[id=withdrawTimeBar]").attr('aria-valuenow', wdTime).width((wdTime / 15) * 100 +
                        "%")
                    $("[id=depositTime]").text(depoTime)
                    $("[id=depositTimeBar]").attr('aria-valuenow', depoTime).width((depoTime / 15) *
                        100 + "%")
                }
            });


            $('#homePopup').modal('hide');

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
            if (path == 'index.html') {
                window.location.replace("index.html")
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
                    let checkPath = path.split('index.html')
                    fbq('track', 'ViewContent', {
                        content_name: (checkPath[2] == "undefined") ? checkPath[1] : checkPath[2],
                        content_category: checkPath[1],
                        content_type: 'games',
                    });
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


        $("form[name=login-form]").on('submit', function(e) {
            e.preventDefault();
            let formData = {};
            $.each($(this).serializeArray(), function(i, val) {
                formData[val.name] = val.value
            });
            let btnTxt = $("button[name=buttonLogin]").html()
            $.ajax({
                url: "https://mahacuan.live/doLogin",
                type: 'POST',
                data: {
                    _token: "kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL",
                    username: formData.usernameLogin,
                    password: formData.passwordLogin
                },
                beforeSend: function() {
                    $("input[name='usernameLogin']").attr('readonly', true)
                    $("input[name='passwordLogin']").attr('readonly', true)
                    $("button[name=buttonLogin]").attr('disabled', true)
                    $("button[name=buttonLogin]").html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>'
                        );
                },
                success: function(data) {
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
                        $.each(data.errors, function(index, valueOfElement) {
                            msg += valueOfElement + '<br />'
                        });
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'error',
                            title: (msg == '') ?
                                "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                                msg
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
                error: function(data) {
                    let msg = '';
                    $.each(data.responseJSON.errors, function(index, valueOfElement) {
                        msg += valueOfElement + '<br />'
                    });
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: (msg == '') ?
                            "Mohon maaf atas ketidaknyamanannya, halaman ini akan dimuat ulang dalam 5 detik" :
                            msg
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
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
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
                    n.async = !0, n.type = "text/javascript", n.src = "../cdn.livechatinc.com/tracking.js", t
                        .head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/15301668/" rel="nofollow">Chat with us</a>, powered by <a
            href="https://www.livechat.com/?welcome" rel="noopener nofollow"
            target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->





</body>

<!-- Mirrored from mahacuan.live/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 16:37:06 GMT -->

</html>

<custom-script>
    <script>
        $(document).ready(function() {
            $('#refreshCaptcha').click(function(e) {
                e.preventDefault();
                $('#captcha').attr('src', window.location.origin + '/captcha/default?' + Math.random())
            });
        });

        function loadingBar() {
            let i = 0;
            if (i == 0) {
                i = 1;
                let elem = document.getElementById("progressButton");
                let width = 1;
                let id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                    }
                }
            }
        }

        var timer;
        $('#username_register').on('focusout', function() {
            $("#username_register-error").html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>`);
            let username = $('#username_register').val()
            if (username.length > 6) {
                clearTimeout(timer);
                timer = setTimeout(userCheck, 2000);
            } else {
                $("#username_register-error").hide()
            }
        });

        function userCheck() {
            let username = $('#username_register').val()
            if (username.length < 6) {
                $("#username_register-error").hide();
                return false;
            }
            let url = "index.html"
            $("#username_register-error").show();
            $.ajax({
                type: 'post',
                url: url,
                data: {
                    _token: "kmWiRvJviIuiw5KF4aVRUaOkyX5vhc7kzqyqN7yL",
                    username: username
                },
                success: function(data) {
                    if (data.success === false) {
                        $("#username_register").removeClass('is-invalid').addClass('is-valid')
                        $("#username_register-error").text(data.error);
                    } else {
                        $("#username_register").removeClass('is-valid').addClass('is-invalid')
                        $("#username_register-error").text(data.error);
                    }
                },
            });
        };

        $("#phone").on('input propertychange paste', function() {
            var reg = /^0+/gi;
            if (this.value.match(reg)) {
                this.value = this.value.replace(reg, '');
            }
        });

        function allowedKey(event, regex) {
            let reg = new RegExp(regex);
            let k = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!reg.test(k)) {
                event.preventDefault();
                return false;
            }
        }

        $('#username_register').bind('keypress', function(event) {
            return allowedKey(event, "^[a-zA-Z0-9]+$")
        });
        $('#phone').bind('keypress', function(event) {
            return allowedKey(event, "^[0-9]+$")
        });
        $('#accName').bind('keypress', function(event) {
            return allowedKey(event, "^[a-zA-Z ]+$")
        });
        $('#accNumber').bind('keypress', function(event) {
            return allowedKey(event, "^[0-9]+$")
        });



        jQuery.validator.addMethod("validatePhone", function(value, element) {
            let currency = "IDR"
            if ($('select[id=bank] :selected').parent().attr('label') != "bank") {
                if (currency == "IDR" && $("input[name=phone]").val()[0] != 8) {
                    return false;
                } else {
                    return true
                }
            } else {
                return true;
            }
        }, "Nomor ponsel tidak valid, mohon periksa kembali nomor ponsel anda.");



        $("#register-form").validate({
            onkeyup: false,
            rules: {
                username: {
                    required: true,
                    minlength: 6
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password_confirmation: {
                    required: true,
                    minlength: 8,
                    equalTo: '#password_register'
                },
                email: {
                    required: true,
                    email: true
                },
                bank: {
                    required: true
                },
                phone: {
                    required: true,
                    validatePhone: true
                },
                accName: {
                    required: true
                },
                accNumber: {
                    required: true
                },
                captcha: {
                    required: true
                },
                term: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Nama Pengguna Tidak Boleh Kosong",
                    minlength: "Panjang nama pengguna valid adalah 6 hingga 15"
                },
                password: {
                    required: "Kata Sandi tidak boleh kosong",
                    minlength: "Harap masukkan minimal 8 karakter."
                },
                password_confirmation: {
                    required: "Kata Sandi tidak boleh kosong",
                    minlength: "Harap masukkan minimal 8 karakter.",
                    equalTo: "Kata Sandi Konfirmasi Harus Sama."
                },
                email: {
                    required: "Alamat Email tidak boleh kosong.",
                    email: "Alamat Email tidak sesuai. contoh: john@doe.com"
                },
                bank: {
                    required: "Silahkan pilih bank anda.",
                },
                phone: {
                    required: "Nomor Telepon tidak boleh kosong.",
                },
                accName: {
                    required: "Nama Rekening tidak boleh kosong"
                },
                accNumber: {
                    required: "Nomor Rekening tidak boleh kosong"
                },
                // captcha: {
                //     required: "Captcha tidak boleh kosong"
                // },
                term: {
                    required: "Silahkan centang syarat dan ketentuan."
                }
            },
            errorPlacement: function(error, element) {
                let error_id = element.attr("id")
                error.insertAfter($(`span[id=${error_id}-error]`))
            },
            highlight: function(element, errorClass) {
                $(element).closest(".form-control").addClass("is-invalid");
            },
            unhighlight: function(element, errorClass) {
                $(element).closest(".form-control").removeClass("is-invalid").addClass("is-valid");
            }
        });

        $("input[id=accNumber]").attr("maxlength", 99)
        $("select[id=bank]").on("change", function(e) {
            e.preventDefault()
            const cat = $('select[id=bank] :selected').parent().attr('label');
            if (cat == "BANK") {
                $("#accountName").show()
                $("#accountNumber").show()
                $("input[name=phone]").val("");
                $("input[name=accNumber]").unbind("keyup");
                const max = $("select[id=bank]").find(':selected').data('max')
                const min = $("select[id=bank]").find(':selected').data('min')
                if (max == 0) {
                    $("input[name=accNumber]").removeAttr("minlength").removeAttr("maxlength")
                    return false
                }
                $("input[name=accNumber]").attr("minlength", min).attr("maxlength", max)
            } else if (cat == "E-WALLET") {
                $("input[name=accNumber]").attr("minlength", 8).attr("maxlength", 13)
                $("#accountNumber").show()
                $($("input[name=accNumber]")).on('keyup', function() {
                    $("input[name=phone]").val(this.value)
                });
                $("#accountName").show()
                $("span[id=accName-error]").html("<small>" + "Pastikan nama sesuai dengan bank yang anda pilih." +
                    "</small>")
            } else {
                $("#accountName").hide()
                $("#accountNumber").hide()
                $("#phoneInput").show()
                $($("#phone")).on('keyup', function() {
                    $("#accNumber").val("0" + this.value)
                });
                $("#accName").val($('#username_register').val())
            }
        })
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
