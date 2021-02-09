@extends('Layouts.authBasketLayout')

@section('title', 'Категории')

@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Действия
                </th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-success" type="button"
                           href="{{ route('adminCategories.show', $category ) }}"> Открыть </a>

                        <a class="btn btn-warning" type="button"
                            href="{{ route('adminCategories.edit', [$category] ) }}"> Редактировать </a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <a href="{{ route('adminCategories.create') }}" class="btn btn-success">Добавить Категорию</a>
    </div>
@endsection


