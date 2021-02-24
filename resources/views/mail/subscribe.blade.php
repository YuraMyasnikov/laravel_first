<p>Здравствуйте {{$product->name}} появился в продаже. Стоит {{ $product->price }} рублей</p>

<a href="{{ route('product', [$product->category->code, $product->code]) }}"> смотреть подробнее</a>
