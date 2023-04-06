{{--@extends('layouts.app')--}}
@include('layouts.header')
<div class="page__content">
    <section class="main section-offset">
        <div class="main-video">
            <video autoplay="" loop="" muted="" playsinline="" preload="none" width="100%" height="100%">
                <source src="{{asset('assets/images/home/section-1/main-video.mp4')}}" type="video/mp4">
                <source src="{{asset('assets/images/home/section-1/main-video.webm')}}" type="video/webm" media="(max-width:1180px)">
            </video>
            <div class="main-text-wrapper">
                <div class="main-text">
                    <p>строим не дома,</p>
                </div>
                <div class="main-text"><a class="btn-down" href="#about"><svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 21.1786L11.0294 30.5M11.0294 30.5L20.5588 21.1786M11.0294 30.5C11.0294 24.9762 11.0294 12.7548 11.0294 8.05952C11.0294 2.19048 17.0294 1.5 18.4412 1.5C19.5706 1.5 24.6176 1.5 28.5 1.5" stroke-width="2" stroke-linecap="round"/>
                        </svg></a>
                    <p>а стиль жизни!</p>
                </div>
                <div class="main-text-mobile"><a class="btn-down" href="#about"><svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 21.1786L11.0294 30.5M11.0294 30.5L20.5588 21.1786M11.0294 30.5C11.0294 24.9762 11.0294 12.7548 11.0294 8.05952C11.0294 2.19048 17.0294 1.5 18.4412 1.5C19.5706 1.5 24.6176 1.5 28.5 1.5" stroke-width="2" stroke-linecap="round"/>
                        </svg></a>
                    <p>строим не дома, а стиль жизни!</p>
                </div>
                <div class="social-networks">
                    <ul>
                        <li><a href="#" target="_blank">FaceBook</a></li>
                        <li><a href="#" target="_blank">Instagram</a></li>
                        <li><a href="#" target="_blank">Telegram</a></li>
                        <li><a href="#" target="_blank">Tik Tok</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="about section-offset section-top-offset" id="about">
        <div class="about-left card-style js-hover-card-animation">
            <div class="about-content">
                <div class="subtitle">Архитектура домов прекрасно сочетается с естественным природным ландшафтом. Развитая инфраструктура и полная самодостаточность комплекса вдохновляют на активную насыщенную жизнь.</div><a class="btn-circle btn-text" href="#"><span>Узнать больше</span></a>
                <div class="title">Концепция pоlо vilas</div>
            </div>
        </div>
        <div class="about-right card-style js-hover-card-animation">
            <div class="about-content">
                <div class="title">Про проект</div><a class="btn-circle btn-text" href="#"><span>Узнать больше</span></a>
                <div class="subtitle">Жилой комплекс клубного типа c закрытой территорией, развитой инфраструктурой и полной самодостаточностью комплекса вдохновляют на активную насыщенную жизнь.</div>
            </div>
        </div>
    </section>
    <section class="images-section section-offset section-top-offset">
        <div class="images-section-wrapper">
            <div class="images-section-left"><img class="img" src="{{asset('assets/images/home/section-3/1.png')}}"></div>
            <div class="images-section-right"><img class="img" src="{{asset('assets/images/home/section-3/2.png')}}"><img class="logo-svg" src="{{asset('assets/images/home/section-3/3.svg')}}"></div>
            <img class="left-svg" src="{{asset('assets/images/home/section-3/4.svg')}}"><img class="right-svg" src="{{asset('assets/images/home/section-3/5.svg')}}">
        </div>
    </section>
    <section class="apartments-section">
        <div class="apartments-section-wrapper"><img class="bg-svg" src="{{asset('assets/images/home/section-4/bg.svg')}}">
            <div class="apartments-section-left"><img src="{{asset('assets/images/home/section-4/1.png')}}"></div>
            <div class="apartments-section-center">
                <h4 class="title">Планировки</h4>
                <p class="text">Всего 3 типа домов, в домах 3-4 спальни, 3 санузла, паркинг у каждого дома на 1 или 2 машины. У всех домов есть задний двор (земельный участок или собственная терраса).</p><a class="btn btn-text orange-btn" href="#"><span>Выбрать дом</span></a>
            </div>
            <div class="apartments-section-right"><img src="{{asset('assets/images/home/section-4/2.png')}}"></div>
        </div>
    </section>
    <section class="about section-offset" id="about-2">
        <div class="about-left card-style js-hover-animation"><img src="{{asset('assets/images/home/section-5/1.png')}}">
            <div class="title">Галерея комплекса</div>
            <div class="about-left-hover"><a class="btn-circle btn-text" href="#"><span>Узнать больше</span></a>
                <div class="img"><img class="left" src="{{asset('assets/images/home/section-5/3.png')}}"><img class="right" src="{{asset('assets/images/home/section-5/4.png')}}"></div>
            </div>
        </div>
        <div class="about-right card-style js-hover-card-animation">
            <div class="about-content">
                <div class="title">Девелопер проекта</div><a class="btn-circle btn-text" href="#"><span>Узнать больше</span></a>
                <div class="subtitle">Работаем с 2017 года. Специализируемся на малоэтажном строительстве, самый крупный и "старый" застройщик малоэтажного строительства. Первые в Грузии предложили форматы домов типа - таунхаус.</div>
            </div>
        </div>
    </section>


{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@include('layouts.footer')
