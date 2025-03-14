@extends('layouts.admin')

@section('title', 'Редактировать категорию')

@section('content')
    <div class="container">
        <h1>Редактировать категорию</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Название категории</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
            </div>
            <button type="submit" class="btn btn-success">Сохранить изменения</button>
        </form>
    </div>
@endsection
