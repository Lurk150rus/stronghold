<tr>
    <td>
        <a href="{{route('category', [$product->category->code,$product->name])}}/mobiles/iphone_x_64">
            <img height="56px" src="http://internet-shop.tmweb.ru/storage/products/iphone_x.jpg">
            {{$product->name}}
        </a>
    </td>
    <td><span class="badge">{{$product->pivot->count}}</span>
        <div class="btn-group form-inline">
            <form action="{{route('basketRemove', $product)}}" method="POST">
                <button type="submit" class="btn btn-danger" ><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                @csrf
            </form>
            <form action="{{route('basketAdd', $product)}}" method="POST">
                <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                @csrf
            </form>
        </div>
    </td>
    <td>{{$product->price}} ₽</td>
    <td>{{$product->getPriceForCount()}} ₽</td>
</tr>

