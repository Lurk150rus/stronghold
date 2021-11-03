<tr>
    <td>
        <a href="{{route('category', [$product->category->code,$product->name])}}/mobiles/iphone_x_64">
            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
            {{$product->name}}
        </a>
    </td>
    <td><span class="badge">1</span>
        <div class="btn-group form-inline">
            <form action="/basket/remove/1" method="POST">
                <button type="submit" class="btn btn-danger" href=""><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                <input type="hidden" name="_token" value="Flu0AKnU9Pwni9FbYSxA53QMYskL0yBVD6XN2rgR">                            </form>
            <form action="{{route('basketAdd', $product)}}" method="POST">
                <button type="submit" class="btn btn-success" href=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                @csrf
            </form>
        </div>
    </td>
    <td>{{$product->price}} ₽</td>
    <td>{{$product->price}} ₽</td>
</tr>

