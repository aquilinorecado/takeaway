<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\TakeAway;
use App\Address;
use App\Auth;
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
        
        User::create($twData->put('user_id', Auth::id()));
     

       // $takeaway = TakeAway::find(1);

       // $address  = $takeaway->address()->save($address);
        //insert top data
        //TakeAway::create($twData);
        
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
     
        //get post data
        $twData = $request->all();
        
        //update post data
        TakeAway::find($id)->update($twData);
        
        
        //store status message
        Session::flash('success_msg', 'Take Away Actualizado com Sucesso!');

        return redirect()->route('takeaway.index');
    }
    
    public function delete($id){
        //update top data
        TakeAway::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Take Away Removido com Sucesso!');

        return redirect()->route('takeaway.index');
    } 
    
    
}
