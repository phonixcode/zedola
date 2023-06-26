<section class="blog-section pt-100 pb-100">
    <div class="container">
        <div class="sec-title centered wow fadeInUp" data-wow-duration="1000ms">
            <div class="title">{{ $ps->blog_title }}</div>
            <div class="seperator">&nbsp;</div>
            <h2>{{ $ps->blog_text }}</h2>
        </div>
        <div class="row g-4 justify-content-center wow fadeInRight" data-wow-duration="1500ms">
            @foreach (DB::table('blogs')->orderBy('id','desc')->limit(3)->get() as $key=>$data)
                <div class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="post-item__img">
                            <a href="{{ route('blog.details',$data->slug) }}">
                                <img src="{{asset('assets/images/'.$data->photo)}}" alt="blog">
                            </a>
                            <span class="date">
                                <span>{{ getDateMonth($data->created_at) }}</span>
                                <span>{{ getDateDay($data->created_at) }}</span>
                            </span>
                        </div>
                        <div class="post-item__content">
                            <div class="meta-post">
                                <span class="me-2"><i class="fas fa-user"></i> @lang('Admin')</span>
                            </div>
                            <h5 class="title"><a href="{{ route('blog.details',$data->slug) }}">{{ Str::limit($data->title,30) }}</a></h5>
                            <a href="{{ route('blog.details',$data->slug) }}" class="read-more">@lang('Read More')</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
