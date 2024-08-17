@extends('admin.layouts.master')

@section('title')
    Quản lý mã giảm giá
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
                        

                        <a href="{{route('products.create')}}" class="btn btn-primary">Thêm mới</a>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tên mã giảm giá </th>
                                    <th>Mã giảm giá</th>
                                    <th>Điều kiện giảm giá</th>
                                    <th>Số lượng giảm giá</th>
                                    <th>Số giảm</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $cou)
                                    <tr>
                                        <td>{{ $cou->coupon_name }}</td>
                                        <td>{{ $cou->coupon_code }}</td>
                                        <td>{{ $cou->coupon_time }}</td>
                                        <td>
                                        @if ($cou->coupon_condition ==1)
                                           Giảm theo %
                                        @else
                                            Giảm theo tiền
                                        @endif
                                        </td>

                                        <td>
                                        @if ($cou->coupon_condition ==1)
                                            Giảm {{$cou->coupon_number}} %
                                        @else
                                            Giảm {{$cou->coupon_number}} tiền
                                        @endif
                                        </td>
                                        <td>
                                                <form action="{{route('delete-coupon',$cou->coupon_id)}}" method="POST">
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
