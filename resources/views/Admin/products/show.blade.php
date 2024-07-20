@extends('admin.layouts.master')

@section('title')
    Xem chi tiết: {{ $product['name'] }}
@endsection

@section('content')
    <table class="table table-striped">
        <li>Tên: {{$product->name}}</li>
        <li>Nhà suất bản: {{$product->categorie->name}}</li>
        <li>Số lượng: {{$product->description}}</li>
        <li>Số lượng: {{$product->price}}</li>
        <li>Số lượng: {{$product->content}}</li>
@endsection
