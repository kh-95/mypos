<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        $clients=Client::when($request->search,function($q) use ($request)   {

return $q->where('name','like','%'.$request->search .'%')
->orwhere('phone','like','%'.$request->search .'%')
->orwhere('address','like','%'.$request->search .'%');

        })->latest()->paginate(5);


        return view('dashbord.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([

'name'=>'required',
'address'=>'required',
'phone'=>'required|min:1',

       ]) ;

       Client::create($request->all());

       session()->flash('success',('site.added_successfully'));

       return redirect()->route('clients.index');

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
        $client= Client::findOrFail($id);
        return view('dashbord.clients.edit')
        ->with('client',$client);
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
        $request->validate([

            'name'=>'required',
            'address'=>'required',
            'phone'=>'required|min:1',
            
 ]) ;

 $request_data =$request->all();
 $client=Client::find($id);
$client->update($request_data);
session()->flash('success',('site.updated_successfully'));

return redirect()->route('clients.index');
            
                   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::find($id);
        
        $client->delete();

session()->flash('success',('site.deleted_successfully'));
        return redirect()->route('clients.index');
    }
}
