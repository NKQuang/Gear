<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.orders.create');
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());

        // Lưu các sản phẩm vào OrderDetail
        foreach ($request->products as $product) {
            OrderDetail::create([
                'order_id' => $order->id,
                'product_name' => $product['name'],
                'quantity' => $product['quantity'],
                'price' => $product['price'],
                'subtotal' => $product['quantity'] * $product['price'],
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được tạo.');
    }

    public function show(Order $order)
    {
        $orderDetails = $order->orderDetails()->with('product')->get();
        //dd($orderDetails);
        return view('admin.orders.show', compact('order', 'orderDetails'));
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        // Cập nhật OrderDetail nếu cần
        // ...

        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã được cập nhật.');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Đơn hàng đã bị xóa.');
    }

    public function checkout(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'phone_number' => 'required',
            'total_amount' => 'required|numeric',
            'cart_items' => 'required|array',
        ]);

        // Tạo đơn hàng mới
        $order = new Order();
        $order->phone_number = $request->phone_number;
        $order->total_amount = $request->total_amount;
        $order->save();

        // Lưu chi tiết đơn hàng
        foreach ($request->cart_items as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item['id'];
            $orderDetail->product_name = $item['name'];
            $orderDetail->quantity = $item['quantity'];
            $orderDetail->price = $item['price'];
            $orderDetail->subtotal = $item['quantity'] * $item['price']; // Tính toán subtotal
            $orderDetail->save();
        }

        // Trả về response
        return response()->json(['success' => true]);
    }
}

