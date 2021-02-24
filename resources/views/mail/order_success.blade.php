<h3>Приветствую {{ $name }}</h3>

<p>Заказ №{{$order->id}}</p>

<table>
    <tr>
        <th>Название</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Всего</th>
    </tr>
    @foreach($order->products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->pivot->count}}</td>
            <td>{{$product->price}} рублей</td>
            <td>{{ $product->price * $product->pivot->count }} рублей</td>
        </tr>
    @endforeach
    <tr>
        <td>Итого</td>
        <td>{{ $order->getFullPrice() }}</td>
    </tr>
</table>
