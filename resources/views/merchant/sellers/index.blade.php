@extends('admin.layout.master')

@section('content')
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        padding: 10px;
        margin-bottom:60px;
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
        margin-left:100px; margin-top:3px;
    }
    .m-l-reject{
        margin-left:232px; margin-top:-39px;
    }
    @media (min-width: 768px) {
  .modal-xl {
    width: 90%;
   max-width:1200px;
  }
}
</style>
@endpush 
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Seller profile
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Seller profile</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"> 
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myForm">
                            <li class="active font-weight-bold"><a href="#active">Active Seller</a></li>
                            <li class="font-weight-bold"><a href="#inactive">Request Seller</a></li>
                            <li class="font-weight-bold"><a href="#reject">Reject Seller</a></li> 
                        </ul> 
                        <div class="tab-content">
                            <div class="tab-pane active" id="active"> 
                                    <div class="card-body order-datatable">
                                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                                            <thead>
                                            <tr>
                                                <th width="50">Sl</th>
                                                <th width="200">First Name</th>
                                                <th width="200">Last Name</th>
                                                <th width="200">Email</th>
                                                <th width="200">Phone</th>
                                                <th width="200">Description</th>
                                                <th width="80" class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $i=0; @endphp
                                            @foreach($activesellers as $row)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $row->first_name }}</td>
                                                    <td>{{ $row->last_name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->description }}</td>
                                                    <td class="d-flex justify-content-between">
                                                    <ul>
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-info"><i class="fa fa-eye"></i>view</a> </li> 
                                                            {{-- <li>
                                                                <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> 
                            </div>
                            <div class="tab-pane" id="inactive">
                                <div class="card-body order-datatable">
                                    <table class="table table-borderd" id="dataTableNoPagingDesc1">
                                        <thead>
                                        <tr>
                                            <th width="50">Sl</th>
                                            <th width="200">First Name</th>
                                            <th width="200">Last Name</th>
                                            <th width="200">Email</th>
                                            <th width="200">Phone</th>
                                            <th width="200">Description</th>
                                            <th width="80" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($requestSellers as $row)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $row->first_name }}</td>
                                                <td>{{ $row->last_name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td class="d-flex justify-content-between">
                                                <ul>
                                                        {{-- <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-warning"><i class="fa fa-check"></i>Approve</a> </li>  --}}
                                                        <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-check"></i> </a> </li>
                                                        {{-- <li>
                                                            <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        </li> --}}
                                                    </ul>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Seller Profile</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                        </div>  
            
                                                    <div class="modal-body">
                                                      <div class="form-row">
                                                        <div class="col-md-5">
                                                           <form>
                                                            <fieldset disabled>
            
                                                                <div class="col-md-6 text-left">                                                        
                                                                    <div class="mt-0">
                                                                        @if(!empty($row->picture))
                                                                        <img id="output"  class="imagestyle" src="{{ asset($row->picture) }}" />
                                                                        @else
                                                                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                                                        @endif
                                                                    </div>                                                                                                     
                                                                </div>
            
                                                                <div class = "row">
                                                                    <div class="col-md-12">   <h4><label for="first_name">First Name: <small>{{ $row->first_name}}</small></label></h4> </div>
                                                                    <div class="col-md-12">  <h4><label for="first_name">Last Name: <small>{{ $row->last_name}}</small></label></h4></div>
                                                                    <div class="col-md-12">  <h4><label for="first_name">Phone Number: <small>{{ $row->phone}}</small></label></h4></div>                                                      
                                                               </div>
                                                                                                                                                       
                                                            </fieldset>
                                                            </form>                      
                                                        </div>
                                                   
                                                        <div class="col-md-7">
                                                            <div class="form-row">
                                                                <div class="col-md-8">   
                                                                   
                                                                </div>                                                                                            
                                                        <div class="col-md-4">                                             
                                                            <div class="mt-0">                                                  
                                                                @if(!empty($row->picture))
                                                                <img id="output"  class="imagestyle" src="{{ asset($row->picture) }}" />
                                                                @else
                                                                <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                                                @endif
            
                                                            </div>
                                                        </div>                                         
                                                        </div>
            
                                                        <div class = "row">
                                                                <div class="col-md-6">   <h4><label for="first_name">First Name: <small>{{ $row->first_name}}</small></label></h4> </div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Last Name: <small>{{ $row->last_name}}</small></label></h4></div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Phone Number: <small>{{ $row->phone}}</small></label></h4></div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Email Address: <small>{{ $row->email}}</small></label></h4></div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Description: <small>{{ $row->description}}</small></label></h4></div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Date Of Birth: <small>{{ $row->dob}}</small></label></h4></div>
                                                                <div class="col-md-6">  <h4><label for="first_name">Gender: <small>{{ $row->gender}}</small></label></h4></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="modal-footer text-right ">                                           
                                                        <a href="{{ url('andbaazaradmin/seller') }}"  class="btn btn-info">Back</a>
                                                        @if($row->status == "Active")
                                                        <button  class="btn btn-success">Approved</button>
                                                        @elseif($row->status == 'Reject')
                                                        <button  class="btn btn-danger">Rejected</button>
                                                        @elseif($row->status == 'Inactive')
                                                        <div class="m-l-approve">
                                                        <form action="{{ url('merchant/product/approvement/'.$row->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $row->id }})">
                                                            @csrf
                                                            <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $row->id }})">Approve</button>
                                                        </form>
                                                        </div>                                                      
                                                        <button type="button" class="btn btn-primary">Reject</button>                                     
                                                   </div>
                                                   </div>
                                                  @endif 
                                                 </div>
                                                 
                                              </div>
                                           </div>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="reject">
                                <div class="card-body order-datatable">
                                    <table class="table table-borderd" id="dataTableNoPagingDesc2">
                                        <thead>
                                        <tr>
                                            <th width="50">Sl</th>
                                            <th width="200">First Name</th>
                                            <th width="200">Last Name</th>
                                            <th width="200">Email</th>
                                            <th width="200">Phone</th>
                                            <th width="200">Description</th>
                                            <th width="80" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=0; @endphp
                                        @foreach($rejectSellers as $row)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $row->first_name }}</td>
                                                <td>{{ $row->last_name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->description }}</td>
                                                <td class="d-flex justify-content-between">
                                                <ul>
                                                        <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-primary"><i class="fa fa-close"></i>Rejected</a> </li> 
                                                        {{-- <li>
                                                            <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        </li> --}}
                                                    </ul>
                                                </td>
                                            </tr> 
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>    
                          </div>
                    </div>

                    {{-- <div class="card-body order-datatable">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th width="200">First Name</th>
                                <th width="200">Last Name</th>
                                <th width="200">Email</th>
                                <th width="200">Phone</th>
                                <th width="200">Description</th>
                                <th width="80" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($sellers as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td class="d-flex justify-content-between">
                                    <ul> --}}
                                            {{-- <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info" ><i class="fa fa-check"></i> </a> </li>  --}}
                                            {{-- <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-check"></i> </a> </li>  --}}
                                            {{-- <li>
                                                <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                            </form>
                                            </li> --}}
                                        {{-- </ul>
                                    </td>
                                </tr>

                                <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Seller Profile</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>  

                                        <div class="modal-body">
                                          <div class="form-row">
                                            <div class="col-md-5">
                                               <form>
                                                <fieldset disabled>

                                                    <div class="col-md-6 text-left">                                                        
                                                        <div class="mt-0">
                                                            @if(!empty($row->picture))
                                                            <img id="output"  class="imagestyle" src="{{ asset($row->picture) }}" />
                                                            @else
                                                            <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                                            @endif
                                                        </div>                                                                                                     
                                                    </div>

                                                    <div class = "row">
                                                        <div class="col-md-12">   <h4><label for="first_name">First Name: <small>{{ $row->first_name}}</small></label></h4> </div>
                                                        <div class="col-md-12">  <h4><label for="first_name">Last Name: <small>{{ $row->last_name}}</small></label></h4></div>
                                                        <div class="col-md-12">  <h4><label for="first_name">Phone Number: <small>{{ $row->phone}}</small></label></h4></div>                                                      
                                                   </div>
                                                                                                                                           
                                                </fieldset>
                                                </form>                      
                                            </div>
                                       
                                            <div class="col-md-7">
                                                <div class="form-row">
                                                    <div class="col-md-8">   
                                                       
                                                    </div>                                                                                            
                                            <div class="col-md-4">                                             
                                                <div class="mt-0">                                                  
                                                    @if(!empty($row->picture))
                                                    <img id="output"  class="imagestyle" src="{{ asset($row->picture) }}" />
                                                    @else
                                                    <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                                    @endif

                                                </div>
                                            </div>                                         
                                            </div>

                                            <div class = "row">
                                                    <div class="col-md-6">   <h4><label for="first_name">First Name: <small>{{ $row->first_name}}</small></label></h4> </div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Last Name: <small>{{ $row->last_name}}</small></label></h4></div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Phone Number: <small>{{ $row->phone}}</small></label></h4></div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Email Address: <small>{{ $row->email}}</small></label></h4></div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Description: <small>{{ $row->description}}</small></label></h4></div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Date Of Birth: <small>{{ $row->dob}}</small></label></h4></div>
                                                    <div class="col-md-6">  <h4><label for="first_name">Gender: <small>{{ $row->gender}}</small></label></h4></div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="modal-footer text-right ">                                           
                                            <a href="{{ url('andbaazaradmin/seller') }}"  class="btn btn-info">Back</a>
                                            @if($row->status == "Active")
                                            <button  class="btn btn-success">Approved</button>
                                            @elseif($row->status == 'Reject')
                                            <button  class="btn btn-danger">Rejected</button>
                                            @elseif($row->status == 'Inactive')
                                            <div class="m-l-approve">
                                            <form action="{{ url('merchant/product/approvement/'.$row->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $row->id }})">
                                                @csrf
                                                <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $row->id }})">Approve</button>
                                            </form>
                                            </div>                                                      
                                            <button type="button" class="btn btn-primary">Reject</button>                                     
                                       </div>
                                       </div>
                                      @endif 
                                     </div>
                                     
                                  </div>
                               </div>
                            </div>
                         </div>
                      @endforeach
                   </tbody>
               </table>

                </div>  --}}

            </div>
         </div>
     </div>
 </div>
</div>
</div>         
@endsection
@push('js')
<script>
    $('#myForm a').click(function (e) {  
    $(this).parent().addClass('active').siblings().removeClass('active');
    $(this).tab('show'); 
  })
</script> 
@endpush
