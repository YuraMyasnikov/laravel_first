@extends('Layouts.mainLayout')

@section('title',$product->name)

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} ₽</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>

    @if($product->count != 0)
        <form action="{{ route('basketAdd', $product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button"
                    @isset($product->deleted_at) disabled @endisset
            >Добавить в корзину
            </button>
            @csrf
        </form>
    @else
        <p><b>Товар отстутсвует</b></p>
        <p>Оповестить при наличии товара</p>
        <form action="{{ route('subscripe', $product) }}" method="post">
            @csrf
            <label for="email">
                Узнать по почте
                <input type="text" name="email" id="email">
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </label>
            <button type="submit" class="btn btn-warning">Оповестить</button>
        </form>
    @endif
@endsection



