@extends('layouts.dashbord.app')
@section('content')


 <h1>{{trans('site.categories')}}<small>{{$categories->total()}}</small></h1>

<form action="{{route('categories.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="{{trans('site.Search')}}" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {{trans('site.Search')}}</button>
<a href="{{route('categories.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>{{trans('site.Add')}}</a>
</div>

</div>




</form>





 @if($categories->count()>0)
 <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{trans('site.name')}}</th>
                    
            <th>{{trans('products_count')}}</th>
            <th>{{trans('related_products')}}</th>
                      <th>{{trans('site.Control')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                     
                      <td>{{$category->name}}</td>
                     <td>{{$category->products->count()}}</td>
                     <td><a href="{{route('products.index',['category_id'=>$category->id])}}" class="btn btn-info">{{trans('related_products')}}</a></td>
                      <td>
                      <a href="{{route('categories.edit',['id'=>$category->id])}} "><button class="btn btn-info"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$category->id}}"><i class="fa fa-trash"></i>
{{trans('site.Delete')}}</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> {{$category->name}}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="{{route('categories.destroy',['id'=>$category->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>



                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $categories->appends(request()->query())->links() }}
              </div> 
              
@else
<h2>{{trans('site.no_data_found')}}</h2>

@endif





@endsection