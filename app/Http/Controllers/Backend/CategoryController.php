<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;




class CategoryController extends Controller
{
    public function AllCategory(){

        $category = Category::latest()->get();
        return view('backend/category/all_category',compact('category'));
    }//end method

    public function StoreCategory(Request $request){

         $image = $request->file('image');
         $name_gen = date('YmdHi').$image->getClientOriginalName();
         Image::make($image)->resize(70,50)->save('upload/category/'.$name_gen);
         $save_url = 'upload/category/'.$name_gen;

         Category:: insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-', $request->category_name)),
            'image' => $save_url,
            'created_at' => Carbon::now(),
            
         ]);

         $notification = array(
            'message' => 'Category Uploaded Successfully',
            'alert-type' => 'success',
         );
   
         return redirect()->back()->with($notification);

    }//end method


    public function EditCategory($id){

        $categories = Category::find($id);
        return response()->json($categories);

    }//end method



    public function UpdateCategory(Request $request){

        $cat_id = $request->cat_id;

        $image = $request->file('image');
        $name_gen = date('YmdHi').$image->getClientOriginalName();
        Image::make($image)->resize(80,70)->save('upload/category/'.$name_gen);
        $save_url = 'upload/category/'.$name_gen;

        Category:: find($cat_id)->update([
           'category_name' => $request->category_name,
           'category_slug' => strtolower(str_replace(' ','-', $request->category_name)),
           'image' => $save_url,
           'created_at' => Carbon::now(),
           
        ]);

        $notification = array(
           'message' => 'Category Updated Successfully',
           'alert-type' => 'success',
        );
  
        return redirect()->back()->with($notification);

   }//end method


   public function DeleteCategory($id){

         Category:: find($id)->delete();

         $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success',
         );
   
         return redirect()->back()->with($notification);

   }//end method
}
