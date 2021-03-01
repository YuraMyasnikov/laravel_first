@extends('Layouts.authBasketLayout')

@isset($property)
    @section('title', 'Редактирование ' . $property->name)
@else
    @section('title', 'Создать свойство')
@endisset


@section('content')
    <div class="col-md-12">

        @isset($property)
            <h1>Редактирование свойства <b>{{ $property->name }}</b></h1>
        @else
            <h1>Добавить свойство</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              action="
@isset($property)
              {{ route('properties.update', $property) }}
              @else
              {{ route('properties.store') }}
              @endisset
                  ">
            <div>
                @isset($property)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Свойство: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="property_ru"
                               value="{{ old('name', isset($property) ? $property->name : null) }}">
                        @error('name')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Property: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name_en" id="property_en"
                               value="{{ old('name_en', isset($property) ? $property->name_en : null) }}">
                        @error('name_en')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                </div>
                <br>

                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

