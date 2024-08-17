@extends('admin.layouts.master')

@section('title')
    Quản lý Danh mục
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

                        <a href="{{route('category.create')}}" class="btn btn-primary">Thêm mới</a>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>{{ $item['updated_at'] }}</td>
                                        <td>
                                            <a href="{{route('category.edit',$item)}}"
                                                class="btn btn-warning">Sửa</a>
                                            <form action="{{route('category.destroy',$item)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                onclick="return confirm('Chắc chắn xóa không?');">Xóa</button>
                                            </form>
                                        </td>
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
