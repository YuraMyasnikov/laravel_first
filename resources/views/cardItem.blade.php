<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            @if($product->isNew())
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-success">Новинка</div>
            @endif
            @if($product->isHit())
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-warning">Хит</div>
            @endif
            @if($product->isSale())
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-info">Скидка</div>
            @endif
        </div>
        <img src="{{ Storage::url($product->image) }}">
        <div class="caption">
            <h4 class="cardItemName">{{ $product->name }}</h4>
            <p>{{ $product->category->name }}</p>
            @if($product->price > 0)
            <p>{{ $product->price }} ₽</p>
            @else
            <p><b>Товар отсутствует</b></p>
            @endif

            <p>
            <form action="{{ route('basketAdd', $product) }}" method="post">
                @csrf
                @if($product->price > 0)
                    <button type="submit" class="btn btn-success"> В корзину</button>
                @else
                    <button disabled type="submit" class="btn btn-success"> В корзину</button>
                @endif
                <a href="{{ route('product',[$product->category->code, $product->code]) }}" class="btn btn-default">Подробнее</a>
            </form>
            </p>
        </div>
    </div>
</div>
