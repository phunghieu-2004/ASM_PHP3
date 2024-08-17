@extends('admin.layouts.master')

@section('title')
    Cập nhật Danh mục: {{ $category['name'] }}
@endsection

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Tên danh mục:</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" value="{{ $category->name }}" name="name" required maxlength="100">
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-5">Cập nhật</button>
    </form>
@endsection
