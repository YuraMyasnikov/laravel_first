@extends('Layouts.mainLayout')

@section('title', 'Кабинет')

@section('content')

    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    @foreach($orders as $order)
                    <h1 style="display: flex">Заказ №{{ $order->id }}</h1>
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
                                {{ $order->created_at->format('j-m-Y') }}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
