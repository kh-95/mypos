@extends('user.home')
@section('content')

<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup home-3" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.html" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
    </form>
</div>
<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="/user/assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="/user/assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Abir Khan</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="/user/assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Rex Rifat</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="/user/assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="/user/assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="/user/assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area home-3" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="/user/assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
           
            
          
          
            
          
          @foreach($user->products as $product) 
          


            <div class="single-product-item">
           
        
                    <div class="thumb">
                    <img src="{{$product->image_path}}"  style="width: 80px; height:80px"; alt="recent review">
                </div>

                <div class="content">
                    <h4 class="title">{{$product->name}}</h4>
                    <span id="countp {{$product->id}} "> </span>
                    <div class="price"><span class="pprice">{{$product->sale_price}}</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->  
            
            @endforeach
          
            </div> 
     
            


            <div id="sideee"></div>
            <div class="btn-wrapper">
                <a href="{{route('user.checkout')}}" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
<!-- process area start -->
<div class="process-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 remove-col-padding">
                <div class="single-process-item-one"><!-- single process item one -->
                    <h4 class="tiel">Free Shipping</h4>
                    <span class="details">Free shipping on all order</span>
                </div><!-- //.single process item one -->
            </div>
            <div class="col-lg-4 col-md-6 remove-col-padding">
                <div class="single-process-item-one border-left-none border-right-none"><!-- single process item one -->
                    <h4 class="tiel">Money Return</h4>
                    <span class="details">30 days for free return</span>
                </div><!-- //.single process item one -->
            </div>
            <div class="col-lg-4 col-md-6 remove-col-padding">
                <div class="single-process-item-one"><!-- single process item one -->
                    <h4 class="tiel">Online Support</h4>
                    <span class="details">Support 24 hours a day</span>
                </div><!-- //.single process item one -->
            </div>
        </div>
    </div>
</div>
<!-- process area end -->

<!-- best seller area two start -->
<div class="best-seller-area-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="best-seller-two-filter-menu">
                    <ul class="nav nav-tabs"  role="tablist">
                        <li class="nav-item">
                                <a class="nav-link active" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">popular item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="bestseller-tab" data-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="false">Best sellers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="featuredItem-tab" data-toggle="tab" href="#featuredItem" role="tab" aria-controls="featuredItem" aria-selected="false">featured item</a>
                        </li>
                    </ul>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 remove-col-padding">
                <div class="best-seller-two" >
                        <div class="tab-content" >
                            <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                <div class="row">

                                @foreach($products as $product)
                                    <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                        <div class="single-product-item-two">
                                            <div class="img-wrapper">
                                                <img src="{{$product->image_path}}" width="200px" height="200px" alt="product image">
                                                <div class="hover">
                                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                                    <a   data_id="{{$product->id}}" class="addtocart">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <a href="#" class="category ">{{$product->category->name}}</a>
                                                <h4 class="title" ><span id="proname">{{$product->name}}</span></h4>
                                                <div class="price"><span class="sprice"> ${{$product->sale_price}}</span> <del class="dprice">$45.00</del></div>
                                            </div>
                                        </div>
                                    </div><!-- //.single product item two -->
                                 
                                 @endforeach
                                
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                        <div class="single-product-item-two">
                                            <div class="img-wrapper">
                                                <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                <div class="hover">
                                                    <a href="#" class="addtocart">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <a href="#" class="category">sportswear</a>
                                                <h4 class="title">Black Tshirt Brock</h4>
                                                <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                            </div>
                                        </div>
                                    </div><!-- //.single product item two -->
                                  
                                   
                                   
                                   
                                </div>
                            </div>
                          
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- best seller area two end -->

<!-- speakers area start -->
<div class="speakers-area speakder-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title rubik-font home-3"><!--  -->
                     <span class="subtitle">get 50% offer</span>
                     <h2 class="title">JBL Speakers</h2>
                     <p>Stock up on sportswear and limited edition collections on our awesome mid-season sale.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="img-wrapper">
                <img src="/user/assets/img/jbp-speaker.png" alt="jbp speakders">
            </div>
        </div>
    </div>
</div>
<!-- speakers area end -->

<!-- best seller area four start -->
<div class="best-seller-area-four">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="best-seller-two-filter-menu">
                        <ul class="nav nav-tabs"  role="tablist">
                            <li class="nav-item">
                                    <a class="nav-link active" id="popular-tab_2" data-toggle="tab" href="#popular_2" role="tab" aria-controls="popular_2" aria-selected="true">popular item</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="bestseller-tab_2" data-toggle="tab" href="#bestseller_2" role="tab" aria-controls="bestseller_2" aria-selected="false">Best sellers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featuredItem-tab_2" data-toggle="tab" href="#featuredItem_2" role="tab" aria-controls="featuredItem_2" aria-selected="false">featured item</a>
                            </li>
                        </ul>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 remove-col-padding">
                    <div class="best-seller-four">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="popular_2" role="tabpanel" aria-labelledby="popular-tab_2">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0001.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0002.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0003.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0004.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0005.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0006.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0007.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0008.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/0009.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/00010.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/00011.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-two"><!-- single rated box two -->
                                                        <div class="thumb">
                                                            <img src="/user/assets/img/product-small/00012.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box two -->
                                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bestseller_2" role="tabpanel" aria-labelledby="bestseller-tab_2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-two"><!-- single rated box two -->
                                                    <div class="thumb">
                                                        <img src="/user/assets/img/product-small/0001.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0002.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0003.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0004.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0005.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0006.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0007.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0008.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0009.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00010.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00011.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00012.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="featuredItem_2" role="tabpanel" aria-labelledby="featuredItem-tab_2">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-two"><!-- single rated box two -->
                                                    <div class="thumb">
                                                        <img src="/user/assets/img/product-small/0001.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0002.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0003.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0004.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0005.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0006.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0007.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0008.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/0009.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00010.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00011.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-rated-box-two"><!-- single rated box two -->
                                                <div class="thumb">
                                                    <img src="/user/assets/img/product-small/00012.jpg" alt="product small image">
                                                </div>
                                                <div class="content">
                                                    <ul class="ratings">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star-half-alt"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                </div>
                                            </div><!-- //.single rated box two -->
                                        </div>
                                    </div>
                                </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- best seller area four end -->

<!-- banner add area two start -->
<div class="banner-add-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
               <div class="banner-inner-wrapper">
                    <a href="#">
                        <img src="/user/assets/img/banner-add/001.jpg" alt="banner add">
                    </a>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="banner-inner-wrapper">
                    <a href="#">
                        <img src="/user/assets/img/banner-add/002.jpg" alt="banner add">
                    </a>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- banner add area two end -->
<!-- best seller area two start -->
<div class="best-seller-area-five">
        <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="best-seller-two-filter-menu">
                            <ul class="nav nav-tabs"  role="tablist">
                                <li class="nav-item">
                                        <a class="nav-link active" id="popular-tab_3" data-toggle="tab" href="#popular_3" role="tab" aria-controls="popular_3" aria-selected="true">popular item</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="bestseller-tab_3" data-toggle="tab" href="#bestseller_3" role="tab" aria-controls="bestseller_3" aria-selected="false">Best sellers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="featuredItem-tab_3" data-toggle="tab" href="#featuredItem_3" role="tab" aria-controls="featuredItem_3" aria-selected="false">featured item</a>
                                </li>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 remove-col-padding">
                        <div class="best-seller-two" >
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="popular_3" role="tabpanel" aria-labelledby="popular-tab_3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">sportswear</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/002.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Footwear Dark</h4>
                                                        <div class="price"><span class="sprice">$65.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/003.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">accesories</a>
                                                        <h4 class="title">Milo Hoverboard</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/004.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$32.00</span> <del class="dprice">$54.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/005.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">hat</a>
                                                        <h4 class="title">Red Yello Hat</h4>
                                                        <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$155.00</del></div>
                                                    </div>
                                                </div>
                                                
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/006.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">cycle</a>
                                                        <h4 class="title">Minimal Cycle</h4>
                                                        <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/007.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">bike</a>
                                                        <h4 class="title">Dart Moto Bike</h4>
                                                        <div class="price"><span class="sprice">$98.00</span> <del class="dprice">$1200.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">electric </a>
                                                        <h4 class="title">Minimal Screw</h4>
                                                        <div class="price"><span class="sprice">$47.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">sportswear</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/002.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Footwear Dark</h4>
                                                        <div class="price"><span class="sprice">$65.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/003.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">accesories</a>
                                                        <h4 class="title">Milo Hoverboard</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/004.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$32.00</span> <del class="dprice">$54.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/005.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">hat</a>
                                                        <h4 class="title">Red Yello Hat</h4>
                                                        <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$155.00</del></div>
                                                    </div>
                                                </div>
                                                
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/006.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">cycle</a>
                                                        <h4 class="title">Minimal Cycle</h4>
                                                        <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/007.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">bike</a>
                                                        <h4 class="title">Dart Moto Bike</h4>
                                                        <div class="price"><span class="sprice">$98.00</span> <del class="dprice">$1200.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">electric </a>
                                                        <h4 class="title">Minimal Screw</h4>
                                                        <div class="price"><span class="sprice">$47.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featuredItem_3" role="tabpanel" aria-labelledby="featuredItem-tab_3">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">sportswear</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/002.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Footwear Dark</h4>
                                                        <div class="price"><span class="sprice">$65.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="assets/img/product-small/003.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">accesories</a>
                                                        <h4 class="title">Milo Hoverboard</h4>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/004.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">shoe</a>
                                                        <h4 class="title">Black Tshirt Brock</h4>
                                                        <div class="price"><span class="sprice">$32.00</span> <del class="dprice">$54.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/005.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">hat</a>
                                                        <h4 class="title">Red Yello Hat</h4>
                                                        <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$155.00</del></div>
                                                    </div>
                                                </div>
                                                
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6 "><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/006.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">cycle</a>
                                                        <h4 class="title">Minimal Cycle</h4>
                                                        <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/007.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">bike</a>
                                                        <h4 class="title">Dart Moto Bike</h4>
                                                        <div class="price"><span class="sprice">$98.00</span> <del class="dprice">$1200.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                            <div class="col-lg-3 col-md-6"><!-- single product item two -->
                                                <div class="single-product-item-two">
                                                    <div class="img-wrapper">
                                                        <img src="/user/assets/img/product-small/001.jpg" alt="product image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <a href="#" class="category">electric </a>
                                                        <h4 class="title">Minimal Screw</h4>
                                                        <div class="price"><span class="sprice">$47.00</span> <del class="dprice">$85.00</del></div>
                                                    </div>
                                                </div>
                                            </div><!-- //.single product item two -->
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection