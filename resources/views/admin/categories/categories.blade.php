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

            @foreach($categories as $property)
                <tr>
                    <td>{{ $property->id }}</td>
                    <td>{{ $property->code }}</td>
                    <td>{{ $property->name }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $property) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('categories.show', $property)
                                }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $property)
                                }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Добавить Категорию</a>
    </div>
@endsection


