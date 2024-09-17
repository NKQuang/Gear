<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    public function index()
    {
        $exchangeRate = ExchangeRate::first(); // Hoặc bạn có thể sử dụng một phương thức khác để lấy giá quy đổi hiện tại
        return view('admin.config.index', [
            'usd_to_vnd' => $exchangeRate ? $exchangeRate->usd_to_vnd : 0,
        ]);
    }
    public function updateExchangeRate(Request $request)
    {
        $request->validate([
            'usd_to_vnd' => 'required|numeric|min:0',
        ]);

        // Giả sử bạn lưu tỷ giá quy đổi trong một bảng database
        $exchangeRate = ExchangeRate::first(); // Hoặc tìm một cách khác để lấy đối tượng hiện tại

        if ($exchangeRate) {
            $exchangeRate->usd_to_vnd = $request->input('usd_to_vnd');
            $exchangeRate->save();
        } else {
            // Nếu không có tỷ giá quy đổi hiện tại, tạo mới
            ExchangeRate::create([
                'usd_to_vnd' => $request->input('usd_to_vnd'),
            ]);
        }

        return redirect()->back()->with('success', 'Exchange rate updated successfully!');
    }
}
