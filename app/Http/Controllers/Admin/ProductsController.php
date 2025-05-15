<?php

namespace App\Http\Controllers\Admin;
use App\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
     
        $data = Products::orderBy("id","DESC")->get();
        return view('backEnd.products.index',compact('data'));
    }
    public function create(){

        return view('backEnd.products.create');
    }
    public function store(Request $request){
        

        $input = $request->all();

        Products::create($input);

        return redirect()->route('products.index');




        
    }

    public function destroy($id){
        Products::find( $id )->delete();
        return redirect()->back()->with('success', 'Item deleted successfully!') ;
    }

}
