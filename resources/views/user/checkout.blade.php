
@extends('user.home')
@section('content')


<body>
    

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Checkout</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- checkout page content area start -->
<div class="checkout-page-content-area">
    
<div class="col-lg-6">
                <div class="right-content-area">
                    <h3 class="title">Your Order</h3>
                    
                    @foreach($carts as $cart)
                    <ul class="order-list">
                        <li>

                            <div class="single-order-list heading">



                            Product_id:{{$cart->product_id}} <span class="right"> Quantity:{{$cart->count}}</span> 
                            </div>
                        </li>
                        
                      
                      
                        <li>
                            <div class="single-order-list title-bold">
                                Price <span class="right normal">{{$cart->total_price}}</span>
                            </div>
                        </li>
                     
                    </ul>
                 
                @endforeach
                <h4 >
                                Total_price <span id="price" class="right normal"></span>
                            </h4>
        <a id="checkout" href="{{route('user.payment',$total_price)}}"
                               role="button" class="btn  btn-success px-3 waves-effect waves-light">Confirm_purchase
                     </a>
                     <div class="col-md-4 mb-4">
                    <h3>اختر وسيله الدفع المناسبه</h3>

                    <div id="showPayForm"></div>

                    @if(isset($success))
                           <div class="alert alert-success text-center">
                                  تم الدفع بنجاح
                           </div>
                        @endif


                    @if(isset($fail))
                        <div class="alert alert-danger text-center">
                            فشلت عملية الدفع
                        </div>
                    @endif

                </div>

      
                            
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script>
<div class="container mt-5 text">
    <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>
    </div>


                </div>
            </div>
            </body>





</div>
<!-- checkout page content area end -->








    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

   @endsection





