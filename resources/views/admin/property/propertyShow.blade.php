@extends('Layouts.authBasketLayout')

@section('title', 'Категория ' . $property->name)

@section('content')
    <div class="col-md-12">
        <h1>Категория {{ $property->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $property->id }}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $property->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $property->name }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $property->description }}</td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($property->image) }}"
                         height="240px"></td>
            </tr>
            <tr>
                <td>Кол-во товаров</td>
                <td>{{ $property->products->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
