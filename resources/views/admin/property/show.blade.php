@extends('Layouts.authBasketLayout')

@section('title', 'Свойство ' . $property->name)

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
                    Свойство
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $property->id }}</td>
            </tr>
            <tr>
                <td>Свойство</td>
                <td>{{ $property->name }}</td>
            </tr>
            <tr>
                <td>Property</td>
                <td>{{ $property->name_en }}</td>
            </tr>
            </tbody>
        </table>
        <a href="{{ route('properties.index') }}" class="btn btn-info">Назад</a>
    </div>
@endsection

