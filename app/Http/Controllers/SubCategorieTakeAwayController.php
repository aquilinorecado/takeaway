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
        $subcategorietakeaway = TakeAway::find($id);
        
        //pass posts data to view and load list view
        return view('subcategorietakeaway.details', ['subcategorietakeaway' => $subcategorietakeaway]);
    }
    
    public function add(){
        //load form view
        return view('subcategorietakeaway.add');
    }
    
    public function insert(Request $request){
            
        $twData = $request->all();
        
        //insert top data
        TakeAway::create($twData);
        
        //store status message
        Session::flash('success_msg', ' TekeAway Adicionado com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    }
    
    public function edit($id){
        //get top data by id
        $subcategorietakeaway = TakeAway::find($id);
        
        //load form view
        return view('subcategorietakeaway.edit', ['subcategorietakeaway' => $subcategorietakeaway]);
    }
    
    public function update($id, Request $request){
     q  wz
        //get post data
        $twData = $request->all();
        
        //update post data
        TakeAway::find($id)->update($twData);
        
        
        //store status message
        Session::flash('success_msg', 'Take Away Actualizado com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    }
    
    public function delete($id){
        //update top data
        TakeAway::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Take Away Removido com Sucesso!');

        return redirect()->route('subcategorietakeaway.index');
    } 
    
    

}
