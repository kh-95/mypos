<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use APP\ProductTranslation;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $categories=Category::all();
        $products=Product::when($request->search,function($q)use ($request){



return $q->whereTranslationLike('name','%'.$request->search.'%');
})->when($request->category_id,function($q) use ($request){

return $q->where('category_id',$request->category_id);

})->latest()->paginate(5);
        return view('dashbord.products.index',compact('categories','products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$categories=Category::all();




        return view('dashbord.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
         $rules=[


            // 'category_id'=>'required'
         ];

foreach ( config('translatable.locales') as $locale ){

$rules += [$locale.'.name' =>'required|unique:product_translations,name'];
$rules += [$locale.'.description' =>'required'];

 }
 $rules +=[
'purchase_price'=>'required',
'sale_price'=>'required',
'stock'=>'required',
 ];

 $request->validate($rules);
 $request_data=$request->all();

// dd($request_data);
if($request->image){

Image::make($request->image)->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();

})->save(public_path('uploads/product_images/'.$request->image->hashName(),60));

$request_data['image']=$request->image->hashName();
}

Product::create($request_data);
session()->flash('success',('site.added_successfully'));

return redirect()->route('products.index');
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
    public function edit($id)
    {

        $categories=Category::all();

        $product = Product::findOrFail($id);
         return view('dashbord.products.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
$rules=[
'category_id'=>'required'
];

foreach ( config('translatable.locales') as $locale ){

$rules += [$locale.'.name' =>'required|unique:product_translations,name'];
$rules += [$locale.'.description' =>'required'];

 }
 $rules +=[
'purchase_price'=>'required',
'sale_price'=>'required',
'stock'=>'required',
 ];

 $request->validate($rules);
 $request_data=$request->all();


if($request->image){

if($product->image != 'default.png'){

    Storage::disk('public_uploads')->delete('/product_images/'. $product->image);
}

Image::make($request->image)->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();

})->save(public_path('uploads/product_images/'.$request->image->hashName(),60));

$request_data['image']=$request->image->hashName();
}
 //dd($request_data);
 $product=Product::find($id);
$product->update($request_data);
session()->flash('success',('site.updated_successfully'));

return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $product = Product::find($id);
if($product->image !='default.png'){

Storage::disk('public_uploads')->delete('/product_images/'.$product->image);
 
            }
        $product->delete();
        session()->flash('success',('site.deleted_successfully'));
        return redirect()->route('products.index');
       
    }
}
