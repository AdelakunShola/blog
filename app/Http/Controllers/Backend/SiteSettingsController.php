<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SiteSettingsController extends Controller
{
    public function SiteSettings(){
        $site = SiteSettings::find(1);
        return view('backend.settings.site_settings', compact('site'));

    }//end method

    public function SiteSettingsUpdate(Request $request){


            $site_id = $request->id;
        
            if($request->file('site_logo')){
        
                $image = $request->file('site_logo');
                $name_gen = date('YmdHi').$image->getClientOriginalName();
                Image::make($image)->resize(295,245)->save('upload/logo/'.$name_gen);
                $save_url = 'upload/logo/'.$name_gen;
            
                SiteSettings:: find($site_id)->update([
                    'instagram' => $request->instagram,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'twitter' => $request->twitter,
                    'email' => $request->email,
                    'site_logo' => $save_url,
                    'created_at' => Carbon::now(),
                   
                ]);
            
                $notification = array(
                   'message' => 'Site Settings is updated with logo successfully',
                   'alert-type' => 'success',
                );
            
                return redirect()->back()->with($notification);
        
            }else {
        
                SiteSettings:: find($site_id)->update([
                    'instagram' => $request->instagram,
                    'facebook' => $request->facebook,
                    'youtube' => $request->youtube,
                    'twitter' => $request->twitter,
                    'email' => $request->email,
                    'created_at' => Carbon::now(),
                   
                    
                 ]);
             
                 $notification = array(
                    'message' => 'Site Settings is updated without logo successfully',
                    'alert-type' => 'success',
                 );
             
                 return redirect()->back()->with($notification);
         
        
            }//end else
        
           
        
       

    }//end method
}
 