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
    .hc{
        background-color: #00A9DF!important;
    }
</style>
@endpush 
@include('elements.alert') 
@component('admin.layout.inc.breadcrumb') 
@slot('pageTitle') Invoice
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Invoice</li>
@endslot
 @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12"> 
            <div class="container">
                <div class="card">
                    <div class="card-header hc">
                        Invoice number: {{ $invoice->invoice_number }}
                        <strong></strong>
                        <span class="float-right"> <strong>Invoice Date:</strong> {{ date('d-M-Y',strtotime($invoice->created_at)) }}</span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <h6 class="mb-3">From:</h6>
                                <div>
                                    <strong>Boost</strong>
                                </div>
                                <div>Madalinskiego 8</div>
                                <div>71-101 Szczecin, Poland</div>
                                <div>Email: info@boost.com</div>
                                <div>Phone: </div>
                            </div>
            
                            <div class="col-sm-6">
                                {{-- <h6 class="mb-3">To:</h6>
                                <div>
                                    <strong>Bob Mart</strong>
                                </div>
                                <div>Attn: Daniel Marek</div>
                                <div>43-190 Mikolow, Poland</div>
                                <div>Email: marek@daniel.com</div>
                                <div>Phone: +48 123 456 789</div> --}}
                            </div>
                        </div>
            
                        <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
            
                                        <th class="right">Product Price</th>
                                        <th class="center">Qty</th>
                                        <th class="right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i =0; @endphp
                                    <tr>
                                        <td class="center">{{ ++$i }}</td>
                                        <td class="left strong">{{$invoice->product->product_name}}</td>
                                        <td class="left">Extended License</td>
            
                                        <td class="right">{{$invoice->product->price}}</td>
                                        <td class="center">1</td>
                                        <td class="right">{{$invoice->product->price}}.00</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"></div>
            
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left">
                                                <strong style="margin-left: 37px!important">Subtotal</strong>
                                            </td>
                                            <td class="right ml-5">{{$invoice->product->price}}.00 €</td>
                                        </tr>
                                        {{-- <tr>
                                            <td class="left">
                                                <strong>Discount (20%)</strong>
                                            </td>
                                            <td class="right">$1,699,40</td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <strong>VAT (10%)</strong>
                                            </td>
                                            <td class="right">$679,76</td>
                                        </tr> --}}
                                        <tr>
                                            <td class="left">
                                                <strong style="margin-left: 37px!important">Total</strong>
                                            </td>
                                            <td class="right">
                                                <strong>{{$invoice->product->price}}.00 €</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>             
        </div>
    </div>
</div>
@endsection

