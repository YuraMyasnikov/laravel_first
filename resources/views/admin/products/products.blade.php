@extends('Layouts.authBasketLayout')

@section('title', 'Товары')

@section('content')
    <div class="col-md-12">
        <div style="display: flex"><h1>Товары</h1>{{$products->count()}}</div>
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
                    Кол-во
                </th>
                <th>
                    Действия
                </th>
            </tr>

            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id  }}</td>
                    <td>{{ $product->code  }}</td>
                    <td>{{ $product->name  }}</td>
                    <td>{{ $product->count }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('products.show', $product)
                                }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('products.edit', $product)
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
        <a href="{{ route('products.create') }}" class="btn btn-success">Добавить товар</a>
    </div>
@endsection


