<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieTakeAwayController extends Controller
{
    //
   
    public function index(){
        //fetch all CategorieTakeAway
        $categorietakeaways = CategorieTakeAway::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('categorietakeaway.index', ['categorietakeaways' => $categorietakeaways]);
    }

     public function details($id){
        //fetch post data
        $categorietakeaway = CategorieTakeAway::find($id);
        
        //pass posts data to view and load list view
        return view('categorietakeaway.details', ['categorietakeaway' => $categorietakeaway]);
    }
    
    public function add(){
        //load form view
        return view('categorietakeaway.add');
    }
    
    public function insert(Request $request){
            
        $sbtwData = $request->all();
        
        //insert top data
        CategorieTakeAway::create($sbtwData);
        
        //store status message
        Session::flash('success_msg', ' categoria TekeAway Adicionada com Sucesso!');

        return redirect()->route('categorietakeaway.index');
    }
    
    public function edit($id){
        //get top data by id
        $categorietakeaway = CategorieTakeAway::find($id);
        
        //load form view
        return view('categorietakeaway.edit', ['categorietakeaway' => $categorietakeaway]);
    }
    
    public function update($id, Request $request){
    
        //get post data
        $sbtwData = $request->all();
        
        //update post data
        CategorieTakeAway::find($id)->update($sbtwData);
        
        
        //store status message
        Session::flash('success_msg', 'Categoria Take Away Actualizado com Sucesso!');

        return redirect()->route('categorietakeaway.index');
    }
    
    public function delete($id){
        //update top data
        CategorieTakeAway::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Categoria Take Away Removida com Sucesso!');

        return redirect()->route('categorietakeaway.index');
    } 
    
    

}
