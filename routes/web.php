<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SliderController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend/dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => '/slider'],function(){
    Route::get('/addSlider',[SliderController::class,'add'])->name('slider.add');
    Route::POST('/storeSlider',[SliderController::class,'store'])->name('slider.store');
    Route::get('/showSlider',[SliderController::class,'show'])->name('slider.show');
    Route::get('/status/{id}',[SliderController::class,'status'])->name('slider.status');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::POST('/update/{id}',[SliderController::class,'update'])->name('slider.update');
});