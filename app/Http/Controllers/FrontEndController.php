<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        // return "ok";
        return view('frontEnd.layouts.pages.index');
    }

    public function about(){

        return view('frontEnd.layouts.pages.about');

    }
    public function serviecs(){

        return view('frontEnd.layouts.pages.serviecs');

    }
    public function photogallery(){

        return view('frontEnd.layouts.pages.photogallery');

    }
    public function videogallery(){

        return view('frontEnd.layouts.pages.videogallery');

    }
}
