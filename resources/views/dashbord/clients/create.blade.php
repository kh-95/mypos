@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('clients.index')}}">{{trans('site.clients')}}</a></li>
<li class="active">{{trans('site.Add')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('clients.store')}}"  method="post" >
@csrf	
{{method_field('post')}}

<div  class="form-group">
<label>{{trans('site.name')}}</label>
<input type="text" class="form-control"  name="name" value= "{{ old('name')}}" >



</div>
<div  class="form-group">
<label>{{trans('site.phone')}}</label>
<input type="text" class="form-control"  name="phone" value= "{{ old('phone')}}" >
</div>
<div  class="form-group">
<label>{{trans('site.phone')}}</label>
<input type="text" class="form-control"  name="phone" value= "{{ old('phone')}}" >
</div>

<div  class="form-group">
<label>{{trans('site.address')}}</label>
<textarea class="form-control"  name="address">{{ old('address')}}</textarea> 


</div>

	

    
<button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-plus"></i>{{trans('site.Add')}}</button>


</form>
@endsection

