<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    //

    public function basket(){
        $orderId = session('order_id');
        if(!is_null($orderId)){
          $order = Order::findOrFail($orderId);
        }
        return view('basket', compact('order'));
    }

    public function basketPlace(){
        return view('order');
    }

    public function basketAdd($productId){
        $orderId = session('order_id');
        if(Order::find($orderId) !== null){
            $order = Order::find($orderId);
        } else{
            $order = Order::create()->id;
            session(
                [
                    'order_id'=> $order
                ]
            );
        }
        if ($order->product->contains($productId)){
            $pivotRow = $order->product()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else{
            $order->product()->attach($productId);
        }

        return redirect()->route('basket');
    }
    public function basketRemove($productId){
        $orderId = session('order_id');
        $order = Order::find($orderId);

        if ($order->product->contains($productId)){
            $pivotRow = $order->product()->where('product_id', $productId)->first()->pivot;

            if ($pivotRow->count < 2){
                $order->product()->detach($productId);
            }else{
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        return redirect()->route('basket');
    }}
