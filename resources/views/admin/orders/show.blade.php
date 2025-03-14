@extends('layouts.admin')

@section('title', 'Детали заказа')

@section('content')
    <div class="container mt-4">
        <h1>Детали заказа</h1>
        <p><strong>ID заказа:</strong> {{ $order->id }}</p>
        <p><strong>Покупатель:</strong> {{ $order->customer_name }}</p>
        <p><strong>Дата заказа:</strong> {{ $order->order_date }}</p>
        <p><strong>Статус:</strong> {{ $order->status }}</p>
        <p><strong>Комментарий:</strong> {{ $order->customer_comment }}</p>
        <hr>
        <p><strong>Товар:</strong> {{ $order->product->name }}</p>
        <p><strong>Категория:</strong> {{ $order->product->category->name }}</p>
        <p><strong>Количество:</strong> {{ $order->quantity }}</p>
        <p><strong>Итоговая цена:</strong> {{ number_format($order->product->price * $order->quantity, 2) }} руб.</p>
        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-warning">Редактировать статус</a>
    </div>
@endsection
