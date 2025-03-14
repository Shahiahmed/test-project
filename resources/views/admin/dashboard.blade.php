@extends('layouts.admin')

@section('title', 'Главная')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добро пожаловать в админ панель</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-tags" style="font-size: 2rem;"></i>
                    <h5 class="card-title mt-2">Категории</h5>
                    <p class="card-text">Управление категориями товаров.</p>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-shop" style="font-size: 2rem;"></i>
                    <h5 class="card-title mt-2">Товары</h5>
                    <p class="card-text">Управление товарами магазина.</p>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Перейти</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <i class="bi bi-receipt" style="font-size: 2rem;"></i>
                    <h5 class="card-title mt-2">Заказы</h5>
                    <p class="card-text">Просмотр и управление заказами.</p>
                    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Перейти</a>
                </div>
            </div>
        </div>
    </div>

@endsection
