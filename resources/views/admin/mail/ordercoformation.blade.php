<html>
    <head>
        <style>
            * {
                margin: 0;
                padding: 0;
                border: none;
                outline: none;
            }
            .delivary-date-arae {
                padding-top: 0px !important;
            }
            .head-info p {
                color: #000;
                font-size: 14px;
                font-weight: normal;
                line-height: 18px;
            }
            .container {
                max-width: 960px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            .row {
                display: flex;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            .mb-4,
            .my-4 {
                margin-bottom: 1.5rem !important;
            }
            .mt-3,
            .my-3 {
                margin-top: 1rem !important;
            }
            .d-flex {
                display: -ms-flexbox !important;
                display: flex !important;
            }
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
            }
            .mt-2,
            .my-2 {
                margin-top: 0.5rem !important;
            }
            thead {
                display: table-header-group;
                vertical-align: middle;
                border-color: inherit;
            }
            tr {
                display: table-row;
                vertical-align: inherit;
                border-color: inherit;
            }
            th {
                text-align: inherit;
            }
            tbody {
                display: table-row-group;
                vertical-align: middle;
                border-color: inherit;
            }
            tfoot {
                display: table-footer-group;
                vertical-align: middle;
                border-color: inherit;
            }
            tr {
                display: table-row;
                vertical-align: inherit;
                border-color: inherit;
            }
            .table td,
            .table th {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }
            .text-right {
                text-align: right !important;
            }
            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }
            .table td,
            .table th {
                padding: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
            }
            .text-center {
                text-align: center !important;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <section style="background: #f5f4f4; box-shadow: 5px 0px 16px 4px #00000003; padding: 20px 30px;">
                <div class="container">
                    <div class="invoice-head mt-3 mb-4">
                        <div class="company-info" style="float: left; width: 50%; height: 110px;">
                            <img src="{{asset('frontend/boost/assest/img/logo3.png')}}" alt="" style="width: 190px; height: auto;" />
                        </div>
                        <div class="customer-info head-info" style="text-align: right;">
                            <p>
                                Boost App ltd. <br />
                                48-49 Princes Place <br />
                                London <br />
                                W11 4QA <br />
                                Email: essentials@takk.co.uk <br />
                                CRN: 11160506 <br />
                                VAT ID: 322111665
                            </p>
                        </div>
                    </div>
                    <div class="invoice-head d-flex mt-4">
                        <div class="company-info head-info" style="width: 50%;float: left;">
                            <p> 
                                Invoice #: {{$order->invoice}} <br>
                                Invoice Date: {{date('d M Y',date(strtotime($order->created_at)))}} {{date('h:i A',date(strtotime($order->created_at)))}} <br>
                                Order Date: {{$order->delivery_date}} <br>
                                Order Number: {{sprintf('%04d',$order->id)}} 
                              </p>
                        </div>
                        {{-- <div class="company-info head-info" style="width: 33%; text-align: right;">
                            <p>
                                <b>Bill To:</b> <br />
                                {{$order->user->card->name}} <br>
                                {{$order->user->card->address_1}} <br>
                                {{$order->user->card->postCode}} <br>
                                {{$order->user->card->town}}
                            </p>
                        </div> --}}
                        <div class="customer-info head-info" style="text-align: right;">
                            <p>
                                <b>Ship To:</b> <br />
                                {{$order->user->first_name}} {{$order->user->last_name}} <br>
                                {{$order->user->address_1}} <br>
                                {{$order->user->postcode}} <br>
                                {{$order->user->town}}
                            </p>
                        </div>
                    </div>
                    <div class="invoice-body">
                        <table class="table mt-2" border="1">
                            <thead>
                                <tr>
                                    <th width="50">#Sl</th>
                                    <th>Product</th>
                                    <th width="100" class="text-center">Qty</th>
                                    <th width="100" class="text-right">Unit</th>
                                    <th width="100" class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody style="background: none;">
                                <?php $i=$subtotal=$total= 0;?>
                                @foreach($order->items as $item)
                                    <tr>
                                        <td>{{sprintf('%02d',++$i)}}</td>
                                        <td>{{$item->product->product_name}}</td>
                                        <td class="text-center">{{$item->qty}}</td>
                                        <td class="text-right">{{$item->price}}</td>
                                        <td class="text-right">{{$item->qty * $item->price}}</td>
                                        @php $subtotal += $item->qty * $item->price @endphp
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-right">SubTotal</td>
                                    <td>:</td>
                                    <td class="text-right">{{$subtotal}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">Discount</td>
                                    <td>:</td>
                                    <td class="text-right">{{$order->discount}}</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-right">Total</td>
                                    <td>:</td>
                                    <td class="text-right">{{$subtotal - $order->discount}}</td>
                                </tr>
                            </tfoot>
                        </table>
                        <h3>Payment Status :  {{ucfirst($order->payment_status)}}</h3>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
