@extends('layouts.dashbord.app')

@section('content')



       

            <h1>{{trans('site.orders')}}
                <small>{{ $orders->total() }} </small>
            </h1>

            

       

        <section class="content">

            <div class="row">

                <div class="col-md-8">

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title" style="margin-bottom: 10px">{{trans('site.orders')}}</h3>

                            <form action="{{ route('orders.index') }}" method="get">

                                <div class="row">

                                    <div class="col-md-8">
                                        <input type="text" name="search" class="form-control" placeholder="{{trans('site.search')}}" value="{{ request()->search }}">
                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> {{trans('site.search')}}</button>
                                    </div>

                                </div><!-- end of row -->

                            </form><!-- end of form -->

                        </div><!-- end of box header -->

                        @if ($orders->count() > 0)

                            <div class="box-body table-responsive">

                                <table class="table table-hover">
                                    <tr>
                                        <th>{{trans('site.client_name')}}</th>
                                        <th>{{trans('site.price')}}</th>
                                    
                                        <th>{{trans('site.created_at')}}</th>
                                        <th>{{trans('site.action')}}</th>
                                    </tr>

                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $order->client->name }}</td>
                                            <td>{{ $order->total_price }}</td>
                                        
                                            <td>{{ $order->created_at }}</td>
                                            <td>
                                            <button class="btn btn-primary btn-sm order-products"
                                                        data-url="{{ route('orders.products', $order->id) }}"
                                                        data-method="get"
                                                >
                                                    <i class="fa fa-list"></i>
                                                    @lang('site.show')
                                                </button>
                                              
                                                    <a href="{{ route('clients.orders.edit', [
                                                        'client_id' => $order->client->id,
                                                         'order_id' => $order->id]) }}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> @lang('site.Edit')</a>
                                              

                                                
                                                    <form action="{{ route('orders.destroy', $order->id) }}"  style="display: inline-block;">
                                                        {{ csrf_field() }}
                                                       
                                                        <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i> @lang('site.Delete')</button>
                                                    </form>

          
                                            </td>

                                        </tr>

                                    @endforeach

                                </table><!-- end of table -->

                                {{ $orders->appends(request()->query())->links() }}

                            </div>

                        @else

                            <div class="box-body">
                                <h3>{{trans('site.no_records')}}</h3>
                            </div>

                        @endif

                    </div><!-- end of box -->

                </div><!-- end of col -->

                <div class="col-md-4">

                    <div class="box box-primary">

                        <div class="box-header">
                            <h3 class="box-title" style="margin-bottom: 10px">{{trans('site.show_products')}}</h3>
                            
                        </div><!-- end of box header -->

                        <div class="box-body">

                            <div style="display: none; flex-direction: column; align-items: center;" id="loading">
                                <div class="loader"></div>
                                <p style="margin-top: 10px">{{trans('site.loading')}}</p>
                            </div>

                            <div id="order-product-list">

                            </div><!-- end of order product list -->

                        </div><!-- end of box body -->

                    </div><!-- end of box -->

                </div><!-- end of col -->

            </div><!-- end of row -->

        </section><!-- end of content section -->

    </div><!-- end of content wrapper -->

@endsection
