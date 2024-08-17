@extends('admin.layouts.master')

@section('title')
    Thêm mã giảm giá
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

    <form action="{{URL::to('/insert-coupon-code')}}" enctype="multipart/form-data" method="POST" >
        @csrf
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Tên mã giảm giá:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter coupon name" name="coupon_name">
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="img" class="form-label">Mã giảm giá:</label>
                    <input type="text" class="form-control" id="img" placeholder="Enter coupon code" name="coupon_code">
                </div>
            </div>

            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="price" class="form-label">Số lượng mã :</label>
                    <input type="number" class="form-control" id="price" placeholder="Enter coupon times" name="coupon_time"></input>
                </div>
                <div class="mb-3 mt-3">
                    <label for="description" class="form-label">Tính năng mã:</label>
                    <select class="form-control" id="description" placeholder="Enter description" name="coupon_condition">
                        <option value="0">-----Chọn-----</option>
                        <option value="1">Giảm theo % </option>
                        <option value="2">Giảm theo tiền</option>
                    </select>
                </div>
                    <div class="mb-3 mt-3">
                        <label for="content" class="form-label">Nhập số % hoặc số tiền giảm:</label>
                        <input type="text" class="form-control" id="content" placeholder="Enter Content" name="coupon_number"></input>
                    </div>
                
                    
                
            
        </div>
        
        <button type="submit" name="add_coupon" class="btn btn-primary mt-5">Submit</button>
    </form>
@endsection
