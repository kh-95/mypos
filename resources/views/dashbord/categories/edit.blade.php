@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('categories.index')}}">{{trans('site.categories')}}</a></li>
<li class="active">{{trans('site.Edit')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('categories.update',['id'=>$category->id])}}"  method="get"    >
@csrf	
<!-- {{method_field('put')}} -->
@foreach (config('translatable.locales') as $locale )

<label>{{trans('site.' .$locale. '.name')}}</label>

<input type ="text" class="form-control" name="{{ $locale }}[name]" value="{{$category->name}}" placeholder="name"  >


@endforeach







    <button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button>


</form>





@endsection