<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Frontemd\AddToCart;
use App\Models\Backend\Product;

use Illuminate\Support\Facades\Auth;

class AddToCartController extends Controller
{
    public function addtocart($pid){
        $products = Product::find($pid);
        $add = new AddToCart;
        $add->user_id = Auth::user()->id;
        $add->product_id = $pid;
        $add->name = $products->product_name;
        $add->price = $products->product_price;
        $add->image = $products->thumbnails;
        $add->quantity = 1;
        $add->save();
        return response()->json([
            "status"=>"success"
        ]);

    }
    public function showcart(){
        $count  = AddToCart::where("user_id",Auth::user()->id)->count();
        $data  = AddToCart::where("user_id",Auth::user()->id)->get();
        
        return response()->json([
            "count"=>$count,
            "data"=>$data,
        ]);
    }
    public function removecart($id){
        $addtocartdelete = AddToCart::find($id);
        $addtocartdelete->delete();
        return response()->json([
            "status"=>"success"
        ]);

    }


    public function viewCart(){
        $data  = AddToCart::where("user_id",Auth::user()->id)->get();
        return view('frontend/pages/cart',compact("data"));
    }

}
