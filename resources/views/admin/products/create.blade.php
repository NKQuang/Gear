@extends('admin.layout')

@section('content')
    <h1>Thêm Sản phẩm</h1>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="sku">Mã sản phẩm</label>
            <input type="text" name="sku" class="form-control" required>
        </div>

        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label for="name_vi">Tên sản phẩm (Tiếng Việt)</label>
            <input type="text" name="name_vi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name_en">Tên sản phẩm (Tiếng Anh)</label>
            <input type="text" name="name_en" class="form-control" required>
        </div>

        <!-- Mô tả -->
        <div class="form-group">
            <label for="description_vi">Mô tả (Tiếng Việt)</label>
            <textarea name="description_vi" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="description_en">Mô tả (Tiếng Anh)</label>
            <textarea name="description_en" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="contact_for_price">Yêu cầu liên hệ để báo giá:</label>
            <input type="checkbox" name="contact_for_price" id="contact_for_price" value="1" {{ old('contact_for_price', $product->contact_for_price ?? false) ? 'checked' : '' }}>
        </div>

        <!-- Giá -->
        <div class="form-group">
            <label for="price">Giá (USD)</label>
            <input type="number" name="price" step="0.01" class="form-control" required>
        </div>

        <!-- Loại sản phẩm -->
        <div class="form-group">
            <label for="type_id">Loại sản phẩm</label>
            <select name="type_id" class="form-control" required>
                @foreach($types as $type)
                    <!-- Hiển thị tên loại sản phẩm theo ngôn ngữ hiện tại -->
                    <option value="{{ $type->id }}">
                        {{ $type->translations->where('locale', app()->getLocale())->first()->name ?? 'Không có tên' }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Hình ảnh -->
        <div class="form-group">
            <label for="images">Hình ảnh (chọn nhiều)</label>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Thêm Sản phẩm</button>
    </form>
@endsection
