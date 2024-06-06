<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Product;
use Illuminate\Support\Facades\Session; 
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function CashOrder(Request $request){

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $cart = session()->get('cart',[]);
        $totalAmount = 0;

        foreach($cart as $car){
            $totalAmount += ($car['price'] * $car['quantity']);
        }

        if (Session()->has('coupon')) {
            $tt = (Session()->get('coupon')['discount_amount']);
        } else {
            $tt = $totalAmount;
        }
        
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_type' => 'Cash On Delivery',
            'payment_method' => 'Cash On Delivery',

            'currency' => 'USD',
            'amount' => $totalAmount,
            'total_amount' => $tt,
            'invoice_no' => 'easyshop' .mt_rand(10000000,99999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_month' => Carbon::now()->format('F'),
            'order_year' => Carbon::now()->format('Y'),

            'status' => 'Pending',
            'created_at' => Carbon::now(), 

        ]);

        $carts = session()->get('cart',[]);
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart['id'],
                'client_id' => $cart['client_id'],
                'qty' => $cart['quantity'],
                'price' => $cart['price'],
                'created_at' => Carbon::now(), 
            ]);
        } // End Foreach

        if (Session::has('coupon')) {
           Session::forget('coupon');
        }

        if (Session::has('cart')) {
            Session::forget('cart');
         }

         $notification = array(
            'message' => 'Order Placed Successfully',
            'alert-type' => 'success'
        );

        return view('frontend.checkout.thanks')->with($notification);
 
    }
    //End Method 



}
 