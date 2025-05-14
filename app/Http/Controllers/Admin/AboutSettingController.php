<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
    public function index(){

        $data = AboutSetting::orderBy('id','DESC')->get();

        return view('backEnd.aboutsetting.index',compact('data'));
    }
    public function create(){

        return view('backEnd.aboutsetting.create');
    }
    public function store(Request $request){
        

        $input = $request->all();

        AboutSetting::create($input);

        return redirect()->route('aboutsetting.index');




        
    }
}
