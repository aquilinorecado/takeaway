<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Address;

class AddressController extends Controller
{
    //

    public function index(){
        //fetch all Address
        $addresses = Address::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('address.index', ['addresses' => $addresses]);
    }

     public function details($id){
        //fetch post data
        $address = Address::find($id);
        
        //pass posts data to view and load list view
        return view('address.details', ['address' => $address]);
    }
    
    public function add(){
        //load form view
        return view('address.add');
    }
    
    public function insert(Request $request){
        //validate top data
        $this->validate($request, [
            'block' => 'required',
            'province' => 'required',
            'number' => 'required'
        ]);
        

        
        $addData = $request->all();
        
        //insert top data
        Address::create($addData);
        
        //store status message
        Session::flash('success_msg', ' Endere&ccedil;o Adicionado com Sucesso!');

        return redirect()->route('address.index');
    }
    
    public function edit($id){
        //get top data by id
        $address = Address::find($id);
        
        //load form view
        return view('address.edit', ['address' => $address]);
    }
    
    public function update($id, Request $request){
        //validate top data
        $this->validate($request, [
            'road' => 'required',
            'av' => 'required',
            'block' => 'required',
            'province' => 'required',
            'number' => 'required'
        ]);
        
        //get post data
        $addData = $request->all();
        
        //update post data
        Address::find($id)->update($addData);
        
        //store status message
        Session::flash('success_msg', 'Endere&ccedil;o Actualizado com Sucesso!');

        return redirect()->route('address.index');
    }
    
    public function delete($id){
        //update top data
        Address::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Endere&ccedil;o Removido com Sucesso!');

        return redirect()->route('address.index');
    } 

}
