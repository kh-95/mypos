<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Cart;
use App\Product;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function AddCart($id){


   $product=DB::table('products')->where("id",$id)->first();
  


   $data=array();
//    $id_user=$_SESSION['id'];
 $data['product_id']=$product->id;

   
$data['total_price']=$product->sale_price;
$data['user_id']= auth()->user()->id;
$data['count']=1;

$cart_count = Cart::where([
    ['product_id', $id],
    ['user_id', auth()->user()->id],
])->count();



if($cart_count > 0){

$cart = DB::table('carts')->where([
        ['product_id', $id],
        ['user_id', auth()->user()->id],
    ])->first();
    $datax=array();

     $datax['product_id']=$id;
    
       
    $datax['total_price']=$cart->total_price +$product->sale_price;
    $datax['user_id']= auth()->user()->id;
    $datax['count']=$cart->count+1;

$id=$cart->id;
$cartx = Cart::find($id);
    $cartx->update($datax);
   $counttt=$cartx->count;

}else{

  Cart::create($data);
 $counttt=$data['count'];
 
 echo '<div class="single-product-item">
                <!-- single product item -->
              
                  <div class="thumb">
                    <img src="{{$product->image_Path}}"  style="width: 80px; height:80px"; alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">{{$product->name}}</h4><span id="countp {{$product->id}}">{{$counttt}}</span
                    <div class="price"><span class="pprice">{{$product->sale_price}}</span> <del class="dprice">$500.00</del>
                    </div>

                    <a remove_id=" " class="remove-cart">Remove</a>

                </div>
            
            </div>' ;

}
 
}
public function AddCart2($id ){
  
$cart = Cart::where('user_id',auth()->user()->id)->get();

$cart_count=$cart->count->count();

    return view('user.nav',compact('cart'));
}







    public function store(Request $request)
    {
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
