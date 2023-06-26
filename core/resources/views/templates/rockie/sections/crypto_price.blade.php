@php
$content = getContent('crypto_price.content', true);
$cryptoCurrency = App\Models\CryptoCurrency::active()->orderBy('rank','ASC')->where('rank','!=',0)->take(20)->get();
@endphp

<section class="coin-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block-text">
                    <h3 class="heading">{{__(@$content->data_values->heading)}}</h3>
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
                                            <th scope="col">@lang('S.N.')</th>
                                            <th scope="col">@lang('Name')</th>
                                            <th scope="col">@lang('1h%')</th>
                                            <th scope="col">@lang('Price')</th>
                                            <th scope="col">@lang('7d%')</th>
                                            <th scope="col">@lang('Market Cap')</th>
                                            <th scope="col">@lang('24h%')</th>
                                            <th scope="col">@lang('Volume(24h)')</th>
                                            <th scope="col">@lang('Circulating Supply')</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- <tr>
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
                                        </tr> --}}
                                        @forelse($cryptoCurrency as $crypto)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                <div class="author-info d-flex align-items-center">
                                                    <img
                                                        src="{{getImage(getFilePath('crypto_currency').'/'.$crypto->image, getFileSize('crypto_currency'))}}">
                                                    <div class="name">
                                                        <span class="d-block">{{__(@$crypto->symbol)}}</span>
                                                        <small>{{__(@$crypto->name)}}</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if($crypto->one_hour < 0) <span class="badge text-danger">{{
                                                    showAmount($crypto->one_hour) }} %</span>
                                                    @else
                                                    <span class="badge text-success">{{ showAmount($crypto->one_hour)
                                                        }} %</span>
                                                    @endif
                                            </td>
                                            <td>{{showAmount($crypto->price)}} @lang("USD")</td>
                                            <td>
                                                @if($crypto->seven_day < 0) <span class="badge text-danger">{{
                                                    showAmount($crypto->seven_day) }} %</span>
                                                    @else
                                                    <span class="badge text-success">{{ showAmount($crypto->seven_day)
                                                        }} %</span>
                                                    @endif
                                            </td>
                                            <td>${{showAmount($crypto->market_cap) }}</td>
                                            <td>
                                                @if($crypto->twenty_four < 0) <span class="badge text-danger">{{
                                                    showAmount($crypto->twenty_four) }} %</span>
                                                    @else
                                                    <span class="badge text-success">{{
                                                        showAmount($crypto->twenty_four) }} %</span>
                                                    @endif
                                            </td>
                                            <td>${{showAmount($crypto->volume_24h) }}</td>
                                            <td>{{ showAmount($crypto->circulating) }} {{ __($crypto->symbol) }}</td>
                                            <td><a href="{{ route('user.trade.index') }}" class="btn">Trade</a></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="100%" class="text-muted text-center">{{ __($emptyMessage) }}
                                            </td>
                                        </tr>
                                        @endforelse
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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
                                                <a href="#"><span class="icon-tether"><span class="path1"></span><span
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

{{-- <section class="trend-trade-section pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-12">
                <div class="section__header ">
                    <h3 class="title">{{__(@$content->data_values->heading)}}</h3>
                    <p>{{__(@$content->data_values->sub_heading)}}</p>
                </div>
                <div class="table-responsive">
                    <table class="table cmn--table">
                        <thead>
                            <tr>
                                <th>@lang('S.N.')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('1h%')</th>
                                <th>@lang('Price')</th>
                                <th>@lang('7d%')</th>
                                <th>@lang('Market Cap')</th>
                                <th>@lang('24h%')</th>
                                <th>@lang('Volume(24h)')</th>
                                <th>@lang('Circulating Supply')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($cryptoCurrency as $crypto)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <div class="author-info d-flex align-items-center">
                                        <img
                                            src="{{getImage(getFilePath('crypto_currency').'/'.$crypto->image, getFileSize('crypto_currency'))}}">
                                        <div class="name">
                                            <span class="d-block">{{__(@$crypto->symbol)}}</span>
                                            <small>{{__(@$crypto->name)}}</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($crypto->one_hour < 0) <span class="badge badge--danger">{{
                                        showAmount($crypto->one_hour) }} %</span>
                                        @else
                                        <span class="badge badge--success">{{ showAmount($crypto->one_hour) }} %</span>
                                        @endif
                                </td>
                                <td>{{showAmount($crypto->price)}} @lang("USD")</td>
                                <td>
                                    @if($crypto->seven_day < 0) <span class="badge badge--danger">{{
                                        showAmount($crypto->seven_day) }} %</span>
                                        @else
                                        <span class="badge badge--success">{{ showAmount($crypto->seven_day) }} %</span>
                                        @endif
                                </td>
                                <td>${{showAmount($crypto->market_cap) }}</td>
                                <td>
                                    @if($crypto->twenty_four < 0) <span class="badge badge--danger">{{
                                        showAmount($crypto->twenty_four) }} %</span>
                                        @else
                                        <span class="badge badge--success">{{ showAmount($crypto->twenty_four) }}
                                            %</span>
                                        @endif
                                </td>
                                <td>${{showAmount($crypto->volume_24h) }}</td>
                                <td>{{ showAmount($crypto->circulating) }} {{ __($crypto->symbol) }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="100%" class="text-muted text-center">{{ __($emptyMessage) }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@push('style')
<style>
    .author-info img {
        width: 30px;
        height: 30px;
        border: 3px solid #fff;
        border-radius: 50%;
        margin-right: 8px;
    }

    .author-info .name {
        text-align: left;
    }
</style>
@endpush
