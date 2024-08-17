@extends('admin.layouts.master')

@section('title')
    Danh sách User
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Danh sách User</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">

                    <a class="btn btn-primary" href="{{route('users.create')}}">Thêm mới</a>

                    @if (isset($_SESSION['status']) && $_SESSION['status'])
                        <div class="alert alert-success">
                            {{ $_SESSION['msg'] }}
                        </div>

                        @php
                            unset($_SESSION['status']);
                            unset($_SESSION['msg']);
                        @endphp
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>TYPE</th>
                                    <th>CREATED AT</th>
                                    <th>UPDATED AT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['email'] }}</td>
                                        <td>
                                            {!!  $item['type'] == 'admin' 
                                                    ? '<span class="badge bg-primary">admin</span>'
                                                        : '<span class="badge bg-warning">member</span>' !!}
                                        </td>
                                        <td>{{ $item['created_at'] }}</td>
                                        <td>{{ $item['updated_at'] }}</td>
                                        <td>

                                            <a class="btn btn-info"
                                                href="{{route('users.show',$item)}}">Xem</a>
                                            <a class="btn btn-warning"
                                                href="{{route('users.edit',$item)}}">Sửa</a>
                                                <form action="{{route('users.destroy',$item)}}" method="POST">
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