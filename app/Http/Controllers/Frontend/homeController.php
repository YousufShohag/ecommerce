<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use App\Models\Backend\Slider;
use App\Models\Backend\Product;
use App\Models\Backend\Subcategory;
use Illuminate\Support\Facades\Auth;


class homeController extends Controller
{
   public function index(){

    $subcategory = Subcategory::where('status',1)->get();
    $products = Product::where('status',1)->get();
    $sliders = Slider::where('status', 1)->get();
    $categories = Category::all();
    return view('frontend.home',compact('categories','sliders','products','subcategory',));
   }
}
