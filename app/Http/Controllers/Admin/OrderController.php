<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('status', 1)->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }
    public function order(Request $request){
        $order = Order::where('id', $request->id)->first();

        return view('auth.orders.show', compact('order'));
    }
}
