<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
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
        $orderId = session('order_id');
        if(Order::find($orderId) !== null){
            $order = Order::find($orderId);
        } else{
            return redirect('index');
        }
        return view('order', compact('order'));
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
        $product = Product::find($productId);
        session()->flash('success', 'Добавлен товар ' . $product->name);
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
        $product = Product::find($productId);
        session()->flash('warning', 'Удален товар ' . $product->name);
        return redirect()->route('basket');
    }

    public function basketConfirm(Request $request){
        $orderId = session('order_id');
        if(Order::find($orderId) !== null){
            $order = Order::find($orderId);
        }
        $success = $order->saveOrder($request->name,$request->phone);

        if ($success){
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else{
            session()->flash('warning', 'Произошла ошибка при обработке заказа. Попробуйте немного позднее.');
        }

        return redirect()->route('index');
    }
}


