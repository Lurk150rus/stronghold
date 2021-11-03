@extends('master', ["file"=>'product'])
@section('title', 'Товар' . $help)
@section('content')
    <h1>{{ $help }}</h1>

    <h1>iPhone X 64GB</h1>
    <h2>Мобильные телефоны</h2>
    <p>Цена: <b>71990 ₽</b></p>
    <img src="/storage/products/iphone_x.jpg">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>

    <form action="/basket/add/1" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        <input type="hidden" name="_token" value="iweFivO5nnW0B5ABqijMAkr2lz8ah4TZlQ05jzmo">        </form>
@endsection
