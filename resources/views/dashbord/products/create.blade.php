@extends('layouts.dashbord.app')
@section('content')

<li class="breadcrumb-item"><a href="{{route('products.index')}}">{{trans('site.products')}}</a></li>
<li class="active">{{trans('site.Add')}}</li>
@include('partials.errors')
<form class="form-group" action="{{route('products.store')}}"  method="post" enctype="multipart/form-data" >
@csrf	
{{method_field('post')}}

<div class="form-group">

<label>{{trans('site.categories')}}</label>

<select name="category_id" class="form-control"  >



@foreach($categories as $category)

<option value="{{$category->id}}" >{{$category->name}}</option>
@endforeach
</select>

</div>

@foreach (config('translatable.locales') as $locale )

<label>{{trans('site.' .$locale. '.name')}}</label>

<input type ="text" class="form-control" name="{{ $locale }}[name]" value="{{ old( $locale. '.name')}}" placeholder="name"  >

<label>{{trans('site.' .$locale. '.description')}}</label>

<textarea  class="form-control" name="{{ $locale }}[description]" >{{ old( $locale. '.description')}}</textarea>
@endforeach
<label>{{trans('site.image')}}</label>
    <input type ="file" class="form-control image" name="image"  placeholder="image">
    <div>
  <img src="{{asset('uploads/product_images/default.png')}}"  class="img-thumbnail image-preview" alt="">
  </div>
<label>{{trans('site.purchase_price')}}</label>
    <input type ="number" class="form-control " name="purchase_price"  placeholder="purchase_price" >
    <label>{{trans('site.sale_price')}}</label>
    <input type ="number" class="form-control " name="sale_price"  placeholder="sale_price"  >
    <label>{{trans('site.stock')}}</label>
    <input type ="number" class="form-control " name="stock"  placeholder="stock" >

   
 





	

    
<button type ="submit" class="btn btn-primary"  value="submit"><i class="fa fa-plus"></i>{{trans('site.Add')}}</button>


</form>
@endsection

