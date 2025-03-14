@extends('layouts.app')

@section('title', 'Заказы')

@section('content')
    <div class="container mt-4">
        <h1>Заказы</h1>
        @if($orders->isEmpty())
            <p>Заказов пока нет.</p>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID заказа</th>
                    <th>Дата</th>
                    <th>Покупатель</th>
                    <th>Статус</th>
                    <th>Товар</th>
                    <th>Количество</th>
                    <th>Итоговая цена</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->status }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ number_format($order->product->price * $order->quantity, 2) }} руб.</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
