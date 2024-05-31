<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 


class HomeController extends Controller
{
    public function RestaurantDetails($id){
     $client = Client::find($id);
     return view('frontend.details_page',compact('client'));
    }
    //End Method 


} 
