<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TakeAwayController extends Controller
{
    //
   
    public function index(){
        //fetch all TakeAway
        $takeaways = TakeAway::orderBy('name','desc')->get();
        
        //pass posts data to view and load list view
        return view('takeaway.index', ['takeaways' => $takeaways]);
    }

     public function details($id){
        //fetch post data
        $takeaway = TakeAway::find($id);
        
        //pass posts data to view and load list view
        return view('takeaway.details', ['takeaway' => $takeaway]);
    }
    
    public function add(){
        //load form view
        return view('takeaway.add');
    }
    
    public function insert(Request $request){
            
        $twData = $request->all();
        
        //insert top data
        TakeAway::create($twData);
        
        //store status message
        Session::flash('success_msg', ' TekeAway Adicionado com Sucesso!');

        return redirect()->route('takeaway.index');
    }
    
    public function edit($id){
        //get top data by id
        $takeaway = TakeAway::find($id);
        
        //load form view
        return view('takeaway.edit', ['takeaway' => $takeaway]);
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
        TakeAway::find($id)->update($addData);
        
        //store status message
        Session::flash('success_msg', 'Endere&ccedil;o Actualizado com Sucesso!');

        return redirect()->route('takeaway.index');
    }
    
    public function delete($id){
        //update top data
        TakeAway::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Endere&ccedil;o Removido com Sucesso!');

        return redirect()->route('takeaway.index');
    } 
    
    
}
