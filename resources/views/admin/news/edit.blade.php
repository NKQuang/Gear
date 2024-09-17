@extends('admin.layout')

@section('content')
    <h1>Chỉnh sửa tin tức</h1>

    <!-- Hiển thị thông báo lỗi nếu có -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form chỉnh sửa tin tức -->
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Sử dụng phương thức PUT cho cập nhật -->

        <!-- Tiêu đề Tiếng Anh -->
        <div class="form-group">
            <label for="title_en">Tiêu đề (Tiếng Anh)</label>
            <input type="text" name="title_en" id="title_en" class="form-control" value="{{ old('title_en', $news->title_en) }}" required>
        </div>

        <!-- Nội dung Tiếng Anh -->
        <div class="form-group">
            <label for="content_en">Nội dung (Tiếng Anh)</label>
            <textarea name="content_en" id="content_en" class="form-control" rows="5" required>{{ old('content_en', $news->content_en) }}</textarea>
        </div>

        <!-- Tiêu đề Tiếng Việt -->
        <div class="form-group">
            <label for="title_vi">Tiêu đề (Tiếng Việt)</label>
            <input type="text" name="title_vi" id="title_vi" class="form-control" value="{{ old('title_vi', $news->title_vi) }}" required>
        </div>

        <!-- Nội dung Tiếng Việt -->
        <div class="form-group">
            <label for="content_vi">Nội dung (Tiếng Việt)</label>
            <textarea name="content_vi" id="content_vi" class="form-control" rows="5" required>{{ old('content_vi', $news->content_vi) }}</textarea>
        </div>

        <!-- Hình ảnh -->
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            @if($news->image)
                <div>
                    <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" width="100">
                </div>
            @endif
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Trạng thái xuất bản -->
        <div class="form-group">
            <label for="is_published">Xuất bản</label>
            <input type="checkbox" name="is_published" id="is_published" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
        </div>

        <!-- Nút lưu -->
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
