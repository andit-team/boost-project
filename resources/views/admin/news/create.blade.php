@extends('admin.layout.master')

@section('content')
@push('css')
<style> 
    .contact-page{
      padding-left: 300px!important;
    }
</style>
@endpush
@include('elements.alert')
{{-- @component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent --}}

    <!--  dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                {{-- @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'profile']) --}}
                <div class="col-sm-9 contact-page"> 
                    <div class="card">
                        <div class="card-body">
                            <h3>NEWS</h3>
                            <hr>
                            <form class="theme-form" action="{{ route('newsstore') }}" method="post" enctype="multipart/form-data" id="validateForm">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="title">Title<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('title') }}</span>
                                        <input type="text" class="form-control   @error('title') border-danger @enderror" required name="title" value="{{ old('title') }}" id="" placeholder="News Title"> 

                                        <label for="desct" class="mt-2">Descripiton<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('desct') }}</span>
                                        <textarea  class="form-control @error('desct') border-danger @enderror" rows="10" cols="10"  name="desct"  id="" placeholder="News Description">{{ old('desct') }}</textarea>
                                    </div> 
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-md btn-info" >Save & Send</button>
                                        <a href="{{ url('boostadmin/news') }}" class="btn btn-md btn-primary">Back</a>
                                    </div>
                                </div>  
                            </form>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->  
@endsection  
