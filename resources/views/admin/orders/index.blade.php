@extends('admin.layout')

@section('content')
    <h1>Danh sách Đơn hàng</h1>

    <a href="{{ route('orders.create') }}" class="btn btn-primary">Tạo Đơn hàng mới</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->phone_number }}</td>
                    <td>{{ $order->total_amount }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Xem</a>
                        {{-- <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Sửa</a> --}}
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
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
