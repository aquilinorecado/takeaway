<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\UserLevel;

class UserController extends Controller
{
    //

    public function index(){
        //fetch all User
        $userlevels = UserLevel::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('userlevel.index', ['userlevels' => $userlevels]);
    }

     public function details($id){
        //fetch post data
        $userlevel = UserLevel::find($id);
        
        //pass posts data to view and load list view
        return view('userlevel.details', ['userlevel' => $userlevel]);
    }
    
    public function add(){
        //load form view
        return view('userlevel.add');
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
        UserLevel::create($addData);
        
        //store status message
        Session::flash('success_msg', ' usuario Adicionado com Sucesso!');

        return redirect()->route('userlevel.index');
    }
    
    public function edit($id){
        //get top data by id
        $userlevel = UserLevel::find($id);
        
        //load form view
        return view('userlevel.edit', ['user' => $users]);
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
        UserLevel::find($id)->update($addData);
        
        //store status message
        Session::flash('success_msg', 'Usuario Actualizado com Sucesso!');

        return redirect()->route('userlevel.index');
    }
    
    public function delete($id){
        //update top data
        UserLevel::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'usuario Removido com Sucesso!');

        return redirect()->route('userlevel.index');
    } 

}
fff