<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:34:27 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bigenja | Online Shopping Ecommerce Cart Html Template </title>
    <!-- favicon -->
  @include('user.style') 
</head>

<body> 
 
@include('user.supportbar')



@include('user.nav')
@include('user.header')

@yield('content')
<!-- footer area one start -->
@include('user.footer')
<!-- footer area one end -->

    <!-- back to top start -->
    <div class="back-to-top bg-orange">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

   @include('user.script')

<script>

$(document).on('click','.addtocart',function(e){



var id =$(this).attr("data_id");
var price =$(this).parent().parent().parent().find(".sprice").html();

$.ajax({
url:"{{ url("/add/to/cart")}}/"+id,
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
method:"get",

data:{id_pro:id,price_pro:price},

success:function(data){
var data_int= parseInt(data);
if(Number.isInteger(data_int)){
$("#countp" + id).text(data);
    // alert(data);
}else{
    $("#sideee").append(data);
    
}
}


});
$.ajax({
url:"{{ url("/add/to/cart2")}}/"+id,
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
method:"get",

data:{id_pro:id,price_pro:price},

success:function(data){

    $("#chart").html(data);

}
});

});
</script>










</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:35:11 GMT -->
</html>