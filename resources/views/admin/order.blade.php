@extends('Layouts.authBasketLayout')

@section('title', 'Заказ ')

@section('content')

    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                        <h1>Заказ №{{ $order->id }}</h1>
                        <p>Заказчик: <b>{{ $order->name }}</b></p>
                        <p>Номер телефона: <b>{{ $order->phone }}</b></p>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Кол-во</th>
                                <th>Цена</th>
                                <th>Стоимость</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($order->products as $product)
                                <tr>
                                    <td>
                                        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
                                            <img height="56px" src="{{ Storage::url($product->image) }}">
                                            {{ $product->name }}
                                        </a>
                                        @if($product->isNew())
                                            <span class="alert alert-success">Новинка</span>
                                        @endif
                                        @if($product->isHit())
                                            <span class="alert alert-warning">Хит</span>
                                        @endif
                                        @if($product->isSale())
                                            <span class="alert alert-info">Скидка</span>
                                        @endif
                                    </td>
                                    <td><span class="badge">{{ $product->pivot->count }} </span></td>
                                    <td>{{ $product->price }} </td>
                                    <td>{{ $product->getPriceForCount() }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3">Общая стоимость:</td>
                                <td>
                                    {{ $order->getFullPrice() }}
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">Дата:</td>
                                <td>

                                    {{$order->created_at->format('d/m/Y')}}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
