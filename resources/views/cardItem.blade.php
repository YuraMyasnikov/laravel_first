<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
        </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/htc_one_s.png" alt="">
        <div class="caption">
            <h4>{{ $product->name }}</h4>
            <p>{{ $product->category->name }}</p>
            <p>{{ $product->price }} ₽</p>

            <p>
            <form action="{{ route('basketAdd', $product) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-success"> В корзину</button>
                <a href="{{ route('product',[$product->category->code, $product->code]) }}" class="btn btn-default">Подробнее</a>
            </form>
            </p>
        </div>
    </div>
</div>
