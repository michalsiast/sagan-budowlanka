@foreach($items as $item)
    <div class="col-lg-6 col-md-6">
        <article class="blog_post">
            <div class="post_img">
                <a href="{{route('offer.show.'.$item->id)}}"><img style="height: 200px; object-fit: cover" src="{{ renderImage($item->galleryCover(), 400, 200, 'resize') }}" alt="img"></a>
            </div>
            <div class="post_content">
                <div class="post_header">
                    <h3 class="post_title">
                        <a href="{{route('offer.show.'.$item->id)}}">{{$item->title}}</a>
                    </h3>
                </div>
                <div class="post_intro">
                    {!! $item->lead !!}
                </div>
                <div class="post_footer">
                    <div class="read_more">
                        <a href="{{route('offer.show.'.$item->id)}}"><span>Zobacz więcej</span></a>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endforeach
