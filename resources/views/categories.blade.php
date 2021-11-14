@extends('master', ["file"=>'categories'])
@section('title', 'Все категории ')
@section('content')
    <div class="equal-group">
        @foreach($categories as $category)
            <div class="panel col-sm-6 equal-item">
                <a href="{{route('category', [$category->code])}}">
                    <img src="{{ Storage::url($category->image) }}" alt="{{$category->name}}">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach
    </div>
@endsection
