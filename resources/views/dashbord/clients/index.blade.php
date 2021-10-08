@extends('layouts.dashbord.app')
@section('content')


 <h1>{{trans('site.clients')}}<small>{{$clients->total()}}</small></h1>

<form action="{{route('clients.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="{{trans('site.Search')}}" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {{trans('site.Search')}}</button>
<a href="{{route('clients.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>{{trans('site.Add')}}</a>
</div>

</div>




</form>





 @if($clients->count()>0)
 <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{trans('site.name')}}</th>
                    
            <th>{{trans('site.phone')}}</th>
            <th>{{trans('site.address')}}</th>
            <th>{{trans('site.add_order')}}</th>
                      <th>{{trans('site.Control')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($clients as $client)
                    <tr>
                      <td>{{$client->id}}</td>
                     
                      <td>{{$client->name}}</td>
                     <td>{{$client->phone}}</td>
                     <td>{{$client->address}}</td>
                     <td><a href="{{route('clients.orders.create',$client->id)}}" class="btn btn-primary btn-sm">{{trans('site.add_order')}}</a></td>
                      <td>
                      <a href="{{route('clients.edit',['id'=>$client->id])}} "><button class="btn btn-info"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$client->id}}"><i class="fa fa-trash"></i>
{{trans('site.Delete')}}</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> {{$client->name}}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="{{route('clients.destroy',['id'=>$client->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>



                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $clients->appends(request()->query())->links() }}
              </div> 
              
@else
<h2>{{trans('site.no_data_found')}}</h2>

@endif





@endsection