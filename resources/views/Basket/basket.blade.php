@extends('Layouts.mainLayout')

@section('title','Корзина')

@section('content')
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
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
            @foreach($order->products as $product)
            <tr>
                <td>
                    <a href="{{ route('product', [$product->category->code, $product->code] ) }}">
                        <div style="width: 60px;display: inline-block">
                            <img height="56px" src="{{ Storage::url($product->image) }}">
                        </div>
                        {{ $product->name}}
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
                <td><span class="badge">{{ $product->pivot->count }}</span>
                    <div class="btn-group form-inline">
                        <form action="{{ route('basketDel',$product->id) }}" method="POST">
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                            @csrf
                        </form>
                        <form action="{{ route('basketAdd',$product->id) }}" method="POST">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                            @csrf
                        </form>
                    </div>
                </td>
                <td>{{$product->price}} {{ App\Services\ConvertCurrency::getCurrencySymbol() }}</td>
                <td>{{$product->getPriceForCount()}} {{ App\Services\ConvertCurrency::getCurrencySymbol() }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td>{{$order->getFullPrice()}}{{ App\Services\ConvertCurrency::getCurrencySymbol() }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basketPlace') }}">Оформить заказ</a>
        </div>
    </div>
@endsection




