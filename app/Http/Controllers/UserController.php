<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\User;

class UserController extends Controller
{
    //

    public function index(){
        //fetch all User
        $users = User::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('user.index', ['users' => $users]);
    }

     public function details($id){
        //fetch post data
        $users = User::find($id);
        
        //pass posts data to view and load list view
        return view('user.details', ['user' => $user]);
    }
    
    public function add(){
        //load form view
        return view('user.add');
    }
    
    public function insert(Request $request){
        //validate top data
        $this->validate($request, [
            'block' => 'required',
            'province' => 'required',
            'number' => 'required'
        ]);
        

        $request->request->add(['userlevel_id' => 1]);
        $addData = $request->all();
        dd($addData);
        //insert top data
       // User::create($addData);
        
        //store status message
       // Session::flash('success_msg', ' Endere&ccedil;o Adicionado com Sucesso!');

        //return redirect()->route('user.index');
    }
    
    public function edit($id){
        //get top data by id
        $user = User::find($id);
        
        //load form view
        return view('user.edit', ['user' => $users]);
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
        User::find($id)->update($addData);
        
        //store status message
        Session::flash('success_msg', 'Usuario Actualizado com Sucesso!');

        return redirect()->route('user.index');
    }
    
    public function delete($id){
        //update top data
        User::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'usuario Removido com Sucesso!');

        return redirect()->route('user.index');
    } 

}
