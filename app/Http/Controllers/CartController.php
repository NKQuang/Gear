<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        // Giả sử bạn có một bảng 'exchange_rates' và cần lấy tỷ giá USD to VND
        $exchangeRate = ExchangeRate::first()->usd_to_vnd;
        //dd($exchangeRate);
        return view('cart', ['exchangeRate' => $exchangeRate]);
    }
}
