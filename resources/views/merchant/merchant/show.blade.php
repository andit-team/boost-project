@extends('merchant.master')

@section('content')
@push('css')
<style>
    .fa{
        padding:4px;
      font-size:16px;
    }

    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;float: right;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
    .input{
        height: 53px;
    }
    .m-l-approve{
        margin-left:100px; margin-top:-39px;
    }
    .m-l-reject{
        margin-left:232px; margin-top:-39px;
    }
</style>
@endpush
@include('elements.alert')
{{-- @component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Merchant profile
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Merchant profile</li>
  @endslot
@endcomponent --}}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header">Seller Profile</h3>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-8">
                            <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            <input type="text" class="form-control input  @error('first_name') border-danger @enderror" readonly required name="first_name" value="{{ old('first_name',$seller->first_name) }}" id="" placeholder="Firest Name">

                            <label for="last_name" class="mt-2">Last Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            <input type="text" class="form-control input @error('last_name') border-danger @enderror" readonly required name="last_name" value="{{ old('last_name',$seller->last_name) }}" id="" placeholder="Last Name">

                            <label for="phone" class="mt-2">Phone number<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                            <input type="number" class="form-control input @error('phone') border-danger @enderror" readonly required  name="phone" value="{{ old('phone',$seller->phone) }}" id="" placeholder="Phone Number">

                            <label for="email" class="mt-2">Email<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
                            <input type="email" class="form-control input @error('email') border-danger @enderror" readonly required  name="email" value="{{ old('email',$seller->email) }}" id="" placeholder="Email">
                        </div>


                        <div class="col-md-4 text-right">
                            <label for="picture">Picture</label>
                            <div class="mt-0">
                                @if(!empty($seller->picture))
                                <img id="output"  class="imagestyle" src="{{ asset($seller->picture) }}" />
                                @else
                                <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                @endif
                            </div>
                            <div class="uploadbtn">
                                {{-- <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                <input id="file-upload" type="file" name="picture" onchange="loadFile(event)"/> --}}
                            </div>
                        </div>
                    </div>

                    <label for="description" class="mt-2">Write Your Message</label> <span class="text-danger">{{ $errors->first('description') }}</span>
                    <textarea class="form-control mb-0 @error('description') border-danger @enderror" readonly placeholder="Write Your Message"  name="description"  id="" rows="6" >{{ $seller->description }}</textarea>


                    <div class="form-row">
                        <div class="col-md-6 mt-2">
                            <label for="dob">Date of birth<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('dob') }}</span>
                            <input type="date" readonly class="form-control input datepicker @error('dob') border-danger @enderror" required name="dob" value="{{ old('dob',$seller->dob) }}" id="" placeholder="">
                        </div>
                        <div class="col-md-6 mt-2">
                            <label for="gender">Gender<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('gender') }}</span>
                            <input type="text"  readonly class="form-control input  @error('gender') border-danger @enderror" required name="gender" value="{{ old('dob',$seller->gender) }}" id="" placeholder="">
                        </div>
                        <div class="col-md-12 mt-4">
                            <a href="{{ url('andbaazaradmin/seller') }}"  class="btn btn-info">Back</a>
                            @if($seller->status == "Active")
                            <button  class="btn btn-success">Approved</button>
                            @elseif($seller->status == 'Reject')
                            <button  class="btn btn-danger">Rejected</button>
                            @elseif($seller->status == 'Inactive')
                            <div class="m-l-approve">
                            <form action="{{ url('merchant/product/approvement/'.$seller->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $seller->id }})">
                                @csrf
                                <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $seller->id }})">Approve</button>
                            </form>
                            </div>
                            <div>
                                <div class="m-l-reject">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('merchant/product/rejected/'.$seller->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $seller->id }})">
                                            @csrf
                                            @method('put')
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                    <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Reject</button>
                                            </form>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                {{-- @endif --}}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush

