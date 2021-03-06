<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsFilterRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about(){
        return view('about');
    }

    public function index(ProductsFilterRequest $request){

        $productsQuery = Product::with('category');
        if ($request->filled('price_from')){
            $productsQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')){
            $productsQuery->where('price', '<=', $request->price_to);
        }
        foreach (['hit','recommend', 'new'] as $field){
            if ($request->has($field)){
                $productsQuery->$field();
            }
        }

        $products = $productsQuery->paginate(6)->withPath($request->getUri());
        return view('index', compact('products'));
    }

    public function categories(){
        $categories = Category::get();
        return view('categories',compact('categories'));    }

    public function category($code){
        $category = Category::where('code', $code)->first();
        return view('category',compact('category'));
    }

    public function product($categoryCode, $productCode){
        $product = Product::where('code', $productCode)->first();
        return view('product', compact('product'));
    }

}
