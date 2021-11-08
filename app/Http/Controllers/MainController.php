<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request){
        $productsQuery = Product::query();

        if ($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_from);
        }
        foreach (['hit','recommend', 'new'] as $field){
            if ($request->has($field)){
                $productsQuery->where($field, 1);
            }
        }

        $products = $productsQuery->paginate(1)->withPath($request->getUri());
        return view('index', compact('products'));
    }

    public function categories(){
        $categories = Category::get();
        return view('categories',compact('categories'));    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category',compact('category'));
    }

    public function product($product = null){
        return view('product', ["product"=> $product, 'help' => $product]);
    }

}
