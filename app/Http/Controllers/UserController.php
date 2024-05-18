<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User;

class UserController extends Controller
{ 
    public function Index(){
        return view('frontend.index');
    } // End Method

    public function ProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address; 

        $oldPhotoPath = $data->photo;

        if ($request->hasFile('photo')) {
           $file = $request->file('photo');
           $filename = time().'.'.$file->getClientOriginalExtension();
           $file->move(public_path('upload/user_images'),$filename);
           $data->photo = $filename;

           if ($oldPhotoPath && $oldPhotoPath !== $filename) {
             $this->deleteOldImage($oldPhotoPath);
           }

        }
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
     // End Method 
     private function deleteOldImage(string $oldPhotoPath): void {
        $fullPath = public_path('upload/user_images/'.$oldPhotoPath);
        if (file_exists($fullPath)) {
            unlink($fullPath);
        }
     }
     // End Private Method 

     public function UserLogout(){
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('success','Lougout Successfully');
     }
    // End Method 

    public function ChangePassword(){
        return view('frontend.dashboard.change_password');
    }
     // End Method 

     public function UserPasswordUpdate(Request $request){
        $user = Auth::guard('web')->user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
 
        if (!Hash::check($request->old_password,$user->password)) {
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        /// Update the new password 
        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

                $notification = array(
                'message' => 'Password Change Successfully',
                'alert-type' => 'success'
            );
            return back()->with($notification);
     }
      // End Method 


}
