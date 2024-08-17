@extends('admin.layouts.master')

@section('title')
    Cập nhật sản phẩm: {{ $product['name'] }}
@endsection

@section('content')
    <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="categories_id" class="form-label">Category:</label>
                    <select name="categories_id" id="categorie_id" class="form-select">
                        @foreach ($categories as $id => $name)
                            <option value="{{ $id }}" @selected($product->categories_id == $id)>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $product['name'] }}" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter img" name="image" >
                    <img src="{{ Storage::url($product->image) }}" width="100px" alt="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="{{ $product['price'] }}"unrequier>
                </div>
                <div class="mb-3 mt-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description">{{ $product['description'] }}</textarea>
                </div>
                <div class="mb-3 mt-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea class="form-control" id="content" placeholder="Enter Content" name="content" un>{{ $product['content'] }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
