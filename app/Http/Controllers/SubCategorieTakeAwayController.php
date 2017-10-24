<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategorieTakeAwayController extends Controller
{
    //
   
    public function index(){
        //fetch all SubCategorieTakeAway
        $subcategorietakeaways = SubCategorieTakeAway::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('subcategorietakeaway.index', ['subcategorietakeaways' => $subcategorietakeaways]);
    }

     public function details($id){
        //fetch post data
        $subcategorietakeaway = SubCategorieTakeAway::find($id);
        
        //pass posts data to view and load list view
        return view('subcategorietakeaway.details', ['subcategorietakeaway' => $subcategorietakeaway]);
    }
    
    public function add(){
        //load form view
        return view('subcategorietakeaway.add');
    }
    
    public function insert(Request $request){
            
        $sbtwData = $request->all();
        
        //insert top data
        SubCategorieTakeAway::create($sbtwData);
        
        //store status message
        Session::flash('success_msg', ' Subecategoria TekeAway Adicionada com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    }
    
    public function edit($id){
        //get top data by id
        $subcategorietakeaway = SubCategorieTakeAway::find($id);
        
        //load form view
        return view('subcategorietakeaway.edit', ['subcategorietakeaway' => $subcategorietakeaway]);
    }
    
    public function update($id, Request $request){
    
        //get post data
        $sbtwData = $request->all();
        
        //update post data
        SubCategorieTakeAway::find($id)->update($sbtwData);
        
        
        //store status message
        Session::flash('success_msg', 'Subcategoria Take Away Actualizado com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    }
    
    public function delete($id){
        //update top data
        SubCategorieTakeAway::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Subcategoria Take Away Removida com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    } 
    
    

}
