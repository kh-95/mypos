<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
$categories= Category::when($request->search,function($q) use ($request){



    return $q->where('name','like','%'  .$request->search .'%');


})->latest()->paginate(5);

return view('dashbord.categories.index',compact('categories'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$rules=[];

foreach ( config('translatable.locales') as $locale ){

    $rules += [$locale.'.name' =>'required|unique:category_translations,name'];
}


//dd($request->all());
Category::create($request->all());
session()->flash('success',('site.added_successfully'));

return redirect()->route('categories.index');

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
        $category = Category::findOrFail($id);
        return view('dashbord.categories.edit')
        ->with('category',$category);
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
$rules=[];

foreach ( config('translatable.locales') as $locale ){

    $rules += [$locale.'.name' =>'required|unique:category_translations,name'];
}

$request->validate($rules);
          $category=category::find($id);
          
     $category->update($request->all());


      session()->flash('success',('site.updated_successfully'));

// dd($request->all());

       return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=category::find($id);
        
        $category->delete();

session()->flash('success',('site.deleted_successfully'));
        return redirect()->route('categories.index');

    }
}
