@extends('site.layouts.blank')

@section('layout')

<!-- Элементы головной навигации -->
<header id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-10">
                <ul class="main-navigation">
                	@foreach($menu as $item)
                		<li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
                	@endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Элементы головной навигации -->

<!-- Главная картинка -->
<div class="main-image">
    <div class="overlay"></div>
    <div class="main-image-caption">
        <h2>Путешествие по Казахстану</h2>
        <p>Мы собрали лучшие туры и экскурсии по Алматы и Алматинской области, чтобы сделать ваш отдых запоминающимся</p>
        <form>
            <div class="form-group">
               <input type="text" placeholder="Куда?" name="s" id="place" required="">
            </div>
            <div class="form-group input-date">
               <i class="far fa-angle-down"></i>
               <input type="text" name="when" placeholder="Когда?" id="datepicker" required="" class="hasDatepicker">
            </div>
            <div class="form-group">
               <div class="select-box">
                <div class="select">
                    <input class="select__input" type="hidden" name="">
                    <div class="select__head">Тип путешествия</div>
                    <ul class="select__list" style="display: none;">
                        <li class="select__item" value="adventure-tours">Пешие походы</li>
                        <li class="select__item" value="city-tours">Ночь в юрте</li>
                        <li class="select__item" value="couple-tours">Ночь в палатке с красивым видом</li>
                        <li class="select__item" value="group-tours">Рафтинг</li>
                    </ul>
                </div>
               </div>
            </div>
            <div class="form-group">
               <button type="submit" class="theme-btn text-center"><span class="fas fa-search"></span>Поиск</button>
            </div>
         </form>
    </div>
</div>
<!-- Главная картинка -->

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h5>МЕНЮ</h5>
                <ul class="footer-navigation">
                    @foreach($menu as $item)
                		<li><a href="{{ $item->link }}">{{ $item->name }}</a></li>
                	@endforeach
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h5>ТУРЫ</h5>
                <ul class="footer-navigation">
                    @foreach($tours as $tour)
                        <li><a href="/tours/{{ $tour->id }}">{{ $tour->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h5>ЭКСКУРСИИ</h5>
                <ul class="footer-navigation">
                    @foreach($guided_tours as $tour)
                        <li><a href="/tours/guided/{{ $tour->id }}">{{ $tour->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <h5>МЕСТА</h5>
                <ul class="footer-navigation">
                    @foreach($places as $place)
                        <li><a href="/places/{{ $place->id }}">{{ $place->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="absoluteSocial">
    <div><a href="" class="animate1"><i class="fab fa-whatsapp"></i></a></div>
    <div><a href="" class="animate2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-envelope"></i></a></div>
</div>

@include('site.layouts.modals')

@endsection