@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
@push('css')
<style>
    .delivary-date-arae{
        padding-top: 0px!important;
    }
</style>
@endpush
@include('elements.alert')
  <!-- dashboard  Area -->
  <section id="seclect-dashboard">
    <div class="container">
      <div class="menu-sticky-arae">
        <div class="row  align-items-center">
          <div class="col-lg-4 col-md-8 col-sm-8 col-8">
            <div class="seclict-delivary-logo-area">
              <a href="index.html"><img src="{{asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-4 col-sm-4 col-4">
            <div class="side-bar-menu-burger">
              <a href="#!" id="bars"><i class="fas fa-bars"></i></a>
              <a href="#!" id="times"><i class="fas fa-times"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="daseboard-list-wrapper">
          <div class="row">
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'billing'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Invoice</h3>
                <div class="dashboard-cards">
                    <section>
                        <div class="container">
                            <div class="invoice-head d-flex justify-content-between mt-3">
                                <div class="company-info">
                                    <h6>Invoice #adsfas</h6>
                                    <p>Date:</p>
                                    <p>Time:</p>
                                </div>
                                <div class="customer-info">
                                    <h6>Kamrul Islam</h6>
                                    <p>Nirala</p>
                                    <p>Khlna</p>
                                </div>
                            </div>
                            <div class="invoice-body" style="background-image: url({{asset('paid.png')}});background-repeat: no-repeat; background-position: center; background-size: 200px;">
                                <table class="table table-borderd" >
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
                                            <td>Product One</td>
                                            <td class="text-center">3</td>
                                            <td class="text-right">300</td>
                                            <td class="text-right">900</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Product One</td>
                                            <td class="text-center">3</td>
                                            <td class="text-right">300</td>
                                            <td class="text-right">900</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Product One</td>
                                            <td class="text-center">3</td>
                                            <td class="text-right">300</td>
                                            <td class="text-right">900</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">SubTotal</td>
                                            <td>:</td>
                                            <td class="text-right">900</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">Discount</td>
                                            <td>:</td>
                                            <td class="text-right">00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">Total</td>
                                            <td>:</td>
                                            <td class="text-right">900</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- dashboard Area -->
  @include('layouts.inc.footer.productFooter')
@endsection
@push('js')
@endpush