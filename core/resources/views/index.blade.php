<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rockie | Crypto Exchange HTML Template</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'app/dist/app.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <!-- End Style CSS -->

    <link rel="shortcut icon" href="{{ asset($activeTemplateTrue.'assets/images/logo/favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset($activeTemplateTrue.'assets/images/logo/favicon.png') }}" />
</head>

<body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header__body d-flex justify-content-between">
                        <div class="header__left">
                            <div class="logo">
                                <a class="light" href="index.html">
                                    <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" alt="" width="118"
                                        height="32" data-retina="{{getImage(getFilePath('logoIcon') .'/logo.png')}}"
                                        data-width="118" data-height="32" />
                                </a>
                                <a class="dark" href="index.html">
                                    <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" alt="" width="118"
                                        height="32" data-retina="{{getImage(getFilePath('logoIcon') .'/logo.png')}}"
                                        data-width="118" data-height="32" />
                                </a>
                            </div>
                            <div class="left__main">
                                <nav id="main-nav" class="main-nav">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li class="menu-item-has-children current-menu-item">
                                            <a href="#">Homepage </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item current-item">
                                                    <a href="index.html">Home 01</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="home-v2.html">Home 02</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="home-v3.html">Home 03</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Buy Crypto</a>

                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="buy-crypto-select.html">Buy Crypto Select</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="buy-crypto-confirm.html">Buy Crypto Confirm</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="buy-crypto-details.html">Buy Crypto Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="markets.html">Markets </a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Sell Crypto</a>

                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="sell-crypto.html">Sell Select</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="sell-crypto-amount.html">Sell Crypto Amount</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="sell-crypto-confirm.html">Sell Crypto Confirm</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="sell-crypto-details.html">Sell Crypto Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>

                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-default.html">Blog Default</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-v1.html">Blog Grid v1</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-grid-v2.html">Blog Grid v2</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-list.html">Blog List</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item">
                                            <a href="wallet.html">BITUSDT
                                                <svg class="s1" width="8" height="10" viewBox="0 0 8 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.75979 3.20154C6.69318 3.13681 6.59973 3.10739 6.50828 3.12243C6.41666 3.13741 6.33754 3.19493 6.29504 3.27747C6.14887 3.56144 5.9632 3.82239 5.74477 4.05308C5.76654 3.88644 5.7775 3.7188 5.7775 3.55072C5.7775 3.2282 5.73428 2.8963 5.64898 2.56413C5.36855 1.4731 4.6332 0.550422 3.63154 0.0327073C3.54434 -0.0123512 3.44043 -0.0107692 3.35463 0.0369261C3.26883 0.0846409 3.21264 0.172121 3.20494 0.269973C3.12686 1.26146 2.61615 2.16349 1.80301 2.74536C1.79225 2.75312 1.78156 2.76097 1.77088 2.76878C1.74875 2.78497 1.72789 2.80029 1.7084 2.81314C1.70535 2.81517 1.70232 2.81724 1.69936 2.81937C1.18795 3.18552 0.765977 3.67361 0.479004 4.23101C0.187402 4.79798 0.0395508 5.4064 0.0395508 6.03931C0.0395508 6.36173 0.0827734 6.69362 0.168027 7.02585C0.61793 8.77697 2.19379 9.99997 4.00023 9.99997C6.18404 9.99997 7.96068 8.22322 7.96068 6.03931C7.96068 4.96236 7.5342 3.95454 6.75979 3.20154Z"
                                                        fill="#3772FF" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#"> Pages </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="user-profile.html">User Profile</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="login.html">Login</a>
                                                </li>

                                                <li class="menu-item">
                                                    <a href="register.html">Register</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                                <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- /#main-nav -->
                            </div>
                        </div>

                        <div class="header__right">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Assets
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Binance Visa Card</a>
                                    <a class="dropdown-item" href="#">Crypto Loans</a>
                                    <a class="dropdown-item" href="#">Binance Pay</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Orders & Trades
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Binance Convert</a>
                                    <a class="dropdown-item" href="#">Spot</a>
                                    <a class="dropdown-item" href="#">Margin</a>
                                    <a class="dropdown-item" href="#">P2P</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    EN/USD
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                        data-lang="en">
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/flags/us.jpg') }}"
                                            alt="user-image" class="me-1" height="12" />
                                        <span class="align-middle">English</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                        data-lang="sp">
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/flags/spain.jpg') }}"
                                            alt="user-image" class="me-1" height="12" />
                                        <span class="align-middle">Spanish</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                        data-lang="gr">
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/flags/germany.jpg') }}"
                                            alt="user-image" class="me-1" height="12" />
                                        <span class="align-middle">German</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                        data-lang="it">
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/flags/italy.jpg') }}"
                                            alt="user-image" class="me-1" height="12" />
                                        <span class="align-middle">Italian</span>
                                    </a>

                                    <a href="javascript:void(0);" class="dropdown-item notify-item language"
                                        data-lang="ru">
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/flags/russia.jpg') }}"
                                            alt="user-image" class="me-1" height="12" />
                                        <span class="align-middle">Russian</span>
                                    </a>
                                </div>
                            </div>
                            <div class="mode-switcher">
                                <a class="sun" href="#" onclick="switchTheme()">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.99993 11.182C9.7572 11.182 11.1818 9.75745 11.1818 8.00018C11.1818 6.24291 9.7572 4.81836 7.99993 4.81836C6.24266 4.81836 4.81812 6.24291 4.81812 8.00018C4.81812 9.75745 6.24266 11.182 7.99993 11.182Z"
                                            stroke="#23262F" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 1V2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8 13.7271V14.9998" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 3.04932L3.9532 3.95295" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 12.0469L12.9505 12.9505" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M1 8H2.27273" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.7273 8H15" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M3.04956 12.9505L3.9532 12.0469" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.0469 3.95295L12.9505 3.04932" stroke="#23262F" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#" class="moon" onclick="switchTheme()">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.0089 8.97241C12.7855 9.64616 12.4491 10.2807 12.0107 10.8477C11.277 11.7966 10.2883 12.5169 9.1602 12.9244C8.03209 13.3319 6.81126 13.4097 5.64056 13.1486C4.46987 12.8876 3.39772 12.2986 2.54959 11.4504C1.70145 10.6023 1.1124 9.53013 0.851363 8.35944C0.590325 7.18874 0.668097 5.96791 1.07558 4.8398C1.48306 3.71169 2.2034 2.72296 3.1523 1.9893C3.71928 1.55094 4.35384 1.21447 5.02759 0.991088C4.69163 1.84583 4.54862 2.77147 4.61793 3.7009C4.72758 5.17128 5.36134 6.55346 6.40394 7.59606C7.44654 8.63866 8.82873 9.27242 10.2991 9.38207C11.2285 9.45138 12.1542 9.30837 13.0089 8.97241Z"
                                            stroke="white" stroke-width="1.4" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                            <div class="dropdown notification">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-notification"></span>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <div class="dropdown-item">
                                        <div class="media server-log">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-server">
                                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                                <line x1="6" y1="6" x2="6" y2="6">
                                                </line>
                                                <line x1="6" y1="18" x2="6" y2="18">
                                                </line>
                                            </svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Server Rebooted</h6>
                                                    <p class="">45 min ago</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="media">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-heart">
                                                <path
                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                </path>
                                            </svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Licence Expiring Soon</h6>
                                                    <p class="">8 hrs ago</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="media file-upload">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file-text">
                                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                </path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13">
                                                </line>
                                                <line x1="16" y1="17" x2="8" y2="17">
                                                </line>
                                                <polyline points="10 9 9 9 8 9"></polyline>
                                            </svg>
                                            <div class="media-body">
                                                <div class="data-info">
                                                    <h6 class="">Kelly Portfolio.pdf</h6>
                                                    <p class="">670 kb</p>
                                                </div>

                                                <div class="icon-status">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-check">
                                                        <polyline points="20 6 9 17 4 12"></polyline>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-button"><span></span></div>
                            <div class="wallet">
                                <a href="wallet.html"> Wallet </a>
                            </div>
                            <div class="dropdown user">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton4"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-01.jpg') }}" alt="" />
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-user font-size-16 align-middle me-1"></i>
                                        <span>Profile</span></a>
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-wallet font-size-16 align-middle me-1"></i>
                                        <span>My Wallet</span></a>
                                    <a class="dropdown-item d-block" href="#"><span
                                            class="badge bg-success float-end">11</span><i
                                            class="bx bx-wrench font-size-16 align-middle me-1"></i>
                                        <span>Settings</span></a>
                                    <a class="dropdown-item" href="#"><i
                                            class="bx bx-lock-open font-size-16 align-middle me-1"></i>
                                        <span>Lock screen</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="user-login.html"><i
                                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                        <span>Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end Header -->

    <!-- Banner Top -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="banner__content">
                        <h2 class="title">Buy & Sell Digital Assets In The Rockie</h2>
                        <p class="fs-20 desc">
                            Coin rockie is the easiest, safest, and fastest way to buy &
                            sell crypto asset exchange.
                        </p>
                        <a href="#" class="btn-action"><span>Get started now</span></a>
                        <div class="partner">
                            <h6>Our Partners</h6>
                            <div class="partner__list">
                                <div class="swiper swiper-partner">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="#"><img
                                                    src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-01.png')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#"><img
                                                    src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-02.png')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#"><img
                                                    src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-03.png')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#"><img
                                                    src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-04.png')}}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="swiper-slide">
                                            <a href="#"><img
                                                    src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-01.png')}}"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="banner__image">
                        <img src="{{ asset($activeTemplateTrue.'assets/images/layout/banner-01.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Top -->

    <section class="crypto" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="crypto__main">
                        <div class="flat-tabs">
                            <ul class="menu-tab">
                                <li class="active">
                                    <h6 class="fs-16">Crypto</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">DeFi</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">BSC</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">NFT</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Metaverse</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Polkadot</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Solana</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Opensea</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Makersplace</h6>
                                </li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-inner">
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                        class="path2"></span></span>
                                                <span>Bitcoin</span>
                                                <span class="unit">BTC/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 46,168.95</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <p class="sale critical">-0.79%</p>
                                        </div>
                                    </div>
                                    <div class="crypto-box active">
                                        <div class="top">
                                            <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span></span><span>Ethereum</span>
                                                <span class="unit">ETH/USD</span></a>
                                        </div>
                                        <h6 class="price">USD $3,480.04</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale success">+10.55%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-tether"><span class="path1"></span><span
                                                        class="path2"></span></span><span>Tether</span>
                                                <span class="unit">USDT/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 1.00</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-0.01%%</div>
                                        </div>
                                    </div>
                                    <div class="crypto-box">
                                        <div class="top">
                                            <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                        class="path2"></span><span class="path3"></span><span
                                                        class="path4"></span><span class="path5"></span><span
                                                        class="path6"></span></span><span>BNB</span> <span
                                                    class="unit">BNB/USD</span></a>
                                        </div>
                                        <h6 class="price">USD 443.56</h6>
                                        <div class="bottom">
                                            <p>36,641.20</p>
                                            <div class="sale critical">-1.24%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="coin-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text">
                        <h3 class="heading">Market Update</h3>
                        <a class="btn-action-2" href="#">See All Coins</a>
                    </div>

                    <div class="coin-list__main">
                        <div class="flat-tabs">
                            <ul class="menu-tab">
                                <li class="active">
                                    <h6 class="fs-16">View All</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Metaverse</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Entertainment</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Energy</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">NFT</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Gaming</h6>
                                </li>
                                <li>
                                    <h6 class="fs-16">Music</h6>
                                </li>
                            </ul>
                            <div class="content-tab">
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-1"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-2"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-3"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-4"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-5"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-6"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-7"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-8"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-9"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-10"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-11"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-12"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-13"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-14"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-15"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-16"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-17"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-18"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-19"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-20"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-21"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-22"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-23"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-24"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-25"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-26"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-27"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-28"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-29"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-30"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-31"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-32"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-33"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-34"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-35"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-36"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-37"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-38"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-39"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-40"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-41"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-42"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-43"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-44"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-45"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-46"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-47"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-48"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="content-inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Last Price</th>
                                                <th scope="col">24h %</th>
                                                <th scope="col">Market Cap</th>
                                                <th scope="col">Last 7 Days</th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>1</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span>
                                                        <span>Bitcoin</span>
                                                        <span class="unit">BTC</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-49"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>2</td>
                                                <td>
                                                    <a href="#"><span class="icon-eth"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Ethereum</span>
                                                        <span class="unit">ETH</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-5.12%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-50"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>3</td>
                                                <td>
                                                    <a href="#"><span class="icon-bnb"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span></span><span>BNB</span>
                                                        <span class="unit">BNB/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-3.75%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-51"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>4</td>
                                                <td>
                                                    <a href="#"><span class="icon-tether"><span
                                                                class="path1"></span><span
                                                                class="path2"></span></span><span>Tether</span>
                                                        <span class="unit">USDT/USD</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-52"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>5</td>
                                                <td>
                                                    <a href="#"><span class="icon-sol"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span
                                                                class="path5"></span></span><span>Solana</span>
                                                        <span class="unit">SOL</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.45%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-53"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>6</td>
                                                <td>
                                                    <a href="#"><span class="icon-btc"><span class="path1"></span><span
                                                                class="path2"></span></span><span>XRP</span> <span
                                                            class="unit">XRP</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="down">-2.22%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-54"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>7</td>
                                                <td>
                                                    <a href="#"><span class="icon-ada"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span><span
                                                                class="path6"></span><span class="path7"></span><span
                                                                class="path8"></span><span
                                                                class="path9"></span></span><span>Cardano</span>
                                                        <span class="unit">ADA</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+0.8%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-55"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><span class="icon-star"></span></th>
                                                <td>8</td>
                                                <td>
                                                    <a href="#"><span class="icon-avax"><span class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span><span
                                                                class="path4"></span></span><span>Avalanche</span>
                                                        <span class="unit">AVAX</span></a>
                                                </td>
                                                <td class="boild">$56,623.54</td>
                                                <td class="up">+1.41%</td>
                                                <td class="boild">$880,423,640,582</td>
                                                <td>
                                                    <div id="total-revenue-chart-56"></div>
                                                </td>
                                                <td><a href="#" class="btn">Trade</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block-text center">
                        <h3 class="heading">How It Work</h3>
                        <p class="fs-20 desc">
                            Stacks is a production-ready library of stackable content blocks
                            built in React Native.
                        </p>
                    </div>

                    <div class="work__main">
                        <div class="work-box">
                            <div class="image">
                                <img src="assets/images/icon/Cloud.png" alt="" />
                            </div>
                            <div class="content">
                                <p class="step">Step 1</p>
                                <a href="#" class="title">Download</a>
                                <p class="text">
                                    Stacks is a production-ready library of stackable content
                                    blocks built in React Native.
                                </p>
                            </div>
                            <img class="line"
                                src="{{ asset($activeTemplateTrue.'assets/images/icon/connect-line.png')}}" alt="" />
                        </div>
                        <div class="work-box">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue.'assets/images/icon/Wallet.png')}}" alt="" />
                            </div>
                            <div class="content">
                                <p class="step">Step 2</p>
                                <a href="#" class="title">Connect wallet</a>
                                <p class="text">
                                    Stacks is a production-ready library of stackable content
                                    blocks built in React Native.
                                </p>
                            </div>
                            <img class="line"
                                src="{{ asset($activeTemplateTrue.'assets/images/icon/connect-line.png')}}" alt="" />
                        </div>
                        <div class="work-box">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue.'assets/images/icon/Mining.png')}}" alt="" />
                            </div>
                            <div class="content">
                                <p class="step">Step 3</p>
                                <a href="#" class="title">Start trading</a>
                                <p class="text">
                                    Stacks is a production-ready library of stackable content
                                    blocks built in React Native.
                                </p>
                            </div>
                            <img class="line"
                                src="{{ asset($activeTemplateTrue.'assets/images/icon/connect-line.png')}}" alt="" />
                        </div>
                        <div class="work-box">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue.'assets/images/icon/Comparison.png')}}" alt="" />
                            </div>
                            <div class="content">
                                <p class="step">Step 4</p>
                                <a href="#" class="title">Earn money</a>
                                <p class="text">
                                    Stacks is a production-ready library of stackable content
                                    blocks built in React Native.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="about_image">
                        <div class="swiper img-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-main"
                                        src="{{ asset($activeTemplateTrue.'assets/images/layout/about-h1.png')}}"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-main"
                                        src="{{ asset($activeTemplateTrue.'assets/images/layout/about-h1.png')}}"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-main"
                                        src="{{ asset($activeTemplateTrue.'assets/images/layout/about-h1.png')}}"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-main"
                                        src="{{ asset($activeTemplateTrue.'assets/images/layout/about-h1.png')}}"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <img class="icon icon-1" src="{{ asset($activeTemplateTrue.'assets/images/icon/icon-01.png')}}"
                            alt="" />
                        <img class="icon icon-2" src="{{ asset($activeTemplateTrue.'assets/images/icon/icon-02.png')}}"
                            alt="" />
                        <img class="icon icon-3" src="{{ asset($activeTemplateTrue.'assets/images/icon/icon-03.png')}}"
                            alt="" />
                        <img class="icon icon-4" src="{{ asset($activeTemplateTrue.'assets/images/icon/icon-04.png')}}"
                            alt="" />
                        <img class="icon icon-5" src="{{ asset($activeTemplateTrue.'assets/images/icon/icon-05.png')}}"
                            alt="" />
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="about__content" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="heading">What Is Rockie</h3>
                        <p class="fs-20 decs">
                            Experience a variety of trading on Bitcost. You can use various
                            types of coin transactions such as Spot Trade, Futures Trade,
                            P2P, Staking, Mining, and margin.
                        </p>
                        <ul class="list">
                            <li>
                                <h6 class="title">
                                    <span class="icon-check"></span>View real-time
                                    cryptocurrency prices
                                </h6>
                                <p class="text">
                                    Experience a variety of trading on Bitcost. You can use
                                    various types of coin transactions such as Spot Trade,
                                    Futures Trade, P2P, Staking, Mining, and margin.
                                </p>
                            </li>
                            <li>
                                <h6 class="title">
                                    <span class="icon-check"></span>Buy and sell BTC, ETH, XRP,
                                    OKB, Etc...
                                </h6>
                                <p class="text">
                                    Experience a variety of trading on Bitcost. You can use
                                    various types of coin transactions such as Spot Trade,
                                    Futures Trade, P2P, Staking, Mining, and margin.
                                </p>
                            </li>
                        </ul>
                        <a href="#" class="btn-action">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="download">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="download__content" data-aos="fade-up" data-aos-duration="1000">
                        <h3 class="heading">Free your money & Invest with confident</h3>
                        <p class="fs-20 decs">
                            With Cryptor Trade, you can be sure your trading skills are
                            matched
                        </p>
                        <ul class="list">
                            <li>
                                <h6 class="title">
                                    <span class="icon-check"></span>Buy, Sell, And Trade On The
                                    Go
                                </h6>
                                <p class="text">
                                    Managa your holdings from your mobile decive
                                </p>
                            </li>
                            <li>
                                <h6 class="title">
                                    <span class="icon-check"></span>Take Control Of Your Wealth
                                </h6>
                                <p class="text">
                                    Rest assured you (and only you) have access to your funds
                                </p>
                            </li>
                        </ul>
                        <div class="group-button">
                            <a href="#"><img src="{{ asset($activeTemplateTrue.'assets/images/icon/googleplay.png') }}"
                                    alt="" /></a>
                            <a href="#"><img src="{{ asset($activeTemplateTrue.'assets/images/icon/appstore.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="download__image">
                        <div class="button">Scan To Download</div>
                        <img src="{{ asset($activeTemplateTrue.'assets/images/layout/download.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="block-text">
                        <h3 class="heading">Our customers love what we do</h3>
                        <h6 class="fs-20">
                            Transform Your idea into Reality With Finsweet
                        </h6>
                        <p>
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </p>

                        <div class="swiper swiper-thumb1">
                            <div class="swiper-wrapper list-img">
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-02.png') }}" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-03.png') }}" alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-04.png') }}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="couter">
                            <h6>30+</h6>
                            <p class="title">Customer Reviews</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="swiper swiper-testimonial-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-box">
                                    <span class="icon-quote"></span>
                                    <h6 class="text">
                                        “Great course I really enjoyed it and the course was way
                                        easy to learn with very good explanations of the code, I
                                        could easily understand and develop applications with the
                                        knowledge gathered during the course.”
                                    </h6>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-02.png') }}"
                                                alt="" />
                                            <div class="content">
                                                <h6 class="name">Johnny Andro</h6>
                                                <p class="position">Director, Company</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-05.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box">
                                    <span class="icon-quote"></span>
                                    <h6 class="text">
                                        “Great course I really enjoyed it and the course was way
                                        easy to learn with very good explanations of the code, I
                                        could easily understand and develop applications with the
                                        knowledge gathered during the course.”
                                    </h6>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-03.png') }}"
                                                alt="" />
                                            <div class="content">
                                                <h6 class="name">Johnny Andro</h6>
                                                <p class="position">Director, Company</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-05.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box">
                                    <span class="icon-quote"></span>
                                    <h6 class="text">
                                        “Great course I really enjoyed it and the course was way
                                        easy to learn with very good explanations of the code, I
                                        could easily understand and develop applications with the
                                        knowledge gathered during the course.”
                                    </h6>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="{{ asset($activeTemplateTrue.'assets/images/avt/avt-04.png') }}"
                                                alt="" />
                                            <div class="content">
                                                <h6 class="name">Johnny Andro</h6>
                                                <p class="position">Director, Company</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset($activeTemplateTrue.'assets/images/partner/logo-05.png') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sale">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="block-text">
                        <h4 class="heading">Earn up to $25 worth of crypto</h4>
                        <p class="desc">
                            Discover how specific cryptocurrencies work — and get a bit of
                            each crypto to try out for yourself.
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="button">
                        <a href="#">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer__main">
                <div class="row">
                    <div class="col-xl-4 col-md-8">
                        <div class="info">
                            <a href="index.html" class="logo">
                                <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" alt="" />
                            </a>
                            <h6>Let's talk! 🤙</h6>
                            <ul class="list">
                                <li>
                                    <p>+12 345 678 9101</p>
                                </li>
                                <li>
                                    <p>Info.Avitex@Gmail.Com</p>
                                </li>
                                <li>
                                    <p>
                                        Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi
                                        96522
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s1">
                            <h6 class="title">PRODUCTS</h6>
                            <ul>
                                <li><a href="spot.html">Spot</a></li>
                                <li><a href="#">Inverse Perpetual</a></li>
                                <li><a href="#">USDT Perpetual</a></li>
                                <li><a href="exchange.html">Exchange</a></li>
                                <li><a href="#">Launchpad</a></li>
                                <li><a href="#">Binance Pay</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s2">
                            <h6 class="title">SERVICES</h6>
                            <ul>
                                <li><a href="buy-crypto-select.html">Buy Crypto</a></li>
                                <li><a href="markets.html">Markets</a></li>
                                <li><a href="#">Tranding Fee</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Referral Program</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s3">
                            <h6 class="title">SUPPORT</h6>
                            <ul>
                                <li><a href="#">Bybit Learn</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="user-profile.html">User Feedback</a></li>
                                <li><a href="#">Submit a request</a></li>
                                <li><a href="#">API Documentation</a></li>
                                <li><a href="#">Trading Rules</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <div class="widget-link s4">
                            <h6 class="title">ABOUT US</h6>
                            <ul>
                                <li><a href="#">About Bybit</a></li>
                                <li><a href="#">Authenticity Check</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Business Contacts</a></li>
                                <li><a href="blog-default.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg">
            <div class="footer__bottom">
                <p>Copyright © 2022 Themesflat</p>
                <ul class="list-social">
                    <li>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="{{ asset($activeTemplateTrue.'app/js/aos.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.easing.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/popper.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/jquery.peity.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/apexcharts.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'app/js/switchmode.js')}}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/chart.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <!-- Swiper JS -->
    <script src="{{ asset($activeTemplateTrue.'app/js/swiper-bundle.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/swiper.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue.'app/js/app.js') }}"></script>
</body>

</html>
