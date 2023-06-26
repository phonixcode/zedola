<div class="top-bar color-scheme-bright">

    <div class="top-menu-controls">


        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w text-white" style="border: 1px solid #fff;border-radius: 50%;padding: 10px;">
                    {{ strtoupper(substr(auth()->user()->username,0,2)) }}
                </div>
                <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w text-white" style="border: 1px solid #fff;border-radius: 50%;padding: 10px;">
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
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="{{route('ticket.index')}}">
                                <i class="os-icon os-icon-mail-01"></i>
                                <span>@lang('Support Ticket')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.profile.setting')}}">
                                <i class="os-icon os-icon-user-male-circle2"></i>
                                <span>@lang('Profile Setting')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.twofactor')}}">
                                <i class="os-icon os-icon-fingerprint"></i>
                                <span>@lang('2FA Security')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.change.password')}}">
                                <i class="os-icon os-icon-lock"></i>
                                <span>@lang('Password')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('user.logout')}}"><i class="os-icon os-icon-signs-11"></i><span>@lang('Logout')</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</div>

<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <span>{{ __($pageTitle) }}</span>
    </li>
</ul>

<div class="content-panel-toggler">
    <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
</div>
