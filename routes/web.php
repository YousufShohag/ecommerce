<?php
    // =======================
    // =======================
    //    FORNTEND CONNECTION
    // =======================
    // =======================
use App\Http\Controllers\Frontend\homeController;


    // =======================
    // =======================
    //    BACKEND CONNECTION
    // =======================
    // =======================
use Illuminate\Support\Facades\Route;
// RUHUL VAI
use App\Http\Controllers\Backend\VendorController;


use App\Http\Controllers\Backend\DashboardController;
// YOUSUF
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductGalleryController;

use App\Http\Controllers\Frontend\AddToCartController;

// ASRAF 
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ProductController;

//SAKIB 
use App\Http\Controllers\Backend\CuponController;

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

// ===================================
// ====== ROUTE FOR FRONTEND    ==========
// ===================================


Route::get('/',[homeController::class,'index'])->name('index');

//Add To Carts Route
Route::get('/addtocart/{id}',[AddToCartController::class,'addtocart']);
Route::get('/showcart',[AddToCartController::class,'showcart']);
Route::get('/removecart/{id}',[AddToCartController::class,'removecart']);

Route::get('/viewCart',[AddToCartController::class,'viewCart'])->name('viewCart');









// ===================================
// ====== ROUTE FOR BACKEND ==========
// ===================================
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth','verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('backend/dashboard');
// })->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Routes for vendor
Route::group(['prefix'=>'/vendor'],function(){
    Route::get('/add',[VendorController::class,'add'])->name('vendor.add');
    Route::get('/manage',[VendorController::class,'view'])->name('vendor.manage');
    Route::post('/store',[VendorController::class,'store']);
    Route::get('/show',[VendorController::class,'show']);
    Route::get('/destroy/{id}',[VendorController::class,'destroy']);
    Route::get('/edit/{id}',[VendorController::class,'edit']);
    Route::get('/change/{id}',[VendorController::class,'change']);
    Route::post('/update/{id}',[VendorController::class,'update']);
});

// Route for Slider
Route::group(['prefix' => '/slider'],function(){
    Route::get('/addSlider',[SliderController::class,'add'])->name('slider.add');
    Route::POST('/storeSlider',[SliderController::class,'store'])->name('slider.store');
    Route::get('/showSlider',[SliderController::class,'show'])->name('slider.show');
    Route::get('/view/{id}',[SliderController::class,'view'])->name('slider.view');
    Route::get('/status/{id}',[SliderController::class,'status'])->name('slider.status');
    Route::get('/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
    Route::get('/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::POST('/update/{id}',[SliderController::class,'update'])->name('slider.update');

    Route::get('/deleteMultiimage/{id}',[SliderController::class,'deleteMultiimage'])->name('multiImage.delete');

    Route::get('/multi}',[SliderController::class,'multiAdd'])->name('slider.multi');
    Route::POST('/multiStore}',[SliderController::class,'multiStore'])->name('multi.store');
    
});
// Route for Category

Route::group(['prefix' => '/category'],function(){
    Route::get('/addCategory',[CategoryController::class,'addCategory'])->name('category.add');
    Route::POST('/storeCategory',[CategoryController::class,'store'])->name('category.store');
    Route::get('/showCategory',[CategoryController::class,'show']);
    Route::get('/deleteCategory/{id}',[CategoryController::class,'destroy']);
    Route::get('/status/{id}',[CategoryController::class,'status']);
    Route::get('/edit/{id}',[CategoryController::class,'edit']);
    Route::POST('/update/{id}',[CategoryController::class,'update'])->name('category.update');
});

// Route group for subcategory 
Route::group(['prefix'=>'/subcategoey'],function(){

    Route::get('subcategoryview',[SubCategoryController::class,'subcategoryview'])->name('subcategoryview');
    
    Route::post('/addsubcategory',[SubCategoryController::class,'addsubcategory']);
    Route::get('/datatable',[SubCategoryController::class,'showtable']);
    Route::get('/deletesubcategory/{id}',[SubCategoryController::class,'delete']);
    Route::get('/updatesubcategoryview/{id}',[SubCategoryController::class,'updateview']);
    Route::post('/updatesubcategory/{id}',[SubCategoryController::class,'update']);
    
    
    });

// Route group for Product
    Route::group(['prefix'=>'/product'],function(){
    Route::get('productview',[ProductController::class,'productview'])->name('productview');
    Route::post('addproduct',[ProductController::class,'addproduct'])->name('addproduct');
    Route::get('manageproductview',[ProductController::class,'manageproductview'])->name('manageproductview');
    Route::get('/manageproduct',[ProductController::class,'manageproduct']);
    Route::get('statuschange/{id}',[ProductController::class,'statuschange'])->name('statuschange');
    Route::get('/deletesubproduct/{id}',[ProductController::class,'delete']);
    Route::get('/updateproductview/{id}',[ProductController::class,'updateproductview']); 
    Route::post('/updateproduct/{id}',[ProductController::class,'updateproduct']);
    });



// Route for Product Gallery
Route::group(['prefix' => '/productGaleery'],function(){
    Route::get('/addProductGaleery',[ProductGalleryController::class,'add'])->name('productGallery.add');
    Route::POST('/productmulti',[ProductGalleryController::class,'productMultiStore'])->name('product.multi');
    Route::get('/productmanage',[ProductGalleryController::class,'productview'])->name('product.manage');

});


// Route for Coupon
Route::group(['prefix'=>'/cupon'],function() {
    route::get('/add',[CuponController::class,'index' ])->name('add');
    route::post('/store',[CuponController::class,'store' ]);
    Route::get('/show',[CuponController::class,'show'])->name('show');
    Route::get('/delete/{id}',[CuponController::class,'destroy']);
    Route::get('/edit/{id}',[CuponController::class,'edit']);
    Route::post('/update/{id}',[CuponController::class,'update'])->name('update');

});


