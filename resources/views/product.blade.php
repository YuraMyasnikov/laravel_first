@extends('Layouts.mainLayout')

@section('title',$product->name)

@section('content')
    <h1>{{ $product->name }}</h1>
    <h2>{{ $product->category->name }}</h2>
    <p>Цена: <b>{{ $product->price }} ₽</b></p>
    <img src="{{ Storage::url($product->image) }}">
    <p>{{ $product->description }}</p>

    <form action="{{ route('basketAdd', $product) }}" method="POST">
        <button type="submit" class="btn btn-success" role="button"
        @isset($product->deleted_at) disabled @endisset
        >Добавить в корзину</button>
        @csrf        </form>
@endsection




