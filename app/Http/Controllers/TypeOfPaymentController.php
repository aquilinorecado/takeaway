<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\TypeOfPayment;

class TypeOfPaymentController extends Controller
{
    //

    public function index(){
        //fetch all tops
        $tops = TypeOfPayment::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('top.index', ['tops' => $tops]);
    }
    
    public function add(){
        //load form view
        return view('top.add');
    }
    
    public function insert(Request $request){
        //validate top data
        $this->validate($request, [
            'description' => 'required',
            'state' => 'required'
        ]);
        
        
        $topData = $request->all();
        
        //insert top data
        TypeOfPayment::create($topData);
        
        //store status message
        Session::flash('success_msg', ' Tipo de Pagamento Adicionado com Sucesso!');

        return redirect()->route('top.index');
    }
    
    public function edit($id){
        //get top data by id
        $top = TypeOfPayment::find($id);
        
        //load form view
        return view('top.edit', ['top' => $top]);
    }
    
    public function update($id, Request $request){
        //validate top data
        $this->validate($request, [
            'description' => 'required',
            'state' => 'required'
        ]);
        
        //get post data
        $topData = $request->all();
        
        //update post data
        TypeOfPayment::find($id)->update($topData);
        
        //store status message
        Session::flash('success_msg', 'Tipo de Pagamente Actualizado com Sucesso!');

        return redirect()->route('top.index');
    }
    
    public function delete($id){
        //update top data
        TypeOfPayment::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Tipo de Pagamento Removido com Sucesso!');

        return redirect()->route('top.index');
    } 

    
}
