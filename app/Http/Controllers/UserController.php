<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Index(){

        return view('frontend.index');

    }//end method

    public function EditProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('frontend.dashboard.edit_profile',compact('profileData'));

    }//end method


    public function ProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
  
        $data->name = $request->name;
        $data->email = $request->email;
  
        if($request->file('photo')){
  
           $file = $request->file('photo');
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/user_images'), $filename);
           $data['photo'] = $filename;
           
  
        }
  
        $data->save();
  
        $notification = array(
           'message' => 'User Profile Updated Successfully',
           'alert-type' => 'success',
        );
  
        return redirect()->back()->with($notification);
  
      }//end method


      public function ProfileLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'User Logged Out Successfully',
            'alert-type' => 'success',
         );

        return redirect('/')->with($notification);
    }//end method


    public function UserChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
  
        return view('frontend.dashboard.user_password_change',compact('profileData'));
  
      }//end method


      public function UserPasswordUpdate(Request $request){

        //validation
        $request -> validate([
           'old_password' => 'required',
           'new_password' => 'required|confirmed'
  
        ]);
  
  
        if(!Hash::check($request->old_password, auth::user()->password)){
  
           $notification = array(
              'message' => 'Old Password Does Not Match',
              'alert-type' => 'error',
           );
     
           return back()->with($notification);
  
        }
  
  
        //update the new password
        User::whereId(auth::user()->id)->update([
           'password' => Hash::make($request->new_password)
        ]);
  
        $notification = array(
           'message' => 'Password Updated Successfully',
           'alert-type' => 'success',
        );
  
        return back()->with($notification);
  
      }//end method
}
