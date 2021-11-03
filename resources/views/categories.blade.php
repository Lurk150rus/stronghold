@extends('master', ["file"=>'categories'])
@section('title', 'Все категории ')
@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{route('category', [$category->code])}}">
                <img src="/storage/categories/mobile.jpg">
                <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
    @endforeach
@endsection