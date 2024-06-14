<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Product;
use Illuminate\Support\Facades\Session; 
use App\Models\Coupon;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use App\Notifications\OrderComplete;
use Illuminate\Support\Facades\Notification; 

class OrderController extends Controller
{ 
    public function CashOrder(Request $request){

        $user = Admin::where('role','admin')->get();

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

        // Send Notification to admin
         Notification::send($user, new OrderComplete($request->name));

         $notification = array(
            'message' => 'Order Placed Successfully',
            'alert-type' => 'success'
        );

        return view('frontend.checkout.thanks')->with($notification);
 
    }
    //End Method 


    public function StripeOrder(Request $request){

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

        \Stripe\Stripe::setApiKey('sk_test_51Oml5cGAwoXiNtjJZbPFBKav0pyrR8GSwzUaLHLhInsyeCa4HI8kKf2IcNeUXc8jc8XVzBJyqjKnDLX9MlRjohrL003UDGPZgQ');
        
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $totalAmount*100,
            'currency' => 'usd',
            'description' => 'EasyFood  Delivery',
            'source' => $token,
            'metadata' => ['order_id' => '6735']
        ]);
        
        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_type' => $charge->payment_method,
            'payment_method' => 'Stripe',

            'currency' => $charge->currency,
            'transaction_id' => $charge->balance_transaction,
            'amount' => $totalAmount,
            'total_amount' => $tt,
            'order_number' => $charge->metadata->order_id,
            
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

    public function MarkAsRead(Request $request, $notificationId){
        $user = Auth::guard('admin')->user();
        $notification = $user->notifications()->where('id',$notificationId)->first();

        if ($notification) {
            $notification->markAsRead();
        }
        return response()->json(['count' => $user->unreadNotifications()->count()]);
    }
 //End Method 


}
 