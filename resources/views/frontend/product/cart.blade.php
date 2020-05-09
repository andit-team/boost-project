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
                  <a href="#" data-toggle="modal" data-target="#buynow"
                  class="btn btn-solid">Buy Now</a>
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

    {{-- <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload pro-img"
                                                src="../assets/images/fashion/product/43.jpg" alt="">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Item
                                                    <span>men full sleeves</span>
                                                    <span> successfully added to your Cart</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                                <a href="#" class="checkout btn btn-solid">Check out</a>
                                                <a href="#" class="continue btn btn-solid">Continue shopping</a>
                                            </div>

                                            <div class="upsell_payment">
                                                <img src="../assets/images/payment_cart.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-section">
                                        <div class="col-12 product-upsell text-center">
                                            <h4>Customers who bought this item also.</h4>
                                        </div>
                                        <div class="row" id="upsell_product">
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/1.jpg"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/34.jpg"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/13.jpg"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="../assets/images/fashion/product/19.jpg"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end--> --}}

<!--Modal: Login / Register Form-->
<div class="modal fade" id="buynow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">
  
        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">
  
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                Register</a>
            </li>
          </ul>
  
          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
              <!--Body-->
              <div class="modal-body mb-1">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                </div>
  
                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                </div>
                <div class="text-center mt-2">
                  <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                </div>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                  <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
  
            </div>
            <!--/.Panel 7-->
  
            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">
  
              <!--Body-->
              <div class="modal-body">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" id="modalLRInput12" class="form-control form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
                </div>
  
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput13" class="form-control form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
                </div>
  
                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput14" class="form-control form-control-sm validate">
                  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
                </div>
  
                <div class="text-center form-sm mt-2">
                  <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                </div>
  
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-right">
                  <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!--/.Panel 8-->
          </div>
  
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div> 
  <!--Modal: Login / Register Form-->
  
  <div class="text-center">
    <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#buynow">Launch
      Modal LogIn/Register</a>
  </div>

<!--section end-->

@endsection



