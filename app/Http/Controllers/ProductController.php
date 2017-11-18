<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use Image;
use App\Products;
use App\Pictures;

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

    public function form(){
        //load form view
        return view('product.form');
    }
    
    public function insert(Request $request){
        //validate product data
        
    	/*$this->validate($request, [
            'takeaway_id'=> 'required',
        	'name'=> 'required',
        	'user_id'=> 'required',
        	'price'=> 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg|max:2048', 

        ]);*/



        $imageName1 = time().'I1.'.$request->image1->getClientOriginalExtension();
        $request->image1->move(public_path('images'), $imageName1);
        $imageName2 = time().'I2.'.$request->image2->getClientOriginalExtension();
        $request->image2->move(public_path('images'), $imageName2);
        $imageName3 = time().'I3.'.$request->image3->getClientOriginalExtension();
        $request->image3->move(public_path('images'), $imageName3);
        
        $productData = new App\Products;
        $productData->takeaway_id=$request->takeaway_id;
        $productData->name=$request->name;
        $productData->user_id=$request->user_id;
        $productData->price=$request->price;
        $productData->details=$request->details;
        $productData->state=1;

        //insert product data
        $productID = $productData->save;

        $pictureData = new App\Pictures;
        $pictureData->app_id = "PD";
        $pictureData->app_code = $productID;

        // Save images
        $pictureData->address=$imageName1;
        $pictureData->save;

        // Save images
        $pictureData->address=$imageName2;
        $pictureData->save;

        // Save images
        $pictureData->address=$imageName3;
        $pictureData->save;

        
        //Products::create($productData);
        
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
