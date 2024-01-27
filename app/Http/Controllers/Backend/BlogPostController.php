<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BlogPostController extends Controller
{
     public function AllBlogPost(){
        $post = BlogPost::latest()->get();
        return view('backend.post.all_post', compact('post'));

     }//End Method

     public function AddBlogPost(){
        $blog_cat = Category::latest()->get();
        return view('backend.post.add_post', compact('blog_cat'));

     }//End Method

     public function StoreBlogPost(Request $request){

        $image = $request->file('post_image');
        $name_gen = date('YmdHi').$image->getClientOriginalName();
        Image::make($image)->resize(295,245)->save('upload/post_images/'.$name_gen);
        $save_url = 'upload/post_images/'.$name_gen;

        BlogPost:: insert([
           'blogcat_id' => $request->blogcat_id,
           'user_id' => Auth::user()->id,
           'post_title' => $request->post_title,
           'post_slug' => strtolower(str_replace(' ','-', $request->post_title)),
           'long_desc' => $request->long_desc,
           'post_image' => $save_url,
           'created_at' => Carbon::now(),
           
        ]);

        $notification = array(
           'message' => 'Post Uploaded Successfully',
           'alert-type' => 'success',
        );
  
        return redirect('/all/blog/post')->with($notification);

   }//end method


   public function EditBlogPost($id){
    $blog_cat = Category::latest()->get();
    $post = BlogPost::find($id);

    return view('backend.post.edit_post', compact('blog_cat','post'));

   }//end method



   public function UpdateBlogPost(Request $request){

    $post_id = $request->id;

    if($request->file('post_image')){

        $image = $request->file('post_image');
        $name_gen = date('YmdHi').$image->getClientOriginalName();
        Image::make($image)->resize(295,245)->save('upload/post_images/'.$name_gen);
        $save_url = 'upload/post_images/'.$name_gen;
    
        BlogPost:: find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'user_id' => Auth::user()->id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-', $request->post_title)),
            'long_desc' => $request->long_desc,
            'post_image' => $save_url,
            'created_at' => Carbon::now(),
           
        ]);
    
        $notification = array(
           'message' => 'Post is updated with image successfully',
           'alert-type' => 'success',
        );
    
        return redirect()->route('all.blog.post')->with($notification);

    }else {

        BlogPost:: find($post_id)->update([
            'blogcat_id' => $request->blogcat_id,
            'user_id' => Auth::user()->id,
            'post_title' => $request->post_title,
            'post_slug' => strtolower(str_replace(' ','-', $request->post_title)),
            'long_desc' => $request->long_desc,
            'created_at' => Carbon::now(),
            
         ]);
     
         $notification = array(
            'message' => 'Post is updated without image successfully',
            'alert-type' => 'success',
         );
     
         return redirect()->route('all.blog.post')->with($notification);
 

    }//end else

   

}//end method


public function DeleteBlogPost($id){

    $item = BlogPost::findOrFail($id);
    $img = $item->post_image;
    unlink($img);

    BlogPost::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Post Deleted successfully',
        'alert-type' => 'success',
     );
 
     return redirect()->back()->with($notification);

}//end method



//////frontend details page

 public function BlogDetails($slug){
  
   $blog = BlogPost::where('post_slug', $slug )->first();
   $bcategory = Category::latest()->limit(4)->get();
   $lpost = BlogPost::latest()->limit(4)->get();
   return view('frontend.blog.blog_details', compact('blog','bcategory','lpost'));


 }//end method


}
