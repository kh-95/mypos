@extends('layouts.dashbord.app')
@section('content')


 <h1>{{trans('site.Users')}}<small>{{$users->total()}}</small></h1>

<form action="{{route('users.index')}}" method="get">
<div class="row">
  <div class="col-md-4">
<input type="text" name="search" class="form-control" placeholder="{{trans('site.Search')}}" value="{{ request()->search }}">

</div>

<div class="col-md-4">

<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {{trans('site.Search')}}</button>
<a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>{{trans('site.Add')}}</a>
</div>

</div>




</form>





 @if($users->count()>0)
 <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>{{trans('site.First_name')}}</th>
                      <th>{{trans('site.Last_name')}}</th>
                      <th>{{trans('site.Email')}}</th>
                      <th>{{trans('site.image')}}</th>
                      <th>{{trans('site.Control')}}</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->first_name}}</td>
                      <td>{{$user->last_name}}</td>
                     
                      <td>{{$user->email}}</span></td>
                      <td><img src="{{$user->image_path}}" width="100px" alt=""></td>
                      <td>
                      <a href="{{route('users.edit',['id'=>$user->id])}} "><button class="btn btn-info"><i class="fa fa-edit"></i>{{trans('site.Edit')}}</button></a>

<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal{{$user->id}}"><i class="fa fa-trash"></i>
{{trans('site.Delete')}}</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete <span style="color:red";> {{$user->first_name}}</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <a href="{{route('users.destroy',['id'=>$user->id])}}"> <button type="button" class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>



                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                {{ $users->appends(request()->query())->links() }}
              </div> 
              
@else
<h2>{{trans('site.no_data_found')}}</h2>

@endif





@endsection