<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="/storage/products/gopro.jpg" alt="{{$product->name}}">
            {{$product->category->name}}
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <p>
                {{$product->price}} ₽</p>
            <p>
            <form action="{{route('basket')}}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{route('product', [$product->category->code, $product->code])}}"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="iweFivO5nnW0B5ABqijMAkr2lz8ah4TZlQ05jzmo"></form>
            </p>
        </div>
    </div>
</div>
