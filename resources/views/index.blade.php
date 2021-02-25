@extends('Layouts.mainLayout')

@section('title','Главная страница')

@section('content')
    <h1>@lang('home.products')</h1>
    <div class="row"  style="margin: 30px 0;">
        <div class="col">
            @error('price_from')
            <span class="alert alert-danger"> {{ $message }}</span>
            @enderror
            @error('price_to')
            <span class="alert alert-danger"> {{ $message }}</span>
            @enderror
        </div>
    </div>
    <form method="GET" action="{{ route('home') }}">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от
                    <input type="text" name="price_from" id="price_from" size="6" value="{{ $request->price_from }}">
                </label>

                <label for="price_to">до
                    <input type="text" name="price_to" id="price_to" size="6"  value="{{ $request->price_to }}">
                </label>

            </div>
            @foreach(['new'=>__('home.filter.new'),'hit'=>__('home.filter.hit'),'sale'=>__('home.filter.sale')] as
            $fieldCheck =>
            $fieldValue)
                <div class="col-sm-2 col-md-2">
                    <label for="{{ $fieldCheck }}">
                        <input type="checkbox" name="{{ $fieldCheck }}" id="{{ $fieldCheck }}"
                        @if($request->$fieldCheck) checked="checked" @endif
                        > {{ $fieldValue }}
                    </label>
                </div>
            @endforeach
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="{{ route('home') }}" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
    <div class="row">
        @foreach($products as $product)
            @include('cardItem', compact($product))
        @endforeach
    </div>
    {{ $products->links() }}

    {{--<nav>
        <ul class="pagination">
            <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="?&amp;page=2">2</a></li>
            <li class="page-item">
                <a class="page-link" href="?&amp;page=2" rel="next" aria-label="pagination.next">&rsaquo;</a>
            </li>
        </ul>
    </nav>--}}
@endsection
