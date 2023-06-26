<section class="counter-section pt-100">
    <div class="container">
        <div class="inner-container bg--primary">
            <div class="vector-layer-one"></div>
            <div class="vector-layer-two"></div>
            <div class="vector-layer-three"></div>
            <div class="vector-layer-four"></div>
            <div class="vector-layer-five"></div>
            <div class="vector-layer-six"></div>
            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row">
                    @foreach (\App\Models\Counter::orderBy('id','desc')->limit(4)->get() as $key=>$data)
                        <div class="counter-item col-lg-3 col-md-6 col-sm-6">
                            <div class="inner wow fadeInLeft" data-wow-delay="0" data-wow-duration="1500">
                                <div class="content">
                                    <div class="icon">
                                        <i class="{{ $data->icon }}"></i>
                                    </div>
                                    <div class="count-outer count-box counted">
                                        <span class="count-text odometer" data-odometer-final="{{ $data->count }}">0</span>{{ $data->messurement }}
                                    </div>
                                    <h5>{{ $data->title }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
