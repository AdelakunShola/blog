<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function StoreComment(Request $request){

        Comment::insert([
            'user_id' =>$request ->user_id,
            'post_id' =>$request ->post_id,
            'message' =>$request ->message,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your comment was added successfully, admin will have to approve it',
            'alert-type' => 'success',
         );
     
         return redirect()->back()->with($notification);



    }///end method


    public function AllComment(){
        $allcomment = Comment::latest()->get();
        return view('backend.comment.all_comment', compact('allcomment'));

    }///end method
}
