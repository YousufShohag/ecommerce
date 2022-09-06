<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductGallery;
use App\Models\Backend\Slider;
use App\Models\Backend\Product;
use Image;
use File;

class ProductGalleryController extends Controller
{
    public function add(){
        $products = Product::all();
        
        return view('backend/pages/productGallery/productGallery',compact("products"));
    }

    public function productMultiStore(Request $request){
        if ($request->pics) {
            foreach ($request->file('pics') as $images) {
                $customName = rand().".".$images->getClientOriginalExtension();
                $location = public_path('backend/productgallery/'.$customName);
                Image::make($images)->save($location);

                $productGallerys = new ProductGallery();
                $productGallerys->product_code = $request->product_code;
                $productGallerys->image = $customName;
                $productGallerys->save();

            }
        }
        return redirect()->route('productGallery.add');
    }
    public function productview(){
        
        $productGallerys = ProductGallery::all();
        return view('backend/pages/productGallery/manage',compact('productGallerys'));
    }
}
