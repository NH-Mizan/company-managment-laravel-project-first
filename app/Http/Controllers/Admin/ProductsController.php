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


    public function edite($id){
        $product = Products::find(id: $id);
        return view('backEnd.products.edite',compact('product'));
    }
    public function update(Request $request){
        $input = $request->except('hidden_id');
        $product = Products::find($request->hidden_id);
        $product->update($input);
        return redirect()->route('products.index');        
    }

    public function active(Request $request) {
        $active = Products::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        return redirect()->route('products.index');    
    }

    public function inactive(Request $request) {
        $inactive = Products::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        return redirect()->route('products.index');    
    }

}

