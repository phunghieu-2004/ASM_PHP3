@extends('admin.layouts.master')

@section('title')
    Cập nhật người dùng: {{ $user['name'] }}
@endsection

@section('content') 
<h1>Cập nhật người dùng: {{ $user['name'] }}</h1>
    <form action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $user['name'] }}"
                name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ $user['email'] }}"
                name="email">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Type:</label>

            <input type="radio" class="form-radio" id="type_admin" value="admin"
                @if ($user['type'] == 'admin') checked @endif name="type">

            <label for="type_admin" class="form-label">Admin</label>

            <input type="radio" class="form-radio" id="type_member" value="member"
                @if ($user['type'] == 'member') checked @endif name="type">

            <label for="type_member" class="form-label">Member</label>
        </div>
        
        
        <div class="mb-3 mt-3">
            <label for="password" class="form-label">Password:</label>
            <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
