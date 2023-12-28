@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

@include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])

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
                        <h6 class="section_sub_title">KILKA SŁÓW O MNIE</h6>
                        <h1 class="section_title">O mnie</h1>
                        @if(!empty($fields->about_us_description))
                            {!! $fields->about_us_description !!}
                        @endif
                    </div>
                    <a class="button" href="{{route('about-us.show')}}">Zobacz więcej</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="funfacts" class="funfacts" style="background-image: url({{asset('images/bg3.png')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="fun_bottom">
                    <div class="row">
                        @include('default.article.home')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="blog section">
    <div class="container">
        <div class="blog_grid">
            <div class="row">
                @include('default.offer.home')
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
