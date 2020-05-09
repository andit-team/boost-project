@extends('frontend.layouts.master')
@section('content')


{{-- <style>
    .headpading{
        padding: 50px;     
    }
</style> --}}
 <!-- breadcrumb start -->
 <div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>cart</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12 col-md-8">
                
                <div class="card mb-4">
                    <div class="card-header text-dark">
                   <h3>Shopping Cart </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                             Select All
                            </label>
                          </div>
                    </div>
                  </div>

              <div class="card bg-light mb-3" >
                <table class="table cart-table table-responsive-xs">
                    <thead>
                        <tr class="table-head">
                            <th scope="col"  style="padding:15px">image</th>
                            <th scope="col">product name</th>
                            {{-- <th scope="col">price</th> --}}
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            {{-- <th scope="col">total</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt=""></a>
                            </td>
                            <td><a href="#">cotton shirt</a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                    value="1">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xs-3">
                                        <h2 class="td-color">$63.00</h2>
                                    </div> --}}
                                    <div class="col-xs-3">
                                        <h2 class="td-color"><a href="#" class="icon"><i class="ti-close"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            {{-- <td>
                                <h2>$63.00</h2>
                            </td> --}}
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                            value="1">
                                    </div>
                                </div>
                            </td>
                            <td <li class="list-inline-item">
                                <ul>
                                <li class="list-inline-item"><a href="#" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>
                                <li class="list-inline-item">
                                <form action="#" method="post" style="margin-top:-2px" id="deleteButton">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                              </li>
                            </ul>
                            </td>
                            {{-- <td><a href="#" class="icon"><i class="ti-close"></i></a></td>
                            <td>
                                <h2 class="td-color">$4539.00</h2>
                            </td> --}}
                        </tr>
                    </tbody>                 
                </table>                                                         
            </div>  
            <div class="col-sm-6 col-md-12">
              <div class="row"> 
                <div class="card col-md-6">
                    <div class="card-header">
                        <div class="row">
                            <h3 class="text-xs-center">Payment Methods</h3>
                            <img class="img-fluid cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                        </div>
                    </div>  
                </div> 
                <div class="card col-md-6">
                    <div class="card-body">
                        <div class="row">
                            <h3 class="text-xs-center">Buyer Protection</h3>
                            <p class="card-text">Get full refund if the item is not as described or if is not delivered.</p>
                        </div>
                    </div>  
                </div> 
              </div> 
           </div>         
        </div>      
        <div class="col-sm-12 col-md-4">
            <div class="card text-dark  mb-3" style="max-width: 25rem;">
                <div class="card-header"><h3>Order Summary</h3></div>
                <div class="card-body">            
                    <table class="table cart-table table-responsive-md text-left">
                        <tfoot>
                            <tr>
                                <td>subtotal price :</td>
                                <td>
                                    <h2>$6935.00</h2>
                                </td>
                            </tr>
                            <tr>
                                <td>shipping cost :</td>
                                <td>
                                    <h2>$6935.00</h2>
                                </td>
                            </tr>                           
                        </tfoot>
                       
                    </table>
                </div>
                <hr>
                <p class="card-text text-center  text-dark">Total Price</p>
                <div class="card-footer">
                  <a href="#" class="btn btn-danger">Buy Now</a>
                </div>
            </div>
       </div>
  </div>
  

      {{-- <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-success">Header</div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="card-footer bg-transparent border-success">Footer</div>
      </div> --}}
        <div class="row cart-buttons">
            <div class="col-6"><a href="#" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="#" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>
<!--section end-->

@endsection



