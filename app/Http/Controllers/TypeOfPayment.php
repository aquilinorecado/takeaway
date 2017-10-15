<?php

namespace App\Http\Controllers;
use App\TypeOfPayment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class TypeOfPayment extends Controller
{
    //
    public function index(){
        //fetch all tops
        $tops = TypeOfPayment::orderBy('created_at','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('top.index', ['tops' => $tops]);
    }
    
    /*public function add(){
        //load form view
        return view('posts.add');
    }
    
    public function insert(Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        
        $postData = $request->all();
        
        //insert post data
        Post::create($postData);
        
        //store status message
        Session::flash('success_msg', 'Post added successfully!');

        return redirect()->route('posts.index');
    }
    
    public function edit($id){
        //get post data by id
        $post = Post::find($id);
        
        //load form view
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update($id, Request $request){
        //validate post data
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        Post::find($id)->update($postData);
        
        //store status message
        Session::flash('success_msg', 'Post updated successfully!');

        return redirect()->route('posts.index');
    }
    
    public function delete($id){
        //update post data
        Post::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Post deleted successfully!');

        return redirect()->route('posts.index');
    } 

    */
}
