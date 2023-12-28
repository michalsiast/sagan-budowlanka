@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])

    <div>
        <div class="section galleryIndex" id="gallery" style="padding-top:100px;padding-bottom:100px;padding-left:5%;padding-right:5%;" data-id="#gallery">
            <div class="row" style="padding:0 2%">
                <div class="col-12 column_image_gallery">
                    <div id="sc_gallery-5381" class="gallery galleryid-45 gallery-columns-3 gallery-size-full file row">
                @foreach($page->gallery->items as $item)
                            <dl class="gallery-item col-sm-6 col-md-4"> <dt class="gallery-icon landscape">
                                    <div class="image_frame scale-with-grid"><div class="image_wrapper"><a href="{{renderImage($item->url, 1920, 1080, 'resize')}}" rel="prettyphoto[gallery]" data-rel="prettyphoto[gallery]"><div class="mask"></div><img width="780" height="780" src="{{renderImage($item->url, 780, 780, 'fit')}}" class="attachment-full size-full" alt="" loading="lazy" style="height: auto; width: 100%;"></a></div></div>
                                </dt> </dl>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
