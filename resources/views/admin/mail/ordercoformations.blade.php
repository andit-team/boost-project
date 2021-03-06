<html>
    <head>
        <style>
            * {
                margin: 0;
                padding: 0;
                border: none;
                outline: none;
            }
            .delivary-date-arae{
                padding-top: 0px!important;
            }
            .head-info p {
                color: #000;
                font-size: 14px;
                font-weight: normal;
                line-height: 18px;
            }
            .container{
                max-width: 960px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }
            .row{
                display: flex;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }
            .mb-4, .my-4 {
                margin-bottom: 1.5rem !important;
            }
            .mt-3, .my-3 {
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
            .mt-2, .my-2 {
                margin-top: .5rem !important;
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
            .table td, .table th {
                padding: .75rem;
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
            .table td, .table th {
                padding: .75rem;
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
        <section style="
        background: #f5f4f4;
        box-shadow: 5px 0px 16px 4px #00000003;
        padding: 20px 30px;
        ">
          <div class="container">
            <div class="invoice-head mt-3 mb-4">
              <div class="company-info" style="
float: left;
width: 50%;
height: 110px;
">
                <img src="https://projects.andit.co/laravel/boost/public/frontend/boost/assest/img/logo.jpg" alt="" style="width: 190px;height: auto;">
              </div>
              <div class="customer-info head-info" style="
text-align: right;
">
                <p>
                  Boost App ltd. <br>
                  48-49 Princes Place <br>
                  London <br>
                  W11 4QA <br>
                  Email: essentials@takk.co.uk <br>
                  CRN: 11160506 <br>
                  VAT ID: 322111665
                </p>
              </div>
            </div>
            <div class="invoice-head d-flex mt-4">
                <div class="company-info head-info" style="width: 50%;float: left;">
                  <p> 
                    Invoice #: x8BUOSVq <br>
                    Invoice Date: 05 Sep 2020 04:32 AM <br>
                    Order Date: 05 September 2020 <br>
                    Order Number: 0005 
                  </p>
                </div>
                <div class="company-info head-info" style="width: 50%; text-align: right;">
                  <p>
                    <b>Bill To:</b> <br>
                     <br>
                     <br>
                    234 <br>
                    Surbe two
                  </p>
                </div>
                {{-- <div class="customer-info head-info" style="text-align: right;width: 34%;">
                  <p>
                    <b>Ship To:</b> <br>
                    Shariful Islam <br>
                    Nirala <br>
                    234 <br>
                    Surbe two
                  </p>
                </div> --}}
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
                                                                <tr>
                            <td>01</td>
                            <td>Product-4</td>
                            <td class="text-center">1</td>
                            <td class="text-right">25</td>
                            <td class="text-right">25</td>
                        </tr>
                                                                <tr>
                            <td>02</td>
                            <td>Product-5</td>
                            <td class="text-center">1</td>
                            <td class="text-right">30</td>
                            <td class="text-right">55</td>
                        </tr>
                                                                <tr>
                            <td>03</td>
                            <td>Product-4</td>
                            <td class="text-center">1</td>
                            <td class="text-right">25</td>
                            <td class="text-right">80</td>
                        </tr>
                                                                <tr>
                            <td>04</td>
                            <td>Product-5</td>
                            <td class="text-center">1</td>
                            <td class="text-right">30</td>
                            <td class="text-right">110</td>
                        </tr>
                                                                <tr>
                            <td>05</td>
                            <td>Product-4</td>
                            <td class="text-center">1</td>
                            <td class="text-right">25</td>
                            <td class="text-right">135</td>
                        </tr>
                                                                <tr>
                            <td>06</td>
                            <td>Product-4</td>
                            <td class="text-center">1</td>
                            <td class="text-right">25</td>
                            <td class="text-right">160</td>
                        </tr>
                                                                <tr>
                            <td>07</td>
                            <td>Product-4</td>
                            <td class="text-center">1</td>
                            <td class="text-right">25</td>
                            <td class="text-right">185</td>
                        </tr>
                                                                <tr>
                            <td>08</td>
                            <td>Product-5</td>
                            <td class="text-center">1</td>
                            <td class="text-right">30</td>
                            <td class="text-right">215</td>
                        </tr>
                                                            </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right">SubTotal</td>
                            <td>:</td>
                            <td class="text-right">215</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">Discount</td>
                            <td>:</td>
                            <td class="text-right">0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-right">Total</td>
                            <td>:</td>
                            <td class="text-right">215</td>
                        </tr>
                    </tfoot>
                </table>
                <a href="https://projects.andit.co/laravel/boost/public/bank-info.png" target="_Blank">Our Bank Information</a>
            </div>
        </div>
        </section>
  
</div>
    </body>
</html>