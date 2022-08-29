<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Slider;
use Image;
use File;

// class SliderController extends Controller
// {
//     public function add(){
//         return view("backend.pages.slider.add");
//     }
//     public function store(Request $request){
//         // dd($request->pic);
//         if($request->pic){
//             $image = $request->file('pic');
//             $customName = rand().".".$image->getClientOriginalExtension();
//             $location = public_path('backend/slider/'.$customName);
//             Image::make($image)->save($location);
//         }
        
//         $slider = new Slider;
//         $slider->title = $request->title;
//         $slider->category = $request->category;
//         $slider->description = $request->description;
//         $slider->link = $request->link;
//         $slider->status = $request->status;
//         $slider->pic = $customName;
//         $slider->save();

//     }
// }





class SliderController extends Controller
{
    public function add(){
        return view('backend/pages/slider/addslider');
    }
    public function store(Request $request){
     
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/slider/'.$customName);
            Image::make($images)->save($location);
           
        }

            $slider = new Slider;
            $slider->title = $request->title;
            $slider->cat = $request->cat;
            $slider->description = $request->description;
            $slider->link = $request->link;
            $slider->status = $request->status;
            $slider->image = $customName;
            $slider->save();
            return redirect()->route('slider.show');
    }


    public function show(){
        $slider = Slider::all();
        return view('backend/pages/slider/show',compact("slider"));
    }
    public function status($id){
        $slider = Slider::find($id);
        if ($slider->status==2) {
            $slider->status = "1";
        }
        else{
            $slider->status = "2";
        }
        $slider->update();
        return redirect()->route('slider.show');

    }
    public function delete($id){
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->route('slider.show');
    }
    public function edit($id){
        $slider = Slider::find($id);
        return view('backend/pages/slider/edit',compact("slider"));
    }
    public function update(Request $request,$id){
        $slider = Slider::find($id);
        if ($request->image) {
            $images = $request->file('image');
            $customName = rand().".".$images->getClientOriginalExtension();
            $location = public_path('backend/slider/'.$customName);
            Image::make($images)->save($location);
           
        }

            $slider = new Slider;
            $slider->title = $request->title;
            $slider->cat = $request->cat;
            $slider->description = $request->description;
            $slider->link = $request->link;
            $slider->status = $request->status;
            $slider->image = $customName;
            $slider->update();
            return redirect()->route('slider.show');
    }


}

