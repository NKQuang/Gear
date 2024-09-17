@extends('admin.layout')

@section('content')
    <h1>Chi tiết Đơn hàng #{{ $order->id }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>SKU</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Tổng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderDetails as $detail)
                <tr>
                    <td>{{ $detail->product->sku }}</td>
                    <td>{{ $detail->product_name }}</td>
                    <td>{{ $detail->quantity }}</td>
                    <td>{{ number_format($detail->price, 2) }} USD</td>
                    <td>{{ number_format($detail->subtotal, 2) }} USD</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
