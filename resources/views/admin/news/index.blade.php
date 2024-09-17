@extends('admin.layout')

@section('content')
    <h1>Danh sách tin tức</h1>
    <a href="{{ route('news.create') }}" class="btn btn-primary">Tạo tin tức mới</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Tiêu đề (Tiếng Anh)</th>
                <th>Tiêu đề (Tiếng Việt)</th>
                <th>Nội dung (Tiếng Anh)</th>
                <th>Nội dung (Tiếng Việt)</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->title_en }}</td>
                    <td>{{ $item->title_vi }}</td>
                    <td>{{ Str::limit($item->content_en, 50) }}</td>
                    <td>{{ Str::limit($item->content_vi, 50) }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title_en }}" width="100">
                        @endif
                    </td>
                    <td>{{ $item->is_published ? 'Đã xuất bản' : 'Chưa xuất bản' }}</td>
                    <td>
                        <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
