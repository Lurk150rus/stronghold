@extends('master', ["file"=>'product'])
@section('title', 'Товар' . $product->code)
@section('content')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Главная</a></li>
            <li class="breadcrumb-item"><a href="{{route('category', [$product->category->code])}}">{{$product->category->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
        </ol>
    </nav>

    <h1>{{ $product->name }}</h1>
    <h2>{{$product->category->name}}</h2>
    <p>Цена: <b>{{$product->price}} ₽</b></p>
    <div>
        <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
    </div>
    <br/>
    <p>{{$product->description}}</p>

    <form action="{{route('basketAdd', $product->id)}}" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
        @csrf
    </form>
@endsection
