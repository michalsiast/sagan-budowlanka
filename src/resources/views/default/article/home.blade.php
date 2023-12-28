@foreach($items as $item)
    <div class="col-lg-6 col-sm-6">
        <div class="funbox1">
         @if(!empty($item->galleryCover()))
    <div class="fun_img">
        <img src="{{ renderImage($item->galleryCover(), 400, 200, 'cover') }}" alt="icon">
    </div>
@endif
            <div class="fun_content">
                <h1><span class="fun-number">{{$item->text}}</span><span class="fun-suffix">+</span></h1>
                <p>{{$item->title}}</p>
            </div>
        </div>
    </div>
@endforeach
