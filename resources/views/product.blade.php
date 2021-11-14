@extends('master', ["file"=>'product'])
@section('title', 'Товар' . $product->code)
@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->price}} ₽</b></p>
    <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
    <p>{{$product->description}}</p>

    <form action="{{route('basketAdd', $product->id)}}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        @csrf
    </form>
@endsection
