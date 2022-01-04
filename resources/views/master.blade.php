<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    <script src="/js/equlize.js"></script>
    <link rel="icon" href="/storage/img/favicon.ico" type="image/x-icon">

</head>
<body>
<div class="wrapper">
    <nav id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}"><b>TECHSTRONG</b></a>
                <a href="#" id="burger" class="navbar-burger">
                    <svg style="fill: white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M3.5,7 C3.22385763,7 3,6.77614237 3,6.5 C3,6.22385763 3.22385763,6 3.5,6 L20.5,6 C20.7761424,6 21,6.22385763 21,6.5 C21,6.77614237 20.7761424,7 20.5,7 L3.5,7 Z M3.5,12 C3.22385763,12 3,11.7761424 3,11.5 C3,11.2238576 3.22385763,11 3.5,11 L20.5,11 C20.7761424,11 21,11.2238576 21,11.5 C21,11.7761424 20.7761424,12 20.5,12 L3.5,12 Z M3.5,17 C3.22385763,17 3,16.7761424 3,16.5 C3,16.2238576 3.22385763,16 3.5,16 L20.5,16 C20.7761424,16 21,16.2238576 21,16.5 C21,16.7761424 20.7761424,17 20.5,17 L3.5,17 Z"></path>
                    </svg>
                </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @routeactive(
                    'index')><a href="{{ route('index') }}">Все товары</a></li>
                    <li @routeactive(
                    'categor*')><a href="{{ route('categories') }}/">Категории</a>
                    </li>
                    <li @routeactive(
                    'basket*')><a href="{{ route('basket') }}">В корзину</a></li>
                    <li @routeactive(
                    'about')><a href="{{ route('about') }}">О нас</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        <li><a href="{{ route('login') }}">Войти</a></li>
                    @endguest

                    @auth
                        @admin
                        <li><a href="{{ route('home') }}">Панель Администратора</a></li>
                    @else
                        <li><a href="{{ route('orderIndex') }}">Мои заказы</a></li>
                        @endadmin
                        <li><a href="{{ route('getLogout') }}">Выйти</a></li>
                    @endauth
                </ul>

            </div>

        </div>
    </nav>

    <div class="container content">
        <div class="starter-template">
            @if(session()->has('success'))

                <p class="alert alert-success">
                    {{session()->get('success')}}
                </p>
            @endif
            @if(session()->has('warning'))
                <p class="alert alert-warning">
                    {{session()->get('warning')}}
                </p>
            @endif
            @yield('content')
        </div>
    </div>
<footer class="bg-dark text-center text-white" id="footer" style="background:#222">
    <!-- Grid container -->
    <nav class="navbar navbar-inverse" style="border:none; ">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}"><b>TECHSTRONG</b></a>
            </div>

            <div class=" navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @routeactive(
                    'index')><a href="{{ route('index') }}">Все товары</a></li>
                    <li @routeactive(
                    'categor*')><a href="{{ route('categories') }}/">Категории</a>
                    </li>
                    <li @routeactive(
                    'basket*')><a href="{{ route('basket') }}">В корзину</a></li>
                    <li @routeactive(
                    'about')><a href="{{ route('about') }}">О нас</a></li>
                </ul>
                <ul class="nav navbar-no-collapse navbar-nav navbar-right">
                    <li>
                        <a href="mailto:t.tehstrong@yandex.ru">t.tehstrong@yandex.ru</a>
                    </li>
                    <li>
                        <a href="tel:+79851697307">8 (985) 169-73-07</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3">
        © 2022 Copyright:
        <strong class="text-white"> ООО "Техстронг"</strong>
    </div>
    <!-- Copyright -->
</footer>
</div>

</body>

<script src="//code-ya.jivosite.com/widget/9RGTU0D5OG" async></script>
</html>
