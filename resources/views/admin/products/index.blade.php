@extends('admin.layout')

@section('content')
    <h1>Danh sách Sản phẩm</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm Sản phẩm</a>

    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Loại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                @php
                    $translation = $product->translations->where('locale', app()->getLocale())->first();
                @endphp
                <tr>
                    <td>{{ $translation ? $translation->name : $product->name }}</td>
                    <td>{{ $translation ? $translation->description : $product->description }}</td>
                    <td>{{ number_format($product->price, 2, '.', ',') }} USD</td> <!-- Format giá theo USD -->
                    <td>{{ $product->type->translations->where('locale', app()->getLocale())->first()->name ?? 'Không có tên' }}</td>

                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
