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
            <p>{{ $product->price }} {{ App\Services\ConvertCurrency::getCurrencySymbol() }}</p>
            @if($product->count == 1)
                <p>Последний шанс</p>
            @elseif($product->count > 1 )
                <p>Торопись, осталось немного</p>
            @elseif($product->count == 0)
                <p>Временно отсутствует</p>
            @endif


            <p>
            <form action="{{ route('basketAdd', $product) }}" method="post">
                @csrf
                @if($product->count > 0)
                    <button type="submit" class="btn btn-success"> В корзину</button>
                @else
                    <button disabled type="submit" class="btn "> В корзину</button>
                @endif
                <a href="{{ route('product',[isset($category) ? $category->code : $product->category->code, $product->code]) }}" class="btn btn-default">Подробнее</a>
            </form>
            </p>
        </div>
    </div>
</div>
