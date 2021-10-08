<div id="print-area">
    <table class="table table-hover table-bordered">

        <thead>
        <tr>
            <th>{{trans('site.name')}}</th>
            <th>{{trans('site.quantity')}}</th>
            <th>{{trans('site.price')}}</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <span></span>
                <td>{{ $product->pivot->quantity }}</td>
                <td>{{ number_format($product->pivot->quantity * $product->sale_price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h3>{{trans('site.total')}} <span>{{ $order->total_price }}</span></h3>

</div>

<button class="btn btn-block btn-primary print-btn"><i class="fa fa-print"></i> {{trans('site.print')}}</button>
