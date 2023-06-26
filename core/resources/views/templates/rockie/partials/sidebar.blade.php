<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="{{route('user.home')}}"><img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" alt="" style="width: 150px !important;"  /></a>
        <div class="mm-buttons">
            <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="avatar-w" style="padding: 10px;">
                {{ strtoupper(substr(auth()->user()->username,0,2)) }}
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{ ucfirst(auth()->user()->username) }}
                </div>
                <div class="logged-user-role">
                    {{ auth()->user()->email }}
                </div>
            </div>
        </div>
        <ul class="main-menu">
            <li class="">
                <a href="{{route('user.home')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="has-sub-menu">
                <a href="javascript:void(0)">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layers"></div>
                    </div>
                    <span>@lang('Practice')</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('user.practice.trade.index')}}">@lang('Practice Now')</a>
                    </li>
                    <li>
                        <a href="{{route('user.practice.trade.log')}}">@lang('Practice Log')</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="javascript:void(0)">
                    <div class="icon-w">
                        <div class="os-icon os-icon-zap"></div>
                    </div>
                    <span>@lang('Trade')</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('user.trade.index')}}">Crypto</a>
                    </li>
                    <li>
                        <a href="{{route('user.trade.index')}}">Forex</a>
                    </li>
                    <li>
                        <a href="{{route('user.trade.index')}}">Stocks</a>
                    </li>
                    <li>
                        <a href="{{route('user.trade.index')}}">Commodities</a>
                    </li>
                    <li>
                        <a href="{{route('user.trade.log')}}">@lang('Trade Log')</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="javascript:void(0)">
                    <div class="icon-w">
                        <div class="os-icon os-icon-credit-card"></div>
                    </div>
                    <span>@lang('Deposit')</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('user.deposit.index')}}">@lang('Deposit Money')</a>
                    </li>
                    <li>
                        <a href="{{route('user.deposit.history')}}">@lang('Deposit History')</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="javascript:void(0)">
                    <div class="icon-w">
                        <div class="os-icon os-icon-credit-card"></div>
                    </div>
                    <span>@lang('Withdraw')</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('user.withdraw')}}">@lang('Withdraw Money')</a>
                    </li>
                    <li>
                        <a href="{{route('user.withdraw.history')}}">@lang('Withdraw History')</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="javascript:void(0)">
                    <div class="icon-w">
                        <div class="os-icon os-icon-hash"></div>
                    </div>
                    <span>@lang('Referral')</span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{route('user.referral.log')}}">@lang('Referral Log')</a>
                    </li>

                    <li>
                        <a href="{{route('user.commissions.log')}}">@lang('Commission Log')</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="{{route('user.transactions')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-database"></div>
                    </div>
                    <span>@lang('Transaction Log')</span>
                </a>
            </li>
        </ul>

    </div>
</div>
<div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-bright sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
    <div class="logo-w">
        <a class="" href="{{route('user.home')}}">
            <img src="{{ getImage(getFilePath('logoIcon') . '/logo.png') }}" alt="" style="width: 150px !important;"  />
        </a>
    </div>


    <ul class="main-menu">
        <li class="sub-header">
            <span>Menu</span>
        </li>
        <li class="selected">
            <a href="{{route('user.home')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span>
            </a>
        </li>


        <li class=" has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                </div>
                <span>@lang('Practice')</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">
                    @lang('Practice')
                </div>
                <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layers"></i>
                </div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('user.practice.trade.index')}}">@lang('Practice Now')</a>
                        </li>
                        <li>
                            <a href="{{route('user.practice.trade.log')}}">@lang('Practice Log')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class=" has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-zap"></div>
                </div>
                <span>@lang('Trade')</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">
                    @lang('Trade')
                </div>
                <div class="sub-menu-icon">
                    <i class="os-icon os-icon-zap"></i>
                </div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('user.trade.index')}}">Crypto</a>
                        </li>
                        <li>
                            <a href="{{route('user.trade.index')}}">Forex</a>
                        </li>
                        <li>
                            <a href="{{route('user.trade.index')}}">Stocks</a>
                        </li>
                        <li>
                            <a href="{{route('user.trade.index')}}">Commodities</a>
                        </li>
                        <li>
                            <a href="{{route('user.trade.log')}}">@lang('Trade Log')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class=" has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-credit-card"></div>
                </div>
                <span>@lang('Deposit')</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">
                    @lang('Deposit')
                </div>
                <div class="sub-menu-icon">
                    <i class="os-icon os-icon-credit-card"></i>
                </div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('user.deposit.index')}}">@lang('Deposit Money')</a>
                        </li>
                        <li>
                            <a href="{{route('user.deposit.history')}}">@lang('Deposit History')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class=" has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-credit-card"></div>
                </div>
                <span>@lang('Withdraw')</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">
                    @lang('Withdraw')
                </div>
                <div class="sub-menu-icon">
                    <i class="os-icon os-icon-credit-card"></i>
                </div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('user.withdraw')}}">@lang('Withdraw Money')</a>
                        </li>
                        <li>
                            <a href="{{route('user.withdraw.history')}}">@lang('Withdraw History')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class=" has-sub-menu">
            <a href="javascript:void(0)">
                <div class="icon-w">
                    <div class="os-icon os-icon-hash"></div>
                </div>
                <span>@lang('Referral')</span>
            </a>
            <div class="sub-menu-w">
                <div class="sub-menu-header">
                    @lang('Referral')
                </div>
                <div class="sub-menu-icon">
                    <i class="os-icon os-icon-hash"></i>
                </div>
                <div class="sub-menu-i">
                    <ul class="sub-menu">
                        <li>
                            <a href="{{route('user.referral.log')}}">@lang('Referral Log')</a>
                        </li>

                        <li>
                            <a href="{{route('user.commissions.log')}}">@lang('Commission Log')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <li class="">
            <a href="{{route('user.transactions')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-database"></div>
                </div>
                <span>@lang('Transaction Log')</span>
            </a>
        </li>


    </ul>
</div>
