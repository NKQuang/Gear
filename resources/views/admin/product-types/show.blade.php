@extends('admin.layout')

@section('content')
    <h1>Chi tiết Loại Sản phẩm #{{ $productType->id }}</h1>

    <!-- Tên loại sản phẩm cho tiếng Việt -->
    <p><strong>Tên loại sản phẩm (Tiếng Việt):</strong> {{ $productType->translation('vi')->name ?? 'Chưa có dữ liệu' }}</p>

    <!-- Tên loại sản phẩm cho tiếng Anh -->
    <p><strong>Tên loại sản phẩm (Tiếng Anh):</strong> {{ $productType->translation('en')->name ?? 'Chưa có dữ liệu' }}</p>

    <!-- Mô tả sản phẩm cho tiếng Việt -->
    <p><strong>Mô tả (Tiếng Việt):</strong> {{ $productType->translation('vi')->description ?? 'Chưa có dữ liệu' }}</p>

    <!-- Mô tả sản phẩm cho tiếng Anh -->
    <p><strong>Mô tả (Tiếng Anh):</strong> {{ $productType->translation('en')->description ?? 'Chưa có dữ liệu' }}</p>
@endsection
