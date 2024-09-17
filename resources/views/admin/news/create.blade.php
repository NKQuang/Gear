@extends('admin.layout')

@section('content')
    <h1>Tạo tin tức mới</h1>

    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Tiêu đề và nội dung tiếng Anh -->
        <div class="form-group">
            <label for="title_en">Tiêu đề (Tiếng Anh)</label>
            <input type="text" name="title_en" id="title_en" class="form-control" value="{{ old('title_en') }}" required>
        </div>

        <div class="form-group">
            <label for="content_en">Nội dung (Tiếng Anh)</label>
            <textarea name="content_en" id="content_en" class="form-control" rows="5">{{ old('content_en') }}</textarea>
        </div>

        <!-- Tiêu đề và nội dung tiếng Việt -->
        <div class="form-group">
            <label for="title_vi">Tiêu đề (Tiếng Việt)</label>
            <input type="text" name="title_vi" id="title_vi" class="form-control" value="{{ old('title_vi') }}" required>
        </div>

        <div class="form-group">
            <label for="content_vi">Nội dung (Tiếng Việt)</label>
            <textarea name="content_vi" id="content_vi" class="form-control" rows="5">{{ old('content_vi') }}</textarea>
        </div>

        <!-- Ảnh -->
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Xuất bản -->
        <div class="form-group">
            <label for="is_published">Xuất bản</label>
            <input type="checkbox" name="is_published" id="is_published">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection

@section('scripts')
    <!-- Tích hợp CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

    <!-- Khởi tạo CKEditor cho các textarea -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            ClassicEditor
                .create(document.querySelector('#content_en'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#content_vi'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
@endsection
