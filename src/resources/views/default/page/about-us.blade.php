@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <div class="experience section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="group_image_holder type_1">
                        <div class="expe_box">
                            <div class="expe_box_inner">
                                <?php
                                $currentYear = date('Y');
                                $startYear = 2019;
                                $yearsOfExperience = $currentYear - $startYear;
                                echo "<h1>$yearsOfExperience</h1>";

                                ?>
                                Lata doświadczenia
                            </div>
                        </div>
                        <div class="image_object">
                            <img src="{{asset('images/about_us.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" style="display: flex; align-items: center">
                    <div class="experience_content">
                        <div class="section_header">
                            <h6 class="section_sub_title">Mateusz Sagan</h6>
                            <h1 class="section_title">Twój Ekspert w Budownictwie Jedno i Wielorodzinnym</h1>
                            @if(!empty($fields->about_us_description))
                                {!! $fields->about_us_description !!}
                            @endif
                        </div>
                        <a class="button" href="{{route('contact.show')}}">Skontaktuj się ze mną</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    @foreach($gallery->items as $galleryItem)--}}
{{--        <img src="{{renderImage($galleryItem->url, 400, 200, 'resize')}}" alt="{{$galleryItem->name ?? ''}}">--}}
{{--    @endforeach--}}

@endsection
