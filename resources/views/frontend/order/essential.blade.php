@extends('layouts.boostmaster')

@section('content')
<style>
  .container {
  position: relative;
  font-family: Arial;
}

.loader {
   border: 16px solid #000000;
    border-top: 16px solid #ffffff;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 2s linear infinite;
}
.loader-div{
   width: 100%;
   height: 100%;
   position: absolute;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 99;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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
   position: relative
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
   /* position: relative;
    right: 30px;
    top: 33px; */
    border-radius: 0;
    padding: 5px 7px;
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
         <h6><span id="qty">0</span> per item <a href="#!" data-toggle="modal" data-target=".bd-example-modal-sm"><i
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
  
         <br>
         <!-- Top Product Img -->
         <div class="loadagain">
            <div class="loader-div" style="display: none">
               <div class="loader"></div>
            </div>
            <div class="item-product-img row">               
               @forelse($cartProduct as $row)
                  <div class="col-md-2 col-sm-6 col-12 mt-2">
                     <div class="d-flex">
                        <div class="">
                           @if($row->qty >= 2)
                           <span class="cart-qty display-3">{{ $row->qty }}</span>
                           @endif
                           <img src="{{ asset($row->product->product_image) }}">
                        </div>
                        <div style="margin-top: 1px">
                           <span onclick="IncreaseQty({{$row->product_id}})" class="cart-remove bg-success"><i class="fas fa-plus"></i></span><br>
                           @if($row->qty >= 2)
                              <span onclick="DecreaseQty({{$row->product_id}})" class="cart-remove bg-warning"><i class="fas fa-minus"></i></span><br>
                           @endif
                           <span onclick="Deleteproduct({{$row->product_id}})" class="cart-remove bg-danger"><i class="fas fa-trash-alt"></i></span>
                        </div>
                     </div>
                  </div>
                  <input type="hidden" class="qty" value="{{$row->qty}}">
                  <input type="hidden" class="sum" value="{{$row->qty * $row->product->price}}">
               @empty
                  <div class="col-md-2 col-sm-6 col-12">
                     <span class="cart-qty">0</span>
                     <img src="https://medifactia.com/wp-content/uploads/2018/01/placeholder-300x300.png">
                  </div>
               @endforelse
            </div>
            <br>
            <div class="product-amount">
               <h3>Total <span id="total">£ ...</span></h3>
            </div>

         </div>
         <p>Tap the product below to add it into your order</p>
         {{-- <form id="itemId" role="form" method="POST"> --}}
            {{-- @csrf --}}
            <div class="product-img-show-area">
               @foreach($product as $row)
                 <div class="product-modal-wrap">
                    <div class="product-boxed"  data-name="{{ $row->product_name }}">
                       <img id="product-show" onclick="addProduct({{$row->id}})" class="product" src="{{ asset($row->product_image)}}" alt="img">
                       <p><span>{{$row->product_name}}</span> <span>{{ $row->weight }}ml</span></p>
                    </div>
                    <a href="!#" data-toggle="modal" data-target=".product-info-details">Product info</a>
                 </div>
               @endforeach 
                 
            </div>
         {{-- </form>  --}}
         <div class="select-death">
            @if($edit == 'edit')
               <a href="{{ url('orders/overview') }}" class="btn btn-footer">Continue</a>
            @else
               <a href="{{ url('orders/select-delivery') }}" class="btn btn-footer">SELECT DATES</a>
            @endif
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
@push('js')
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script> 
$(document).ready(function(){
   getTotal();
})
function DecreaseQty(pId){
   $.ajax({
      type:"POST",
      url:"{{ url('orders/decreas') }}",
      data:{'productDecreas':pId,'_token':'{{csrf_token()}}'},
      dataType:"json",
      beforeSend:function(response){
         $('.loadagain').addClass('loading');
         $('.loader-div').show();
      },
      success:function(response){
         if(response.status === 'OK'){
            $('.loadagain').load(' .loadagain');
            getTotal();
            $('.loadagain').removeClass('loading');
            $('.loader-div').hide();
         }
      }
   });
}
function Deleteproduct(pdel){
   swal({
      title: "Are you sure?",
      text: "To continue this action!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
      .then((willDelete) => {
      if (willDelete) {
         swal("Your action has beed done! :)", {
            icon: "success",
            buttons: false,
            timer: 1000
         });
            $.ajax({
            type:"POST",
            url:"{{ url('orders/remove') }}",
            data:{'productdelete':pdel,'_token':'{{csrf_token()}}'},
            dataType:"json",
            beforeSend:function(response){
               $('.loadagain').addClass('loading');
               $('.loader-div').show();
            },
            success:function(response){ 
               if(response.status === 'OK'){
                  $('.loadagain').load(' .loadagain');
                  getTotal();
                  $('.loadagain').removeClass('loading');
                  $('.loader-div').hide();
               }
            }
         });
      }
   });
}

function IncreaseQty(pId){
   addProduct(pId);
}

function getTotal(){
   var sum = 0;
   var qty = 0;
   setTimeout(function(){
      $('.sum').each(function(e){
         sum = parseFloat(sum) + parseFloat($(this).val())||0; 
      });   
      $('.qty').each(function(e){
         qty = parseFloat(qty) + parseFloat($(this).val())||0; 
      });   
      $("#qty").text(qty);
      $("#total").text('£ '+sum);
   },800);
}

function addProduct(productId){
   $.ajax({
      type:"POST",
      url:"{{ url('orders/addcart') }}",
      data: {'product':productId,'_token':'{{csrf_token()}}'},
      dataType: "json",
      beforeSend:function(response){
               $('.loadagain').addClass('loading');
               $('.loader-div').show();
            },
      success:function(response){ 
         if(response){
           $('.loadagain').load(' .loadagain');
           getTotal();
           $('.loadagain').removeClass('loading');
           $('.loader-div').hide();
         }
      }
   }) 
}



</script>
@endpush