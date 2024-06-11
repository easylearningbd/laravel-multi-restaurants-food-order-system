<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Product; 
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Review;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function StoreReview(Request $request){
        $client = $request->client_id;

        $request->validate([
            'comment' => 'required'
        ]);

        Review::insert([
            'client_id' => $client,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'rating' => $request->rating,
            'created_at' => Carbon::now(), 
        ]);

        $notification = array(
            'message' => 'Review Will Approlve By Admin',
            'alert-type' => 'success'
        );

        $previousUrl = $request->headers->get('referer');
        $redirectUrl = $previousUrl ? $previousUrl . '#pills-reviews' : route('res.details', ['id' => $client]) . '#pills-reviews';
        return redirect()->to($redirectUrl)->with($notification);

    }
    // End Method 

    public function AdminPendingReview(){
        $pedingReview = Review::where('status',0)->orderBy('id','desc')->get();
        return view('admin.backend.review.view_pending_review',compact('pedingReview'));
    }
     // End Method 

     public function AdminApproveReview(){
        $approveReview = Review::where('status',1)->orderBy('id','desc')->get();
        return view('admin.backend.review.view_approve_review',compact('approveReview'));
    }
     // End Method 

     public function ReviewChangeStatus(Request $request){
        $review = Review::find($request->review_id);
        $review->status = $request->status;
        $review->save();
        return response()->json(['success' => 'Status Change Successfully']);
    }
     // End Method 

     public function ClientAllReviews(){
        $id = Auth::guard('client')->id();
        $allreviews = Review::where('status',1)->where('client_id',$id)->orderBy('id','desc')->get();
        return view('client.backend.review.view_all_review',compact('allreviews'));

     }
      // End Method 


}
 