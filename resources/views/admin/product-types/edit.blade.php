@extends('admin.layout')

@section('content')
    <h1>Chỉnh sửa Loại Sản phẩm #{{ $productType->id }}</h1>

    <form action="{{ route('product-types.update', $productType->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Tên loại sản phẩm cho tiếng Việt -->
        <div class="form-group">
            <label for="name_vi">Tên loại sản phẩm (Tiếng Việt)</label>
            <input type="text" name="name_vi" class="form-control" value="{{ old('name_vi', $translation_vi->name ?? '') }}" required>
        </div>

        <!-- Tên loại sản phẩm cho tiếng Anh -->
        <div class="form-group">
            <label for="name_en">Tên loại sản phẩm (Tiếng Anh)</label>
            <input type="text" name="name_en" class="form-control" value="{{ old('name_en', $translation_en->name ?? '') }}" required>
        </div>

        <!-- Mô tả sản phẩm cho tiếng Việt -->
        <div class="form-group">
            <label for="description_vi">Mô tả sản phẩm (Tiếng Việt)</label>
            <textarea name="description_vi" class="form-control">{{ old('description_vi', $translation_vi->description ?? '') }}</textarea>
        </div>

        <!-- Mô tả sản phẩm cho tiếng Anh -->
        <div class="form-group">
            <label for="description_en">Mô tả sản phẩm (Tiếng Anh)</label>
            <textarea name="description_en" class="form-control">{{ old('description_en', $translation_en->description ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
