@extends('site.layouts.layout')

@section('content')

<section>
    <div class="container">
        <h3 class="text-center">{{ $data->name }}</h3>
        {!! $data->description !!}
        
        @if(count($data->getMedia('gallery')) > 0)
            <div id="slider">
                <div id="sliderBtn">
                    <button><i class="fas fa-caret-left"></i></button>
                    <button><i class="fas fa-caret-right"></i></button>
                </div>
                <div id="sliderImages">
                    @foreach($data->getMedia('gallery') as $picture)
                        <img src="{{ $picture->getUrl() }}" @if (!$loop->first) class="hidden" @endif alt="">
                    @endforeach
                </div>
                <ul class="sliderDots" id="sliderPag">
                </ul>
            </div>
        @endif
    </div>
</section>
<section>
    <div class="container">
        <h3 class="text-center">В этом туре вы увидите:</h3>
        <div class="row">
            <div class="col-md-6 whatYouSee">
                <img src="{{ asset('assets/images/IMG_20190604_132752-.webp') }}" alt="">
                <p>Чарынский Каньон</p>
            </div>
            <div class="col-md-6 whatYouSee">
                <img src="{{ asset('assets/images/mertvoe-1200x675-min.webp') }}" alt="">
                <p>Озеро Каинды</p>
            </div>
            <div class="col-md-6 whatYouSee">
                <img src="{{ asset('assets/images/3.webp') }}" alt="">
                <p>Озеро Кольсай 1 и 2</p>
            </div>
            <div class="col-md-6 whatYouSee">
                <img src="{{ asset('assets/images/_.webp') }}" alt="">
                <p>Черный Каньон</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <h3 class="text-center">Программа тура Кольсайские озера</h3>
        <div class="row">
            <div class="tourDays"><span>1</span></div>
            <div class="tourDoing">
                <h4>Первый день</h4>
                <p>Выезд из Алматы - Чарынский каньон (Трекинг) - Поселок Саты (Обед) - Озеро Каинды - Поселок Саты (Ужин, ночевка)</p>
                <p>-Выезд из Алматы (утром), к Чарынскому каньону (220 км, примерно 3 часа)</p>
                <p>-Прибытие в Чарынский каньон, экскурсия-трекинг (5-6 км, 3 часа )</p>
                <p>-Выезд в поселок Саты (гостевой дом) (100 км, примерно 1 час), обед</p>
                <p>-Выезд к озеру Каинды (15 км), экскурсия-трекинг 3 км (3 часа)</p>
                <p>-Выезд в поселок Саты (15 км), ужин, сон</p>
                <p><strong>протяженность дороги</strong>: 350 км, <strong>общее время</strong>: 6 часов </p>
            </div>
        </div>
        <div class="row m-t-30">
            <div class="tourDays"><span>2</span></div>
            <div class="tourDoing">
                <h4>Второй день</h4>
                <p>Поселок Саты (Завтрак) - Озеро Кольсай 1 и 2 - Выезд в Алматы</p>
                <p>-Завтрак в Саты (гостевой дом)</p>
                <p>-Выезд к озеру Кольсай-1 (15 км, примерно 30 минут), экскурсия-трекинг на озеро Кольсай-2 (16 км, 6-7 часов*), обед</p>
                <p>-Выезд в Алматы ( 310 км), водитель оставит вас в любой точке города</p>
                <p>-Выезд к озеру Каинды (15 км), экскурсия-трекинг 3 км (3 часа)</p>
                <p>-Выезд в поселок Саты (15 км), ужин, сон</p>
                <p><strong>протяженность дороги</strong>: 315 км, <strong>общее время</strong>: 7 часов </p>
                <p>* для лиц с хорошей физической подготовкой; альтернатива - конная экскурсия</p>
                <p><strong>Сезон:</strong> круглый год ( лучшее время апрель-октябрь)</p>
                <p><strong>Маршрут может быть изменен или дополнен по Вашему желанию; если Вы мечтаете посмотреть достопримечательность, не указанную в данной программе, обращайтесь к организаторам тура - мы обязательно постараемся решить этот вопрос и расскажем Вам о всех возможных опциях.</strong></p>
                <p><strong>Примеры опций:</strong> В 1-ый день можно посмотреть помимо или вместо долины замков другие каньоны такие как Лунный , Бестамак, Темерлик . Во 2-ой день можно отправится ко второму озеру Кольсай на лошади или остаться на первом озере, чтобы ловить форель. Вместо гостевого дома можно остаться ночевать в палатках .</p>
            
            </div>
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