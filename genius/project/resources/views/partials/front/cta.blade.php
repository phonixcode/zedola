
    <!-- CTAs Section -->
    <section class="ctas-section">
        <div class="container">
            <div class="ctas-wrapper">
                <div class="cta-left">
                    <h5 class="title mt-0 mb-2 text--dark"><i class="fas fa-user-circle"></i> @lang('Follow Us')</h5>
                    <ul class="social-icons my-0 justify-content-start">
                        @foreach ($sociallinks as $key=>$value)
                            @if ($value->status)
                                <li>
                                    <a href="{{ $value->link }}"><i class="{{ $value->icon }}"></i></a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="video-button">
                    <a href="{{ $ps->call_video_link }}" class="video--btn" data-lightbox>
                        <i class="fas fa-play"></i>
                    </a>
                </div>

                <div class="cta-right">
                    <div class="cta-right-wrap">
                        <div class="text">
                            <h3 class="title text--white">{{ $ps->call_title }}</h3>
                            <p class="text--light">
                                @php
                                    echo $ps->call_subtitle;
                                @endphp
                            </p>
                        </div>
                        <a href="Tel:12345674895" class="phone text--white">
                            <span class="icon text--base">
                                <i class="fas fa-phone"></i>
                            </span>
                            {{ $ps->call_phone }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTAs Section -->
