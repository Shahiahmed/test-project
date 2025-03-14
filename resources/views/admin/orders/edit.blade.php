@extends('layouts.admin')

@section('title', 'Редактировать заказ')

@section('content')
    <div class="container mt-4">
        <h1>Редактировать заказ #{{ $order->id }}</h1>
        <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="status" class="form-label">Статус заказа</label>
                <select name="status" id="status" class="form-select">
                    <option value="новый" {{ $order->status == 'новый' ? 'selected' : '' }}>Новый</option>
                    <option value="выполнен" {{ $order->status == 'выполнен' ? 'selected' : '' }}>Выполнен</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Сохранить изменения</button>
        </form>
    </div>
@endsection
