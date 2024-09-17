@extends('admin.layout')

@section('content')
    <h1>Chỉnh sửa Đơn hàng #{{ $order->id }}</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="phone_number">Số điện thoại</label>
            <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $order->phone_number) }}" required>
        </div>

        <div class="form-group">
            <label for="total_amount">Tổng tiền</label>
            <input type="number" name="total_amount" class="form-control" value="{{ old('total_amount', $order->total_amount) }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="products">Sản phẩm</label>
            <!-- Bạn có thể cần một form phức tạp hơn để chỉnh sửa các sản phẩm của đơn hàng -->
            <textarea name="products" class="form-control" required>{{ old('products', json_encode($order->orderDetails)) }}</textarea>
            <!-- Ví dụ đơn giản, tùy thuộc vào cách bạn lưu trữ dữ liệu sản phẩm -->
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
