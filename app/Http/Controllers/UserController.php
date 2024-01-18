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
    }
}
