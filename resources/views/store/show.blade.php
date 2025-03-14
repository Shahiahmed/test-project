@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="container mt-4">
        <div class="row">
            <!-- Информация о товаре -->
            <div class="col-md-8">
                <h1>{{ $product->name }}</h1>
                <p><strong>Категория:</strong> {{ $product->category->name }}</p>
                <p><strong>Цена:</strong> {{ number_format($product->price, 2) }} руб.</p>
                <p>{{ $product->description }}</p>
            </div>

            <!-- Форма заказа -->
            <div class="col-md-4">
                <h3>Оформить заказ</h3>
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <!-- Скрытое поле для передачи идентификатора товара -->
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <div class="mb-3">
                        <label for="customer_name" class="form-label">ФИО покупателя</label>
                        <input type="text" name="customer_name" id="customer_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="order_date" class="form-label">Дата заказа</label>
                        <input type="date" name="order_date" id="order_date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Количество</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="1" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_comment" class="form-label">Комментарий</label>
                        <textarea name="customer_comment" id="customer_comment" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Оформить заказ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
