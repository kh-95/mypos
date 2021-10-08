@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('clients.index')}}">{{trans('site.clients')}}</a></li>
<li class="active">{{trans('site.Edit')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('clients.update',['id'=>$client->id])}}"  method="get" >
@csrf	
<!-- {{method_field('post')}} -->

<div  class="form-group">
<label>{{trans('site.name')}}</label>
<input type="text" class="form-control"  name="name" value= "{{ $client->name}}" >



</div>
<div  class="form-group">
<label>{{trans('site.phone')}}</label>
<input type="text" class="form-control"  name="phone" value= "{{ $client->phone}}" >
</div>
<div  class="form-group">
<label>{{trans('site.phone')}}</label>
<input type="text" class="form-control"  name="phone" value= "{{ $client->phone}}" >
</div>

<div  class="form-group">
<label>{{trans('site.address')}}</label>
<textarea class="form-control"  name="address">{{$client->address}}</textarea> 


</div>

	

    
<button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button>


</form>
@endsection

