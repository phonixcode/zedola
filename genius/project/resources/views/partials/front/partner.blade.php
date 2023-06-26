<section class="partner-section pb-100">
    <div class="container">
        <div class="partner-wrapper">
            @foreach (getPartners() as $key=>$data)
                <div class="partner-item">
                    <img src="{{asset('assets/images/'.$data->photo)}}" alt="partner">
                </div>
            @endforeach
        </div>
    </div>
</section>
