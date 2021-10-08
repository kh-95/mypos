@extends('layouts.dashbord.app')
@section('content')
<li class="breadcrumb-item"><a href="{{route('clients.index')}}">{{trans('site.clients')}}</a></li>
<li class="active">{{trans('site.add_order')}}</li>
    

<section class="content">

    <div class="row">

        <div class="col-md-6">

            <div class="box box-primary">

                <div class="box-header">

                    <h3 class="box-title" style="margin-bottom: 10px">{{trans('site.categories')}}</h3>

                </div><!-- end of box header -->

                <div class="box-body">

                    @foreach ($categories as $category)
                        
                        <div class="panel-group">

                            <div class="panel panel-info">

                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#cat{{  $category->id}}">{{ $category->name }}</a>
                                    </h4>
                                </div>

                                <div id="cat{{  $category->id }}" class="panel-collapse collapse">

                                    <div class="panel-body">

                                        @if ($category->products->count() > 0)

                                            <table class="table table-hover">
                                                <tr>
                                                    <th>@lang('site.name')</th>
                                                    <th>@lang('site.stock')</th>
                                                    <th>@lang('site.price')</th>
                                                    <th>@lang('site.Add')</th>
                                                </tr>

                                                @foreach ($category->products as $product)
                                                    <tr>
                                                        <td>{{ $product->name }}</td>
                                                        <td>{{ $product->stock }}</td>
                                                        <td>{{ number_format($product->sale_price, 2) }}</td>
                                                        <td>
    <a href="" id="product-{{ $product->id }}"data-name="{{ $product->name }}" data-id="{{ $product->id }}"
data-price="{{ $product->sale_price }}" class="btn btn-success btn-sm add-product-btn">
     <i class="fa fa-plus"></i>
                </a>
         </td>
         </tr>
                                                @endforeach

                                            </table><!-- end of table -->

                                        @else
                                            <h5>{{trans('site.no_records')}}</h5>
                                        @endif

                                    </div><!-- end of panel body -->

                                </div><!-- end of panel collapse -->

                            </div><!-- end of panel primary -->

                        </div><!-- end of panel group -->

                    @endforeach

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </div><!-- end of col -->
        <div class="col-md-6">

<div class="box box-primary">

    <div class="box-header">

        <h3 class="box-title">{{trans('site.orders')}}</h3>

    </div><!-- end of box header -->

    <div class="box-body">

        <form action="{{ route('clients.orders.store', $client->id) }}" method="post">

            {{ csrf_field() }}
            {{ method_field('post') }}

            @include('partials.errors')

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>{{trans('site.product')}}</th>
                    <th>{{trans('site.quantity')}}</th>
                    <th>{{trans('site.price')}}</th>
                </tr>
                </thead>

                <tbody class="order-list">


                </tbody>

            </table><!-- end of table -->

            <h4>{{trans('site.total')}} : <span class="total-price">0</span></h4>

            <button class="btn btn-primary btn-block disabled" id="add-order-form-btn"><i class="fa fa-plus"></i> {{trans('site.add_order')}}</button>

        </form>

    </div><!-- end of box body -->

</div><!-- end of box -->

@if ($client->orders->count() > 0)

<div class="box box-primary">

    <div class="box-header">

        <h3 class="box-title" style="margin-bottom: 10px">@lang('site.previous_orders')
            <small>{{ $orders->count() }}</small>
        </h3>

    </div><!-- end of box header -->

    <div class="box-body">

        @foreach ($orders as $order)

            <div class="panel-group">

                <div class="panel panel-success">

                    <div class="panel-heading">
            <h4 class="panel-title">
    <a data-toggle="collapse" href="#{{ $order->created_at->format('d-m-Y-s') }}">{{ $order->created_at->toFormattedDateString() }}</a>
                        </h4>
            </div>

                    <div id="{{ $order->created_at->format('d-m-Y-s') }}" class="panel-collapse collapse">

                        <div class="panel-body">

                            <ul class="list-group">
                                @foreach ($order->products as $product)
                                    <li class="list-group-item">{{ $product->name }}</li>
                                @endforeach
                            </ul>

                        </div><!-- end of panel body -->

                    </div><!-- end of panel collapse -->

                </div><!-- end of panel primary -->

            </div><!-- end of panel group -->

        @endforeach

        {{ $orders->links() }}

    </div><!-- end of box body -->

</div><!-- end of box -->

@endif



</div><!-- end of col -->

</div><!-- end of row -->

</section><!-- end of content -->
@endsection