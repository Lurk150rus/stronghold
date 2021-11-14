<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->active()->paginate(10);
        return view('auth.orders.index', compact('orders'));
    }
    public function order(Request $request){
        $order = Auth::user()->orders()->where('id', $request->id)->first();
        if (is_null($order)){
            return redirect()->route('orderIndex');
        }
        return view('auth.orders.show', compact('order'));
    }
}
