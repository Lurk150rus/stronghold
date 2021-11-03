@extends('master', ["file"=>'basket'])
@section('title', 'Корзина')
@section('content')
    <p class="alert alert-success">Добавлен товар iPhone X 64GB</p>
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Название</th>
                <th>Кол-во</th>
                <th>Цена</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->product as $product)
                @include('components.basket_item.basket_item', compact($product))
            @endforeach
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>71990 ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="/basket/place">Оформить заказ</a>
        </div>
    </div>
@endsection
