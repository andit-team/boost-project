@extends('admin.layout.master') 
@section('content') 
@push('css')
<style>
    .fa {
        padding: 4px;
        font-size: 16px;
    }
    .m-l-approve{
        margin-left:65px; margin-top:-35px;
    }
    .m-l-reject{
        margin-left:140px; margin-top:-27px;
    } 
</style>
@endpush 
@include('elements.alert') 
@component('admin.layout.inc.breadcrumb') 
@slot('pageTitle') Subscriptio Order List
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Subscription</li>
@endslot
 @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- <div class="card-header">
                        <h5> Product List</h5>
                    </div> -->
                <div class="card-body">  
                        <div class="card-body order-datatable">
                            <div class="text-right pb-3">
                                {{-- <a href="{{ url('boostadmin/customer/new-profile') }}" class="btn btn-md btn-info" title="create">Add New</a> --}}
                            </div> 
                            {{-- <hr>  --}}
                                <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                    <thead>
                                        <tr> 
                                            <th class="50r">#Sl</th>
                                            <th>Invoice Number</th>
                                            <th>Products</th>
                                            <th>Total</th>
                                            <th>Payment Status</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                            @forelse($orders as $order)
                                            <tr>
                                              <td class="text-center">{{sprintf('%02d',++$i)}}</td>
                                              <td> <a href="{{ url('boostadmin/invoice-customer/'.$order->id) }}"> #{{$order->invoice}} </a></td>
                                              <td>
                
                                                @php 
                                                    $products = '';
                                                    $total = 0;
                                                @endphp
                                                @foreach($order->items as $cart)
                                                    @php
                                                        $total += $cart->qty*$cart->price;
                                                        $products .= $cart->product->product_name.' , '; 
                                                    @endphp
                                                @endforeach
                                                {{rtrim($products,' , ')}}
                
                                              </td>
                                              <td class="text-left">
                                                £ {{$total}}
                                              </td>
                                              <td class="text-left">
                                                {{ucfirst($order->payment_status)}}
                                              </td>
                                            </tr>
                                            @empty
                
                                            <tr>
                                              <td colspan="3">No Order yet</td>
                                            </tr>
                                            @endforelse
                                          </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
  <script>
       $(".btnClosePopup").click(function () {
            $(".feednewsmodal").modal("hide");
        });

        $('#saveReason').click(function(e){ 
    e.preventDefault();
    const name = $('#rej_name').val(); 
    if(name == '' ){
        alert ('Required Filed Must be filled');
    }else{
        var formData = $("#rejectId").serialize(); 
        $.ajax({
            type: 'POST',
            url:"{{ url('/andbaazaradmin/reject-name/') }}", 
            data: formData,
            dataType: "json",
            success: function(response){
                var name = $('#rej_name').val(''); 
                if(response){
                    $("#again").load(" #again");
                } 
            }
        })
    }
});
  </script>
@endpush
