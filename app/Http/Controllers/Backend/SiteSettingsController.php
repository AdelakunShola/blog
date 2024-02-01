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
}
 