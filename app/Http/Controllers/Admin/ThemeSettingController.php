<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ThemeSetting;
use Illuminate\Http\Request;

class ThemeSettingController extends Controller
{
    public function index(){
        $theme = ThemeSetting::first();
        if(!$theme){
            $theme = new ThemeSetting();
            $theme->save();
        }
        return view('backend.blade.pages.theme',compact('theme'));
    }

    public function update(Request $data,string $id){
        $theme = ThemeSetting::findOrFail($id);

        $theme->theme_color = $data->theme_color;
        $theme->save();
        return back();
    }
}
