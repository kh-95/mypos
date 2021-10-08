<?php

namespace App\Http\Controllers\Dashbord\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Order;
use App\Category;
use App\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Client $client)
    {

      $categories=Category::with('products')->get();
      $orders=$client->orders()->with('products')->paginate(5);

        return view('dashbord.clients.orders.create',compact('categories','client','orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Client $client)
    {
        


$request->validate([

'products'=>'required|array',
]);


$this->attach_order($request,$client);
session()->flash('success',('site.added_successfully'));

return redirect()->route('orders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $client_id,$order_id)
    {

        $client = Client::findOrFail($client_id);
        $order = Order::findOrFail($order_id);
        $orders=$client->orders()->with('products')->paginate(5);
        $category=Category::with('products')->get();
        return view('dashbord.clients.orders.edit',compact('client','order','category','orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client_id,Order $order)
    {
        

        $request->validate([

            'products'=>'required|array',
            ]);
$this->detach_order($order);

$this->attach_order($request,$client_id);

session()->flash('success',('site.updated_successfully'));

return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
    private function attach_order($request,$client_id){



        $order=$client_id->orders()->create([]);
        $order->products()->attach($request->products);

        $total_price = 0;
        foreach($request->products  as $id=>$quantity){

            $product=Product::findorfail($id);
            $total_price +=$product->sale_price * $quantity['quantity'];
            
            
               $product->update([
            
                 'stock'=>$product->stock - $quantity['quantity']
            
            ]);
            
            
            
            } //end foreach
            
            $order->update([
            
                'total_price'=>$total_price
            
            ]);
          

    }

private function detach_order($order){
  
    foreach($order->products as $product){

$product->update([

'stock'=>$product->stock +$product->pivot->quantity,
]);

    }
    
$order->delete();



}




}
