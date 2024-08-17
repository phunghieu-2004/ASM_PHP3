@extends('admin.layouts.master')

@section('title')
    Thêm mới Sản phẩm
@endsection

@section('content')
    {{-- @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif --}}

    <form action="{{route('products.store')}}" enctype="multipart/form-data" method="POST" >
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label  class="form-label">Category:</label>
        
                    <select name="categorie_id"  class="form-control">
                        @foreach ($category as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" class="form-control" id="img" placeholder="Enter img" name="image">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter price" name="price"></input>
                </div>
                <div class="mb-3 mt-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description"></textarea>
                </div>
                    <div class="mb-3 mt-3">
                        <label for="content" class="form-label">Content:</label>
                        <textarea class="form-control" id="content" placeholder="Enter Content" name="content"></textarea>
                    </div>
                
                    
                
            
        </div>
        
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>
@endsection
