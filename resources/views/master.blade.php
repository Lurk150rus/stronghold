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

</head>
<body>
<div id="wrap">
    <nav id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
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

    <div class="container">
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
</div>
<footer class="bg-dark text-center text-white" id="footer" style="background:#222">
    <!-- Grid container -->
    <nav class="navbar navbar-inverse" style="border:none; ">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">Интернет Магазин</a>
            </div>
            <div class="collapse navbar-collapse">
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
</body>

<script src="//code-ya.jivosite.com/widget/9RGTU0D5OG" async></script>
</html>
