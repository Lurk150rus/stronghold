<div class="col-sm-6 col-md-4">
    <div class="thumbnail equal-item">
        <div class="labels">
            @if($product->isNew())
                <span class="badge badge-success">Новинка</span>
            @endif
            @if($product->isRecommend())
                    <span class="badge badge-warning">Рекомендуемые</span>
            @endif
            @if($product->isHit())
                    <span class="badge badge-danger">Хит продаж</span>
            @endif
        </div>
        <img src="{{ Storage::url($product->image) }}" alt="{{$product->name}}">
        @isset($category)
            {{$category->name}}
        @endisset
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>
                {{$product->price}} ₽</p>
            <p>

            <form action="{{route('basketAdd', $product->id)}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [isset($category) ? $category->code : $product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>
