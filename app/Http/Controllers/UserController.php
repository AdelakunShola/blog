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
}
