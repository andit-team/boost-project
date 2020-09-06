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
            .body-content{
                line-height: 28px;
                font-size: 20px;
                text-align: center;
            }
            .mt-4{
                margin-top: 32px;
            }
            .btn{
                background: #ddd;
                padding: 10px;
                text-decoration: none;
                color: #000;
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
              <div class="text-center">
                  <h1>Congratulation!</h1>
                  <p>Your order has been successull</p>
              </div>
              <div>
                  <p class="body-content mt-4">
                    Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. 
                    The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De 
                    Finibus Bonorum et Malorum for use in a type specimen book.   
                  </p>
              </div>
              <div class="text-center mt-4 mb-4">
                  <a class="btn" href="{{url('dashboard')}}">Go To Dashboard</a>
              </div>
          </div>
        </section>
  
</div>
    </body>
</html>