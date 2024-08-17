@extends('admin.layouts.master')

@section('title')
    Thêm mới người dùng
@endsection

@section('content')
    <h1>Thêm mới người dùng</h1>

    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('user.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Type:</label>
            <input type="radio" class="form-radio" id="type_admin" value="admin" name="type">
            <label for="type_admin" class="form-label">Admin</label>
            <input type="radio" class="form-radio" id="type_member" value="member" checked name="type">
            <label for="type_member" class="form-label">Member</label>
        </div>

        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 mt-3">
            <label for="confirm_password" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
            @error('password_confirmation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

