@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $item->title])
    <div class="container">
        <div class="project_details section">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="project_details_inner">
                        <div class="post_img">
                            <img style="height: 400px; object-fit: cover" src="{{ renderImage($item->galleryCover(), 400, 200, 'resize') }}" alt="blog">
                        </div>
                        <div class="post_content">
                            <div class="post_header">
                                <h3 class="post_title">{{$item->title}}</h3>
                            </div>
                            <div class="fulltext">
                                {!! $item->lead !!}

                                {!! $item->text !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner type_3">
        <div class="container">
            @if(!empty($fields->contact_us_description))
                <div class="section_header text-center" style="display: flex;flex-direction: column;align-items: center;">
                    <div style="max-width: 700px">
                        <h1 class="section_title">Skontaktuj się ze mną</h1>
                        {!! $fields->contact_us_description !!}
                    </div>
                </div>
            @endif
            <div class="banner_content">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner_text">
                            <img src="{{asset('images/phone3.png')}}" alt="">
                            <a href="{{route('contact.show')}}"><h1>Skontaktuj się ze mną</h1></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner_phone">
                            <h4>Zadzwoń do mnie</h4>
                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}"><span>{{getConstField('phone')}}</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
