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
            .bold{
                font-weight: bold;
            }
            .paymentinfo{
                background: #c8ccc2;
                padding: 15px;
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
          
              
<p class="bold">International Banktransfer</p><br>
<p>Please transfer the exact amount to our bank account by using your electronic banking or a transfer form. Please read the following important information carefully! </p>
<br>
<p class="bold">IMPORTANT INFORMATION</p><br>

<p>Your payment will be processed by TATAMAX and this name may appear on your statement. <br><br>

The Transaction Description / Reference number* is very important ! Please mention this number when you make your payment because this is used to automatically match your payment to your account. Some banks do not automatically send us the Transaction Reference Number, even if it is mentioned on the bank transfer form. So please let your bank confirm that they included the Transaction Reference Number in the payment description.
<br>
DO NOT contact our bank in order to inquire about your payment. Always contact us directly with any questions.

If the amount paid is lower than the minimum amount mentioned on this page your payment will not be processed nor will we issue a refund. <br><br>

We will update your credit as soon as your bank transfer has arrived in our bank account. Please note that bank transfers usually take 2-3 business days to process. However in some cases it may take up to 7 business days to process! <br>
<br>
Please do not combine payments for several orders in one bank transfer.
<br><br>
</p>

<div class="paymentinfo">
    <h3>Payment details </h3>
    Transaction Description/Reference *:<br>
    <span style="font-weight: bold; font-size:15px; color:red">{{$order->invoice}}</span>

    <br>
    <h3>Amount to pay:</h3>
    <span style="font-weight: bold; font-size:15px; color:red"> {{$order->total}} GBP </span> (00.00 EUR)
    <br><br>
</div>
<br>
The bank account details are
<br>
<br>
<b>Account holder:</b>
<br>
Briton Group Limited
<br>
<br>

<b>Account holder address:</b>
<br>
3 Ripple Road - Barking - IG11 7ND -United Kingdom
<br>
<br>

<b>Bank:</b>
<br>
HSBC Bank UK PLC<br>
<br>
<b>Bank Address:</b>
<br>
23 Ripple Rd, Barking IG11 7NW,United Kingdom <br>
<br>
<b>IBAN:</b>
<br>
GB39HBUK40127685368048<br>
<br>
<b>Accountnr:</b>
<br>
85368048<br>
<br>
<b>SWIFT (BIC):</b>
<br>
HBUKGB4B<br>
          </p>
          </div>
        </section>
  
</div>
    </body>
</html>