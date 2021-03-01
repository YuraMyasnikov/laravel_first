@extends('Layouts.authBasketLayout')

@isset($property)
    @section('title', 'Редактирование ' . $property->name)
@else
    @section('title', 'Создать категорию')
@endisset


@section('content')
    <div class="col-md-12">

        @isset($property)
        <h1>Редактирование категории <b>{{ $property->name }}</b></h1>
        @else
            <h1>Добавить Категорию</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              action="
                    @isset($property)
                        {{ route('categories.update', $property) }}
                    @else
                        {{ route('categories.store') }}
                    @endisset
                  ">
            <div>
                @isset($property)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($property) ? $property->code : null) }}">
                        @error('code')
                            <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($property) ? $property->name : null) }}">
                        @error('name')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72"
                                  rows="7">{{ old('description', isset($property) ? $property->description : null)
                                  }}</textarea>
                        @error('description')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

