@extends('layouts.boostmaster')

@section('content')
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
         <div class="item-product-img">
  
            <div class="product-item-img">
            <img id="ff" src="">
            </div>
   
            <div class="product-item-img">
            <img id="gg" src="">
            </div>
   
            <div class="product-item-img">
            <img id="hh" src="">
            </div>
   
            <div class="product-item-img">
            <img id="ii" src="">
            </div>
   
            <div class="product-item-img">
            <img id="jj" src="">
            </div>
   
            <div class="product-item-img">
            <img id="kk" src="">
            </div>
   
            <div class="product-amount">
            <h3>Total <span>£18.00</span></h3>
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
                       <img id="product-show"  data-id="{{$row->id}}" class="product" src="{{ asset($row->product_image)}}" alt="img">
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
         console.log(response);
      }
   }) 
 });
});
</script>