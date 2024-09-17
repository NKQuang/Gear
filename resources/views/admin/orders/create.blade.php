@extends('admin.layout')

@section('content')
    <h1>Tạo Đơn hàng mới</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="phone_number">Số điện thoại</label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="products">Sản phẩm</label>
            <textarea name="products" class="form-control" required></textarea>
            <!-- Bạn có thể tạo form nhập sản phẩm chi tiết hoặc xử lý bằng JS -->
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
