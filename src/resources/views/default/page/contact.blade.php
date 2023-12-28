@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <div class="section">
        <div class="container">
            <div class="gmapbox" data-aos="zoom-in">
                <div id="googleMap" class="map"><iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>
    </div>
    <div class="contact_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="keepintouch_3">
                        <div class="communication">
                            <div class="communication_icon">
                                <i class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="info_body">
                                <h5>Telefon</h5>
                                <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}"><h6>{{getConstField('phone')}}</h6></a>
                            </div>
                        </div>
                        <div class="communication" data-aos="fade-up" data-aos-duration="1000">
                            <div class="communication_icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="info_body">
                                <h5>Email</h5>
                                <a href="mailto:{{getConstField('email')}}"><h6>{{getConstField('email')}}</h6></a>
                            </div>
                        </div>
                        <div class="communication" data-aos="fade-up" data-aos-duration="1300">
                            <div class="communication_icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="info_body">
                                <h5>Lokalizacja</h5>
                                <h6>{{getConstField('company_address')}} <br> {{getConstField('company_post_code')}} {{getConstField('company_city')}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 offset-lg-1">
                    <div class="contact_us_1">
                        <div class="section_header" data-aos="fade-left" data-aos-duration="700">
                            <h6 class="section_sub_title">Kontakt</h6>
                            <h1 class="section_title">Skontaktuj się ze mną</h1>
                        </div>
                        @include('default.form.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner banner_bg_color">
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
