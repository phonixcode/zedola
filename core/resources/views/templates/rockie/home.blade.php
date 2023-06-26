@extends($activeTemplate.'layouts.frontend')
@section('content')
@php
$content = getContent('banner.content', true);
$elements = getContent('banner.element',limit:4);
@endphp
{{-- <section class="banner-section bg--overlay bg_img"
    data-background="{{ getImage('assets/images/frontend/banner/'. @$content->data_values->background_image, '1000x560')}}">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-content mt-xl-5">
                <h2 class="banner-title">{{__(@$content->data_values->heading)}}</h2>
                <p class="banner-text">{{__(@$content->data_values->sub_heading)}}</p>
                <a href="{{__(@$content->data_values->button_url)}}"
                    class="cmn--btn">{{__(@$content->data_values->button_name)}}</a>
            </div>
            <div class="banner-thumb">
                <img
                    src="{{ getImage('assets/images/frontend/banner/'. @$content->data_values->hero_image, '1000x870')}}">
                <div class="banner-anime-thumbs">
                    @foreach($elements as $element)
                    <div class="banner-anime banner-anime{{$loop->iteration}}">
                        <img
                            src="{{ getImage('assets/images/frontend/banner/'. @$element->data_values->background_image, '70x185')}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section> --}}

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="banner__content">
                    <h2 class="title">{{__(@$content->data_values->heading)}}</h2>
                    <p class="fs-20 desc">
                        {{__(@$content->data_values->sub_heading)}}
                    </p>
                    <a href="{{__(@$content->data_values->button_url)}}"
                        class="btn-action"><span>{{__(@$content->data_values->button_name)}}</span></a>
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
                    <img src="{{ getImage('assets/images/frontend/banner/'. @$content->data_values->hero_image, '1000x870')}}"
                        alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

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

@if($sections->secs != null)
@foreach(json_decode($sections->secs) as $sec)
@include($activeTemplate.'sections.'.$sec)
@endforeach
@endif
@endsection
