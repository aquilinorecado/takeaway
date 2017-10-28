<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Categories;


class CategorieController extends Controller
{
    //
   
    public function index(){
        //fetch all Categorie
        $categories = Categories::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        return view('categorie.index', ['categories' => $categories]);
    }

     public function details($id){
        //fetch post data
        $categorie = Categories::find($id);
        
        //pass posts data to view and load list view
        return view('categorie.details', ['categorie' => $categorie]);
    }
    
    public function add(){
        //load form view
        return view('categorie.add');
    }
    
    public function insert(Request $request){
            
        $sbtwData = $request->all();
        
        //insert top data
        Categories::create($sbtwData);
        
        //store status message
        Session::flash('success_msg', 'Categoria Adicionada com Sucesso!');

        return redirect()->route('categorie.index');
    }
    
    public function edit($id){
        //get top data by id
        $categorie = Categories::find($id);
        
        //load form view
        return view('categorie.edit', ['categorie' => $categorie]);
    }
    
    public function update($id, Request $request){
    
        //get post data
        $sbtwData = $request->all();
        
        //update post data
        Categories::find($id)->update($sbtwData);
        
        
        //store status message
        Session::flash('success_msg', 'Categoria Actualizado com Sucesso!');

        return redirect()->route('categorie.index');
    }
    
    public function delete($id){
        //update top data
        Categories::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Categoria Removida com Sucesso!');

        return redirect()->route('categorie.index');
    } 
    
    

}
