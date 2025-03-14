@extends('layouts.app')

@section('title', 'Магазин')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Наши товары</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if(isset($product->image))
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">
                                Категория: {{ $product->category->name }}<br>
                                Цена: {{ number_format($product->price, 2) }} руб.
                            </p>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
