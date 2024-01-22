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
         Image::make($image)->resize(50,70)->save('upload/category/'.$name_gen);
         $save_url = 'upload/category/'.$name_gen;

         Category:: insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-', $request->category_name)),
            'image' => $save_url,
            
         ]);

         $notification = array(
            'message' => 'Category Uploaded Successfully',
            'alert-type' => 'success',
         );
   
         return redirect()->back()->with($notification);





    }//end method
}
