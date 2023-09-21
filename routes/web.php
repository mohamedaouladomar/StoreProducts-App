<?php
use App\Http\Controllers\AllproductsController;
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;



Route ::get('/', [Controllers::class,'index'])->name('home.index');
Route ::get('/about', [Controllers::class,'about'])->name('home.about');
Route ::get('/contact',[Controllers::class,'contact'])->name('home.contact');

Route::resource('products' , AllproductsController::class );
Route::post('/products/clearstock', [AllproductsController::class, 'clearStock'])->name('products.clearstock');








Route::get('/formulaire', function () {
return view('form');});
Route::post('/save','App\Http\Controllers\Controllers@store');
Route::resource('posts', 'Controllers');


Route::get('/save', function () {
    return view('save');
 
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
