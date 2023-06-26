    <!-- Footer Section -->
        <footer>
            <div class="footer-shapes">&nbsp;</div>
            <div class="footer-top position-relative">
                <div class="container">
                    <div class="footer-wrapper">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo" />
                            </a>
                        </div>
                        <div class="footer-links">
                            <h5 class="title">@lang('About')</h5>
                            <ul>
                                @foreach(DB::table('pages')->whereStatus(1)->orderBy('id','desc')->get() as $data)
                                    <li>
                                        <a href="{{ route('front.page',$data->slug) }}">{{ $data->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer-links mobile-second-item">
                            <h5 class="title">@lang('Contact')</h5>
                            <ul>
                                <li>
                                    <a href="#0">{{ $ps->street }}</a>
                                </li>
                                <li>
                                    <a href="Mailto:{{ $ps->contact_email }}">{{ $ps->contact_email }}</a>
                                </li>
                                <li>
                                    <a href="Tel:{{ $ps->phone }}">{{ $ps->phone }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-comunity">
                            <h5 class="title">@lang('Community')</h5>
                            <p>
                                {{ $ps->newsletter_text }}
                            </p>
                            <form class="input-group mt-3 footer-input-group" action="{{route('front.subscriber')}}" method="POST">
                                @csrf
                                <input type="email" name="email" class="form-control" placeholder="@lang('Your email address...')">

                                <button class="input-group-text bg--white border-0 text--base">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom position-relative pb-5">
                <div class="container text-center">
                    <p>
                        @php
                            echo $gs->copyright;
                        @endphp
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-xl-9">
                            {{ $gs->footer }}
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Footer Section -->
