@extends('layouts.boostmaster')

@section('content')
<style>
  .container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  /* bottom: 20px;
  top: 20px; */
  margin-top: -99px;
  /* background-color: black; */
  color: white;
  /* padding-left: 20px;
  padding-right: 20px; */
}
.text-block-right{
   position: absolute;
  /* bottom: 20px;
  top: 20px; */
  margin-top: -50px;
  margin-left: 62px;
  /* background-color: black; */
  color: white;
  /* padding-left: 20px;
  padding-right: 20px; */
}
.loading{
   pointer-events: none;
   opacity: .5;
}

/* .btn-sm{
   padding:1px; 
   margin-top :25px;
} */
.cart-qty{
   position: absolute;
    font-weight: 600;
    background: #00000059;
    padding: 2px 9px;
    color: #fff;
    font-size: 25px;
}
.cart-remove{
   position: relative;
    right: 30px;
    top: 33px;
    border-radius: 0;
    padding: 5px 7px;
    background: red;
    color: #fff;
}
</style>
<!-- Content  Area -->
<section id="essentials-product">
    <div class="container">
     <div class="row">
      <div class="col-lg-12">
       <div class="essentials-logo-arae">
        <a href="{{url('/')}}"><img src="{{ asset('frontend/boost/assest/img/logo.png')}}" alt="logo"></a>
       </div>
       <div class="essentials-product-add-arae">
        <h2>Essentials Only.</h2>
        <div class="product-amount-arae">
         <h6>£6 per item <a href="#!" data-toggle="modal" data-target=".bd-example-modal-sm"><i
            class="fas fa-info-circle"></i></a></h6>
         <!-- modal area -->
         <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
          aria-hidden="true">
            <div class="modal-dialog modal-sm">
               <div class="modal-content" id="product-info-modal">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                  <div class="product-info-modal">
                  <h3><strong>Info.</strong></h3>
                  <h4>About our pricing.</h4>
                  <p>Our products are top quality, but we don’t charge top price. In a world where we are constantly bombarded
                  with marketing messages, we decided to introduce a single price point of £6. Enough for us to keep the
                  lights on and reinvest wisely. Not enough for a private jet. Price includes the delivery and you pay as you
                  go.</p>
                  </div>
               </div>
            </div>
         </div>
  
         <!-- Top Product Img -->
         <div class="loadagain">
            <div class="item-product-img">
               <div class="product-item-img"> 
                  <span class="cart-qty">7</span>
                  <img src="http://localhost/boost-project/public/uploads/productImage/1598095075.jpg">
                  <span onclick="DecreaseQty(1)" class="cart-remove"><i class="fas fa-minus"></i></span>
                  
               </div>
               @foreach($cartProduct as $row) 
                  <div class="product-item-img"> 
                     @if($row->qty >=2)
                     <span class="cart-qty">{{ $row->qty }}</span>
                     @endif
                     <img  src="{{ !empty($row->product->product_image) ? asset($row->product->product_image) : asset('/uploads/productImage/product.png') }}"> 
                     @if($row->qty == 1)
                        <span  onclick="Deleteproduct({{ $row->product_id }})"  class="cart-remove"><i class="far fa-trash-alt"></i></span>
                     @elseif($row->qty >= 1)
                        <span onclick="DecreaseQty({{$row->product_id}})" class="cart-remove"><i class="fas fa-minus"></i></span>
                     @endif 
                  </div>
                  <input type="hidden" class="sum" value="{{$row->qty * $row->product->price}}">
               @endforeach  
               <div class="product-amount">
                  <h3>Total <span id="total"></span></h3>
               </div>
      
            </div>
         </div>
         <p>Tap the product below to add it into your order</p>
         {{-- <form id="itemId" role="form" method="POST"> --}}
            {{-- @csrf --}}
            <div class="product-img-show-area">
               <!-- Product Bottom Img -->
               @foreach($product as $row)
                 <div class="product-modal-wrap">
                    <div class="product-boxed"  data-name="{{ $row->product_name }}">
                       <img id="product-show"  data-id="{{$row->id}}" class="product" src="{{ !empty($row->product_image) ? asset($row->product_image) : asset('/uploads/productImage/product.png') }}" alt="img">
                       {{-- <input type="hidden" name="product_id" value="{{$row->id}}"> --}}
                       <p><span>{{$row->product_name}}</span> <span>{{ $row->weight }}ml</span></p>
                    </div>
                    <a href="!#" data-toggle="modal" data-target=".product-info-details">Product info</a>
                 </div>
               @endforeach 
                 
            </div>
         {{-- </form>  --}}
         <div class="select-death">
          <a href="{{ url('orders/select-delivery') }}" class="btn btn-footer">SELECT DATES</a>
         </div>
        </div>
       </div>
      </div>
     </div>
  
    </div> 
   </section>
  
  
   <!-- modal area -->
   <div class="modal fade product-info-details" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
     <div class="modal-content" id="product-info-modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span>
      </button>
      <div class="product-info-modal indiv-product-modal">
       <h3><strong>Boost</strong></h3>
       <h4>Power Drinks</h4>
       <p>Our products are top quality, but we don’t charge top price. In a world where we are constantly bombarded
        with marketing messages, we decided to introduce a single price point of £6. Enough for us to keep the
        lights on and reinvest wisely. Not enough for a private jet. Price includes the delivery and you pay as you
        go.</p>
      </div>
     </div>
    </div>
   </div>
   @include('layouts.inc.footer.productFooter')
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script> 

function DecreaseQty(pId){
   $.ajax({
      type:"POST",
      url:"{{ url('orders/decreas') }}",
      data:{'productDecreas':pId,'_token':'{{csrf_token()}}'},
      dataType:"json",
      beforeSend:function(response){
         $('body').addClass('loading');
      },
      success:function(response){
         if(response.status === 'OK'){
            $('.loadagain').load(' .loadagain');
            getTotal();
            $('body').removeClass('loading');
         }
      }
   });
 }
 function Deleteproduct(pdel){
   $.ajax({
      type:"POST",
      url:"{{ url('orders/remove') }}",
      data:{'productdelete':pdel,'_token':'{{csrf_token()}}'},
      dataType:"json",
      beforeSend:function(response){
         $('body').addClass('loading');
      },
      success:function(response){ 
         if(response.status === 'OK'){
            $('.loadagain').load(' .loadagain');
            getTotal();
            $('body').removeClass('loading');
         }
      }
   });
 }
function getTotal(){
   var sum = 0;
   setTimeout(function(){
      
   $('.sum').each(function(e){
      sum = parseFloat(sum) + parseFloat($(this).val())||0; 
      console.log($(this).val());
   });
   console.log(sum);
   
      $("#total").text('£ '+sum);
   },800);
}

$(document).ready(function(){ 
   var imagename = [];
 $('img#product-show').on('click',function(){

  var productId = $(this).data('id');
//   alert(productId); 

   $.ajax({ 
      type:"POST",
      url:"{{ url('orders/addcart') }}",
      data: {'product':productId,'_token':'{{csrf_token()}}'},
      dataType: "json",
      success:function(response){ 
         if(response){
           $('.loadagain').load(' .loadagain');
           getTotal();
         }
         // console.log(response);
      }
   }) 
 });
});


</script>