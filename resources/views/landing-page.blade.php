@extends('layouts.base')

@section('main')
    <div class="wrapper">
        <div class="application__presentation">
            <div class="container">
                <div class="text_main app-title">Restiloc is the good choice.</div>
                <div class="subtext">Simple and secure application for quality expertise. Download the app today !</div>
                <a class="playstore__download" href='http://play.google.com/store/?pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
            </div>
        </div>
        <div class="application__illustration">
            <img src="/static/images/{{ $theme }}-iphone.svg"/>
        </div>
    </div>
@endsection