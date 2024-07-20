@extends('admin.layouts.master')

@section('title')
    Quản lý Sản phẩm
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Danh sách</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">

                    <div class="table-responsive">
                        @if (isset($_SESSION['status']) && $_SESSION['status'])
                            <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

                            @php
                                unset($_SESSION['status']);
                                unset($_SESSION['msg']);
                            @endphp
                        @endif

                        @if (isset($_SESSION['status']) && !$_SESSION['status'])
                            <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

                            @php
                                unset($_SESSION['status']);
                                unset($_SESSION['msg']);
                            @endphp
                        @endif

                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm mới</a>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>IMG </th>
                                    <th>NAME</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Category Name</th>
                                    <th>Content</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        {{-- <td>
                                            <img src="{{ asset($product['img_thumbnail']) }}" width="100px" alt="">
                                        </td> --}}
                                        <td></td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->categorie->name }}</td>
                                        <td>{{ $item->content }}</td>
                                        
                                        <td>
                                            <a href="{{route('products.show',$item)}}"
                                                class="btn btn-info">Xem</a>
                                            <a href="{{route('products.edit',$item)}}"
                                                class="btn btn-warning">Sửa</a>
                                                <form action="{{route('products.destroy',$item)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"
                                                    onclick="return confirm('Chắc chắn xóa không?');">Xóa</button>
                                                </form>
                                            
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
