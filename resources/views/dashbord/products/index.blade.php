@extends('layouts.dashbord.app')
@section('content')


 <h1>{{trans('site.products')}}<small>{{$products->total()}}</small></h1>

<form action="{{route('products.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="{{trans('site.Search')}}" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {{trans('site.Search')}}</button>
<a href="{{route('products.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>{{trans('site.Add')}}</a>

</div>

<div class="col-md-4">
<select class="form-control" name="category_id">

<option value="">{{trans('site.all_categories')}}</option>
@foreach($categories as $category)


<option value="{{$category->id}}" {{ request()->category_id == $category->id ?'selected':' ' }} >{{$category->name }}</option>

@endforeach
</select>



</div>






</div>




</form>





 @if($products->count()>0)
 <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{trans('site.name')}}</th>
                      <th>{{trans('site.description')}}</th>
                      <th>{{trans('site.category')}}</th>
                      <th>{{trans('site.image')}}</th>
                      <th>{{trans('site.purchase_price')}}</th>
                      <th>{{trans('site.sale_price')}}</th>
                      <th>{{trans('site.profit_percent')}} </th>
                      <th>{{trans('site.stock')}}</th>
                      <th>{{trans('site.Control')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($products as $product)
                    <tr>
                      <td>{{$product->id}}</td>
                     
                      <td>{{$product->name}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->category->name}}</td>
                      <td><img src="{{$product->image_path}}" class="img-thumbnail" alt=""></td>
                      <td>{{$product->purchase_price}} </td>
                     
                      <td>{{$product->sale_price}}</td>
                      <td>{{$product->profit_percent}} %</td>
                      <td>{{$product->stock}}</td>

                      <td>
<a href="{{route('products.edit',['id'=>$product->id])}} "><button class="btn btn-info"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$product->id}}"><i class="fa fa-trash"></i>
{{trans('site.Delete')}}</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> {{$product->name}}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="{{route('products.destroy',['id'=>$product->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>



                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $products->appends(request()->query())->links() }}
              </div> 
              
@else
<h2>{{trans('site.no_data_found')}}</h2>

@endif





@endsection