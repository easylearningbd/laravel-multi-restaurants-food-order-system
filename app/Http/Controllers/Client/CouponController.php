<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Coupon;
use Carbon\Carbon;

class CouponController extends Controller
{
    public function AllCoupon(){
        $coupon = Coupon::latest()->get();
        return view('client.backend.coupon.all_coupon', compact('coupon'));
    } 
    // End Method 


} 
