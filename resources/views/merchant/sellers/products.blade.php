@extends('merchant.master')

@section('content')
@include('elements.alert')

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active='profile'])

                <div class="col-sm-9 register-page contact-page">
                    <form action="" class="theme-form">
                        <div class="form-group">
                            <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            <input type="text" readonly class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name') }}" id="category" placeholder="Firest Name">
                            <div class="position-absolute" id="catarea" style="display: none">
                                <div class="search-area d-flex">
                                    <div class="col-md-3 cat-level p-2">
                                        <input type="text" class="form-control" placeholder="search">
                                        <ul>
                                            <li>DFads fadf</li> <i class="next-icon next-icon-arrow-right next-xs leaf-icon"></i>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 cat-level p-2">
                                        <input type="text" class="form-control" placeholder="search">
                                        <ul>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 cat-level p-2">
                                        <input type="text" class="form-control" placeholder="search">
                                        <ul>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 cat-level p-2">
                                        <input type="text" class="form-control" placeholder="search">
                                        <ul>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                            <li>DFads fadf</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="cat-footer p-2">
                                    <p>Current Selection :</p>
                                    <button class="btn btn-sm btn-info">Confirm</button>
                                    <button class="btn btn-sm btn-warning">Cencel</button>
                                    <button class="btn btn-sm btn-primary">Clear</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            <input type="text" class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name') }}" placeholder="Firest Name">
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
@push('css')
    <style>
        #catarea{
            background: #fff;
            border: 1px solid #ddd;
            width: 97%;
        }
        .cat-level ul li {
            display: inherit;
            padding: 5px;
            cursor: pointer;
            border-left: 2px solid #fff;
        }
        .cat-level ul li:hover{
            background: #ddd;
            border-left: 2px solid red;
        }
        .cat-level{
            border: 1px solid #ddd;
        }
        </style>
@endpush
@push('js')
    <script>
        $('#category').click(function(){
            $('#catarea').toggle();
        });
        $('body').click(function(){
            
            console.log ($('#catarea').class());
            // console.log('clicked');
        });

        // document.addEventListener('click', e => {
        //     console.log(e.target.paren)
        // })
        
    </script>
@endpush