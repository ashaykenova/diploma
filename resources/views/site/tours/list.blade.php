@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">Лучшие туры из Алматы</h3>
        <div class="row">
            @foreach($data as $tour)
                <div class="tCard">
                    @if(count($tour->getMedia('gallery')) > 0)
                        <img src="{{ $tour->getMedia('gallery')[0]->getUrl() }}" alt="">
                    @endif
                    <div class="tCaption">
                        <h5>{{ $tour->name }}</h5>
                        <p>{{ $tour->announce }}</p>
                        <a href="/tours/{{ $tour->id }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<div class="tour">
    <div class="overlay"></div>
    <div class="tour-caption">
        <h2>Подобрать тур</h2>
        <p>Нажмите на кнопку и мы подберем тур с учетом ваших пожеланий</p>
        <button data-bs-toggle="modal" data-bs-target="#exampleModal">Подобрать тур</button>
    </div>
</div>
<section>
    <div class="container">
        <h3 class="text-center">Мы организовываем индивидуальные туры и экскурсии по Казахстану</h3>
        <h4 class="text-center">Чем удобны наши туры ?</h4>
        <div class="row">
            <div class="whym">
                <img src="{{ asset('assets/images/jiping3-_1_.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Туры на внедорожниках</h5>
                    <p>Это самый комфортный и безопасный способ путешествия по Казахстану для туризма и отдыха из-за отсутствия хороших дорог в красивейшие и уникальные места.</p>
                </div>
            </div>
            <div class="whym">
                <img src="{{ asset('assets/images/1532681668_content_700x455.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Индивидуальные туры</h5>
                    <p>Во время такого тура предоставляется личная машина с водителем и гидом. Вы сможете отдыхать так, как хочется Вам и Вашим друзьям; при этом Вы сами решаете, когда и куда ехать, не привязываясь к датам.</p>
                </div>
            </div>
            <div class="whym">
                <img src="{{ asset('assets/images/img-big-almaty-lake.jpg') }}" alt="">
                <div class="whym-caption">
                    <h5>Туры от Go Travel</h5>
                    <p>Мы выбрали для Вас только лучшие места Казахстана и Кыргызстана; наши авторские туры сделают Ваше путешествие увлекательным и оставят самые яркие впечатление.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h2>6 причин поехать в путешествие по Казахстану с Go Travel</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/user-experience.svg') }}" alt="">
                <h5>Опыт более 10 лет</h5>
                <p>Гиды с более чем 10-летним опытом знают все тонкости организации индивидуальных туров</p>
            </div>
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/hiking.svg') }}" alt="">
                <h5>Узкая специализация</h5>
                <p>Работа только с индивидуальными турами позволяет достичь максимального результата</p>
            </div>
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/low-price.svg') }}" alt="">
                <h5>Низкая цена</h5>
                <p>Мы работаем без посредников и скрытых комиссий, напрямую организовывая ваш отдых</p>
            </div>
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/pay.svg') }}" alt="">
                <h5>Оплата по факту</h5>
                <p>Вам не требуется вносить 100% предоплату при бронировании тура; расчет производится на месте</p>
            </div>
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/taxi_1.svg') }}" alt="">
                <h5>Бесплатный трансфер</h5>
                <p>Приятным бонусом для вас станет бесплатная встреча и проводы в аэропорт</p>
            </div>
            <div class="col-md-4 col-sm-6 exper">
                <img src="{{ asset('assets/images/chef.svg') }}" alt="">
                <h5>Asian food work-shop</h5>
                <p>При бронировании комплексного тура дисконт 15% на мастер-класс по центральноазиатской кухне</p>
            </div>
        </div>
    </div>
</section>
<section class="map">
    <img src="{{ asset('assets/images/map.png') }}" alt="">
</section>

@endsection