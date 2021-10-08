@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('users.index')}}">{{trans('site.Users')}}</a></li>
<li class="active">{{trans('site.Edit')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('users.update',['id'=>$user->id])}}"  method="get"  enctype="multipart/form-data"  >
@csrf	
<!-- {{method_field('put')}} -->
	<label>{{trans('site.First_name')}}</label>
	<input type ="text" class="form-control" name="first_name" value="{{ $user->first_name}}" placeholder="fname">
	<label>{{trans('site.Last_name')}}</label>
	<input type ="text" class="form-control" name="last_name" value="{{ $user->last_name}}" placeholder="lname">
	<label>{{trans('site.Email')}}</label>
    <input type ="email" class="form-control" name="email" value="{{ $user->email}}" placeholder="email">
    <label>{{trans('site.image')}}</label>
    <input type ="file" class="form-control image" name="image"  placeholder="image">
    <div>
  <img src="{{$user->image_path}}" width="100px" class="img-thumbnail image-preview" alt="">
  </div> 
    <label>{{trans('site.Password')}}</label>
    <input type ="password" class="form-control" name="password"   placeholder="pass">
    <label>{{trans('site.Password_confirmation')}}</label>
    <input type ="password" class="form-control" name="password_confirmation" placeholder="pass">
    
    <div class="form-group">
<label>{{trans('site.permissions')}}</label>
<div class="row">
  <div class="col-12">
    <!-- Custom Tabs -->
    <div class="card">
      <div class="card-header d-flex p-0">

      @php
$models=['Users','products','categories'];
$maps=['Create','Read','Update','Delete'];
      @endphp
      
        <ul class="nav nav-pills ml-auto p-2">
            @foreach($models as $index=>$model)
            
<li class="{{$index == 0 ?'active':''}}"><a  href="#{{ $model }}" data-toggle="tab">{{trans('site.'.$model)}}</a></li>

     @endforeach
        </ul>
      </div><!-- /.card-header -->
      <div class="card-body">
        <div class="tab-content">


        @foreach($models as $index=>$model)
          <div class="tab-pane {{$index == 0 ?'active':''}}" id="{{ $model }}">
@foreach($maps as $map)
          <div class="form-check">
                    <input type="checkbox" class="form-check-input"  name="permissions[]"  value="{{$map .'_'.$model}}">
                    <label class="form-check-label"  >{{trans('site.'.$map)}}</label>
                  </div>
                
                
              
        @endforeach


          </div>
 @endforeach
        </div>
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- ./card -->
  </div>
  <!-- /.col -->
</div>









</div>















    <button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button>


</form>





@endsection