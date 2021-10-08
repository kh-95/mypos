<?php

namespace App\Http\Controllers\Dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class UserController extends Controller
{

public function __construct(){

    // $this->middleware(['permission:read_users'])->only('index');
    // $this->middleware(['permission:create_users'])->only( 'create');
    // $this->middleware(['permission:update_users'])->only( 'update');
    // $this->middleware(['permission:delete_users'])->only( 'destroy');


}





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


$users=User::whereRoleis('super_admin')->where(function($q) use ($request){

return $q->when($request->search,function($query) use ($request){

    return $query->where('first_name','like','%'  .$request->search .'%')->
    orwhere('last_name','like','%'.$request->search.'%');


});

})->latest()->paginate(4);


    
       return view('dashbord.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.users.create');
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

'first_name'=>'required',
'last_name'=>'required',
'email'=>'required',
'password'=>'required|confirmed',
'image'=>'image',
'permissions'=>'required|min:1',
]); 




$request_data=$request->except(['password','password_confirmation','permissions','image']);
$request_data['password']= bcrypt($request->password);

if($request->image){

Image::make($request->image)->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();

})->save(public_path('uploads/users_images/'.$request->image->hashName(),60));

$request_data['image']=$request->image->hashName();
}

$user=User::create($request_data);
  $user->attachRole('super_admin');
  $user->syncPermissions($request->permissions);
   
        
session()->flash('success',('site.added_successfully'));

return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashbord.users.edit')
        ->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([

            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|confirmed',
            'image'=>'image',
            'permissions'=>'required|min:1',
            ]); 
            
            
$request_data=$request->except(['permissions','image']);


if($request->image){

if($user->image != 'default.png'){

    Storage::disk('public_uploads')->delete('/users_images/'. $user->image);

}
Image::make($request->image)
->resize(300, null, function ($constraint) {
    $constraint->aspectRatio();

})->save(public_path ('/uploads/users_images/'. $request->image->hashName()));

$request_data['image']=$request->image->hashName();
    }

// $user = User::find($id);
$user->update($request_data);
$user->syncPermissions($request->permissions);

session()->flash('success',('site.updated_successfully'));

return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);


if($user->image !='default.png'){

Storage::disk('public_uploads')->delete('/users_images/'.$user->image);


}

        $user->delete();
        session()->flash('success',('site.deleted_successfully'));
        return redirect()->route('users.index');
    }
}
