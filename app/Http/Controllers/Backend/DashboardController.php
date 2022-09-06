<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Vendor;

class DashboardController extends Controller
{
    public function dashboard(){
        $vendor = Vendor::count();
        return view('backend/dashboard',compact('vendor'));
    }
}
