@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('categories.index')}}">{{trans('site.categories')}}</a></li>
<li class="active">{{trans('site.Add')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('categories.store')}}"  method="post" >
@csrf	
{{method_field('post')}}


@foreach (config('translatable.locales') as $locale )

<label>{{__('site.' .$locale. '.name')}}</label>

<input type ="text" class="form-control" name="{{ $locale }}[name]" value="{{ old( $locale. '.name')}}" placeholder="name"  >


@endforeach
	

    
<button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-plus"></i>{{trans('site.Add')}}</button>


</form>
@endsection

