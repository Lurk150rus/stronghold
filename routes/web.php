<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::middleware(['auth'])->group( function(){

    Route::group([
        'prefix' => 'person'
    ], function (){
        Route::get('/order', [App\Http\Controllers\Person\OrderController::class, 'index'])->name('orderIndex');
        Route::get('/order/{id}', [App\Http\Controllers\Person\OrderController::class, 'order'])->name('orderDetail');
    }
    );
    Route::group([
        'prefix' => 'admin'
    ], function (){
        Route::group(['middleware' => 'is_admin'], function (){
            Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('home');
            Route::get('/order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'order'])->name('order');
        });
        Route::resource('categories', 'App\Http\Controllers\Admin\CategoryController');
        Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
    }
    );
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('getLogout');

Route::post('/basket/add/{id}','App\Http\Controllers\BasketController@basketAdd')->name('basketAdd');
Route::group([
    'middleware'=>'basket_not_empty'
    ], function (){
    Route::get('/basket','App\Http\Controllers\BasketController@basket')->name('basket');
    Route::get('/basket/place','App\Http\Controllers\BasketController@basketPlace')->name('basketPlace');

    Route::post('/basket/confirm','App\Http\Controllers\BasketController@basketConfirm')->name('basketConfirm');
    Route::post('/basket/remove/{id}','App\Http\Controllers\BasketController@basketRemove')->name('basketRemove');
});
Route::get('/','App\Http\Controllers\MainController@index')->name('index');
Route::get('/categories/','App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}','App\Http\Controllers\MainController@category')->name('category');
Route::get('/{category}/{product}','App\Http\Controllers\MainController@product')->name('product');


