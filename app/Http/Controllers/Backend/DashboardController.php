<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Vendor;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if (Auth::user()->role==3) {
            return redirect()->route('index');
        }
        else{
            $vendor = Vendor::count();
            return view('backend/dashboard',compact('vendor'));
        }
    }
}
