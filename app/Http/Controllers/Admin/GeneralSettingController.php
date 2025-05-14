<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index(){

        $data = GeneralSetting::orderBy('id','DESC')->get();

        return view('backEnd.generalsetting.index',compact('data'));
    }
    public function create(){

        return view('backEnd.generalsetting.create');
    }
    public function store(Request $request){
        

        $input = $request->all();

        GeneralSetting::create($input);

        return redirect()->route('generalsetting.index');




        
    }
}
