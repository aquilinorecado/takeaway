<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Products;

class ProductController extends Controller
{
    //

    public function index(){
        //fetch all products
        $products = Products::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('product.index', ['products' => $products]);
    }

     public function details($id){
        //fetch post data
        $product = Products::find($id);
        
        //pass posts data to view and load list view
        return view('product.details', ['product' => $product]);
    }
    
    public function add(){
        //load form view
        return view('product.add');
    }
    
    public function insert(Request $request){
        //validate product data
        
    	$this->validate($request, [
            'takeaway_id'=> 'required',
        	'name'=> 'required',
        	'user_id'=> 'required',
        	'price'=> 'required'
        ]);

        $productData = $request->all();
        
        //insert product data
        Products::create($productData);
        
        //store status message
        Session::flash('success_msg', ' Tipo de Pagamento Adicionado com Sucesso!');

        return redirect()->route('product.index');
    }
    
    public function edit($id){
        //get product data by id
        $product = Products::find($id);
        
        //load form view
        return view('product.edit', ['product' => $product]);
    }
    
    public function update($id, Request $request){
        //validate product data
        
        //get post data
        $productData = $request->all();
        
        //update post data
        Products::find($id)->update($productData);
        
        //store status message
        Session::flash('success_msg', 'Produto Actualizado com Sucesso!');

        return redirect()->route('product.index');
    }
    
    public function delete($id){
        //update product data
        Products::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Produto Removido com Sucesso!');

        return redirect()->route('product.index');
    } 

}
