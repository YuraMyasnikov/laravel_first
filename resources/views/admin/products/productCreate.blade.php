@extends('Layouts.authBasketLayout')

@isset($category)
    @section('title', 'Редактирование ' . $product->name)
@else
    @section('title', 'Создать товар')
@endisset


@section('content')
    <div class="col-md-12">

        @isset($product)
        <h1>Редактирование товара <b>{{ $product->name }}</b></h1>
        @else
            <h1>Создать товар</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              action="
                    @isset($product)
                        {{ route('products.update', $product) }}
                    @else
                        {{ route('products.store') }}
                    @endisset
                  ">
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="{{ old('code', isset($product) ? $product->code : null ) }}">
                        @error('code')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="{{ old('name', isset($product)? $product->name : null ) }}">
                        @error('name')
                        <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control" style="height: auto;">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($product)
                                        @if($category->id == $product->category_id)
                                        selected
                                    @endif
                                    @endisset
                                > {{ $category->name }}
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="price" id="price"
                               value="{{ old('price', isset($product)? $product->price : null ) }}">
                        @error('price')
                        <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72"
                                  rows="7">{{ old('description', isset($product)? $product->description : null ) }}
                        </textarea>
                        @error('description')
                        <div class="alert alert-danger"> {{ $message }}</div>
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
                        @error('image')
                        <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

