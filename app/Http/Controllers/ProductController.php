<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Image;
use App\Products;
use App\User;
use App\TakeAway;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //
    use \Conner\Tagging\Taggable;

    public function index(){
        //fetch all products
        $products = Products::where('user_id', Auth::id())->orderBy('name','desc')->get();
        
        //pass posts data to view and load list view
        //pass posts data to view and load list view
        return view('product.index', ['products' => $products]);
    }

     public function details($id){
        //fetch post data
        $product = Products::find($id);
        
        //pass posts data to view and load list view
        return view('product.details', ['product' => $product]);
    }
    
    public function add(){
        //load form view
        $takeaways = TakeAway::orderBy('name','desc')->get();
       // $takeaways = DB::table('take_aways')->where('user_id', $id);

        return view('product.add', ['takeaways' => $takeaways]);
    }

    public function form(){
        //load form view
        return view('product.form');
    }
    
    public function insert(Request $request){
        //validate product data
        
    	$this->validate($request, [
            'take_away_id'=> 'required',
        	'name'=> 'required',
        	'user_id'=> 'required',
        	'price'=> 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg|max:2048', 

        ]);

        $current = Carbon::now();
        $imageName1 = '';
        $imageName2 = '';
        $imageName3 = '';

        if($request->hasFile('image1')){
            $avatar = $request->file('image1');
            $imageName1 = time().'I1.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(64, 64)->save( public_path('/uploads/images/'. $imageName1 ));
            }

        if($request->hasFile('image2')){
            $avatar = $request->file('image2');
            $imageName2 = time().'I2.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(64, 64)->save( public_path('/uploads/images/'. $imageName2 ));
            }

        if($request->hasFile('image3')){
            $avatar = $request->file('image3');
            $imageName3 = time().'I3.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(64, 64)->save( public_path('/uploads/images/'. $imageName3 ));
            }

        //$imageName1 = time().'I1.'.$request->image1->getClientOriginalExtension();
        //$request->image1->move(public_path('/uploads/images'), $imageName1);            
            
        /*$imageName2 = time().'I2.'.$request->image2->getClientOriginalExtension();
        $request->image2->move(public_path('/uploads/images'), $imageName2);
        $imageName3 = time().'I3.'.$request->image3->getClientOriginalExtension();
        $request->image3->move(public_path('/uploads/images'), $imageName3) ;*/

        //Image::make($request->image3)->resize(300, 300)->save( public_path('/uploads/avatars/' . $imageName3 ) );
       /* $productData = new App\Products;
        $productData->takeaway_id=$request->takeaway_id;
        $productData->name=$request->name;
        $productData->user_id=$request->user_id;
        $productData->price=$request->price;
        $productData->details=$request->details;
        $productData->state=1;*/
        //$tags = explode(",", $request->tags);

        $productData= [ 
                        'take_away_id' => $request->take_away_id,
                        'name' => $request->name,
                        'user_id'  => $request->user_id,
                        'price' => $request->price,
                        'details' => $request->details,
                        'tags' => $request->tags, 
                        'state' => 1,
                        'created_at' => $current,
                        'updated_at' => $current,
                        ];

        //$article->tag($tags);

        $productID = DB::table('products')->insertGetId($productData);
        //Products::find($productID)->update(['state'=>1]);
       //Products::find($productID)->tag($tags);


        $pictureData = [
                        'app_code' => "PD",
                        'app_id' => $productID,
                        'address' => $imageName1,
                        'created_at' => $current,
                        'updated_at' => $current,
                    ];
        $pictureID = DB::table('Pictures')->insertGetId($pictureData);

        $pictureData = [
                        'app_code' => "PD",
                        'app_id' => $productID,
                        'address' => $imageName2,
                        'created_at' => $current,
                        'updated_at' => $current,
                    ];
        $pictureID = DB::table('Pictures')->insertGetId($pictureData);

        $pictureData = [
                        'app_code' => "PD",
                        'app_id' => $productID,
                        'address' => $imageName3,
                        'created_at' => $current,
                        'updated_at' => $current,
                    ];
        $pictureID = DB::table('Pictures')->insertGetId($pictureData);

        
        //Products::create($productData);
        
        //store status message
        Session::flash('success_msg', ' Tipo de Pagamento Adicionado com Sucesso!');

        return redirect()->route('product.index');
    }
    
    public function edit($id){
        //get product data by id
        $product = Products::find($id);
        
        //load form view
        return view('product.edit', ['product' => $product]);
    }
    
    public function update($id, Request $request){
        //validate product data
        
        $this->validate($request, [
            'take_away_id'=> 'required',
            'name'=> 'required',
            'user_id'=> 'required',
            'price'=> 'required',
        ]);

        //get post data
        $productData = $request->all();
        
        //update post data
        Products::find($id)->update($productData);
        
        //store status message
        Session::flash('success_msg', 'Produto Actualizado com Sucesso!');

        return redirect()->route('product.index');
    }
    
    public function delete($id){
        //update product data
        Products::find($id)->delete();
        
        //store status message
        Session::flash('success_msg', 'Produto Removido com Sucesso!');

        return redirect()->route('product.index');
    } 

    /*public function userAjax(Request $request)
    {

        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("users")
                    ->select("id","name")
                    ->where('name','LIKE',"%$search%")
                    ->get();

        }
        $data = DB::table("users")->get();
        return response()->json($data);

    } */

    public function takeawayAjax(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("takeaways")
                    ->select("id","name")
                    ->where('name','LIKE',"%$search%")
                    ->get();


        }

        return response()->json($data);

    }

}
