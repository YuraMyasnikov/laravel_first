@extends('mainLayout')

@section('title', 'Кабинет')

@section('content')

    <H1>Пользователь {{ $order->name }}</H1>
    <ul>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Товар
                </th>
                <th>
                    Количество
                </th>
                <th>
                    Стоимость
                </th>
                <th>
                    Дата
                </th>
            </tr>
            @foreach($order->products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->pivot->count }}</td>
                <td>{{$product->price}} руб.</td>
                <td>{{ $order->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </ul>
@endsection
