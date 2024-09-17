@extends('admin.layout')

@section('content')
    <h1>Tạo Loại Sản phẩm mới</h1>

    <form action="{{ route('product-types.store') }}" method="POST">
        @csrf

        <!-- Tên loại sản phẩm cho tiếng Việt -->
        <div class="form-group">
            <label for="name_vi">Tên loại sản phẩm (Tiếng Việt)</label>
            <input type="text" name="name_vi" class="form-control" value="{{ old('name_vi') }}" required>
        </div>

        <!-- Tên loại sản phẩm cho tiếng Anh -->
        <div class="form-group">
            <label for="name_en">Tên loại sản phẩm (Tiếng Anh)</label>
            <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}" required>
        </div>

        <!-- Mô tả sản phẩm cho tiếng Việt -->
        <div class="form-group">
            <label for="description_vi">Mô tả sản phẩm (Tiếng Việt)</label>
            <textarea name="description_vi" class="form-control">{{ old('description_vi') }}</textarea>
        </div>

        <!-- Mô tả sản phẩm cho tiếng Anh -->
        <div class="form-group">
            <label for="description_en">Mô tả sản phẩm (Tiếng Anh)</label>
            <textarea name="description_en" class="form-control">{{ old('description_en') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
