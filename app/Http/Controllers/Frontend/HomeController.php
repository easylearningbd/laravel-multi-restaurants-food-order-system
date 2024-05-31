<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Gllery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth; 
use App\Models\Wishlist;


class HomeController extends Controller
{
    public function RestaurantDetails($id){
     $client = Client::find($id);
     $menus = Menu::where('client_id',$client->id)->get()->filter(function($menu){
        return $menu->products->isNotEmpty();
     });
     $gallerys = Gllery::where('client_id',$id)->get();
     return view('frontend.details_page',compact('client','menus','gallerys'));
    }
    //End Method 


} 
