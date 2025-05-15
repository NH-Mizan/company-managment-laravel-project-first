<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use Illuminate\Http\Request;

class AboutSettingController extends Controller
{
    public function index()
    {

        $data = AboutSetting::orderBy('id', 'DESC')->get();

        return view('backEnd.aboutsetting.index', compact('data'));
    }
    public function create()
    {

        return view('backEnd.aboutsetting.create');
    }
    public function store(Request $request)
    {


        $input = $request->all();

        AboutSetting::create($input);

        return redirect()->route('aboutsetting.index');

    }
    public function delete($id)
    {
        AboutSetting::find($id)->delete();
        return redirect()->back()->with('success', 'Item deleted successfully!');
    }
    public function edit($id){
        $about = AboutSetting::find($id);
        return view('backEnd.aboutsetting.edit',compact('about'));
    }
    public function update(Request $request){
        

        $input = $request->except('hidden_id');

        $about = AboutSetting::find($request->hidden_id);
        $about->update($input);
        

        return redirect()->route('aboutsetting.index');




        
    }
}