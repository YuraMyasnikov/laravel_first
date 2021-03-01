@extends('Layouts.mainLayout')

@section('title','Категории')

@section('content')
    <h1>{{ $property->name }}</h1>
    <p>В категории {{ $property->products->count() }} товара</p>

    @foreach($property->products()->with('category')->get() as $product)
        @include('cardItem',compact('product'))
    @endforeach

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
