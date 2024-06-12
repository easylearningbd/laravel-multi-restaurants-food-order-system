<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log; 

class FilterController extends Controller
{
    public function ListRestaurant(){
        $products = Product::all();
        return view('frontend.list_restaurant',compact('products'));
    }
    //End Method 

    public function FilterProducts(Request $request){

        // Log::info('request data' , $request->all());


        $categoryId = $request->input('categorys');
        $menuId = $request->input('menus');
        $cityId = $request->input('citys');

        $products = Product::query();

        if ($categoryId) {
            $products->whereIn('category_id',$categoryId);
        }
        if ($menuId) {
            $products->whereIn('menu_id',$menuId);
        }
        if ($cityId) {
            $products->whereIn('city_id',$cityId);
        }

        $filterProducts = $products->get();

        return view('frontend.product_list',compact('filterProducts'))->render();

    }
    //End Method 


} 
