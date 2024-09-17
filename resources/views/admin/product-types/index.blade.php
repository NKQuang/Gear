@extends('admin.layout')

@section('content')
    <h1>Danh sách Loại Sản phẩm</h1>

    <a href="{{ route('product-types.create') }}" class="btn btn-primary">Tạo Loại Sản phẩm mới</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên loại sản phẩm (Tiếng Việt)</th>
                <th>Tên loại sản phẩm (English)</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productTypes as $productType)
                <tr>
                    <td>{{ $productType->id }}</td>
                    <!-- Hiển thị tên loại sản phẩm theo tiếng Việt -->
                    <td>{{ $productType->translations->where('locale', 'vi')->first()->name ?? 'Không có tên' }}</td>
                    <!-- Hiển thị tên loại sản phẩm theo tiếng Anh -->
                    <td>{{ $productType->translations->where('locale', 'en')->first()->name ?? 'No name' }}</td>
                    <td>
                        {{-- <a href="{{ route('product-types.show', $productType->id) }}" class="btn btn-info">Xem</a> --}}
                        <a href="{{ route('product-types.edit', $productType->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('product-types.destroy', $productType->id) }}" method="POST" style="display:inline;">
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
